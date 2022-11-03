<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

/*
Azienda - Agency
Stazione di partenza - Departure station
Stazione di arrivo - Arrival station
Orario di partenza - Departure time
Orario di arrivo - Arrival time
Codice Treno - Train Code
Numero Carrozze - Number of carriages
In orario - In time
Cancellato - Deleted
*/

        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency', 30)->nullable(true);
            $table->string('departureStation', 40)->nullable(false);
            $table->string('arrivalStation', 40)->nullable(false);
            $table->time('departureTime')->nullable(false);
            $table->time('arrivalTime')->nullable(false);
            $table->tinyInteger('trainCode')->nullable(true)->unsigned();
            $table->tinyInteger('numberOfCarriages')->nullable(true)->unsigned();
            $table->tinyInteger('inTime')->nullable(true);
            $table->tinyInteger('deleted')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
