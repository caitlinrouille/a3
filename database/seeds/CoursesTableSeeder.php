<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
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


        $courseSassamon = Course::create(array(
            'course_name' => 'Sassamon Trace'
        ));

        $courseBrockton = Course::create(array(
            'course_name' => 'Brockton Country Club'
        ));

        $courseSandy = Course::create(array(
            'course_name' => 'Sandy Burr Country Club'
        ));

        $courseBlue = Course::create(array(
            'course_name' => 'Blue Hills Country Club'
        ));
    }
}
