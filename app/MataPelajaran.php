<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    public function kbm()
    {
        return $this->belongsTo('App\kbm');
    }

}
