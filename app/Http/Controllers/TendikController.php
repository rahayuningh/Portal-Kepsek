<?php

namespace App\Http\Controllers;

use App\Agama;
use App\Civitas;
use App\Pegawai;
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

        return view('pegawai/tendik', [
            'tendiks' => $data_tendik,
            'religions' => Agama::all()
        ]);
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

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'jenis_kelamin' => 'required|numeric',
            'tempat_lahir' => 'required|min:3',
            'tanggal_lahir' => 'required|date',
            'agama' => 'required|numeric',
            'nik' => 'required|numeric',
            'email' => 'required|email|unique:App\Pegawai,email',
            'status_pegawai' => 'required|numeric',
            'jabatan' => 'required',
            'bagian_pekerjaan' => 'required',
        ]);

        $tendik = Tendik::create([
            'jabatan' => $request->jabatan,
            'bagian_pekerjaan' => $request->bagian_pekerjaan,
        ]);

        $pegawai = new Pegawai();
        $pegawai->fill([
            'nik' => $request->nik,
            'email' => $request->email,
            'status_pegawai' => $request->status_pegawai,
        ]);

        $tendik->pegawai()->save($pegawai);

        $civitas = new Civitas();
        $civitas->fill([
            'nama' => $request->name,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'agama_id' => $request->agama,
        ]);

        $pegawai->civitas()->save($civitas);
        return redirect()->route('tendik')->with('success', 'Data Tendik berhasil dibuat');
    }
}
