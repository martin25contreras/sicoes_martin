<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procesos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_proceso', 50);
            $table->string('descripcion', 200);
            $table->string('route', 50);
			$table->integer('order');
            $table->boolean('estatus')->default(true);

            $table->unsignedBigInteger('menu_id');

            $table->foreign('menu_id')->references('id')->on('menus');
        });

        /**
         * Colocar los nombres del proceso en ingles
         */
        DB::table('procesos')->insert([
            'nombre_proceso' => 'Crear Menu',
            'descripcion' => 'Crear Menu',
            'route' => 'menu',
            'order' => '1',
            'menu_id' => 1,
        ]);
        DB::table('procesos')->insert([
            'nombre_proceso' => 'Crear Procesos del Menu',
            'descripcion' => 'Crear Procesos del Menu',
            'route' => 'process',
            'order' => '2',
            'menu_id' => 1,
        ]);
        DB::table('procesos')->insert([
            'nombre_proceso' => 'Usuarios',
            'descripcion' => 'Usuarios',
            'route' => 'users',
			'order' => '3',
            'menu_id' => 1,
        ]);
        DB::table('procesos')->insert([
            'nombre_proceso' => 'Perfiles',
            'descripcion' => 'Perfiles',
            'route' => 'profiles',
			'order' => '4',
            'menu_id' => 1,
        ]);
        DB::table('procesos')->insert([
            'nombre_proceso' => 'Accesos Restringidos',
            'descripcion' => 'Accesos Restringidos',
            'route' => 'restricted_access',
			'order' => '5',
            'menu_id' => 1,
            'estatus' => 0,
        ]);
        DB::table('procesos')->insert([
            'nombre_proceso' => 'Monitoreo de Inicio de Sesi??n',
            'descripcion' => 'Monitoreo de Inicio de Sesi??n',
            'route' => 'access_history',
			'order' => '6',
            'menu_id' => 1,
            'estatus' => 0,
        ]);
        DB::table('procesos')->insert([
            'nombre_proceso' => 'Monitoreo Intentos de Inicio de Sesi??n',
            'descripcion' => 'Monitoreo Intentos de Inicio de Sesi??n',
            'route' => 'failed_login',
			'order' => '7',
            'menu_id' => 1,
            'estatus' => 0,
        ]);
        DB::table('procesos')->insert([
            'nombre_proceso' => 'Tiempo de Inactividad',
            'descripcion' => 'Tiempo de Inactividad',
            'route' => 'time_inactivity',
            'order' => '8',
            'menu_id' => 1,
        ]);
        DB::table('procesos')->insert([
            'nombre_proceso' => 'Gestionar Competencias',
            'descripcion' => 'Gestionar Competencias',
            'route' => 'competicies',
            'order' => '9',
            'menu_id' => 2,
        ]);        
        DB::table('procesos')->insert([
            'nombre_proceso' => 'Indicadores',
            'descripcion' => 'Indicadores',
            'route' => 'indicators',
            'order' => '10',
            'menu_id' => 2,
        ]);        
        DB::table('procesos')->insert([
            'nombre_proceso' => 'Indicadores Lapso',
            'descripcion' => 'Indicadores Lapso',
            'route' => 'indicators_lapses',
            'order' => '11',
            'menu_id' => 2,
        ]);
        DB::table('procesos')->insert([
            'nombre_proceso' => 'Registrar Personal',
            'descripcion' => 'Registrar Personal',
            'route' => 'staff',
            'order' => '12',
            'menu_id' => 2,
        ]);
        DB::table('procesos')->insert([
            'nombre_proceso' => '??rea',
            'descripcion' => '??rea',
            'route' => 'area',
            'order' => '13',
            'menu_id' => 2,
        ]);
        DB::table('procesos')->insert([
            'nombre_proceso' => 'Personal del ??rea',
            'descripcion' => 'Personal del ??rea',
            'route' => 'staff_area',
            'order' => '14',
            'menu_id' => 2,
        ]);
			
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('procesos');
    }
}
