<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestamopeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamopeliculas', function (Blueprint $table) {
            $table->bigIncrements('id_peliprest');
            $table->unsignedBigInteger('id_cliente');
            $table->unsignedBigInteger('id_pelicula');
            $table->string('fecha_prestada',45);
            
            $table->foreign('id_cliente')->references('id_cliente')->on('clientes');
            $table->foreign('id_pelicula')->references('id_pelicula')->on('peliculas');
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
        Schema::dropIfExists('prestamopeliculas');
    }
}
