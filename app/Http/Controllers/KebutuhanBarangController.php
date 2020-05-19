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
            'room_name' => Ruangan::find($request->room_id)->nama_ruangan,
            'building_name' => Gedung::find($request->building_id)->nama_gedung,
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

        $need->update([
            'jenis_inventaris_id' => $request->jenis_inventaris_id,
            'ruangan_id' => $request->ruangan_id
        ]);

        foreach ($need->inventaris as $inventaris) {
            $inventaris->update([
                'ruangan_pemilik_id' => $request->ruangan_id,
                'jenis_inventaris_id' => $request->jenis_inventaris_id
            ]);
        }

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
        $request->validate(['id' => 'required|numeric']);
        $need = KebutuhanBarang::find($request->id);

        // delete semua inventaris yang berhubungan sama kebutuhan barnag
        Inventaris::where([
            ['ruangan_pemilik_id', '=', $need->ruangan_id],
            ['jenis_inventaris_id', '=', $need->jenis_inventaris_id]
        ])->delete();

        // delete data kebutuhan barang
        $need->delete();
        return redirect()->route('inventory.needs')->with('success', 'Kebutuhan barang berhasil dihapus');
    }
}
