<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kbm extends Model
{
    public function kelas(){
        return $this->hasOne('App\Kelas');
    }
    public function mataPelajaran(){
        return $this->hasOne('App\MataPelajaran');
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
        return $this->hasOne('App\Guru');
    }
    public function statuses()
    {
        return $this->hasOne('App\Status');
    }
}
