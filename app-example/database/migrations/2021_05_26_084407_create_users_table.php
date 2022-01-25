<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_usuario',200);
            $table->string('apellido_usuario',200);
            $table->string('username',20)->unique();
            $table->string('password',60);
            $table->string('password_decrypt',60);
            $table->string('documento',20)->unique();
            $table->string('telefono',20);
            $table->string('email',200)->unique();
            $table->boolean('special_permission')->default(false);
            $table->boolean('sensitive_info')->default(false);
            $table->boolean('cambiar_password')->default(false);
            $table->boolean('bloqueado',false);
            $table->string('tiempo_inactividad',255);
            $table->string('avatar', 20)->default('0001');  

            $table->unsignedBigInteger('tipo_documento_id');
            $table->unsignedBigInteger('telefono_operador_id');
            $table->unsignedBigInteger('profile_id');
            $table->unsignedBigInteger('tema_id');

            $table->BigInteger('usuario_id');
            $table->timestamp('fecha_registro');
            $table->string('ip',20);

            $table->foreign('tipo_documento_id')->references('id')->on('tipo_documento');
            $table->foreign('telefono_operador_id')->references('id')->on('telefono_operador');
            $table->foreign('profile_id')->references('id')->on('perfil');
            $table->foreign('tema_id')->references('id')->on('tema');

            $table->index('username');
        });

        DB::table('users')->insert([
            'nombre_usuario' => 'Administrador',
            'apellido_usuario' => 'Administrador Master',
            'username' => 'sicoes',
            'password' => Hash::make('Sicoes.1'),
            'password_decrypt' => 'Sicoes.1',
            'documento' => '99999999',
            'telefono' => '2329356',
            'email' => 'admin@Sicoes.com',
            'special_permission' => 1,
            'sensitive_info' => 1,
            'cambiar_password' => 0,
            'bloqueado' => 0,
            'tiempo_inactividad' => 180,
            'tipo_documento_id' => 1,
            'telefono_operador_id' => 1,
            'profile_id' => 1,
            'tema_id' => 1,
            'usuario_id' => 1,
            'fecha_registro' => now(),
            'ip' => \Request::ip(),
        ]);		

	    DB::table('users')->insert([
            'nombre_usuario' => 'Administrador',
            'apellido_usuario' => 'Administrador Master',
            'username' => 'mcontreras',
            'password' => Hash::make('Sicoes.1'),
            'password_decrypt' => 'Sicoes.1',
            'documento' => '1234567',
            'telefono' => '9141572',
            'email' => 'mcontreras@gmail.com',
            'special_permission' => 1,
            'sensitive_info' => 1,
            'cambiar_password' => 0,
            'bloqueado' => 0,
            'tiempo_inactividad' => 180,
            'tipo_documento_id' => 1,
            'telefono_operador_id' => 1,
            'profile_id' => 1,
            'tema_id' => 1,
            'usuario_id' => 1,
            'fecha_registro' => now(),
            'ip' => \Request::ip(),
        ]);
	    DB::table('users')->insert([
            'nombre_usuario' => 'Administrador',
            'apellido_usuario' => 'Administrador Master',
            'username' => 'lbautista',
            'password' => Hash::make('Sicoes.1'),
            'password_decrypt' => 'Sicoes.1',
            'documento' => '25213269',
            'telefono' => '2329356',
            'email' => 'gaby@Sicoes.com',
            'special_permission' => 1,
            'sensitive_info' => 1,
            'cambiar_password' => 0,
            'bloqueado' => 0,
            'tiempo_inactividad' => 180,
            'tipo_documento_id' => 1,
            'telefono_operador_id' => 1,
            'profile_id' => 1,
            'tema_id' => 1,
            'usuario_id' => 1,
            'fecha_registro' => now(),
            'ip' => \Request::ip(),
        ]);
	    DB::table('users')->insert([
            'nombre_usuario' => 'Administrador',
            'apellido_usuario' => 'Administrador Master',
            'username' => 'lperez',
            'password' => Hash::make('Sicoes.1'),
            'password_decrypt' => 'Sicoes.1',
            'documento' => '1234560',
            'telefono' => '2329356',
            'email' => 'lperez@Sicoes.com',
            'special_permission' => 1,
            'sensitive_info' => 1,
            'cambiar_password' => 0,
            'bloqueado' => 0,
            'tiempo_inactividad' => 180,
            'tipo_documento_id' => 1,
            'telefono_operador_id' => 1,
            'profile_id' => 1,
            'tema_id' => 1,
            'usuario_id' => 1,
            'fecha_registro' => now(),
            'ip' => \Request::ip(),
        ]);
        DB::table('users')->insert([
            'nombre_usuario' => 'Administrador',
            'apellido_usuario' => 'Administrador Master',
            'username' => 'd.altuve',
            'password' => Hash::make('Sicoes.1'),
            'password_decrypt' => 'Sicoes.1',
            'documento' => '23778230',
            'telefono' => '9141572',
            'email' => 'd.altuve@Sicoes.com',
            'special_permission' => 1,
            'sensitive_info' => 1,
            'cambiar_password' => 0,
            'bloqueado' => 0,
            'tiempo_inactividad' => 180,
            'tipo_documento_id' => 1,
            'telefono_operador_id' => 1,
            'profile_id' => 1,
            'tema_id' => 1,
            'usuario_id' => 1,
            'fecha_registro' => now(),
            'ip' => \Request::ip(),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
