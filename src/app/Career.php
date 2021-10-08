<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    //多対一
    public function background()
    {
        return $this->belongsTo(Background::class);
    }
}
