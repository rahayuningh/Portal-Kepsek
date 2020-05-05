<?php

namespace App\Http\Controllers;

use App\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function guruBiodata($id)
    {
        if ($id) {
            $guru = Guru::find($id);
            $pegawai = $guru->pegawai;
            $civitas = $pegawai->civitas;
            echo ($guru);
            echo ($pegawai);
            echo ($civitas);
        } else {
            echo ('Gak ada id nya');
        }
    }
}
