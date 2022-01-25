<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFailedLoginsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intentos_login', function (Blueprint $table) {
            $table->id();
            $table->timestamp('fecha_inicio')->nullable();
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
        Schema::dropIfExists('intentos_login');
    }
}
