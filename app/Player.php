<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = array('full_name', 'handicap');

    //each player belongs to many courses
    public function courseList(){
        return $this->belongsToMany('App\Course')->withTimestamps();
    }

}
