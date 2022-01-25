<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepresentativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('representante', function (Blueprint $table) {
            $table->id();
            $table->string('documento',20);
            $table->string('primer_nombre',200);
            $table->string('segundo_nombre',200);
            $table->string('primer_apellido',200);
            $table->string('segundo_apellido',200);
            $table->date('fecha_nacimiento');
            $table->string('telefono',20);
            $table->string('email',200);
            
            $table->unsignedBigInteger('tipo_documento_id');
            $table->unsignedBigInteger('telefono_operador_id');

            $table->foreign('tipo_documento_id')->references('id')->on('tipo_documento');
            $table->foreign('telefono_operador_id')->references('id')->on('telefono_operador');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('representante');
    }
}
