<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    public function siswa()
    {
        return $this->hasMany('App\Siswa');
    }
}
