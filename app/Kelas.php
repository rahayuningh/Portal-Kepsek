<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    public function kbm()
    {
        return $this->hasOne('App\KBM');
    }

    public function siswa1()
    {
        return $this->hasMany('App\Siswa', 'id_kelas_1');
    }

    public function siswa2()
    {
        return $this->hasMany('App\Siswa', 'id_kelas_2');
    }

    public function siswa3()
    {
        return $this->hasMany('App\Siswa', 'id_kelas_3');
    }

    public function guru()
    {
        return $this->hasOne('App\Guru', 'kelas_perwalian');
    }

    public function tahun()
    {
        return $this->belongsTo('App\TahunAjaran', 'tahun_ajaran_id');
    }
}
