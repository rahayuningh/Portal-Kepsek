<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Siswa extends Model
{
    protected $fillable = [
        'nisn',
        'asal_wilayah',
        'id_kelas_1',
        'id_kelas_2',
        'id_kelas_3',
        'status_keaktifan'
    ];

    public function nilaiUTS()
    {
        return $this->belongsTo('App\NilaiUTS');
    }

    public function nilaiUAS()
    {
        return $this->belongsTo('App\NilaiUAS');
    }

    public function kelas()
    {
        return $this->hasMany('App\Kelas');
    }

    public function civitas()
    {
        return $this->morphMany('App\Civitas', 'civitasable');
    }
}
