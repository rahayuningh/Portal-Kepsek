<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiUAS extends Model
{
    public function kbm()
    {
        return $this->belongsTo('App\KBM');
    }
}
