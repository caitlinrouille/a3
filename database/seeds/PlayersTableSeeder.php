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
        $players = ['Arnold Palmer', 'Tiger Woods', 'Fred Couples'];

        foreach($players as $playerName) {
            $player = new Player();
            $player->full_name = $playerName;
            $player->save();
        }
    }
}
