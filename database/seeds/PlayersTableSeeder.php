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

        $playerArnoldP = Player::create(array(
            'full_name' => 'Arnold Palmer',
            'handicap' => 3
        ));

        $playerFredC = Player::create(array(
            'full_name' => 'Fred Couples',
            'handicap' => 4
        ));

        $playerTigerW = Player::create(array(
            'full_name' => 'Tiger Woods',
            'handicap' => 2
        ));

        $playerJohnD = Player::create(array(
            'full_name' => 'John Daly',
            'handicap' => 5
        ));
    }
}
