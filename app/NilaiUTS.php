<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiUTS extends Model
{
    public function kbm()
    {
        return $this->belongsTo('App\KBM');
    }
    public function siswa()
    {
        return $this->hasOne('App\Siswa');
    }
}
