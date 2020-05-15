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


class KBMController extends Controller
{

    public function showAllKBM()
    {
        // get all KBM
        $data_kbm = array(); // bikin array baru buat nampung data kbm
        $kbms = KBM::all(); // ambil semua data kbm dari DB
        foreach ($kbms as $kbm) {
            $subject = $kbm->mataPelajaran; // ambil nama mapelnya dari KBM nya
            $class = $kbm->kelas; // ambil data kelas dari KBM nya

            // proses ambil nama guru dari KBM nya
            $guru_pengampu = $kbm->guru; // ambil data gurunya dulu
            $pegawai = $guru_pengampu->pegawai; // get data pegawai dari gurunya
            $civitas = $pegawai->civitas; // get data civitas dari gurunya
            $teacher_name = $civitas->nama; // ambil nama guru yang ada di civitas

            // masukin data ke array KBM
            array_push($data_kbm, array(
                'id' => $kbm->id,
                'subject' => $subject->nama_mapel,
                'subject_id' => $subject->id,
                'class' => $class,
                'teacher_name' => $teacher_name,
                'teacher_id' => $guru_pengampu->id,
                'term' => $kbm->semester
            ));
        }

        // get all mapel
        $subjects = MataPelajaran::all();

        // get all teacher
        $data_teacher = array(); // bikin array buat nampung data guru
        $teachers = Guru::all(); // ambil data guru dari DB
        foreach ($teachers as $teacher) {
            $pegawai = $teacher->pegawai; // get data pegawai dari gurunya
            $civitas = $pegawai->civitas; // get data civitas dari gurunya
            $teacher_name = $civitas->nama; // ambil nama guru yang ada di civitas

            // push ke array data yang udh diolah
            array_push($data_teacher, array(
                'id' => $teacher->id,
                'name' => $teacher_name
            ));
        }

        // get all kelas
        $classes = Kelas::all();
        return view('pekerjaan/kbm', [
            // pass data to view
            'teachers' => $data_teacher,
            'classes' => $classes,
            'subjects' => $subjects,
            'kbms' => $data_kbm,
            'years' => TahunAjaran::all()
        ]);
    }

    public function show($id)
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }

    public function create(Request $request)
    {
        // validasi dulu inputannya
        $request->validate([
            'mata_pelajaran_id' => 'required|numeric', // harus ada dan angka
            'kelas_id' => 'required|numeric', // harus ada dan angka
            'guru_pengajar' => 'required|numeric', // harus ada dan angka
            'semester' => 'required|numeric', // harus ada dan angka
        ]);
        // klo inputnya gak lolos validasi, bakal redirect ke halaman sebelumnya
        // barengan sama errornya

        // kalo lolos validasi, masukin data ke db
        KBM::create($request->all());

        return redirect()
            ->route('kbm') // balik ke halaman KBM
            ->with('success', 'Data KBM berhasil dibuat'); // sertain dengan pesan sukses
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required|numeric',
            'mata_pelajaran_id' => 'required|numeric',
            'kelas_id' => 'required|numeric',
            'guru_pengajar' => 'required|numeric',
            'semester' => 'required',
        ]);

        $kbm = KBM::find($request->id);
        $data = $request->except('_token');
        $kbm->update($data);
        return redirect()->back()->with('success', 'KBM berhasil diupdate');
    }

    public function delete(Request $request)
    {
        $request->validate(['id' => 'required|numeric']);
        $kbm = KBM::find($request->id);
        //hapus semua pekerjaan yang berhubungan dengan KBM ini
        $kbm->delete();
        return redirect()->back()->with('success', 'KBM berhasil dihapus');
    }
}
