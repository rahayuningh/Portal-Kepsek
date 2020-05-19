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
        'agama_id',
        // 'civitasable_id',
        // 'civitasable_type'
    ];

    public function civitasable()
    {
        return $this->morphTo();
    }

    public function agama()
    {
        return $this->belongsTo('App\Agama');
    }
}
