<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_menu', 50);
            $table->string('descripcion', 200);
            $table->string('icon', 50)->nullable();
            $table->integer('order');
            $table->boolean('status')->default(true);
        });

        /**
         * Colocar los nombres del menu en ingles
         */
        DB::table('menus')->insert([
            'nombre_menu' => 'Administrar Usuarios',
            'descripcion' => 'Administración de Usuarios del Sistema',
            'icon'        => 'fa fa-user',
            'order'       => 1,
            'status'      => 1,
        ]);
        DB::table('menus')->insert([
            'nombre_menu' => 'Gestión Académica',
            'descripcion' => 'Gestión Académica',
            'icon'        => 'fa-building',
            'order'       => 2,
            'status'      => 1,

        ]);
        // DB::table('menus')->insert([
        //     'nombre_menu' => 'Mantenimiento',
        //     'descripcion' => 'Mantenimiento del Sistema',
        //     'icon'        => 'fa-cogs',
        //     'order'       => 3,
        //     'status'      => 1,
        // ]);
        // DB::table('menus')->insert([
        //     'nombre_menu' => 'Administración de Pagos',
        //     'descripcion' => 'Administración de Pagos',
        //     'icon' => 'fa-credit-card',
        //     'order' => 4,
        //     'status' => 1,
        // ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
