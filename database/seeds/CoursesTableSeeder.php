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
        $full_name = 'full_name';
        $course_name = 'course_name';
        $courses = ['Sassamon Trace Country Club', 'Brockton Country Club', 'Blue Hills Country Club', 'Sandy Burr Country Club'];

        foreach($courses as $courseName) {
            $course = new Course();
            $course -> course_name = $course_name;
            $course -> save();
        }
    }
}
