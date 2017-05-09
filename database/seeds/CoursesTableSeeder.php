<?php

use Illuminate\Database\Seeder;
use App\Course;

class CoursesTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $courseSassamon = Player::where('course_name','=','Sassamon Trace')->first();
        $courseBrockton = Player::where('course_name','=','Brockton Country Club')->first();
        $courseBlueHills = Player::where('course_name','=','Blue Hills Country Club')->first();
        $courseSandyBurr = Player::where('course_name','=','Sandy Burr')->first();
        
        $courseSassamon = Course::create(array(
            'course_name' => 'Sassamon Trace'
        ));

        $courseBrockton = Course::create(array(
            'course_name' => 'Brockton Country Club'
        ));

        $courseSandyBurr = Course::create(array(
            'course_name' => 'Sandy Burr Country Club'
        ));

        $courseBlueHills = Course::create(array(
            'course_name' => 'Blue Hills Country Club'
        ));
    }
}
