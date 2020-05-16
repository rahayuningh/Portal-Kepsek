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
        //hapus KBM yang berhubungan dengan mata pelajaran ini
        $mapel->delete();
        return redirect()->back()->with('success', 'Mata pelajaran berhasil dihapus');
    }

    public function create(Request $request)
    {
        // validasi dulu inputannya
        $request->validate(
            [
                'nama_mapel' => 'required|max:50', // harus ada
                'kode_mapel' => 'required|max:3', // harus ada
            ],
            [
                'kode_mapel.max' => 'Kode mata pelajaran maksimal 3 karakter',
                'nama_mapel.max' => 'Nama mata pelajaran maksimal 50 karakter',
                'kode_mapel.required' => 'Kode mata pelajaran harus dimasukkan',
                'nama_mapel.required' => 'Nama mata pelajaran harus dimasukkan'
            ]
        );
        // klo inputnya gak lolos validasi, bakal redirect ke halaman sebelumnya
        // barengan sama errornya

        // kalo lolos validasi, masukin data ke db
        MataPelajaran::create($request->all());

        return redirect()
            ->route('subject') // balik ke halaman KBM
            ->with('success', 'Mata pelajaran berhasil dibuat'); // sertain dengan pesan sukses
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required|numeric',
            'kode_mapel' => 'required|max:3',
            'nama_mapel' => 'required|max:50',
        ], [
            'id.required' => 'ID mata pelajaran harus dimasukkan',
            'id.numeric' => 'ID mata pelajaran harus berupa angka',
            'kode_mapel.max' => 'Kode mata pelajaran maksimal 3 karakter',
            'nama_mapel.max' => 'Nama mata pelajaran maksimal 50 karakter',
            'kode_mapel.required' => 'Kode mata pelajaran harus dimasukkan',
            'nama_mapel.required' => 'Nama mata pelajaran harus dimasukkan'
        ]);

        $subject = MataPelajaran::find($request->id);
        $data = $request->except('_token');
        $data = $request->except('id');
        $subject->update($data);
        return redirect()->back()->with('success', 'KBM berhasil diupdate');
    }
}
