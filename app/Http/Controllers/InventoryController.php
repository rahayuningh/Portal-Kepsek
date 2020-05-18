<?php

namespace App\Http\Controllers;
Use App\Inventaris;
Use App\JenisInventaris;
Use App\Ruangan;
use App\Gedung;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    function seeInventory()
    {
        $inventaris=Inventaris::all();
        $jenis_inventaris=JenisInventaris::all();
        $ruangan=Ruangan::all();
        return view('inventaris/data_inventaris', [
            
            'buildings' => Gedung::all(),'inventaris'=>$inventaris,'ruangan'=>$ruangan,'jenis_inventaris'=>$jenis_inventaris
        ]);
    }
    public function store(Request $request){
        $inventaris=$request->all();
        Siswa::create($inventaris);
        return redirect()->route('inventory');
    } 
    public function update(Request $request){
        $inventaris=Inventaris::findOrFail($request->id);
        $siswa->update($inventaris);
        return redirect()->route('inventory');
    }   
}
