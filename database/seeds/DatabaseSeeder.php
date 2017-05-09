<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
        $this->call(CoursesTableSeeder::class);
        $this->call(PlayerCourseTableSeeder::class);
        $this->call(PlayersTableSeeder::class);
     }
}
