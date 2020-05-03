<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function kbm(Type $var = null)
    {
        return $this->hasMany('App\kbm');
    }
}
