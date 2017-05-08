<?php

use Illuminate\Database\Seeder;
use App\Player;
use App\Course;

class PlayerCourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
 {

     $players =[
         'Arnold Palmer' => ['Sandy Burr','Brockton Country Club','Sassamon Trace'],
         'Fred Couples' => ['Sandy Burr','Brockton Country Club','Sassamon Trace'],
         'John Daly' => ['Sandy Burr','Brockton Country Club','Sassamon Trace'],
         'Phil Mickelson' => ['Sandy Burr','Brockton Country Club','Sassamon Trace'],
     ];
     foreach($players => $courses) {
         $player = Player::where('player','like',$player)->first();

         foreach($courses as $course) {
             $course = Course::where('name','LIKE',$course->first();
             $player->courses()->save($player);
         }
     }
 }
}
