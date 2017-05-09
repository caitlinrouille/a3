<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //each course has been played by many players
    protected $fillable = [];
    protected $table = 'courses';

    public function playerList(){
        return $this->belongsToMany('App\Player')->withTimestamps();
    }

}
