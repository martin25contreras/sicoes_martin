<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuditTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audit', function (Blueprint $table) {
            $table->id();
            $table->timestamp('fecha_acceso')->nullable();
            $table->text('data_procesada');

            $table->unsignedBigInteger('historial_accseso_id');            
            $table->unsignedBigInteger('process_id');

            $table->foreign('historial_accseso_id')->references('id')->on('historial_acceso');
            $table->foreign('process_id')->references('id')->on('procesos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('configuracion_importante');
    }
}
