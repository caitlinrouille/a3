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
        $playerArnoldP->courses()->attach($courseSassamon->id);
        $playerArnoldP->courses()->attach($courseBrockton->id);

        $playerFredC->courses()->attach($courseBrockton->id);
        $playerFredC->courses()->attach($courseSandyBurr->id);

        $playerJohnD->courses()->attach($courseBlueHills->id);
        $playerJohnD->courses()->attach($courseBrockton->id);
        $playerJohnD->courses()->attach($courseSassamon->id);


        $playerTigerW->courses()->attach($courseSassamon->id);
        $playerTigerW->courses()->attach($courseBrockton->id);
        $playerTigerW->courses()->attach($courseBlueHills->id);
        $playerTigerW->courses()->attach($courseSandyBurr->id);


    }
}
