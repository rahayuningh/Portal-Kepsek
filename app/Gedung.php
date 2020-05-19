<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gedung extends Model
{
    protected $fillable = [
        'nama_gedung',
        'kode_gedung'
    ];

    public function ruangan()
    {
        return $this->hasMany('App\Ruangan','gedung_id');
    }
}
