<?php

namespace App\Http\Controllers;

use App\JenisInventaris;
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

        // buat data jenis inventaris yang baru
        JenisInventaris::create($request->all());

        return redirect()
            ->route('inventory.type')
            ->with('success', 'Jenis inventaris ' . $request->nama_jenis_inventaris . ' berhasil dibuat');
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

        // cari jenis inventaris
        $type = JenisInventaris::find($request->id);

        // update jenis inventaris
        $type->update($request->all());

        return redirect()
            ->route('inventory.type')
            ->with('success', 'Jenis Inventaris [' . $type->nama_jenis_inventaris . '] berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $request->validate([
            'id' => 'required|numeric'
        ], [
            'id.required' => 'Penghapusan jenis inventaris gagal, tidak ada ID yang disertakan',
            'id.numeric' => 'Penghapusan jenis inventaris gagal, ID harus berbentuk angka'
        ]);

        $type = JenisInventaris::find($request->id);
        $typeName = $type->nama_jenis_inventaris;

        // delete semua kebutuhan barang yang berhubungan sama jenis inventaris
        foreach ($type->kebutuhanBarang as $need) {
            // delete semua inventaris yang berhubungan sama jenis inventaris
            foreach ($need->inventaris as $inventory) {
                $inventory->delete();
            }
            $need->delete();
        }

        // delete data kebutuhan barang
        $type->delete();

        return redirect()->route('inventory.type')->with('success', 'Jenis inventaris [' . $typeName . '] berhasil dihapus');
    }
}
