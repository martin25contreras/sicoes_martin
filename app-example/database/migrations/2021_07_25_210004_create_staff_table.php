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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->char('nombres');
            $table->char('apellidos');
            $table->integer('cedula');
            $table->text('direccion');
            $table->char('correo');
            $table->char('telefono');
            $table->char('telefono_casa');
            $table->integer('dia_nacimiento');
            $table->integer('mes_nacimiento');
            $table->integer('ano_nacimiento');
            $table->enum('cargo', ['Maestra Integral', 'Maestra Especialista', 'Coordinador']);
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
        Schema::dropIfExists('staff');
    }
}
