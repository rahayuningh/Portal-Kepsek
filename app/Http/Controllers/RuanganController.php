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
        // $data_ruangan = array();
        // $rooms = Ruangan::all();
        // foreach ($rooms as $room) {
        //     //ambil objek gedung untuk dapat
        //     $gedung = $room->gedung;
        //     $nama_gedung = $gedung->nama_gedung;
        //     //ambil kode, serta name
        //     $kode_ruangan = $room->kode_ruangan;
        //     $nama_ruangan = $room->nama_ruangan;
        //     //ambil objek jenis
        //     $jenis_ruangan = $room->jenisRuangan;
        //     $jenis_ruangan_alias = $jenis_ruangan->nama_jenis_ruangan;
        //     //ambil objek pegawai
        //     $kapasitas = $room->kapasitas_orang;
        //     $penanggung_jawab = $room->pegawai;
        //     $civitas = $penanggung_jawab->civitas;
        //     $nama_penanggung_jawab = $civitas->nama;

        //     array_push($data_ruangan, array(
        //         'id' => $room->id,
        //         'jenis_ruangan' => $room->jenis_ruangan->nama_jenis_ruangan,
        //         'kode_ruangan' => $kode_ruangan,
        //         'nama_ruangan' => $nama_ruangan,
        //         'nama_gedung' => $nama_gedung,
        //         'gedung_id' => $gedung->id,
        //         'nama_responsible_person' => $nama_penanggung_jawab,
        //         'penanggung_jawab_id' => $penanggung_jawab->id,
        //         'kapasitas' => $kapasitas
        //     ));
        // }
        return view('inventaris.ruang', [
            // 'data_ruangan' => $data_ruangan,
            'gedung' => Gedung::all(),
            'jenis_ruangan' => JenisRuangan::all(),
            'penanggung_jawab' => Guru::all(),
            'rooms' => Ruangan::all()
        ]);
    }
    public function create(Request $request)
    {
        Ruangan::create($request->all());
        return redirect()->route('inventory.room');
    }
    public function update(Request $request)
    {
        $ruangan = Ruangan::findOrFail($request->id);
        $final = $request->except('_token');
        $ruangan->update($final);
        return redirect()->back()->with('success', 'Ruangan berhasil diupdate');
    }
    public function destroy(Request $request)
    {
        //$request->validate(['id'=>'required|numeric']);
        $ruangan = Ruangan::findOrFail($request->id);
        $ruangan->delete();
        return redirect()->back()->with('success', 'Ruangan berhasil didelete');
    }
}
