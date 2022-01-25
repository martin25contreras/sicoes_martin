<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostulantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postulante', function (Blueprint $table) {
            $table->id();
            $table->string('nombres_estudiante',200);
            $table->string('apellidos_estudiante',200);
            $table->string('nombre_representante',200);
            $table->string('apellido_representante',200);
            $table->string('cedula',20);
            $table->date('fecha_nacimiento');
            $table->string('correo',200);
            $table->string('direccion',255);
            $table->string('telefono',20);
            $table->enum("estatus", ["Aceptado", "No Aceptado"]);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postulante');
    }
}
