<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcion', function (Blueprint $table) {
            $table->id();

            $table->timestamp('fecha');
            $table->integer('ano_cursar');
            $table->string('seccion',3);
            $table->enum('estatus_pago', ["Sin Pagar", "Pagado"]);

            $table->unsignedBigInteger('representante_id');
            $table->unsignedBigInteger('estudiante_id');
            $table->unsignedBigInteger('preincripcion_id');

            $table->foreign('representante_id')->references('id')->on('representante');
            $table->foreign('estudiante_id')->references('id')->on('estudiante');
            $table->foreign('preincripcion_id')->references('id')->on('pre_inscripcion');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscripcion');
    }
}
