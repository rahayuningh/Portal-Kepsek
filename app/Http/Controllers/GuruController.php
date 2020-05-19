<?php

namespace App\Http\Controllers;

use App\Agama;
use App\Civitas;
use App\Guru;
use App\Kelas;
use App\Pegawai;
use Illuminate\Http\Request;

class GuruController extends Controller
{

    public function showAll()
    {
        $teachers = Guru::all();
        $data_teacher = array();
        foreach ($teachers as $teacher) {
            $pegawai = $teacher->pegawai;
            $civitas = $pegawai->civitas;
            array_push($data_teacher, array(
                'id' => $teacher->id,
                'name' => $civitas->nama,
                'nik' => $pegawai->nik
            ));
        }

        return view('pegawai/guru', [
            'teachers' => $data_teacher,
            'religions' => Agama::all(),
            'classes' => Kelas::all()
        ]);
    }

    public function biodataGuru($id)
    {
        if ($id) {
            $teacher = Guru::find($id);
            $pegawai = $teacher->pegawai;
            $civitas = $pegawai->civitas;

            return view('pegawai/biodata_guru', [
                'page' => 'Guru',
                'civitas' => $civitas,
                'pegawai' => $pegawai,
                'teacher' => $teacher,
                'class' => $teacher->kelasPerwalian,
                'religion' => $civitas->agama,
                'kbms' => $teacher->kbm
            ]);
        } else {
            return redirect()->back()->with('fail', 'Tidak bisa melihat biodata guru, tidak ada id yang disertakan');
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|numeric',
            'email' => 'required|email',
            'name' => 'required|min:3',
            'jenis_kelamin' => 'required|numeric',
            'tempat_lahir' => 'required|min:3',
            'tanggal_lahir' => 'required|date',
            'agama' => 'required|numeric',
            'kelas_perwalian' => 'required|numeric',
            'status_pegawai' => 'required|numeric',
        ]);

        $teacher = Guru::create([
            'kelas_perwalian' => $request->kelas_perwalian,
        ]);

        $pegawai = new Pegawai();
        $pegawai->fill([
            'nik' => $request->nik,
            'email' => $request->email,
            'status_pegawai' => $request->status_pegawai,
        ]);

        $teacher->pegawai()->save($pegawai);

        $civitas = new Civitas();
        $civitas->fill([
            'nama' => $request->name,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'agama_id' => $request->agama,
        ]);

        $pegawai->civitas()->save($civitas);
        return redirect()->route('teacher')->with('success', 'Data guru berhasil dibuat');
    }
}
