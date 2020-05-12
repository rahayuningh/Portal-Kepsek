<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Tendik extends Authenticatable
{
    use Notifiable;
    protected $fillable = [
        'email',
        'password',
        'level_akses',
        'jabatan',
        'bagian_pekerjaan'
    ];

    protected $hidden = [
        'password',
    ];

    public function pegawai()
    {
        return $this->morphMany('App\Pegawai', 'pegawaiable');
    }
}
