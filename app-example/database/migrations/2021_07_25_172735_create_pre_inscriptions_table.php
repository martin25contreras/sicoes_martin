<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreInscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pre_inscripcion', function (Blueprint $table) {
            $table->id();
            $table->integer('ano_preinscripcion');
            $table->enum("estatus", ["En Proceso", "Terminada"]);

            $table->unsignedBigInteger('documento_id');
            $table->unsignedBigInteger('postulante_id');

            $table->foreign('documento_id')->references('id')->on('documento');
            $table->foreign('postulante_id')->references('id')->on('postulante');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pre_inscripcion');
    }
}
