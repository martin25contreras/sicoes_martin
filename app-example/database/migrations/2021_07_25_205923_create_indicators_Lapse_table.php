<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndicatorsLapseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicadores_lapso', function (Blueprint $table) {
            $table->id();
            $table->enum('lapso_escolar', ['I', 'II', 'III']);

            $table->unsignedBigInteger('competencia_id');
            $table->unsignedBigInteger('indicador_id');           

            $table->foreign('competencia_id')->references('id')->on('competencias');
            $table->foreign('indicador_id')->references('id')->on('indicadores');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('indicadores_lapso');
    }
}
