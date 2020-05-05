<?php

namespace App\Http\Controllers;

use App\Tendik;
use Illuminate\Http\Request;

class TendikController extends Controller
{
    public function tendikBiodata($id)
    {
        if ($id) {
            $tendik = Tendik::find($id);
            $pegawai = $tendik->pegawai;
            $civitas = $pegawai->civitas;
            echo ($tendik);
            echo ($pegawai);
            echo ($civitas);
        } else {
            echo ('Gak ada id nya');
        }
    }
}
