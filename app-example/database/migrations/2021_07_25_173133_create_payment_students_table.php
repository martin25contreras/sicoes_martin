<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
    + */
    public function up()
    {
        Schema::create('pagos_estudiante', function (Blueprint $table) {
            $table->id();
            $table->enum("tipo_pago", ["MEN", "ACA"]);
            $table->integer('monto_asignado');

            $table->unsignedBigInteger('estudiante_id');
            $table->unsignedBigInteger('pago_id');

            $table->foreign('estudiante_id')->references('id')->on('estudiante');
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
        Schema::dropIfExists('pagos_estudiante');
    }
}
