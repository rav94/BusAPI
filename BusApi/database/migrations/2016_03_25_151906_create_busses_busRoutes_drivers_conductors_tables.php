<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBussesBusRoutesDriversConductorsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Busses Table
        Schema::create('buses', function(Blueprint $table)
        {
            $table->increments('bus_id');
            $table->string('bus_name');
            $table->string('bus_reg_number');
            $table->string('bus_brand');
            $table->string('bus_seat_no');
            $table->string('bus_owner_name');
            $table->string('bus_contact_no');
            $table->timestamps();
        });
        
        //Bus Route Table
        Schema::create('bus_routes', function(Blueprint $table)
        {
            $table->increments('route_id');
            $table->integer('b_id')->unsigned()->default(0); //bus_id on buses table
            $table->foreign('b_id')->references('bus_id')->on('buses')->onDelete('cascade');
            $table->string('route_number');
            $table->string('route_name');
            $table->string('starting_location');
            $table->string('finishing_location');
            $table->string('estimated_time');
            $table->timestamps();
        });

        //Drivers Table
        Schema::create('drivers', function(Blueprint $table)
        {
            $table->increments('driver_id');
            $table->integer('b_id')->unsigned()->default(0); //bus_id on buses table
            $table->foreign('b_id')->references('bus_id')->on('buses')->onDelete('cascade');
            $table->string('driver_name');
            $table->string('contact_number');
            $table->string('nic_number');
            $table->string('driver_reg_number');
            $table->timestamps();
        });

        //Conductors Table
        Schema::create('conductors', function(Blueprint $table)
        {
            $table->increments('conductor_id');
            $table->integer('b_id')->unsigned()->default(0); //bus_id on buses table
            $table->foreign('b_id')->references('bus_id')->on('buses')->onDelete('cascade');
            $table->string('conductor_name');
            $table->string('contact_number');
            $table->string('nic_number');
            $table->string('conductor_reg_number');
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
        Schema::drop('bus_routes');
        Schema::drop('drivers');
        Schema::drop('conductors');
        Schema::drop('buses');
    }
}
