<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //each course has been played by many players
    protected $table = 'courses';

    public function players(){
        return $this->belongsToMany('App\Player')->withTimestamps();
    }

}
