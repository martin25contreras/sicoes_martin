<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControlRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('control_calificaciones', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('estudiante_id');
            $table->unsignedBigInteger('indicadores_lapso_id');

            $table->foreign('estudiante_id')->references('id')->on('estudiante');
            $table->foreign('indicadores_lapso_id')->references('id')->on('indicadores_lapso');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('control_calificaciones');
    }
}
