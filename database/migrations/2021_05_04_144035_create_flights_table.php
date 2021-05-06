<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('airport_id');
            $table->char('code_departure', 100)->unique();
            $table->char('code_arrival', 100)->unique();
            $table->unsignedFloat('price', 8,2 );
            $table->char('stopover', 5);
            $table->timestamps();

            $table->foreign('airport_id')
                ->references('id')
                ->on('airports');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flights');
    }
}
