<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bill(Request $request){
        $split = $request->input('split', null);
        $price = $request->input('price', null);


        if ($split)
            {
                $total = $price / $split; // # Divide total price
                $rounded = round($total); // # Round total price

                if ($request->has('roundBill'))
                    {
                    $results = "Each person owes $" . $rounded;
                    }
                  else
                    {
                    $results = "Each person owes $" . $total;
                    }
            }

            return view('bill.bill')->with([
              'split' => $split,
              'total' => $total,
              'rounded' => $rounded,
              'roundBill' => $request->has('roundBill'),
              'results' => $results
            ]);
    }
}
