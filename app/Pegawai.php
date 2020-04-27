<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    public function civitas()
    {
        return $this->morphMany('App\Civitas', 'civitasable');
    }

    public function pegawaiable()
    {
        return $this->morphTo();
    }
}
