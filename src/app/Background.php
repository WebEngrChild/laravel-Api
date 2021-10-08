<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Background extends Model
{
    //一対多（メインスキル）OK！！
    public function careers()
    {
        return $this->hasMany(Career::class, 'background_id');
    }
}
