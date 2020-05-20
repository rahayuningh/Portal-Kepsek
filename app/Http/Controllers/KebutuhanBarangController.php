<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gedung;
use App\Inventaris;
use App\JenisInventaris;
use App\KebutuhanBarang;
use App\Ruangan;

class KebutuhanBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $needs = KebutuhanBarang::all();
        return view('inventaris/kebutuhan', [
            'buildings' => Gedung::all(),
            'needs' => $needs->slice(0, 10),
            'types' => JenisInventaris::all(),
            'rooms' => Ruangan::all()->sortBy('gedung_id')
        ]);
    }

    public function search(Request $request)
    {
        $request->validate([
            'room_id' => 'required|numeric',
            'building_id' => 'required|numeric'
        ]);
        return view('inventaris/kebutuhan', [
            'buildings' => Gedung::all(),
            'needs' => KebutuhanBarang::where('ruangan_id', $request->room_id)->get(),
            'types' => JenisInventaris::all(),
            'building_name' => Gedung::find($request->building_id)->nama_gedung,
            'room_name' => Ruangan::find($request->room_id)->nama_ruangan,
            'rooms' => Ruangan::all()->sortBy('gedung_id')
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
            'ruangan_id' => 'required|numeric',
            'jenis_inventaris_id' => 'required|numeric'
        ]);

        KebutuhanBarang::create([
            'jenis_inventaris_id' => $request->jenis_inventaris_id,
            'ruangan_id' => $request->ruangan_id
        ]);

        return redirect()->route('inventory.needs')->with('success', 'Kebutuhan barang berhasil dibuat');
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
            'id' => 'required|numeric',
            'ruangan_id' => 'required|numeric',
            'jenis_inventaris_id' => 'required|numeric'
        ]);

        $need = KebutuhanBarang::find($request->id);
        $request->except('id');
        $request->except('_token');
        $request->except('_method');

        // update data kebutuhan barang
        $need->update([
            'jenis_inventaris_id' => $request->jenis_inventaris_id,
            'ruangan_id' => $request->ruangan_id
        ]);

        return redirect()->route('inventory.needs')->with('success', 'Kebutuhan barang berhasil diubah');
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
            'id.required' => 'Hapus data kebutuhan barang gagal, tidak ada ID yang disertakan',
            'id.numeric' => 'Hapus data kebutuhan barang gagal, ID harus berupa angka'
        ]);

        $need = KebutuhanBarang::find($request->id);
        $inventoryType = $need->jenisInventaris->nama_jenis_inventaris;
        $roomName = $need->ruangan->nama_ruangan;

        // delete semua inventaris yang berhubungan sama kebutuhan barang
        foreach ($need->inventaris as $inventory) {
            $inventory->delete();
        }

        // delete data kebutuhan barang
        $need->delete();
        return redirect()
            ->route('inventory.needs')
            ->with('success', 'Kebutuhan barang ' . $inventoryType . ' di ruangan ' . $roomName . ' berhasil dihapus');
    }
}
