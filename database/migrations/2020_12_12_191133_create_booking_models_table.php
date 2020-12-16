<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_models', function (Blueprint $table) {
            $table->id();
            $table->string('custPickUpLoc');
            $table->string('custDropLoc');
            $table->string('bookStatus');
            // $table->foreign('id')->references('custID')->on('customer_models');
            // $table->foreignId('custID')->constrained();
            // $table->foreignId('driverID')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_models');
    }
}
