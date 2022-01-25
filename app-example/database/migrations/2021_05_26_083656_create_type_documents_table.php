<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_documento', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_documento', 50);
            $table->string('abreviacion', 10);
        });
        DB::table('tipo_documento')->insert([
            'nombre_documento' => 'VENEZOLANO',
            'abreviacion' => 'V',
        ]);
        DB::table('tipo_documento')->insert([
            'nombre_documento' => 'EXTRANJERO',
            'abreviacion' => 'E',
        ]);
        DB::table('tipo_documento')->insert([
            'nombre_documento' => 'JURIDICO',
            'abreviacion' => 'J',
        ]);
        DB::table('tipo_documento')->insert([
            'nombre_documento' => 'GUBERNAMENTAL',
            'abreviacion' => 'G',
        ]);
        DB::table('tipo_documento')->insert([
            'nombre_documento' => 'PASAPORTE',
            'abreviacion' => 'P',
        ]);
        DB::table('tipo_documento')->insert([
            'nombre_documento' => 'CONSEJOS COMUNALES, COMUNAS',
            'abreviacion' => 'C',
        ]);
        DB::table('tipo_documento')->insert([
            'nombre_documento' => 'MENORES DE EDAD, COMUNAS',
            'abreviacion' => 'M',
        ]);
        DB::table('tipo_documento')->insert([
            'nombre_documento' => 'SUCESIONES',
            'abreviacion' => 'S',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_documento');
    }
}
