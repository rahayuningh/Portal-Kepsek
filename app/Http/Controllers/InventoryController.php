<?php

namespace App\Http\Controllers;
Use App\Inventaris;
Use App\Ruangan;
use App\Gedung;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    function seeInventory()
    {
        $inventaris=Inventaris::all();
        $ruangan=Ruangan::all();
        return view('inventaris/data_inventaris', [
            
            'buildings' => Gedung::all(),'inventaris'=>$inventaris,'ruangan'=>$ruangan
        ]);
    }
    public function store(Request $request){
        $inventaris=$request->all();
        Siswa::create($inventaris);
        return redirect('inventory');
    } 
    public function update($id,Request $request){
        $inventaris=Inventaris::findOrFail($id);
        $siswa->update($request->all());
        return redirect('inventory');
    }   
}
