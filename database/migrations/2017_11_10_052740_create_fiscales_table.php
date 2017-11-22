<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiscalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
    public function up()
    {
        Schema::create('fiscal', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUnidad')->unsigned();
            $table->string('nombres', 50);
            $table->string('primerAp', 50);
            $table->string('segundoAp', 50);
            $table->string('correo', 100)->unique();
            $table->string('password', 50);
            $table->integer('numFiscal');
            $table->enum('nivel', ['1', '2', '3', '4', '5'])->default('1');

            $table->foreign('idUnidad')->references('id')->on('unidad')->onDelete('cascade');

            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }
     */

    /**
     * Reverse the migrations.
     *
     * @return void
    public function down()
    {
        Schema::dropIfExists('fiscal');
    }
     */
}
