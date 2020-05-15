<?php

namespace App\Http\Controllers;

use App\Guru;
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

        return view('pegawai/guru', ['teachers' => $data_teacher]);
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
}
