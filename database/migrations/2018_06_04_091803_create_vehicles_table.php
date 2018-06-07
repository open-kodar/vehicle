<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->integer('engine_cc');
            $table->string('color');
            $table->string('model');
            $table->string('transmission');
            $table->boolean('condition');
            $table->integer('running')->default(0);
            $table->string('location');
            $table->integer('price')->default(0);
            $table->text('description');
            $table->string('contact');
            $table->boolean('sale_status')->default(0);
            
            $table->integer('user_id')->unsigned();
            $table->integer('car_type')->unsigned();

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
