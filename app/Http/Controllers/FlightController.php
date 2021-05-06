<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FlightController extends Controller
{


    public function filterFlights(Request $request){

        // Recupero tutti i dati
        $data = $request->all();

            // Eseguo la query che mi recupera i voli associati all'aereoporto, e pone in cima il volo più economico,
            // poi passo i dati alla view dei risultati e gli passo la variabile che contiene la query
            if($data['code'] !== null && $data['code_2'] !== null ){
                $cheaperFlight = DB::table('airports')
                ->Join('flights','flights.airport_id','=','airports.id')
                ->where('airports.code',$data['code'])
                ->orWhere('airports.code',$data['code_2'])
                ->select('name','code','stopover','flights.price', 'flights.code_departure', 'flights.code_arrival')
                ->orderBy('price','ASC')
                ->get();

                //Se entrmabi i dati sono sbagliati
                if(count($cheaperFlight) <= 0){
                    return "Dati non presenti";

                //Se uno dei due dati è sbagliato
                }elseif(count($cheaperFlight) <= 1){
                    return "Entrambi i dati devono essere corretti";

                }else{
                    return view('result', compact('cheaperFlight'));
                }

                //Se la form è stata inviata vuota
                }else{
                echo "I dati non possono essere vuoti";
            }
        }
    }

