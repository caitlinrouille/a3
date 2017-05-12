<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
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
        {
            # Array of players
            $players = [
                ['Arnold Palmer'],
                ['Tiger Woods'],
                ['Fred Couples'],
                ['Jason Day']
            ];

            foreach($players as $player) {
                Player::insert([
                    'full_name' =>  $player[0],
                ]);
            }
        }
    }
}
