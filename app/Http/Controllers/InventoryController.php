<?php

namespace App\Http\Controllers;

use App\Gedung;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    function seeInventory()
    {
        return view('inventaris/data_inventaris', [
            'buildings' => Gedung::all()
        ]);
    }
}
