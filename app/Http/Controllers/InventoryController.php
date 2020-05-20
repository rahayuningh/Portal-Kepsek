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
    // public function prepareInventoryData($data, $isSlice = false)
    // {
    //     if ($isSlice) {
    //         $inventarises = $data->slice(0, 20);
    //     } else {
    //         $inventarises = $data;
    //     }

    //     $data_inventaris = array();
    //     foreach ($inventarises as $inventaris) {
    //         // tentukan status inventaris
    //         switch ($inventaris->status_kelayakan) {
    //             case 0:
    //                 $status = "Rusak";
    //                 break;
    //             case 1:
    //                 $status = "Kurang Baik";
    //                 break;
    //             case 2:
    //                 $status = "Baik";
    //                 break;
    //             default:
    //                 $status = "Status Error";
    //                 break;
    //         }

    //         // buat array baru yang berisi data olahan siap tampil
    //         array_push($data_inventaris, array(
    //             'id' => $inventaris->id,
    //             'kode' => $inventaris->kode_inventaris,
    //             'jenis' => $inventaris->jenis_inventaris->nama_jenis_inventaris,
    //             'merk' => $inventaris->jenis_inventaris->merk,
    //             'no_seri' => $inventaris->no_seri,
    //             'harga_satuan' => $inventaris->jenis_inventaris->harga_satuan,
    //             'ukuran' => $inventaris->jenis_inventaris->ukuran,
    //             'bahan' => $inventaris->jenis_inventaris->bahan,
    //             'tanggal_terima' => $inventaris->tgl_terima,
    //             'status' => $status,
    //             'keterangan' => $inventaris->keterangan,
    //             'ruangan_id' => $inventaris->ruangan_pemilik_id,
    //             'gedung_id' => Ruangan::find($inventaris->ruangan_pemilik_id)->gedung_id,
    //         ));
    //     }

    //     return $data_inventaris;
    // }

    public function generateCode($roomId, $typeId, $anggaran, $year)
    {
        // lokasi peruntukan
        $lokasi = Ruangan::find($roomId)->jenisRuangan->kode;
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
            // increment the serial number
            $number = $int + 1;
        } else {
            // jika belum ada, berarti barang pertama
            $number = 1;
        }

        // if the serial number exceed 999, throw max number error
        if ($number > 999) {
            dd("! Maximum Inventory Number Error !, inventory serial number exceed 999");
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

    public function seeInventory($needId)
    {
        $need = KebutuhanBarang::find($needId);
        return view('inventaris/data_inventaris', [
            'inventories' => $need->inventaris,
            'need' => $need
        ]);
    }

    // public function search(Request $request)
    // {
    //     $request->validate([
    //         'room_id' => 'required|numeric'
    //     ], [
    //         'room_id.required' => "ID Ruangan diperlukan untuk memfilter inventaris",
    //         'room_id.numeric' => "ID Ruangan harus dalam bentuk angka"
    //     ]);

    //     $ruangan = Ruangan::find($request->room_id);

    //     return view('inventaris/data_inventaris', [
    //         'inventaris' => $this->prepareInventoryData($ruangan->inventaris),
    //         'buildings' => Gedung::all(),
    //         'building_name' => $ruangan->gedung->nama_gedung,
    //         'room_name' => $ruangan->nama_ruangan,
    //         'inventory_types' => JenisInventaris::all()
    //     ]);
    // }

    public function store(Request $request)
    {
        $request->validate([
            'kebutuhan_id' => 'required|numeric',
            'tgl_terima' => 'required',
            'status_kelayakan' => 'required|numeric',
            'anggaran' => 'required|size:2',
        ]);

        // generate kode inventaris
        $need = KebutuhanBarang::find($request->kebutuhan_id);
        $date = DateTime::createFromFormat('Y-m-d', $request->tgl_terima);
        $code = $this->generateCode(
            $need->ruangan->id,
            $need->jenisInventaris->id,
            $request->anggaran,
            $date->format('Y')
        );

        // buat data inventaris yang baru
        Inventaris::create([
            'kebutuhan_id' => $request->kebutuhan_id,
            'kode_inventaris' => $code,
            'no_seri' => $request->no_seri,
            'tgl_terima' => $request->tgl_terima,
            'anggaran' => $request->anggaran,
            'status_kelayakan' => $request->status_kelayakan,
            'keterangan' => $request->keterangan
        ]);

        // ubah jumlah di kebutuhan barang
        switch ($request->status_kelayakan) {
            case 0:
                $need->rusak += 1;
                break;
            case 1:
                $need->kurang_baik += 1;
                break;
            case 2:
                $need->baik += 1;
                break;
            default:
                dd("error saat mengubah data di kebutuhan barang");
                break;
        }
        $need->jumlah += 1;
        $need->save();

        return redirect()->back()->with('success', 'Data Inventaris ' . $code . ' berhasil dibuat');
    }

    public function showUpdatePage($id)
    {
        $inventory = Inventaris::find($id);
        return view('inventaris/edit_inventaris', [
            'inventaris' => $inventory,
            'needId' => $inventory->kebutuhanBarang->id
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required|numeric',
            'tgl_terima' => 'required',
            'status_kelayakan' => 'required|numeric',
            'anggaran' => 'required|size:2',
        ]);

        // cari data inventaris
        $inventory = Inventaris::findOrFail($request->id);
        // simpan status kelayakan awal
        $oldStatusKelayakan = $inventory->status_kelayakan;
        // updata data inventaris
        $inventory->update($request->all());

        // kalo status kelayakannya berubah
        if ($inventory->wasChanged('status_kelayakan')) {
            // ambil data kebutuhan barang
            $need = $inventory->kebutuhanBarang;

            // update kebutuhan barang yang sebelumnya
            switch ($oldStatusKelayakan) {
                case 0:
                    $need->rusak -= 1;
                    break;
                case 1:
                    $need->kurang_baik -= 1;
                    break;
                case 2:
                    $need->baik -= 1;
                    break;
                default:
                    dd("error saat mengubah data di kebutuhan barang");
                    break;
            }

            // update kebutuhan barang yang baru
            switch ($request->status_kelayakan) {
                case 0:
                    $need->rusak += 1;
                    break;
                case 1:
                    $need->kurang_baik += 1;
                    break;
                case 2:
                    $need->baik += 1;
                    break;
                default:
                    dd("error saat mengubah data di kebutuhan barang");
                    break;
            }

            // check apakah ada jumlah yang negatif
            if ($need->rusak < 0 || $need->kurang_baik < 0 || $need->baik < 0 || $need->jumlah < 0) {
                dd("! Negatif Number Error ! Ada jumlah yang negatif");
            }

            // simpan data kebutuhan barang
            $need->save();
        }

        return redirect()->route('inventory.update', ['id' => $request->id])->with('success', 'Data inventaris berhasil diubah');
    }

    public function delete(Request $request)
    {
        $request->validate([
            'id' => 'required|numeric'
        ], [
            'id.required' => 'Penghapusan inventaris gagal, tidak ada ID yang disertakan',
            'id.numeric' => 'Penghapusan inventaris gagal, ID yang disertakan harus dalam bentuk angka'
        ]);

        // ambil data inventaris
        $inventaris = Inventaris::find($request->id);
        $kode = $inventaris->kode_inventaris;
        $need = $inventaris->kebutuhanBarang;

        // ubah jumlah di kebutuhan barang
        switch ($inventaris->status_kelayakan) {
            case 0:
                $need->rusak -= 1;
                break;
            case 1:
                $need->kurang_baik -= 1;
                break;
            case 2:
                $need->baik -= 1;
                break;

            default:
                dd("error saat mengubah data di kebutuhan barang");
                break;
        }
        $need->jumlah -= 1;
        $need->save();

        // hapus data inventaris
        $inventaris->delete();

        return redirect()->back()->with('success', 'Inventaris [' . $kode . '] berhasil dihapus');
    }
}
