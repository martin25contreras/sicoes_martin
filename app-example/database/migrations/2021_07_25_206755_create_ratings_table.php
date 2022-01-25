<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificaciones', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('indicador_lapso_id');
            $table->unsignedBigInteger('estudiante_id');
            $table->string('literal',50);

            $table->foreign('estudiante_id')->references('id')->on('estudiante');
            $table->foreign('indicador_lapso_id')->references('id')->on('indicadores_lapso');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calificaciones');
        
    }
}
