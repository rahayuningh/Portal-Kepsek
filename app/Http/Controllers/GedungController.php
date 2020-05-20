<?php

namespace App\Http\Controllers;

use App\Gedung;
use App\Ruangan;
use Illuminate\Http\Request;

class GedungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAllGedung()
    {
        $building = Gedung::all();
        return view('inventaris.gedung', ['buildings' => $building]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate(
            [
                'kode_gedung' => 'required|max:10',
                'nama_gedung' => 'required|max:20'
            ],
            [
                'kode_gedung.max' => 'Kode gedung maksimal 10 karakter',
                'nama_gedung.max' => 'Nama gedung maksimal 20 karakter',
                'kode_gedung.unique' => 'Kode gedung sudah dipakai, kode gedung harus unik',
                'nama_gedung.required' => 'Nama gedung harus dimasukkan',
                'kode_gedung.required' => 'Kode gedung harus dimasukkan'
            ]
        );
        Gedung::create($request->all());
        return redirect()->route('inventory.building')->with('success', 'Data gedung ' . $request->nama_gedung . ' sudah ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate(
            [
                'id' => 'required|numeric',
                'kode_gedung' => 'required|max:10',
                'nama_gedung' => 'required|max:20',
            ],
            [
                'kode_gedung.max' => 'Kode gedung maksimal 10 karakter',
                'nama_gedung.max' => 'Nama gedung maksimal 20 karakter',
                'kode_gedung.unique' => 'Kode gedung sudah dipakai, kode gedung harus unik',
                'nama_gedung.required' => 'Nama gedung harus dimasukkan',
                'kode_gedung.required' => 'Kode gedung harus dimasukkan'
            ]
        );

        $building = Gedung::find($request->id);
        $building->update($request->all());
        return redirect()->route('inventory.building')->with('success', 'Data gedung ' . $request->nama_gedung . ' berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $building = Gedung::findOrFail($request->id);
        $building_name = $building->nama_gedung;
        // dd($building->ruangan);

        // delete semua ruangan
        foreach ($building->ruangan as $room) {
            // delete semua kebutuhan barang
            foreach ($room->kebutuhanBarang as $need) {
                // delete semua inventaris
                foreach ($need->inventaris as $inventory) {
                    $inventory->delete();
                }
                $need->delete();
            }
            $room->delete();
        }

        $building->delete();
        return redirect()->back()->with('success', 'Data ' . $building_name . ' berhasil dihapus');
    }
}
