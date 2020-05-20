<?php

namespace App\Http\Controllers;

use App\Pegawai;
use App\KebutuhanBarang;
use App\Gedung;
use App\Guru;
use App\JenisRuangan;
use App\Ruangan;
use Illuminate\Http\Request;
use Whoops\Run;

use function GuzzleHttp\Promise\all;

class RuanganController extends Controller
{
    public function showAllRuangan()
    {
        return view('inventaris.ruang', [
            'buildings' => Gedung::all(),
            'types' => JenisRuangan::all(),
            'rooms' => Ruangan::all()
        ]);
    }

    public function create(Request $request)
    {
        $request->validate(
            [
                'gedung_id' => 'required|numeric',
                'nama_ruangan' => 'required|max:50',
                'kode_ruangan' => 'required|max:10',
                'jenis_ruangan_id' => 'required|numeric',
                'kapasitas_orang' => 'required|numeric'
            ],
            [
                'nama_ruangan.max' => 'Nama ruangan maksimal 50 karakter',
                'nama_ruangan.required' => 'Nama ruangan harus dimasukkan',
                'kode_ruangan.max' => 'Kode ruangan maksimal 10 karakter',
                'kode_ruangan.required' => 'Kode ruangan harus dimasukkan',
                'gedung_id.required' => 'ID Gedung harus dimasukkan',
                'jenis_ruangan_id.required' => 'ID Jenis Ruangan harus dimasukkan',
                'kapasitas.required' => 'Kapasitas ruangan harus dimasukkan',
            ]
        );

        Ruangan::create($request->all());
        return redirect()->route('inventory.room')->with('success', 'Ruangan ' . $request->nama_ruangan . ' berhasil dibuat');
    }

    public function search(Request $request)
    {
        $request->validate(
            [
                'gedung_id' => 'required|numeric',
            ],
            [
                'gedung_id.required' => 'Pencarian gagal, ID Gedung harus dimasukkan',
                'gedung_id.numeric' => 'Pencarian gagal, ID Gedung harus berupa angka'
            ]
        );

        $building = Gedung::find($request->gedung_id);
        return view('inventaris.ruang', [
            'buildings' => Gedung::all(),
            'types' => JenisRuangan::all(),
            'rooms' => $building->ruangan,
            'building_name' => $building->nama_gedung
        ]);
    }

    public function update(Request $request)
    {
        $request->validate(
            [
                'gedung_id' => 'required|numeric',
                'nama_ruangan' => 'required|max:50',
                'kode_ruangan' => 'required|max:10',
                'jenis_ruangan_id' => 'required|numeric',
                'kapasitas_orang' => 'required|numeric'
            ],
            [
                'nama_ruangan.max' => 'Nama ruangan maksimal 50 karakter',
                'nama_ruangan.required' => 'Nama ruangan harus dimasukkan',
                'kode_ruangan.max' => 'Kode ruangan maksimal 10 karakter',
                'kode_ruangan.required' => 'Kode ruangan harus dimasukkan',
                'gedung_id.required' => 'ID Gedung harus dimasukkan',
                'jenis_ruangan_id.required' => 'ID Jenis Ruangan harus dimasukkan',
                'kapasitas.required' => 'Kapasitas ruangan harus dimasukkan',
            ]
        );
        $ruangan = Ruangan::findOrFail($request->id);
        $ruangan->update($request->all());
        return redirect()->route('inventory.room')->with('success', 'Data ruangan ' . $request->kode_ruangan . ' | ' . $request->nama_ruangan . ' berhasil diupdate');
    }

    public function destroy(Request $request)
    {
        $request->validate(['id' => 'required|numeric', ['id' => 'Hapus ruangan gagal, ID tidak disertakan']]);
        $ruangan = Ruangan::findOrFail($request->id);
        $name = $ruangan->nama_ruangan;
        $kode = $ruangan->kode_ruangan;

        // hapus data kebutuhan barang
        foreach ($ruangan->kebutuhanBarang as $need) {
            // hapus data inventaris
            foreach ($need->inventaris as $inventory) {
                $inventory->delete();
            }
            $need->delete();
        }

        // hapus data ruangan
        $ruangan->delete();
        return redirect()->route('inventory.room')->with('success', 'Data ' . $kode . ' | ' . $name . ' berhasil dihapus');
    }
}
