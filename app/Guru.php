<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    public function pegawai()
    {
        return $this->morphMany('App\Pegawai', 'pegawaiable');
    }
}
