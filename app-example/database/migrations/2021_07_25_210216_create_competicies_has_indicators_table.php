<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompeticiesHasIndicatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicators_lapse', function (Blueprint $table) {
            $table->id();
            $table->integer('id_competencia');
            $table->integer('id_indicador');           
            $table->enum('lapso_escolar', ['I', 'II', 'III']);
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
        Schema::dropIfExists('indicators_lapse');
    }
}
