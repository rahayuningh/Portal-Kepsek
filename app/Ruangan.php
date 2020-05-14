<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    protected $fillable=[
        'nama_ruangan',
        'jenis_ruangan_id',
        'kode_ruangan',
        'penanggung_jawab_id',
        'gedung_id',
        'kapasitas_orang'
    ];
    public function kebutuhan_barang(){
        return $this->hasMany('App\KebutuhanBarang');
    }
    public function gedung(){
        return $this->belongTo('App\Gedung');
    }
    public function inventaris(){
        return $this->hasMany('App\Inventaris');
    }
    public function pegawai(){
        return $this->hasMany('App\Pegawai');
    }
    
}
