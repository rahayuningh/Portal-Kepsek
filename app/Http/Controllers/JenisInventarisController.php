<?php

namespace App\Http\Controllers;

use App\Inventaris;
use App\JenisInventaris;
use App\KebutuhanBarang;
use Illuminate\Http\Request;

class JenisInventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inventaris/jenis_inventaris', [
            'types' => JenisInventaris::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_jenis_inventaris' => 'required',
            'kategori' => 'required|numeric',
            'merk' => 'required',
            'harga_satuan' => 'required|numeric',
            'ukuran' => 'required',
            'bahan' => 'required'
        ]);

        $request->except('id');
        $request->except('_token');
        $request->except('_method');

        JenisInventaris::create($request->all());

        return redirect()->route('inventory.type')->with('success', 'Jenis inventaris berhasil dibuat');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'nama_jenis_inventaris' => 'required',
            'kategori' => 'required|numeric',
            'merk' => 'required',
            'harga_satuan' => 'required|numeric',
            'ukuran' => 'required',
            'bahan' => 'required'
        ]);

        $type = JenisInventaris::find($request->id);
        $request->except('id');
        $request->except('_token');
        $request->except('_method');

        $type->update($request->all());

        return redirect()->route('inventory.type')->with('success', 'Jenis Inventaris berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $request->validate(['id' => 'required|numeric']);
        $type = JenisInventaris::find($request->id);

        // delete semua inventaris yang berhubungan sama jenis inventaris
        foreach ($type->inventaris as $item) {
            $item->delete();
        }

        // delete semua kebutuhan barang yang berhubungan sama jenis inventaris
        foreach ($type->kebutuhan_barang as $item) {
            $item->delete();
        }

        // delete data kebutuhan barang
        $type->delete();
        return redirect()->route('inventory.type')->with('success', 'Jenis inventaris berhasil dihapus');
    }
}
