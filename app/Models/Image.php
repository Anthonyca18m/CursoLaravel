<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    public function imageable()
    {
        // transformar a
        return $this->morphTo();
    }
}
