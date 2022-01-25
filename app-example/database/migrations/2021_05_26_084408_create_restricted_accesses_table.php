<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestrictedAccessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restriccion_acceso', function (Blueprint $table) {
            $table->id();
            $table->timestamp('fecha_inicio')->nullable();
            $table->string('ip', 20);         
          
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('process_id');

            $table->foreign('usuario_id')->references('id')->on('users');
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
        Schema::dropIfExists('restriccion_acceso');
    }
}
