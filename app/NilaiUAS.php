<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiUAS extends Model
{
    public function kbm(Type $var = null)
    {
        return $this->belongsTo('App\kbm');
    }
}
