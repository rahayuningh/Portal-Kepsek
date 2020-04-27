<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Siswa extends Model
{
    public function civitas()
    {
        return $this->morphMany('App\Civitas', 'civitasable');
    }
}
