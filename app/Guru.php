<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $fillable = [
        'kelas_perwalian'
    ];

    public function kbm()
    {
        return $this->hasMany('App\KBM', 'guru_pengajar');
    }

    public function kelasPerwalian()
    {
        return $this->belongsTo('App\Kelas', 'kelas_perwalian');
    }

    public function pegawai()
    {
        return $this->morphOne('App\Pegawai', 'pegawaiable');
    }

    public function messages()
    {
        return $this->hasMany('App\Pesan', 'penerima');
    }
}
