<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisInventaris extends Model
{
    protected $table = ['jenis_inventariss'];
    protected $fillable = [
    'nama_jenis_inventaris',
    'kategori',
    'merek',
    'harga_satuan',
    'ukuran',
    'bahan'
];

    public function kebutuhan_barang()
    {
        return $this->hasMany('App\KebutuhanBarang','jenis_inventaris_id');
    }

    public function inventaris()
    {
        return $this->hasMany('App\Inventaris');
    }
}
