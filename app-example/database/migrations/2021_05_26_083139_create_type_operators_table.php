<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeOperatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_operador', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion', 200);
        });
        DB::table('tipo_operador')->insert([
            'descripcion' => 'CASA/OFICINA',
        ]);
        DB::table('tipo_operador')->insert([
            'descripcion' =>'CELULAR',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_operador');
    }
}
