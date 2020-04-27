<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $fillable = [
        'nik',
        'status_pegawai',
        'pegawaiable_id',
        'pegawaiable_type'
    ];

    public function civitas()
    {
        return $this->morphMany('App\Civitas', 'civitasable');
    }

    public function pegawaiable()
    {
        return $this->morphTo();
    }
}
