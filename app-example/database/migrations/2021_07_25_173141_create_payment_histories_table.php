<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial_pagos', function (Blueprint $table) {
            $table->id();
            $table->integer('mes_pago');
            $table->enum("tipo_pago", ["MEN", "ACA"]);
            $table->timestamp('fecha_pago');

            $table->enum("estatus_pago", ["PROC", "VALI", "NO_VALI"]);
            $table->enum("envio_pago", ["FORMAL", "PRESENCIAL"]);

            $table->unsignedBigInteger('pago_id');
            $table->foreign('pago_id')->references('id')->on('pagos');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historial_pagos');
    }
}
