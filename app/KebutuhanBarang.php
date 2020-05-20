<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KebutuhanBarang extends Model
{
    protected $fillable = [
        'jenis_inventaris_id',
        'ruangan_id',
        'jumlah',
        'baik',
        'kurang_baik',
        'rusak',
        'butuh'
    ];

    public function ruangan()
    {
        return $this->belongsTo('App\Ruangan', 'ruangan_id');
    }

    public function jenisInventaris()
    {
        return $this->belongsTo('App\JenisInventaris', 'jenis_inventaris_id');
    }

    public function inventaris()
    {
        return $this->hasMany('App\Inventaris', 'kebutuhan_id');
    }
}
