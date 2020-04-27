<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $fillable = [
        'kbm_diampu',
        'kelas_perwalian'
    ];

    public function pegawai()
    {
        return $this->morphMany('App\Pegawai', 'pegawaiable');
    }
}
