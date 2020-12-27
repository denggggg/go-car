<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('vehicleID');
            $table->integer('driverID');
            $table->string('vehicleModel');
            $table->string('vehicleRegNo');
            $table->double('vehicleEngCC');
            $table->integer('vehicleManYear');
            $table->string('vehicleColour');
            $table->date('vehicleRoadTax');
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
        Schema::dropIfExists('vehicles');
    }
}
