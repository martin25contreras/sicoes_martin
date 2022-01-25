<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoggedUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_logueado', function (Blueprint $table) {
            $table->id();
            $table->timestamp('fecha_inicio')->nullable();
			$table->string('platform', 120);
			$table->string('browser', 120);
			$table->string('browser_engine', 120);
			$table->string('ip', 20);
            

            $table->unsignedBigInteger('usuario_id');

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
        Schema::dropIfExists('usuario_logueado');
    }
}
