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
        $billSplit = $request->input('billSplit', null);

        if ($billSplit)
            {
                $split = $_POST['split'];
                $price = $_POST['price'];
                $total = $price / $split; // # Divide total price
                $rounded = round($total); // # Round total price
                if ($billSplit)
                    {
                    $results = "Each person owes $" . $rounded;
                    }
                  else
                    {
                    $results = "Each person owes $" . $total;
                    }
            }

            return view('bill.bill')->with([
              'billSplit' => $billSplit
            ]);
    }
}
