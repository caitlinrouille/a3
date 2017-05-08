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
            ['Arnold Palmer', 66],
            ['Fred Couples', 70],
            ['John Daly', 74],
            ['Phil Mickelson', 80],
        ];

        $timestamp = Carbon\Carbon::now()->subDays(count($players));

        foreach($player as $player) {
            $timestampForThisPlayer = $timestamp->addDay()->toDateTimeString();
            Author::insert([
                'created_at' => $timestampForThisPlayer,
                'updated_at' => $timestampForThisPlayer,
                'full_name' => $player[0],
                'player_score' => $player[1],
            ]);
        }
    }
}
