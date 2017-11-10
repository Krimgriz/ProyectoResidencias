<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatTipoVehiculoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_tipo_vehiculo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 50);
            $table->integer('idClaseVehiculo')->unsigned()->index()->nullable();
            $table->foreign('idClaseVehiculo')->references('id')->on('cat_clase_vehiculo')->onDelete('cascade');
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
        Schema::dropIfExists('cat_tipo_vehiculo');
    }
}
