<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agama extends Model
{
    protected $fillable = ['id', 'nama_agama'];

    public function civitas()
    {
        $this->hasMany('App\Civitas');
    }
}
