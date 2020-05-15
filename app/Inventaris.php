<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    protected $table = 'inventariss';
    protected $fillable =[
    'jenis_inventaris_id',
    'kode_inventaris',
    'tgl_mulai_pakai',
    'status_kelayakan',
    'ruangan_pemilik_id'
    ];
    public function jenis_inventaris(){
        return $this->belongsTo('App\JenisInventaris');
    }
    public function ruangan(){
        return $this->belongsTo('App\Ruangan');
    }
}
