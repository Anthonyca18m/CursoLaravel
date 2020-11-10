<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    public function commentable()
    {
        // transformar a
        return $this->morphTo();
    }

    public function user()
    {
        // transformar a
        return $this->belongsTo(User::class);
    }
}
