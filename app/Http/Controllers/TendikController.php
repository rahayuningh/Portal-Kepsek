<?php

namespace App\Http\Controllers;

use App\Civitas;
use App\Tendik;
use Illuminate\Http\Request;

class TendikController extends Controller
{
    public function showAll()
    {
        $tendiks = Tendik::all();
        $data_tendik = array();
        foreach ($tendiks as $tendik) {
            $pegawai = $tendik->pegawai;
            $civitas = $pegawai->civitas;
            array_push($data_tendik, array(
                'id' => $tendik->id,
                'name' => $civitas->nama,
                'nik' => $pegawai->nik
            ));
        }

        return view('pegawai/tendik', ['tendiks' => $data_tendik]);
    }
    public function biodataTendik($id)
    {
        if ($id) {
            $tendik = Tendik::find($id);
            $pegawai = $tendik->pegawai;
            $civitas = $pegawai->civitas;
            return view('pegawai/biodata_tendik', [
                'page' => 'Tenaga Pendidik',
                'civitas' => $civitas,
                'pegawai' => $pegawai,
                'tendik' => $tendik,
                'religion' => $civitas->agama,
            ]);
        } else {
            return redirect()->back()->with('fail', 'Tidak bisa melihat biodata tendik, tidak ada id yang disertakan');
        }
    }
}
