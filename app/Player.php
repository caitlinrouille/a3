<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    //each player belongs to many courses
    public function courses(){
        return $this->belongsToMany('course_id')->withTimestamps();
    }

}
