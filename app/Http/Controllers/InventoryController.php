<?php

namespace App\Http\Controllers;

use App\Inventaris;
use App\Ruangan;
use App\Gedung;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public  function seeInventory()
    {
        // $inventaris = Inventaris::all();
        dd(Inventaris::all());
        // print_r($inventaris);
        // $ruangan = Ruangan::all();
        // return view('inventaris/data_inventaris', [
        //     'buildings' => Gedung::all(),
        //     'inventaris' => $inventaris,
        //     'ruangan' => $ruangan
        // ]);
    }
}
