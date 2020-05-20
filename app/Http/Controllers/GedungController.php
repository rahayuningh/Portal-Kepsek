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
        Gedung::create($request->all());
        return redirect('inventaris.gedung')->with('success', 'Data sudah ditambahkan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $building = Gedung::find($request->id);
        $building->nama_gedung = $request->nama_gedung;
        $building->kode_gedung = $request->kode_gedung;
        $building->save();
        return redirect()->route('inventory.building');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $building = Gedung::findOrFail($request->id);
        $building->delete();
        return redirect()->back()->with('succes', 'Data sudah dihapus');
    }
}
