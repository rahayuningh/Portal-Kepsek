<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    protected $table = 'inventariss';
    protected $fillable = [
        'ruangan_pemilik_id',
        'kode_inventaris',
        'jenis_inventaris_id',
        'no_seri',
        'tgl_terima',
        'status_kelayakan',
        'keterangan',
        'anggaran'
    ];

    public function jenis_inventaris()
    {
        return $this->belongsTo('App\JenisInventaris', 'jenis_inventaris_id');
    }

    public function ruangan()
    {
        return $this->belongsTo('App\Ruangan', 'ruangan_pemilik_id');
    }
}
