<?php

namespace App\Http\Controllers;


use App\Airport;

class AirportController extends Controller
{
    public function index(Airport $cheaperFlight){
        return view('compare-flights', compact('cheaperFlight'));
    }

}
