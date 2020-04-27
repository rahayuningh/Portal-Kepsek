<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Civitas extends Model
{
    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'agama'
    ];

    public function civitasable()
    {
        return $this->morphTo();
    }
}
