<?php

namespace App\Http\Controllers;

use App\Ruangan;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    public function getRooms(Request $request)
    {
        $data = $request->building;
        $room = Ruangan::where('gedung_id', $data)->get();
        if ($data != null) {
            return response()->json([
                'buildingId' => $data,
                'rooms' => $room,
                'message' => 'Success'
            ]);
        } else {
            return response()->json([
                'message' => 'Fail'
            ]);
        }
    }
}
