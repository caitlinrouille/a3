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
     	$this->call(PlayersTableSeeder::class);
     	$this->call(TotalsTableSeeder::class);
        $this->call(CoursesTableSeeder::class);

     }
}
