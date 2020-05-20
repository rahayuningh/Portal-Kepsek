<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisRuangan extends Model
{
    protected $fillable = ['kode', 'nama_jenis_ruangan'];

    public function ruangan()
    {
        return $this->hasMany('App\Ruangan', 'jenis_ruangan_id');
    }
}
