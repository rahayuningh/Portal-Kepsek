<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Civitas extends Model
{
    public function civitasable()
    {
        return $this->morphTo();
    }
}
