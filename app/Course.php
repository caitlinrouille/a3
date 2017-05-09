<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //each course has been played by many players
    public function players(){
        return $this->belongsToMany('player_id')->withTimestamps();
    }

}
