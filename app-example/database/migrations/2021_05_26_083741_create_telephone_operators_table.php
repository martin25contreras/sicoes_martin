<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTelephoneOperatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefono_operador', function (Blueprint $table) {
            $table->id();
            $table->string('code', 20);
            $table->string('descripcion', 200);

            $table->unsignedBigInteger('pais_id');
            $table->unsignedBigInteger('tipo_operador_id');

            $table->foreign('pais_id')->references('id')->on('pais');
            $table->foreign('tipo_operador_id')->references('id')->on('tipo_operador');
        });
        DB::table('telefono_operador')->insert([
            'code' =>'414',
            'descripcion' =>'MOVISTAR',
            'pais_id' => '1',
            'tipo_operador_id' => '2',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'424',
            'descripcion' =>'MOVISTAR',
            'pais_id' => '1',
            'tipo_operador_id' => '2',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'416',
            'descripcion' =>'MOVILNET',
            'pais_id' => '1',
            'tipo_operador_id' => '2',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'426',
            'descripcion' =>'MOVILNET',
            'pais_id' => '1',
            'tipo_operador_id' => '2',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'412',
            'descripcion' =>'DIGITEL',
            'pais_id' => '1',
            'tipo_operador_id' => '2',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'248',
            'descripcion' =>'AMAZONAS',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'281',
            'descripcion' =>'ANZOÁTEGUI',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'282',
            'descripcion' =>'ANZOÁTEGUI',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'283',
            'descripcion' =>'ANZOÁTEGUI',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'285',
            'descripcion' =>'ANZOÁTEGUI',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'292',
            'descripcion' =>'ANZOÁTEGUI',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'240',
            'descripcion' =>'APURE',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'247',
            'descripcion' =>'APURE',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'278',
            'descripcion' =>'APURE',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'243',
            'descripcion' =>'ARAGUA',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'244',
            'descripcion' =>'ARAGUA',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'246',
            'descripcion' =>'ARAGUA',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'273',
            'descripcion' =>'BARINAS',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'278',
            'descripcion' =>'BARINAS',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'284',
            'descripcion' =>'BOLÍVAR',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'285',
            'descripcion' =>'BOLÍVAR',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'286',
            'descripcion' =>'BOLÍVAR',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'288',
            'descripcion' =>'BOLÍVAR',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'289',
            'descripcion' =>'BOLÍVAR',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'241',
            'descripcion' =>'CARABOBO',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'242',
            'descripcion' =>'CARABOBO',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'243',
            'descripcion' =>'CARABOBO',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'245',
            'descripcion' =>'CARABOBO',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'249',
            'descripcion' =>'CARABOBO',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'258',
            'descripcion' =>'COJEDES',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'287',
            'descripcion' =>'DELTA AMACURO',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'212',
            'descripcion' =>'DISTRITO CAPITAL',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'259',
            'descripcion' =>'FALCÓN',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'268',
            'descripcion' =>'FALCÓN',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'269',
            'descripcion' =>'FALCÓN',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'279',
            'descripcion' =>'FALCÓN',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'235',
            'descripcion' =>'GUÁRICO',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'238',
            'descripcion' =>'GUÁRICO',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'246',
            'descripcion' =>'GUÁRICO',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'247',
            'descripcion' =>'GUÁRICO',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'251',
            'descripcion' =>'LARA',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'252',
            'descripcion' =>'LARA',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'253',
            'descripcion' =>'LARA',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'271',
            'descripcion' =>'MÉRIDA',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'274',
            'descripcion' =>'MÉRIDA',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'275',
            'descripcion' =>'MÉRIDA',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'212',
            'descripcion' =>'MIRANDA',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'234',
            'descripcion' =>'MIRANDA',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'239',
            'descripcion' =>'MIRANDA',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'287',
            'descripcion' =>'MONAGAS',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'291',
            'descripcion' =>'MONAGAS',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'292',
            'descripcion' =>'MONAGAS',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'295',
            'descripcion' =>'NUEVA ESPARTA',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'255',
            'descripcion' =>'PORTUGUESA',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'256',
            'descripcion' =>'PORTUGUESA',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'257',
            'descripcion' =>'PORTUGUESA',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'272',
            'descripcion' =>'PORTUGUESA',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'293',
            'descripcion' =>'SUCRE',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'294',
            'descripcion' =>'SUCRE',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'275',
            'descripcion' =>'TÁCHIRA',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'276',
            'descripcion' =>'TÁCHIRA',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'277',
            'descripcion' =>'TÁCHIRA',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'278',
            'descripcion' =>'TÁCHIRA',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'271',
            'descripcion' =>'TRUJILLO',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'272',
            'descripcion' =>'TRUJILLO',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'212',
            'descripcion' =>'LA GUAIRA',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'251',
            'descripcion' =>'YARACUY',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'253',
            'descripcion' =>'YARACUY',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'254',
            'descripcion' =>'YARACUY',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'280',
            'descripcion' =>'ZULIA',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'262',
            'descripcion' =>'ZULIA',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'263',
            'descripcion' =>'ZULIA',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'264',
            'descripcion' =>'ZULIA',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'265',
            'descripcion' =>'ZULIA',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'266',
            'descripcion' =>'ZULIA',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'267',
            'descripcion' =>'ZULIA',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'271',
            'descripcion' =>'ZULIA',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
        DB::table('telefono_operador')->insert([
            'code' =>'275',
            'descripcion' =>'ZULIA',
            'pais_id' => '1',
            'tipo_operador_id' => '1',
         ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('telefono_operador');
    }
}
