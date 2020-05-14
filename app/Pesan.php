<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    protected $fillable = ['subject', 'konten'];
    public function guru()
    {
        return $this->belongsTo('App\Guru', 'penerima');
    }
}
