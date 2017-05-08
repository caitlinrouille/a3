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
        $courses = [
            ['Sandy Burr'],
            ['Brockton Country Club'],
            ['Sassamon Trace'],
        ];

        $timestamp = Carbon\Carbon::now()->subDays(count($courses));

        foreach($courses as $course) {
            $timestampForThisCourse = $timestamp->addDay()->toDateTimeString();
            Course::insert([
                'created_at' => $timestampForThisCourse,
                'updated_at' => $timestampForThisCourse,
                'course_name' => $course,
            ]);
        }
    }
}
