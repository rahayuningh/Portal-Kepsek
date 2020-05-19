<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    protected $fillable = [
        'nama_ruangan',
        'jenis_ruangan_id',
        'kode_ruangan',
        'penanggung_jawab_id',
        'gedung_id',
        'kapasitas_orang'
    ];

    public function kebutuhanBarang()
    {
        return $this->hasMany('App\KebutuhanBarang','ruangan_id');
    }
    public function jenisRuangan(){
        return $this->belongsTo('App\jenisRuangan','jenis_ruangan_id');
    }
    public function gedung()
    {
        return $this->belongsTo('App\Gedung','gedung_id');
    }

    public function inventaris()
    {
        return $this->hasMany('App\Inventaris', 'ruangan_pemilik_id');
    }

    public function pegawai()
    {
        return $this->belongsTo('App\Pegawai', 'penanggung_jawab_id');
    }
}
