<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerId extends Controller
{
    public function index(string $id)
    {
        //dd($id);
        //$callDetails = DB::table('callDetails') -> paginate(2);
        //$callDetails = DB::select("SELECT * FROM calldetails  JOIN customer ON callDetails.custId = customer.id WHERE customer.id = $id");
        $callDetails = DB::table('callDetails')
            -> join('customer', 'callDetails.custId', '=' , 'customer.id')
            -> paginate(2);
        return view('callDetails', compact('callDetails', 'id'));
    }

    public function show()
    {
        $allCall = DB::table('callDetails') 
        -> join('customer', 'calldetails.custId' , '=' , 'customer.id')
        -> paginate(2);
        return view('allCall', compact('allCall'));

        //dd($allCall);
    }
}
