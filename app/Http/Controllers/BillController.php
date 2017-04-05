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

     /**
 	* GET
     * /bill}
 	*/
    public function bill(Request $request){

        $this->validate($request, [
            'split' => 'required|numeric',
            'price' => 'required|numeric',
        ]);

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

            if (!$split)
            {
                $total=null;
                $results=null;
                $rounded=null;
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
