<?php

namespace App\Http\Controllers;

use App\Score;
use Illuminate\Http\Request;
use App\Player;
use App\Course;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function index()
    {

        $score=null;

        return view('score.score')->with([
          'score' => $score,
        ]);

    }

    /**
   * GET
    * /}
   */
   public function score(Request $request){
       $this->validate($request, [
           'holeOne' => 'required|numeric',
           'holeTwo' => 'required|numeric',
           'holeThree'=> 'required|numeric',
           'holeFour' => 'required|numeric',
           'holeFive' => 'required|numeric',
           'holeSix' => 'required|numeric',
           'holeSeven'=> 'required|numeric',
           'holeEight' => 'required|numeric',
           'holeNine' => 'required|numeric',
           'playerName' => 'required|alpha',
       ]);
           $playerName = $request->input('playerName', null);
           $holeOne = $request->input('holeOne', null);
           $holeTwo = $request->input('holeTwo', null);
           $holeThree = $request->input('holeThree', null);
           $holeFour = $request->input('holeFour', null);
           $holeFive = $request->input('holeFive', null);
           $holeSix = $request->input('holeSix', null);
           $holeSeven = $request->input('holeSeven', null);
           $holeEight = $request->input('holeEight', null);
           $holeNine = $request->input('holeNine', null);

           $total = $holeOne * $holeTwo + $holeThree + $holeFour + $holeFive + $holeSix + $holeSeven + $holeEight + $holeNine;
           $score = $playerName . " scored a " . $total;


       //If there is no input in the score fields, don't display the following data. This prevents errors onload.
       if (!$score)
           {
               $playerName = null;
               $holeOne = null;
               $holeTwo = null;
               $holeThree = null;
               $holeFour = null;
               $holeFive = null;
               $holeSix = null;
               $holeSeven = null;
               $holeEight = null;
               $holeNine = null;
           }

           //Call the variables into the views
           return view('score.score')->with([
               'playerName' => $playerName,
               'holeOne' => $holeOne,
               'holeTwo' => $holeTwo,
               'holeThree' => $holeThree,
               'holeFour' => $holeFour,
               'holeFive' => $holeFive,
               'holeSix' => $holeSix,
               'holeSeven' => $holeSeven,
               'holeEight' => $holeEight,
               'holeNine' => $holeNine,
               'score' => $score,
               'total' => $total,
           ]);
   }

   public function leaderboard()
   {
       $results = Player::where('full_name', '=', 'Arnold Palmer')->first();
       $arnold=$results->full_name;

       return view('score.leaders')->with([
         'arnold' => $arnold,
         'results' => $results,
       ]);
  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    //

   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function show(Score $score)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function edit(Score $score)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Score $score)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function destroy(Score $score)
    {
        //
    }
}
