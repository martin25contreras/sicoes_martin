<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuspendedUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_suspendido', function (Blueprint $table) {
            $table->id();
            $table->timestamp('fecha_inicio')->nullable();
            $table->timestamp('fecha_fin')->nullable();
            $table->string('ip', 20);
            
            $table->unsignedBigInteger('usuario_suspendido_id');
            $table->unsignedBigInteger('usuario_id');

            $table->foreign('usuario_suspendido_id')->references('id')->on('users');
            $table->foreign('usuario_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_suspendido');
    }
}
