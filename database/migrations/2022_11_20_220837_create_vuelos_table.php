<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vuelos', function (Blueprint $table) {
            $table->id();
            $table->integer('numero_vuelo');
            $table->foreignId('idAeropuertoSalida')->constrained('aeropuertos');
            $table->foreignId('idAeropuertoLlegada')->constrained('aeropuertos');
            $table->foreignId('idAvion')->constrained('aviones');
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
        Schema::dropIfExists('vuelos');
    }
};
