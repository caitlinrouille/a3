<?php

use Illuminate\Database\Seeder;
use App\Player;

class PlayersTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        # Array of author data to add
        $players = [
            ['Arnold Palmer'],
            ['Fred Couples'],
            ['John Daly'],
            ['Phil Mickelson'],
        ];

        $timestamp = Carbon\Carbon::now()->subDays(count($players));

        foreach($player as $player) {
            $timestampForThisPlayer = $timestamp->addDay()->toDateTimeString();
            Author::insert([
                'created_at' => $timestampForThisPlayer,
                'updated_at' => $timestampForThisPlayer,
                'full_name' => $player[0],
            ]);
        }
    }
}
