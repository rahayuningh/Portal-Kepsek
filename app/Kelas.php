<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    public function kbm()
    {
        return $this->belongsTo('App\kbm');
    }
    public function siswa()
    {
        return $this->belongsTo('App\Siswa');
    }
    public function guru()
    {
        return $this->hasOne('App\Guru');
    }
}
