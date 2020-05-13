<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function sentbox()
    {
        return view('pesan/outbox');
    }

    public function detail($id)
    {
        return view('pesan/message_detail');
    }
}
