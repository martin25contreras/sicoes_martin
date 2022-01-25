<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThemesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tema', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion', 200);
            $table->string('class_nombre', 20);
        });
        DB::table('tema')->insert([
            'descripcion' => 'Light',
            'class_nombre' => 'light-theme',
        ]);
        DB::table('tema')->insert([
            'descripcion' => 'Dark',
            'class_nombre' => 'dark-theme',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tema');
    }
}
