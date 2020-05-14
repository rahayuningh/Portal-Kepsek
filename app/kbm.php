<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KBM extends Model
{
    protected $table = 'kbms';
    protected $fillable = ['mata_pelajaran_id', 'kelas_id', 'guru_pengajar', 'semester'];

    public function kelas()
    {
        return $this->belongsTo('App\Kelas');
    }

    public function mataPelajaran()
    {
        return $this->belongsTo('App\MataPelajaran');
    }

    public function nilaiUTS()
    {
        return $this->hasMany('App\NilaiUTS');
    }

    public function nilaiUAS()
    {
        return $this->hasMany('App\NilaiUAS');
    }

    public function guru()
    {
        return $this->belongsTo('App\Guru','guru_pengajar');
    }

    public function statuses()
    {
        return $this->hasOne('App\Status');
    }
}
