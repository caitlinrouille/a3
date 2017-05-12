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
        $timestamp = Carbon\Carbon::now()->subDays(count($courses));

        foreach($courses as $course) {

            Course::insert([
                'created_at' => $timestampForThisCourse,
                'updated_at' => $timestampForThisCourse,
                'course_name' =>  $course[0],
            ]);
        }
    }
}
