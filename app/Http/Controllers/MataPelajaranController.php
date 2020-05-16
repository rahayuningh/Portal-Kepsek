<?php

namespace App\Http\Controllers;

use App\Guru;
use App\Http\Controllers\Controller;
use App\KBM;
use App\Kelas;
use App\MataPelajaran;
use App\TahunAjaran;
use App\User;
use Illuminate\Http\Request;

class MataPelajaranController extends Controller
{
    public function showAllMapel()
    {
        $mata_pelajarans = MataPelajaran::all(); // ambil semua data mata pelajaran dari DB

        return view('pekerjaan/mata_pelajaran', [
            // pass data to view
            'mata_pelajarans' => $mata_pelajarans,
        ]);
    }

    public function delete(Request $request)
    {
        $request->validate(['id' => 'required|numeric']);
        $mapel = MataPelajaran::find($request->id);
        dd($mapel);
        // //hapus semua pekerjaan yang berhubungan dengan KBM ini
        // $mapel->delete();
        // return redirect()->back()->with('success', 'Mata pelajaran berhasil dihapus');
    }

    public function create(Request $request)
    {
        // validasi dulu inputannya
        $request->validate([
            'nama_mapel' => 'required', // harus ada 
            'kode_mapel' => 'required', // harus ada 
        ]);
        // klo inputnya gak lolos validasi, bakal redirect ke halaman sebelumnya
        // barengan sama errornya

        // kalo lolos validasi, masukin data ke db
        MataPelajaran::create($request->all());

        return redirect()
            ->route('subject') // balik ke halaman KBM
            ->with('success', 'Mata pelajaran berhasil dibuat'); // sertain dengan pesan sukses
    }

    // public function update(Request $request)
    // {
    //     $request->validate([
    //         'id' => 'required|numeric',
    //         'mata_pelajaran_id' => 'required|numeric',
    //         'kelas_id' => 'required|numeric',
    //         'guru_pengajar' => 'required|numeric',
    //         'semester' => 'required',
    //     ]);

    //     $kbm = KBM::find($request->id);
    //     $data = $request->except('_token');
    //     $kbm->update($data);
    //     return redirect()->back()->with('success', 'KBM berhasil diupdate');
    // }
}