<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function kbm()
    {
        return $this->hasMany('App\KBM');
    }
}
