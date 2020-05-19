<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Siswa extends Model
{
    protected $fillable = [
        'nisn',
        'wilayah_id',
        'id_kelas_1',
        'id_kelas_2',
        'id_kelas_3',
        'status_keaktifan'
    ];

    public function wilayah()
    {
        return $this->belongsTo('App\Wilayah');
    }

    public function nilaiUTS()
    {
        return $this->belongsTo('App\NilaiUTS');
    }

    public function nilaiUAS()
    {
        return $this->belongsTo('App\NilaiUAS');
    }

    public function kelas1()
    {
        return $this->belongsTo('App\Kelas', 'id_kelas_1');
    }

    public function kelas2()
    {
        return $this->belongsTo('App\Kelas', 'id_kelas_2');
    }

    public function kelas3()
    {
        return $this->belongsTo('App\Kelas', 'id_kelas_3');
    }

    public function civitas()
    {
        return $this->morphOne('App\Civitas', 'civitasable');
    }
}
