<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfil', function (Blueprint $table) {
            $table->id();
            $table->string('code', 20);
            $table->string('nombre_perfil', 50);
            $table->string('descripcion', 200);
            $table->boolean('estatus');
        });
        DB::table('perfil')->insert([
            'code' => '0001',
            'nombre_perfil' => 'Administrador',
            'descripcion' => 'Administrador Master',
            'estatus' => 1,
        ]); 
        DB::table('perfil')->insert([
            'code' => '0002',
            'nombre_perfil' => 'Analista',
            'descripcion' => 'Analista',
            'estatus' => 1,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfil');
    }
}
