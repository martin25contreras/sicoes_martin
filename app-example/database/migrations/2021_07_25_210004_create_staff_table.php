<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal', function (Blueprint $table) {
            $table->id();
            $table->string('nombres',200);
            $table->string('apellidos',200);
            $table->unsignedBigInteger('tipo_documento_id');
            $table->string('cedula',20);
            $table->text('direccion',200);
            $table->string('correo',200);
            $table->string('telefono_movil',20);
            $table->string('telefono_casa',20);
            // $table->string('dia_nacimiento',100);
            $table->integer('dia_nacimiento');
            $table->integer('mes_nacimiento');
            $table->integer('ano_nacimiento');
            $table->enum('cargo', ['Maestra Integral', 'Maestra Especialista', 'Coordinador']);


            $table->foreign('tipo_documento_id')->references('id')->on('tipo_documento');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal');
    }
}
