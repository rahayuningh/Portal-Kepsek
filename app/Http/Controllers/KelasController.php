<?php

namespace App\Http\Controllers;

use App\Kelas;
use App\Siswa;
use App\TahunAjaran;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function seeAll()
    {
        return view('siswa/detail_kelas', [
            'schoolYears' => TahunAjaran::all(),
        ]);
    }

    public function show($id)
    {
        $class = Kelas::find($id);
        $teacher = $class->guru;
        $pegawai = $teacher->pegawai;

        $class_code = str_split($class->kode_kelas);
        if ($class_code[0] == '7') {
            $students = $class->siswa1;
        } elseif ($class_code[0] == '8') {
            $students = $class->siswa2;
        } elseif ($class_code[0] == '9') {
            $students = $class->siswa3;
        }

        $data_student = array();
        foreach ($students as $student) {
            $civitas = $student->civitas;
            array_push($data_student, array(
                'id' => $student->id,
                'name' => $civitas->nama,
                'nisn' => $student->nisn,
            ));
        }

        return view('siswa/detail_kelas', [
            'class' => $class,
            'teacher_name' => $pegawai->civitas->nama,
            'teacher_id' => $teacher->id,
            'students' => $data_student,
            'schoolYears' => TahunAjaran::all(),
        ]);
    }
}
