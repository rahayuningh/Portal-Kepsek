<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    protected $table = 'inventariss';
    protected $fillable = [
        'kebutuhan_id',
        'kode_inventaris',
        'jenis_inventaris_id',
        'no_seri',
        'tgl_terima',
        'anggaran',
        'status_kelayakan',
        'keterangan'
    ];

    public function jenisInventaris()
    {
        return $this->belongsTo('App\JenisInventaris', 'jenis_inventaris_id');
    }

    public function kebutuhanBarang()
    {
        return $this->belongsTo('App\KebutuhanBarang', 'kebutuhan_id');
    }
}
