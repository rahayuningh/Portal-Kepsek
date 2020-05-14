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
        return $this->morphOne('App\Pegawai', 'pegawaiable');
    }

    public function messages()
    {
        return $this->hasMany('App\Pesan', 'penerima');
    }
}
