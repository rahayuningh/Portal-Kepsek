<?php

namespace App\Http\Controllers;

use App\Inventaris;
use App\Ruangan;
use App\Gedung;
use App\JenisInventaris;
use App\KebutuhanBarang;
use App\Siswa;
use DateTime;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class InventoryController extends Controller
{
    public function prepareInventoryData($data, $isSlice = false)
    {
        if ($isSlice) {
            $inventarises = $data->slice(0, 20);
        } else {
            $inventarises = $data;
        }

        $data_inventaris = array();
        foreach ($inventarises as $inventaris) {
            // tentukan status inventaris
            switch ($inventaris->status_kelayakan) {
                case 0:
                    $status = "Rusak";
                    break;
                case 1:
                    $status = "Kurang Baik";
                    break;
                case 2:
                    $status = "Baik";
                    break;
                default:
                    $status = "Status Error";
                    break;
            }

            // buat array baru yang berisi data olahan siap tampil
            array_push($data_inventaris, array(
                'id' => $inventaris->id,
                'kode' => $inventaris->kode_inventaris,
                'jenis' => $inventaris->jenis_inventaris->nama_jenis_inventaris,
                'merk' => $inventaris->jenis_inventaris->merk,
                'no_seri' => $inventaris->no_seri,
                'harga_satuan' => $inventaris->jenis_inventaris->harga_satuan,
                'ukuran' => $inventaris->jenis_inventaris->ukuran,
                'bahan' => $inventaris->jenis_inventaris->bahan,
                'tanggal_terima' => $inventaris->tgl_terima,
                'status' => $status,
                'keterangan' => $inventaris->keterangan,
                'ruangan_id' => $inventaris->ruangan_pemilik_id,
                'gedung_id' => Ruangan::find($inventaris->ruangan_pemilik_id)->gedung_id,
            ));
        }

        return $data_inventaris;
    }

    public function generateCode($roomId, $typeId, $anggaran, $year)
    {
        // lokasi peruntukan
        $lokasi = Ruangan::find($roomId)->jenis_ruangan->kode;
        // klasifikasi
        $klasifikasi = JenisInventaris::find($typeId)->kategori;

        $front = $lokasi . "-" . $klasifikasi . "-";
        $back = "-" . $anggaran . "-" . $year;

        // get all inventaris data with provided pattern
        // and sort it desc for getting newest record
        $inventaris = Inventaris::where('kode_inventaris', 'like', $front . '%' . $back)
            ->orderBy('kode_inventaris', 'desc')
            ->get();

        // jika sudah ada sebelumnya
        if ($inventaris->count() > 0) {
            // explode string kode inventaris from first record
            $code_array = explode('-', $inventaris->first()->kode_inventaris);

            // get the serial number
            // convert serial number from string to number
            $int = intval($code_array[2]);
            // incremenet the serial number
            $number = $int + 1;
        } else {
            $number = 1;
        }

        // convert the number to string from int
        $convert = strval($number);

        // check length of number, then generate new serial number based on it
        if (strlen((string) $number) == 1) {
            $count = '00' . $convert;
        } elseif (strlen((string) $number) == 2) {
            $count = '0' . $convert;
        } elseif (strlen((string) $number) == 3) {
            $count = $convert;
        }

        // gabungkan semua variabel menjadi kode inventaris
        $code = $lokasi . "-" . $klasifikasi . "-" . $count . "-" . $anggaran . "-" . $year;

        return $code;
    }

    public function seeInventory()
    {
        return view('inventaris/data_inventaris', [
            'inventaris' => $this->prepareInventoryData(Inventaris::all(), true),
            'buildings' => Gedung::all(),
            'inventory_types' => JenisInventaris::all()
        ]);
    }

    public function search(Request $request)
    {
        $request->validate([
            'room_id' => 'required|numeric'
        ], [
            'room_id.required' => "ID Ruangan diperlukan untuk memfilter inventaris",
            'room_id.numeric' => "ID Ruangan harus dalam bentuk angka"
        ]);

        $ruangan = Ruangan::find($request->room_id);

        return view('inventaris/data_inventaris', [
            'inventaris' => $this->prepareInventoryData($ruangan->inventaris),
            'buildings' => Gedung::all(),
            'building_name' => $ruangan->gedung->nama_gedung,
            'room_name' => $ruangan->nama_ruangan,
            'inventory_types' => JenisInventaris::all()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'ruangan_pemilik' => 'required|numeric',
            'jenis_inventaris' => 'required|numeric',
            'tgl_terima' => 'required',
            'jenis_anggaran' => 'required',
            'status' => 'required|numeric',
        ]);

        // cek dulu kebutuhan barang dengan jenis inventaris dan ruangan
        $need = KebutuhanBarang::where([
            ['jenis_inventaris_id', '=', $request->jenis_inventaris],
            ['ruangan_id', '=', $request->ruangan_pemilik],
        ])->first();

        if (!isset($need)) {
            $room_name = Ruangan::find($request->ruangan_pemilik)->nama_ruangan;
            $jenis_name = JenisInventaris::find($request->jenis_inventaris)->nama_jenis_inventaris;
            return redirect()
                ->back()
                ->with(
                    'fail',
                    'Tambah inventaris tidak bisa dilakukan, tambahkan dulu kebutuhan barang ' . $jenis_name . ' di ruangan ' . $room_name
                )
                ->withInput();
        }

        // klo kebutuhan barangnya ada, lanjut buat data inventaris baru
        $date = DateTime::createFromFormat('Y-m-d', $request->tgl_terima);
        $code = $this->generateCode(
            $request->ruangan_pemilik,
            $request->jenis_inventaris,
            $request->jenis_anggaran,
            $date->format('Y')
        );

        Inventaris::create([
            'ruangan_pemilik_id' => $request->ruangan_pemilik,
            'kebutuhan_id' => $need->id,
            'kode_inventaris' => $code,
            'jenis_inventaris_id' => $request->jenis_inventaris,
            'no_seri' => $request->no_seri,
            'tgl_terima' => $request->tgl_terima,
            'anggaran' => $request->jenis_anggaran,
            'status_kelayakan' => $request->status,
            'keterangan' => $request->keterangan
        ]);

        // ubah jumlah di kebutuhan barang
        $kebutuhan = KebutuhanBarang::where([
            ['jenis_inventaris_id', '=', $request->jenis_inventaris],
            ['ruangan_id', '=', $request->ruangan_pemilik]
        ])->first();
        switch ($request->status) {
            case 0:
                $kebutuhan->rusak += 1;
                $kebutuhan->jumlah += 1;
                // $kebutuhan->butuh = $kebutuhan->jumlah - $kebutuhan->rusak;
                $kebutuhan->save();
                break;
            case 1:
                $kebutuhan->kurang_baik += 1;
                $kebutuhan->jumlah += 1;
                // $kebutuhan->butuh = $kebutuhan->jumlah - $kebutuhan->rusak;
                $kebutuhan->save();
                break;
            case 2:
                $kebutuhan->baik += 1;
                $kebutuhan->jumlah += 1;
                // $kebutuhan->butuh = $kebutuhan->jumlah - $kebutuhan->rusak;
                $kebutuhan->save();
                break;

            default:
                dd("error saat mengubah data di kebutuhan barang");
                break;
        }

        return redirect()->back()->with('success', 'Data Inventaris ' . $code . ' berhasil dibuat');
    }

    public function showUpdatePage($id)
    {
        return view('inventaris/edit_inventaris', [
            'inventaris' => Inventaris::find($id),
            'buildings' => Gedung::all(),
            'rooms' => Ruangan::all(),
            'inventory_types' => JenisInventaris::all()
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required|numeric',
            'ruangan_pemilik_id' => 'required|numeric',
            'jenis_inventaris_id' => 'required|numeric',
            'tgl_terima' => 'required',
            'status_kelayakan' => 'required|numeric',
            'anggaran' => 'required',
        ]);

        $old = Inventaris::find($request->id);
        $inventaris = Inventaris::findOrFail($request->id);
        $request->except('_token');
        $request->except('_method');
        $request->except('id');
        $inventaris->update($request->all());

        // update jumlah di kebutuhan barang
        if (
            $inventaris->wasChanged('jenis_inventaris_id') ||
            $inventaris->wasChanged('ruangan_pemilik_id')
        ) {
            // ubah jumlah di kebutuhan barang yang lama
            $kebutuhan = KebutuhanBarang::where([
                ['jenis_inventaris_id', '=', $old->jenis_inventaris_id],
                ['ruangan_id', '=', $old->ruangan_pemilik_id]
            ])->first();
            switch ($old->status_kelayakan) {
                case 0:
                    $kebutuhan->rusak -= 1;
                    $kebutuhan->jumlah -= 1;
                    // $kebutuhan->butuh = $kebutuhan->jumlah - $kebutuhan->rusak;
                    $kebutuhan->save();
                    break;
                case 1:
                    $kebutuhan->kurang_baik -= 1;
                    $kebutuhan->jumlah -= 1;
                    // $kebutuhan->butuh = $kebutuhan->jumlah - $kebutuhan->rusak;
                    $kebutuhan->save();
                    break;
                case 2:
                    $kebutuhan->baik -= 1;
                    $kebutuhan->jumlah -= 1;
                    // $kebutuhan->butuh = $kebutuhan->jumlah - $kebutuhan->rusak;
                    $kebutuhan->save();
                    break;

                default:
                    dd("error saat mengubah data di kebutuhan barang");
                    break;
            }

            // ubah jumlah di kebutuhan barang yang baru
            $kebutuhan = KebutuhanBarang::where([
                ['jenis_inventaris_id', '=', $request->jenis_inventaris_id],
                ['ruangan_id', '=', $request->ruangan_pemilik_id]
            ])->first();
            switch ($request->status_kelayakan) {
                case 0:
                    $kebutuhan->rusak += 1;
                    $kebutuhan->jumlah += 1;
                    // $kebutuhan->butuh = $kebutuhan->jumlah - $kebutuhan->rusak;
                    $kebutuhan->save();
                    break;
                case 1:
                    $kebutuhan->kurang_baik += 1;
                    $kebutuhan->jumlah += 1;
                    // $kebutuhan->butuh = $kebutuhan->jumlah - $kebutuhan->rusak;
                    $kebutuhan->save();
                    break;
                case 2:
                    $kebutuhan->baik += 1;
                    $kebutuhan->jumlah += 1;
                    // $kebutuhan->butuh = $kebutuhan->jumlah - $kebutuhan->rusak;
                    $kebutuhan->save();
                    break;

                default:
                    dd("error saat mengubah data di kebutuhan barang");
                    break;
            }
        }

        return redirect()->route('inventory.update', ['id' => $request->id])->with('success', 'Data inventaris berhasil diubah');
    }

    public function delete(Request $request)
    {
        $request->validate(['id' => 'required|numeric']);
        $inventaris = Inventaris::find($request->id);
        $kode = $inventaris->kode_inventaris;

        // ubah jumlah di kebutuhan barang
        $kebutuhan = KebutuhanBarang::where([
            ['jenis_inventaris_id', '=', $inventaris->jenis_inventaris_id],
            ['ruangan_id', '=', $inventaris->ruangan_pemilik_id]
        ])->first();
        switch ($inventaris->status_kelayakan) {
            case 0:
                $kebutuhan->rusak -= 1;
                $kebutuhan->jumlah -= 1;
                // $kebutuhan->butuh = $kebutuhan->jumlah - $kebutuhan->rusak;
                $kebutuhan->save();
                break;
            case 1:
                $kebutuhan->kurang_baik -= 1;
                $kebutuhan->jumlah -= 1;
                // $kebutuhan->butuh = $kebutuhan->jumlah - $kebutuhan->rusak;
                $kebutuhan->save();
                break;
            case 2:
                $kebutuhan->baik -= 1;
                $kebutuhan->jumlah -= 1;
                // $kebutuhan->butuh = $kebutuhan->jumlah - $kebutuhan->rusak;
                $kebutuhan->save();
                break;

            default:
                dd("error saat mengubah data di kebutuhan barang");
                break;
        }

        // hapus data inventaris
        $inventaris->delete();

        return redirect()->route('inventory')->with('success', 'Inventaris [' . $kode . '] berhasil dihapus');
    }
}
