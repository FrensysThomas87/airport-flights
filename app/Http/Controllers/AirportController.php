<?php

namespace App\Http\Controllers;




class AirportController extends Controller
{
    public function index(){
        return view('compare-flights');
    }

}
