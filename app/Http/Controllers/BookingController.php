<?php

namespace App\Http\Controllers;

use App\Models\Booking_table;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    function BookingIndex(){
        return view('index');
    }
    function DataInsert(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $ambassador	 = $request->input('ambassador');
        

        $isInsertSuccress = Booking_table::insert(['name'=>$name,
        'email'=>$email,'ambassador'=>$ambassador]);
        if($isInsertSuccress)
            echo '<h1>Insert Success</h1>';
            else echo'<h1>Insert Failed</>';

    }
}
