<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $fillable = [
        'nik',
        'email',
        'status_pegawai',
        'pegawaiable_id',
        'pegawaiable_type'
    ];

    public function civitas()
    {
        return $this->morphOne('App\Civitas', 'civitasable');
    }

    public function pegawaiable()
    {
        return $this->morphTo();
    }
}
