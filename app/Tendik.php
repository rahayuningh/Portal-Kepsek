<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tendik extends Model
{
    protected $fillable = [
        'email',
        'password',
        'level_akses',
        'jabatan',
        'bagian_pekerjaan'
    ];

    public function pegawai()
    {
        return $this->morphMany('App\Pegawai', 'pegawaiable');
    }
}
