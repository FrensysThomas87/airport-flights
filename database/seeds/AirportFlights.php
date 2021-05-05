<?php

use Illuminate\Database\Seeder;
use App\Airport;
use App\Flight;

class AirportFlights extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $airport = new Airport();
        $airport->name = "Rome Fiumicino Leonardo da Vinci Airport";
        $airport->code = "LIRF";
        $airport->lat = "16,110000";
        $airport->long = "2,869200";
        $airport->save();

        $flight = new Flight();
        $flight->code_departure = "AA198";
        $flight->code_arrival = "CC345";
        $flight->stopover = "true";
        $flight->price = 100.24;
        $airport->flights()->save($flight);

        $airport = new Airport();
        $airport->name = "Aeroporto della Malpensa";
        $airport->code = "LIMB";
        $airport->lat = "45,633333";
        $airport->long = "8,733333";
        $airport->save();

        $flight = new Flight();
        $flight->code_departure = "BB498";
        $flight->code_arrival = "DD545";
        $flight->stopover = "false";
        $flight->price = 200.50;
        $airport->flights()->save($flight);




    }
}
