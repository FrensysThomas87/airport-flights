<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FlightController extends Controller
{


    public function filterFlights(Request $request){

        $data = $request->all();



            if($data['code'] !== null && $data['code_2'] !== null ){
                $cheaperFlight = DB::table('airports')
                ->Join('flights','flights.airport_id','=','airports.id')
                ->where('airports.code',$data['code'])
                ->orWhere('airports.code',$data['code_2'])
                ->select('code','stopover','flights.price', 'flights.code_departure', 'flights.code_arrival')
                ->orderBy('price','ASC')
                ->get();

                if(count($cheaperFlight) <= 0){
                    return  "Dati errati";

                }elseif(count($cheaperFlight) <= 1){
                    return "Entrambi i dati devono essere corretti";

                }else{
                    return view('result', compact('cheaperFlight'));
                }

                }else{
                echo "I dati non possono essere vuoti";
            }
        }
    }

