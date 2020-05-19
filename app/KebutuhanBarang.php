<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KebutuhanBarang extends Model
{
    protected $fillable = [
        'jenis_inventaris_id',
        'ruangan_id',
        'jumlah',
        'jml_barang_baik',
        'jml_barang_krg_baik',
        'jml_barang_rsk',
        'jml_barang_dibutuhkan'
    ];

    public function ruangan()
    {
        return $this->belongsTo('App\Ruangan','ruangan_id');
    }

    public function jenis_inventaris()
    {
        return $this->belongsTo('App\JenisInventaris','jenis_inventaris_id');
    }
}
