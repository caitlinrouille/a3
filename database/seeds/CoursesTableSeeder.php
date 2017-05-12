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

        # Array of players
        $courses = [
            ['Sassamon Trace Country Club'],
            ['Blue Hills Country Club'],
            ['Brockton Country Club'],
            ['Pine Hills Country Club']
        ];

        foreach($courses as $course) {

            Course::insert([
                'course_name' =>  $course[0],
            ]);
        }
    }
}
