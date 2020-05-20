<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    protected $table = 'inventariss';
    protected $fillable = [
        'kebutuhan_id',
        'kode_inventaris',
        'no_seri',
        'tgl_terima',
        'anggaran',
        'status_kelayakan',
        'keterangan'
    ];

    public function kebutuhanBarang()
    {
        return $this->belongsTo('App\KebutuhanBarang', 'kebutuhan_id');
    }
}
