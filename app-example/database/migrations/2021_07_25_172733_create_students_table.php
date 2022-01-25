<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante', function (Blueprint $table) {
            $table->id();
            $table->string('primer_nombre',200);
            $table->string('segundo_nombre',200);
            $table->string('primer_apellido',200);
            $table->string('segundo_apellido',200);
            $table->string('correo',200)->unique();
            $table->enum("genero", ["M", "F"]);
            $table->string('telefono',20);
            $table->integer('dia_nacimiento');
            $table->integer('mes_nacimiento');
            $table->integer('ano_nacimiento');
            $table->string('direccion',255);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiante');
    }
}
