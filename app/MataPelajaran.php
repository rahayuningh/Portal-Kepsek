<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    protected $table = 'mata_pelajarans';
    protected $fillable = ['kode_mapel', 'nama_mapel'];
    public function kbm()
    {
        return $this->hasOne('App\KBM');
    }

}
