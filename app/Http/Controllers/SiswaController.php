<?php

namespace App\Http\Controllers;

use App\Kelas;
use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function seeStudentData(Request $request)
    {
        $request->validate([
            'year' => 'required|size:9',
            'region' => 'numeric',
            'class' => 'required|numeric'
        ]);

        $kelas = Kelas::where([
            'kode_kelas' => $request->class,
            'tahun_ajaran' => $request->year
        ])->get();

        if ($request->region) {
            $siswa = $kelas->siswa()->where('asal_wilayah', $request->region)->get();
        } else {
            $siswa = $kelas->siswa();
        }

        echo ($siswa);
    }

    public function studentBiodata($id)
    {
        if ($id) {
            $siswa = Siswa::find($id);
            $civitas = $siswa->civitas;
            echo ($siswa);
            echo ($civitas);
        } else {
            echo ('Gak ada id nya');
        }
    }
}
