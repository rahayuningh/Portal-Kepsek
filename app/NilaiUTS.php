<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiUTS extends Model
{
    public function kbm(Type $var = null)
    {
        return $this->belongsTo('App\kbm');
    }
    public function siswa(Type $var = null)
    {
        return $this->hasOne('App\Siswa');
    }
}
