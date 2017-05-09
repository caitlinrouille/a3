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
     foreach($players as $courses) {
         $player = Player::where('full_name','like',$players)->first();

         foreach($courses as $course_name) {
             $course = Course::where('course_name','LIKE',$course_name)->first();
             $player->courses()->save($player);
         }
     }
    }
}
