<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TahunAjaran extends Model
{
    public function classes()
    {
        return $this->hasMany('App\Kelas', 'tahun_ajaran_id');
    }
}
