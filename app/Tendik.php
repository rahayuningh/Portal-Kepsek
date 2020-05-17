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
        'sso_user_id',
        'level_akses',
        'jabatan',
        'bagian_pekerjaan'
    ];

    public function pegawai()
    {
        return $this->morphOne('App\Pegawai', 'pegawaiable');
    }
}
