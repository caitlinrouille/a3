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

        $players = [
            'Arnold Palmer'=>['Brockton Country Club', 'Blue Hills Country Club'],
            'Tiger Woods'=>['Sassamon Trace Country Club, Brockton Country Club'],
            'Fred Couples'=>['Blue Hills Country Club, Sassamon Trace Country Club']
        ];

        foreach ($players as $full_name => $courses) {
            $player = Player::where('full_name', 'like', $full_name)->first();

            foreach($courses as $courseName) {
                $course = Course::where('course_name', 'LIKE', $courseName)->first();
            }
        }
    }
}
