<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtraAbogadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extra_abogado', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idVatiablesPersona')->unsigned();
            $table->string('cedulaProf',50);
            $table->string('sector',50);
            $table->string('correo',50);
            $table->timestamps();
            
            $table->foreign('idVatiablesPersona')->references('id')->on('variables_persona')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('extra_abogado');
    }
}