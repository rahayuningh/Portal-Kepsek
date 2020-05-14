<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    public function kbm()
    {
        return $this->hasOne('App\KBM');
    }

}
