<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciudad', function (Blueprint $table) {
            $table->id();
            $table->string('name_ciudad', 50);
            $table->boolean('capital',false);
            
            $table->unsignedBigInteger('estado_id');            


            $table->foreign('estado_id')->references('id')->on('estado');

        });

         DB::table('ciudad')->insert([  
          [
            'name_ciudad' =>'Maroa',
            'capital' =>'0',
            'estado_id' =>'1',

          ],
          [           
            'name_ciudad' =>'Puerto Ayacucho',
            'capital' =>'1',
            'estado_id' =>'1',

          ],
          [           
            'name_ciudad' =>'San Fernando de Atabapo',
            'capital' =>'0',
            'estado_id' =>'1',

          ],
          [           
            'name_ciudad' =>'Anaco',
            'capital' =>'0',
            'estado_id' =>'2',

          ],
          [           
            'name_ciudad' =>'Aragua de Barcelona',
            'capital' =>'0',
            'estado_id' =>'2',

          ],
          [           
            'name_ciudad' =>'Barcelona',
            'capital' =>'1',
            'estado_id' =>'2',

          ],
          [           
            'name_ciudad' =>'Boca de Uchire',
            'capital' =>'0',
            'estado_id' =>'2',

          ],
          [           
            'name_ciudad' =>'Cantaura',
            'capital' =>'0',
            'estado_id' =>'2',

          ],
          [           
            'name_ciudad' =>'Clarines',
            'capital' =>'0',
            'estado_id' =>'2',

          ],
          [           
            'name_ciudad' =>'El Chaparro',
            'capital' =>'0',
            'estado_id' =>'2',

          ],
          [           
            'name_ciudad' =>'El Pao Anzo??tegui',
            'capital' =>'0',
            'estado_id' =>'2',

          ],
          [           
            'name_ciudad' =>'El Tigre',
            'capital' =>'0',
            'estado_id' =>'2',

          ],
          [           
            'name_ciudad' =>'El Tigrito',
            'capital' =>'0',
            'estado_id' =>'2',

          ],
          [           
            'name_ciudad' =>'Guanape',
            'capital' =>'0',
            'estado_id' =>'2',

          ],
          [           
            'name_ciudad' =>'Guanta',
            'capital' =>'0',
            'estado_id' =>'2',

          ],
          [           
            'name_ciudad' =>'Lecher??a',
            'capital' =>'0',
            'estado_id' =>'2',

          ],
          [           
            'name_ciudad' =>'Onoto',
            'capital' =>'0',
            'estado_id' =>'2',

          ],
          [           
            'name_ciudad' =>'Pariagu??n',
            'capital' =>'0',
            'estado_id' =>'2',

          ],
          [           
            'name_ciudad' =>'P??ritu',
            'capital' =>'0',
            'estado_id' =>'2',

          ],
          [           
            'name_ciudad' =>'Puerto La Cruz',
            'capital' =>'0',
            'estado_id' =>'2',

          ],
          [           
            'name_ciudad' =>'Puerto P??ritu',
            'capital' =>'0',
            'estado_id' =>'2',

          ],
          [           
            'name_ciudad' =>'Sabana de Uchire',
            'capital' =>'0',
            'estado_id' =>'2',

          ],
          [           
            'name_ciudad' =>'San Mateo Anzo??tegui',
            'capital' =>'0',
            'estado_id' =>'2',

          ],
          [           
            'name_ciudad' =>'San Pablo Anzo??tegui',
            'capital' =>'0',
            'estado_id' =>'2',

          ],
          [           
            'name_ciudad' =>'San Tom??',
            'capital' =>'0',
            'estado_id' =>'2',

          ],
          [           
            'name_ciudad' =>'Santa Ana de Anzo??tegui',
            'capital' =>'0',
            'estado_id' =>'2',

          ],
          [           
            'name_ciudad' =>'Santa Fe Anzo??tegui',
            'capital' =>'0',
            'estado_id' =>'2',

          ],
          [           
            'name_ciudad' =>'Santa Rosa',
            'capital' =>'0',
            'estado_id' =>'2',

          ],
          [           
            'name_ciudad' =>'Soledad',
            'capital' =>'0',
            'estado_id' =>'2',

          ],
          [           
            'name_ciudad' =>'Urica',
            'capital' =>'0',
            'estado_id' =>'2',

          ],
          [           
            'name_ciudad' =>'Valle de Guanape',
            'capital' =>'0',
            'estado_id' =>'2',

          ],
          [           
            'name_ciudad' =>'Achaguas',
            'capital' =>'0',
            'estado_id' =>'3',

          ],
          [           
            'name_ciudad' =>'Biruaca',
            'capital' =>'0',
            'estado_id' =>'3',

          ],
          [           
            'name_ciudad' =>'Bruzual',
            'capital' =>'0',
            'estado_id' =>'3',

          ],
          [           
            'name_ciudad' =>'El Amparo',
            'capital' =>'0',
            'estado_id' =>'3',

          ],
          [           
            'name_ciudad' =>'El Nula',
            'capital' =>'0',
            'estado_id' =>'3',

          ],
          [           
            'name_ciudad' =>'Elorza',
            'capital' =>'0',
            'estado_id' =>'3',

          ],
          [           
            'name_ciudad' =>'Guasdualito',
            'capital' =>'0',
            'estado_id' =>'3',

          ],
          [           
            'name_ciudad' =>'Mantecal',
            'capital' =>'0',
            'estado_id' =>'3',

          ],
          [           
            'name_ciudad' =>'Puerto P??ez',
            'capital' =>'0',
            'estado_id' =>'3',

          ],
          [           
            'name_ciudad' =>'San Fernando de Apure',
            'capital' =>'1',
            'estado_id' =>'3',

          ],
          [           
            'name_ciudad' =>'San Juan de Payara',
            'capital' =>'0',
            'estado_id' =>'3',

          ],
          [           
            'name_ciudad' =>'Barbacoas',
            'capital' =>'0',
            'estado_id' =>'4',

          ],
          [           
            'name_ciudad' =>'Cagua',
            'capital' =>'0',
            'estado_id' =>'4',

          ],
          [           
            'name_ciudad' =>'Camatagua',
            'capital' =>'0',
            'estado_id' =>'4',

          ],
          [           
            'name_ciudad' =>'Choron??',
            'capital' =>'0',
            'estado_id' =>'4',

          ],
          [           
            'name_ciudad' =>'Colonia Tovar',
            'capital' =>'0',
            'estado_id' =>'4',

          ],
          [           
            'name_ciudad' =>'El Consejo',
            'capital' =>'0',
            'estado_id' =>'4',

          ],
          [           
            'name_ciudad' =>'La Victoria',
            'capital' =>'0',
            'estado_id' =>'4',

          ],
          [           
            'name_ciudad' =>'Las Tejer??as',
            'capital' =>'0',
            'estado_id' =>'4',

          ],
          [           
            'name_ciudad' =>'Magdaleno',
            'capital' =>'0',
            'estado_id' =>'4',

          ],
          [           
            'name_ciudad' =>'Maracay',
            'capital' =>'1',
            'estado_id' =>'4',

          ],
          [           
            'name_ciudad' =>'Ocumare de La Costa',
            'capital' =>'0',
            'estado_id' =>'4',

          ],
          [           
            'name_ciudad' =>'Palo Negro',
            'capital' =>'0',
            'estado_id' =>'4',

          ],
          [           
            'name_ciudad' =>'San Casimiro',
            'capital' =>'0',
            'estado_id' =>'4',

          ],
          [           
            'name_ciudad' =>'San Mateo',
            'capital' =>'0',
            'estado_id' =>'4',

          ],
          [           
            'name_ciudad' =>'San Sebasti??n',
            'capital' =>'0',
            'estado_id' =>'4',

          ],
          [           
            'name_ciudad' =>'Santa Cruz de Aragua',
            'capital' =>'0',
            'estado_id' =>'4',

          ],
          [           
            'name_ciudad' =>'Tocor??n',
            'capital' =>'0',
            'estado_id' =>'4',

          ],
          [           
            'name_ciudad' =>'Turmero',
            'capital' =>'0',
            'estado_id' =>'4',

          ],
          [           
            'name_ciudad' =>'Villa de Cura',
            'capital' =>'0',
            'estado_id' =>'4',

          ],
          [           
            'name_ciudad' =>'Zuata',
            'capital' =>'0',
            'estado_id' =>'4',

          ],
          [           
            'name_ciudad' =>'Barinas',
            'capital' =>'1',
            'estado_id' =>'5',

          ],
          [           
            'name_ciudad' =>'Barinitas',
            'capital' =>'0',
            'estado_id' =>'5',

          ],
          [           
            'name_ciudad' =>'Barrancas',
            'capital' =>'0',
            'estado_id' =>'5',

          ],
          [           
            'name_ciudad' =>'Calderas',
            'capital' =>'0',
            'estado_id' =>'5',

          ],
          [           
            'name_ciudad' =>'Capitanejo',
            'capital' =>'0',
            'estado_id' =>'5',

          ],
          [           
            'name_ciudad' =>'Ciudad Bolivia',
            'capital' =>'0',
            'estado_id' =>'5',

          ],
          [           
            'name_ciudad' =>'El Cant??n',
            'capital' =>'0',
            'estado_id' =>'5',

          ],
          [           
            'name_ciudad' =>'Las Veguitas',
            'capital' =>'0',
            'estado_id' =>'5',

          ],
          [           
            'name_ciudad' =>'Libertad de Barinas',
            'capital' =>'0',
            'estado_id' =>'5',

          ],
          [           
            'name_ciudad' =>'Sabaneta',
            'capital' =>'0',
            'estado_id' =>'5',

          ],
          [           
            'name_ciudad' =>'Santa B??rbara de Barinas',
            'capital' =>'0',
            'estado_id' =>'5',

          ],
          [           
            'name_ciudad' =>'Socop??',
            'capital' =>'0',
            'estado_id' =>'5',

          ],
          [           
            'name_ciudad' =>'Caicara del Orinoco',
            'capital' =>'0',
            'estado_id' =>'6',

          ],
          [           
            'name_ciudad' =>'Canaima',
            'capital' =>'0',
            'estado_id' =>'6',

          ],
          [           
            'name_ciudad' =>'Ciudad Bol??var',
            'capital' =>'1',
            'estado_id' =>'6',

          ],
          [           
            'name_ciudad' =>'Ciudad Piar',
            'capital' =>'0',
            'estado_id' =>'6',

          ],
          [           
            'name_ciudad' =>'El Callao',
            'capital' =>'0',
            'estado_id' =>'6',

          ],
          [           
            'name_ciudad' =>'El Dorado',
            'capital' =>'0',
            'estado_id' =>'6',

          ],
          [           
            'name_ciudad' =>'El Manteco',
            'capital' =>'0',
            'estado_id' =>'6',

          ],
          [           
            'name_ciudad' =>'El Palmar',
            'capital' =>'0',
            'estado_id' =>'6',

          ],
          [           
            'name_ciudad' =>'El Pao',
            'capital' =>'0',
            'estado_id' =>'6',

          ],
          [           
            'name_ciudad' =>'Guasipati',
            'capital' =>'0',
            'estado_id' =>'6',

          ],
          [           
            'name_ciudad' =>'Guri',
            'capital' =>'0',
            'estado_id' =>'6',

          ],
          [           
            'name_ciudad' =>'La Paragua',
            'capital' =>'0',
            'estado_id' =>'6',

          ],
          [           
            'name_ciudad' =>'Matanzas',
            'capital' =>'0',
            'estado_id' =>'6',

          ],
          [           
            'name_ciudad' =>'Puerto Ordaz',
            'capital' =>'0',
            'estado_id' =>'6',

          ],
          [           
            'name_ciudad' =>'San F??lix',
            'capital' =>'0',
            'estado_id' =>'6',

          ],
          [           
            'name_ciudad' =>'Santa Elena de Uair??n',
            'capital' =>'0',
            'estado_id' =>'6',

          ],
          [           
            'name_ciudad' =>'Tumeremo',
            'capital' =>'0',
            'estado_id' =>'6',

          ],
          [           
            'name_ciudad' =>'Unare',
            'capital' =>'0',
            'estado_id' =>'6',

          ],
          [           
            'name_ciudad' =>'Upata',
            'capital' =>'0',
            'estado_id' =>'6',

          ],
          [           
            'name_ciudad' =>'Bejuma',
            'capital' =>'0',
            'estado_id' =>'7',

          ],
          [           
            'name_ciudad' =>'Bel??n',
            'capital' =>'0',
            'estado_id' =>'7',

          ],
          [           
            'name_ciudad' =>'Campo de Carabobo',
            'capital' =>'0',
            'estado_id' =>'7',

          ],
          [           
            'name_ciudad' =>'Canoabo',
            'capital' =>'0',
            'estado_id' =>'7',

          ],
          [           
            'name_ciudad' =>'Central Tacarigua',
            'capital' =>'0',
            'estado_id' =>'7',

          ],
          [           
            'name_ciudad' =>'Chirgua',
            'capital' =>'0',
            'estado_id' =>'7',

          ],
          [           
            'name_ciudad' =>'Ciudad Alianza',
            'capital' =>'0',
            'estado_id' =>'7',

          ],
          [           
            'name_ciudad' =>'El Palito',
            'capital' =>'0',
            'estado_id' =>'7',

          ],
          [           
            'name_ciudad' =>'Guacara',
            'capital' =>'0',
            'estado_id' =>'7',

          ],
          [           
            'name_ciudad' =>'Guigue',
            'capital' =>'0',
            'estado_id' =>'7',

          ],
          [           
            'name_ciudad' =>'Las Trincheras',
            'capital' =>'0',
            'estado_id' =>'7',

          ],
          [           
            'name_ciudad' =>'Los Guayos',
            'capital' =>'0',
            'estado_id' =>'7',

          ],
          [           
            'name_ciudad' =>'Mariara',
            'capital' =>'0',
            'estado_id' =>'7',

          ],
          [           
            'name_ciudad' =>'Miranda',
            'capital' =>'0',
            'estado_id' =>'7',

          ],
          [           
            'name_ciudad' =>'Montalb??n',
            'capital' =>'0',
            'estado_id' =>'7',

          ],
          [           
            'name_ciudad' =>'Mor??n',
            'capital' =>'0',
            'estado_id' =>'7',

          ],
          [           
            'name_ciudad' =>'Naguanagua',
            'capital' =>'0',
            'estado_id' =>'7',

          ],
          [           
            'name_ciudad' =>'Puerto Cabello',
            'capital' =>'0',
            'estado_id' =>'7',

          ],
          [           
            'name_ciudad' =>'San Joaqu??n',
            'capital' =>'0',
            'estado_id' =>'7',

          ],
          [           
            'name_ciudad' =>'Tocuyito',
            'capital' =>'0',
            'estado_id' =>'7',

          ],
          [           
            'name_ciudad' =>'Urama',
            'capital' =>'0',
            'estado_id' =>'7',

          ],
          [           
            'name_ciudad' =>'Valencia',
            'capital' =>'1',
            'estado_id' =>'7',

          ],
          [           
            'name_ciudad' =>'Vigirimita',
            'capital' =>'0',
            'estado_id' =>'7',

          ],
          [           
            'name_ciudad' =>'Aguirre',
            'capital' =>'0',
            'estado_id' =>'8',

          ],
          [           
            'name_ciudad' =>'Apartaderos Cojedes',
            'capital' =>'0',
            'estado_id' =>'8',

          ],
          [           
            'name_ciudad' =>'Arismendi',
            'capital' =>'0',
            'estado_id' =>'8',

          ],
          [           
            'name_ciudad' =>'Camuriquito',
            'capital' =>'0',
            'estado_id' =>'8',

          ],
          [           
            'name_ciudad' =>'El Ba??l',
            'capital' =>'0',
            'estado_id' =>'8',

          ],
          [           
            'name_ciudad' =>'El Lim??n',
            'capital' =>'0',
            'estado_id' =>'8',

          ],
          [           
            'name_ciudad' =>'El Pao Cojedes',
            'capital' =>'0',
            'estado_id' =>'8',

          ],
          [           
            'name_ciudad' =>'El Socorro',
            'capital' =>'0',
            'estado_id' =>'8',

          ],
          [           
            'name_ciudad' =>'La Aguadita',
            'capital' =>'0',
            'estado_id' =>'8',

          ],
          [           
            'name_ciudad' =>'Las Vegas',
            'capital' =>'0',
            'estado_id' =>'8',

          ],
          [           
            'name_ciudad' =>'Libertad de Cojedes',
            'capital' =>'0',
            'estado_id' =>'8',

          ],
          [           
            'name_ciudad' =>'Mapuey',
            'capital' =>'0',
            'estado_id' =>'8',

          ],
          [           
            'name_ciudad' =>'Pi??edo',
            'capital' =>'0',
            'estado_id' =>'8',

          ],
          [           
            'name_ciudad' =>'Samancito',
            'capital' =>'0',
            'estado_id' =>'8',

          ],
          [           
            'name_ciudad' =>'San Carlos',
            'capital' =>'1',
            'estado_id' =>'8',

          ],
          [           
            'name_ciudad' =>'Sucre',
            'capital' =>'0',
            'estado_id' =>'8',

          ],
          [           
            'name_ciudad' =>'Tinaco',
            'capital' =>'0',
            'estado_id' =>'8',

          ],
          [           
            'name_ciudad' =>'Tinaquillo',
            'capital' =>'0',
            'estado_id' =>'8',

          ],
          [           
            'name_ciudad' =>'Vallecito',
            'capital' =>'0',
            'estado_id' =>'8',

          ],
          [           
            'name_ciudad' =>'Tucupita',
            'capital' =>'1',
            'estado_id' =>'9',

          ],
          [           
            'name_ciudad' =>'Caracas',
            'capital' =>'1',
            'estado_id' =>'24',

          ],
          [           
            'name_ciudad' =>'El Junquito',
            'capital' =>'0',
            'estado_id' =>'24',

          ],
          [           
            'name_ciudad' =>'Ad??cora',
            'capital' =>'0',
            'estado_id' =>'10',

          ],
          [           
            'name_ciudad' =>'Boca de Aroa',
            'capital' =>'0',
            'estado_id' =>'10',

          ],
          [           
            'name_ciudad' =>'Cabure',
            'capital' =>'0',
            'estado_id' =>'10',

          ],
          [           
            'name_ciudad' =>'Capadare',
            'capital' =>'0',
            'estado_id' =>'10',

          ],
          [           
            'name_ciudad' =>'Capat??rida',
            'capital' =>'0',
            'estado_id' =>'10',

          ],
          [           
            'name_ciudad' =>'Chichiriviche',
            'capital' =>'0',
            'estado_id' =>'10',

          ],
          [           
            'name_ciudad' =>'Churuguara',
            'capital' =>'0',
            'estado_id' =>'10',

          ],
          [           
            'name_ciudad' =>'Coro',
            'capital' =>'1',
            'estado_id' =>'10',

          ],
          [           
            'name_ciudad' =>'Cumarebo',
            'capital' =>'0',
            'estado_id' =>'10',

          ],
          [           
            'name_ciudad' =>'Dabajuro',
            'capital' =>'0',
            'estado_id' =>'10',

          ],
          [           
            'name_ciudad' =>'Judibana',
            'capital' =>'0',
            'estado_id' =>'10',

          ],
          [           
            'name_ciudad' =>'La Cruz de Taratara',
            'capital' =>'0',
            'estado_id' =>'10',

          ],
          [           
            'name_ciudad' =>'La Vela de Coro',
            'capital' =>'0',
            'estado_id' =>'10',

          ],
          [           
            'name_ciudad' =>'Los Taques',
            'capital' =>'0',
            'estado_id' =>'10',

          ],
          [           
            'name_ciudad' =>'Maparari',
            'capital' =>'0',
            'estado_id' =>'10',

          ],
          [           
            'name_ciudad' =>'Mene de Mauroa',
            'capital' =>'0',
            'estado_id' =>'10',

          ],
          [           
            'name_ciudad' =>'Mirimire',
            'capital' =>'0',
            'estado_id' =>'10',

          ],
          [           
            'name_ciudad' =>'Pedregal',
            'capital' =>'0',
            'estado_id' =>'10',

          ],
          [           
            'name_ciudad' =>'P??ritu Falc??n',
            'capital' =>'0',
            'estado_id' =>'10',

          ],
          [           
            'name_ciudad' =>'Pueblo Nuevo Falc??n',
            'capital' =>'0',
            'estado_id' =>'10',

          ],
          [           
            'name_ciudad' =>'Puerto Cumarebo',
            'capital' =>'0',
            'estado_id' =>'10',

          ],
          [           
            'name_ciudad' =>'Punta Card??n',
            'capital' =>'0',
            'estado_id' =>'10',

          ],
          [           
            'name_ciudad' =>'Punto Fijo',
            'capital' =>'0',
            'estado_id' =>'10',

          ],
          [           
            'name_ciudad' =>'San Juan de Los Cayos',
            'capital' =>'0',
            'estado_id' =>'10',

          ],
          [           
            'name_ciudad' =>'San Luis',
            'capital' =>'0',
            'estado_id' =>'10',

          ],
          [           
            'name_ciudad' =>'Santa Ana Falc??n',
            'capital' =>'0',
            'estado_id' =>'10',

          ],
          [           
            'name_ciudad' =>'Santa Cruz De Bucaral',
            'capital' =>'0',
            'estado_id' =>'10',

          ],
          [           
            'name_ciudad' =>'Tocopero',
            'capital' =>'0',
            'estado_id' =>'10',

          ],
          [           
            'name_ciudad' =>'Tocuyo de La Costa',
            'capital' =>'0',
            'estado_id' =>'10',

          ],
          [           
            'name_ciudad' =>'Tucacas',
            'capital' =>'0',
            'estado_id' =>'10',

          ],
          [           
            'name_ciudad' =>'Yaracal',
            'capital' =>'0',
            'estado_id' =>'10',

          ],
          [           
            'name_ciudad' =>'Altagracia de Orituco',
            'capital' =>'0',
            'estado_id' =>'11',

          ],
          [           
            'name_ciudad' =>'Cabruta',
            'capital' =>'0',
            'estado_id' =>'11',

          ],
          [           
            'name_ciudad' =>'Calabozo',
            'capital' =>'0',
            'estado_id' =>'11',

          ],
          [           
            'name_ciudad' =>'Camagu??n',
            'capital' =>'0',
            'estado_id' =>'11',

          ],
          [           
            'name_ciudad' =>'Chaguaramas Gu??rico',
            'capital' =>'0',
            'estado_id' =>'11',

          ],
          [           
            'name_ciudad' =>'El Socorro',
            'capital' =>'0',
            'estado_id' =>'11',

          ],
          [           
            'name_ciudad' =>'El Sombrero',
            'capital' =>'0',
            'estado_id' =>'11',

          ],
          [           
            'name_ciudad' =>'Las Mercedes de Los Llanos',
            'capital' =>'0',
            'estado_id' =>'11',

          ],
          [           
            'name_ciudad' =>'Lezama',
            'capital' =>'0',
            'estado_id' =>'11',

          ],
          [           
            'name_ciudad' =>'Onoto',
            'capital' =>'0',
            'estado_id' =>'11',

          ],
          [           
            'name_ciudad' =>'Ort??z',
            'capital' =>'0',
            'estado_id' =>'11',

          ],
          [           
            'name_ciudad' =>'San Jos?? de Guaribe',
            'capital' =>'0',
            'estado_id' =>'11',

          ],
          [           
            'name_ciudad' =>'San Juan de Los Morros',
            'capital' =>'1',
            'estado_id' =>'11',

          ],
          [           
            'name_ciudad' =>'San Rafael de Laya',
            'capital' =>'0',
            'estado_id' =>'11',

          ],
          [           
            'name_ciudad' =>'Santa Mar??a de Ipire',
            'capital' =>'0',
            'estado_id' =>'11',

          ],
          [           
            'name_ciudad' =>'Tucupido',
            'capital' =>'0',
            'estado_id' =>'11',

          ],
          [           
            'name_ciudad' =>'Valle de La Pascua',
            'capital' =>'0',
            'estado_id' =>'11',

          ],
          [           
            'name_ciudad' =>'Zaraza',
            'capital' =>'0',
            'estado_id' =>'11',

          ],
          [           
            'name_ciudad' =>'Aguada Grande',
            'capital' =>'0',
            'estado_id' =>'12',

          ],
          [           
            'name_ciudad' =>'Atarigua',
            'capital' =>'0',
            'estado_id' =>'12',

          ],
          [           
            'name_ciudad' =>'Barquisimeto',
            'capital' =>'1',
            'estado_id' =>'12',

          ],
          [           
            'name_ciudad' =>'Bobare',
            'capital' =>'0',
            'estado_id' =>'12',

          ],
          [           
            'name_ciudad' =>'Cabudare',
            'capital' =>'0',
            'estado_id' =>'12',

          ],
          [           
            'name_ciudad' =>'Carora',
            'capital' =>'0',
            'estado_id' =>'12',

          ],
          [           
            'name_ciudad' =>'Cubiro',
            'capital' =>'0',
            'estado_id' =>'12',

          ],
          [           
            'name_ciudad' =>'Cuj??',
            'capital' =>'0',
            'estado_id' =>'12',

          ],
          [           
            'name_ciudad' =>'Duaca',
            'capital' =>'0',
            'estado_id' =>'12',

          ],
          [           
            'name_ciudad' =>'El Manzano',
            'capital' =>'0',
            'estado_id' =>'12',

          ],
          [           
            'name_ciudad' =>'El Tocuyo',
            'capital' =>'0',
            'estado_id' =>'12',

          ],
          [           
            'name_ciudad' =>'Guar??co',
            'capital' =>'0',
            'estado_id' =>'12',

          ],
          [           
            'name_ciudad' =>'Humocaro Alto',
            'capital' =>'0',
            'estado_id' =>'12',

          ],
          [           
            'name_ciudad' =>'Humocaro Bajo',
            'capital' =>'0',
            'estado_id' =>'12',

          ],
          [           
            'name_ciudad' =>'La Miel',
            'capital' =>'0',
            'estado_id' =>'12',

          ],
          [           
            'name_ciudad' =>'Moroturo',
            'capital' =>'0',
            'estado_id' =>'12',

          ],
          [           
            'name_ciudad' =>'Qu??bor',
            'capital' =>'0',
            'estado_id' =>'12',

          ],
          [           
            'name_ciudad' =>'R??o Claro',
            'capital' =>'0',
            'estado_id' =>'12',

          ],
          [           
            'name_ciudad' =>'Sanare',
            'capital' =>'0',
            'estado_id' =>'12',

          ],
          [           
            'name_ciudad' =>'Santa In??s',
            'capital' =>'0',
            'estado_id' =>'12',

          ],
          [           
            'name_ciudad' =>'Sarare',
            'capital' =>'0',
            'estado_id' =>'12',

          ],
          [           
            'name_ciudad' =>'Siquisique',
            'capital' =>'0',
            'estado_id' =>'12',

          ],
          [           
            'name_ciudad' =>'Tintorero',
            'capital' =>'0',
            'estado_id' =>'12',

          ],
          [           
            'name_ciudad' =>'Apartaderos M??rida',
            'capital' =>'0',
            'estado_id' =>'13',

          ],
          [           
            'name_ciudad' =>'Arapuey',
            'capital' =>'0',
            'estado_id' =>'13',

          ],
          [           
            'name_ciudad' =>'Bailadores',
            'capital' =>'0',
            'estado_id' =>'13',

          ],
          [           
            'name_ciudad' =>'Caja Seca',
            'capital' =>'0',
            'estado_id' =>'13',

          ],
          [           
            'name_ciudad' =>'Canagu??',
            'capital' =>'0',
            'estado_id' =>'13',

          ],
          [           
            'name_ciudad' =>'Chachopo',
            'capital' =>'0',
            'estado_id' =>'13',

          ],
          [           
            'name_ciudad' =>'Chiguara',
            'capital' =>'0',
            'estado_id' =>'13',

          ],
          [           
            'name_ciudad' =>'Ejido',
            'capital' =>'0',
            'estado_id' =>'13',

          ],
          [           
            'name_ciudad' =>'El Vig??a',
            'capital' =>'0',
            'estado_id' =>'13',

          ],
          [           
            'name_ciudad' =>'La Azulita',
            'capital' =>'0',
            'estado_id' =>'13',

          ],
          [           
            'name_ciudad' =>'La Playa',
            'capital' =>'0',
            'estado_id' =>'13',

          ],
          [           
            'name_ciudad' =>'Lagunillas M??rida',
            'capital' =>'0',
            'estado_id' =>'13',

          ],
          [           
            'name_ciudad' =>'M??rida',
            'capital' =>'1',
            'estado_id' =>'13',

          ],
          [           
            'name_ciudad' =>'Mesa de Bol??var',
            'capital' =>'0',
            'estado_id' =>'13',

          ],
          [           
            'name_ciudad' =>'Mucuch??es',
            'capital' =>'0',
            'estado_id' =>'13',

          ],
          [           
            'name_ciudad' =>'Mucujepe',
            'capital' =>'0',
            'estado_id' =>'13',

          ],
          [           
            'name_ciudad' =>'Mucuruba',
            'capital' =>'0',
            'estado_id' =>'13',

          ],
          [           
            'name_ciudad' =>'Nueva Bolivia',
            'capital' =>'0',
            'estado_id' =>'13',

          ],
          [           
            'name_ciudad' =>'Palmarito',
            'capital' =>'0',
            'estado_id' =>'13',

          ],
          [           
            'name_ciudad' =>'Pueblo Llano',
            'capital' =>'0',
            'estado_id' =>'13',

          ],
          [           
            'name_ciudad' =>'Santa Cruz de Mora',
            'capital' =>'0',
            'estado_id' =>'13',

          ],
          [           
            'name_ciudad' =>'Santa Elena de Arenales',
            'capital' =>'0',
            'estado_id' =>'13',

          ],
          [           
            'name_ciudad' =>'Santo Domingo',
            'capital' =>'0',
            'estado_id' =>'13',

          ],
          [           
            'name_ciudad' =>'Tab??y',
            'capital' =>'0',
            'estado_id' =>'13',

          ],
          [           
            'name_ciudad' =>'Timotes',
            'capital' =>'0',
            'estado_id' =>'13',

          ],
          [           
            'name_ciudad' =>'Torondoy',
            'capital' =>'0',
            'estado_id' =>'13',

          ],
          [           
            'name_ciudad' =>'Tovar',
            'capital' =>'0',
            'estado_id' =>'13',

          ],
          [           
            'name_ciudad' =>'Tucani',
            'capital' =>'0',
            'estado_id' =>'13',

          ],
          [           
            'name_ciudad' =>'Zea',
            'capital' =>'0',
            'estado_id' =>'13',

          ],
          [           
            'name_ciudad' =>'Araguita',
            'capital' =>'0',
            'estado_id' =>'14',

          ],
          [           
            'name_ciudad' =>'Carrizal',
            'capital' =>'0',
            'estado_id' =>'14',

          ],
          [           
            'name_ciudad' =>'Caucagua',
            'capital' =>'0',
            'estado_id' =>'14',

          ],
          [           
            'name_ciudad' =>'Chaguaramas Miranda',
            'capital' =>'0',
            'estado_id' =>'14',

          ],
          [           
            'name_ciudad' =>'Charallave',
            'capital' =>'0',
            'estado_id' =>'14',

          ],
          [           
            'name_ciudad' =>'Chirimena',
            'capital' =>'0',
            'estado_id' =>'14',

          ],
          [           
            'name_ciudad' =>'Chuspa',
            'capital' =>'0',
            'estado_id' =>'14',

          ],
          [           
            'name_ciudad' =>'C??a',
            'capital' =>'0',
            'estado_id' =>'14',

          ],
          [           
            'name_ciudad' =>'Cupira',
            'capital' =>'0',
            'estado_id' =>'14',

          ],
          [           
            'name_ciudad' =>'Curiepe',
            'capital' =>'0',
            'estado_id' =>'14',

          ],
          [           
            'name_ciudad' =>'El Guapo',
            'capital' =>'0',
            'estado_id' =>'14',

          ],
          [           
            'name_ciudad' =>'El Jarillo',
            'capital' =>'0',
            'estado_id' =>'14',

          ],
          [           
            'name_ciudad' =>'Filas de Mariche',
            'capital' =>'0',
            'estado_id' =>'14',

          ],
          [           
            'name_ciudad' =>'Guarenas',
            'capital' =>'0',
            'estado_id' =>'14',

          ],
          [           
            'name_ciudad' =>'Guatire',
            'capital' =>'0',
            'estado_id' =>'14',

          ],
          [           
            'name_ciudad' =>'Higuerote',
            'capital' =>'0',
            'estado_id' =>'14',

          ],
          [           
            'name_ciudad' =>'Los Anaucos',
            'capital' =>'0',
            'estado_id' =>'14',

          ],
          [           
            'name_ciudad' =>'Los Teques',
            'capital' =>'1',
            'estado_id' =>'14',

          ],
          [           
            'name_ciudad' =>'Ocumare del Tuy',
            'capital' =>'0',
            'estado_id' =>'14',

          ],
          [           
            'name_ciudad' =>'Panaquire',
            'capital' =>'0',
            'estado_id' =>'14',

          ],
          [           
            'name_ciudad' =>'Paracotos',
            'capital' =>'0',
            'estado_id' =>'14',

          ],
          [           
            'name_ciudad' =>'R??o Chico',
            'capital' =>'0',
            'estado_id' =>'14',

          ],
          [           
            'name_ciudad' =>'San Antonio de Los Altos',
            'capital' =>'0',
            'estado_id' =>'14',

          ],
          [           
            'name_ciudad' =>'San Diego de Los Altos',
            'capital' =>'0',
            'estado_id' =>'14',

          ],
          [           
            'name_ciudad' =>'San Fernando del Guapo',
            'capital' =>'0',
            'estado_id' =>'14',

          ],
          [           
            'name_ciudad' =>'San Francisco de Yare',
            'capital' =>'0',
            'estado_id' =>'14',

          ],
          [           
            'name_ciudad' =>'San Jos?? de Los Altos',
            'capital' =>'0',
            'estado_id' =>'14',

          ],
          [           
            'name_ciudad' =>'San Jos?? de R??o Chico',
            'capital' =>'0',
            'estado_id' =>'14',

          ],
          [           
            'name_ciudad' =>'San Pedro de Los Altos',
            'capital' =>'0',
            'estado_id' =>'14',

          ],
          [           
            'name_ciudad' =>'Santa Luc??a',
            'capital' =>'0',
            'estado_id' =>'14',

          ],
          [           
            'name_ciudad' =>'Santa Teresa',
            'capital' =>'0',
            'estado_id' =>'14',

          ],
          [           
            'name_ciudad' =>'Tacarigua de La Laguna',
            'capital' =>'0',
            'estado_id' =>'14',

          ],
          [           
            'name_ciudad' =>'Tacarigua de Mamporal',
            'capital' =>'0',
            'estado_id' =>'14',

          ],
          [           
            'name_ciudad' =>'T??cata',
            'capital' =>'0',
            'estado_id' =>'14',

          ],
          [           
            'name_ciudad' =>'Turumo',
            'capital' =>'0',
            'estado_id' =>'14',

          ],
          [           
            'name_ciudad' =>'Aguasay',
            'capital' =>'0',
            'estado_id' =>'15',

          ],
          [           
            'name_ciudad' =>'Aragua de Matur??n',
            'capital' =>'0',
            'estado_id' =>'15',

          ],
          [           
            'name_ciudad' =>'Barrancas del Orinoco',
            'capital' =>'0',
            'estado_id' =>'15',

          ],
          [           
            'name_ciudad' =>'Caicara de Matur??n',
            'capital' =>'0',
            'estado_id' =>'15',

          ],
          [           
            'name_ciudad' =>'Caripe',
            'capital' =>'0',
            'estado_id' =>'15',

          ],
          [           
            'name_ciudad' =>'Caripito',
            'capital' =>'0',
            'estado_id' =>'15',

          ],
          [           
            'name_ciudad' =>'Chaguaramal',
            'capital' =>'0',
            'estado_id' =>'15',

          ],
          [           
            'name_ciudad' =>'Chaguaramas Monagas',
            'capital' =>'0',
            'estado_id' =>'15',

          ],
          [           
            'name_ciudad' =>'El Furrial',
            'capital' =>'0',
            'estado_id' =>'15',

          ],
          [           
            'name_ciudad' =>'El Tejero',
            'capital' =>'0',
            'estado_id' =>'15',

          ],
          [           
            'name_ciudad' =>'Jusep??n',
            'capital' =>'0',
            'estado_id' =>'15',

          ],
          [           
            'name_ciudad' =>'La Toscana',
            'capital' =>'0',
            'estado_id' =>'15',

          ],
          [           
            'name_ciudad' =>'Matur??n',
            'capital' =>'1',
            'estado_id' =>'15',

          ],
          [           
            'name_ciudad' =>'Miraflores',
            'capital' =>'0',
            'estado_id' =>'15',

          ],
          [           
            'name_ciudad' =>'Punta de Mata',
            'capital' =>'0',
            'estado_id' =>'15',

          ],
          [           
            'name_ciudad' =>'Quiriquire',
            'capital' =>'0',
            'estado_id' =>'15',

          ],
          [           
            'name_ciudad' =>'San Antonio de Matur??n',
            'capital' =>'0',
            'estado_id' =>'15',

          ],
          [           
            'name_ciudad' =>'San Vicente Monagas',
            'capital' =>'0',
            'estado_id' =>'15',

          ],
          [           
            'name_ciudad' =>'Santa B??rbara',
            'capital' =>'0',
            'estado_id' =>'15',

          ],
          [           
            'name_ciudad' =>'Temblador',
            'capital' =>'0',
            'estado_id' =>'15',

          ],
          [           
            'name_ciudad' =>'Teresen',
            'capital' =>'0',
            'estado_id' =>'15',

          ],
          [           
            'name_ciudad' =>'Uracoa',
            'capital' =>'0',
            'estado_id' =>'15',

          ],
          [           
            'name_ciudad' =>'Altagracia',
            'capital' =>'0',
            'estado_id' =>'16',

          ],
          [           
            'name_ciudad' =>'Boca de Pozo',
            'capital' =>'0',
            'estado_id' =>'16',

          ],
          [           
            'name_ciudad' =>'Boca de R??o',
            'capital' =>'0',
            'estado_id' =>'16',

          ],
          [           
            'name_ciudad' =>'El Espinal',
            'capital' =>'0',
            'estado_id' =>'16',

          ],
          [           
            'name_ciudad' =>'El Valle del Esp??ritu Santo',
            'capital' =>'0',
            'estado_id' =>'16',

          ],
          [           
            'name_ciudad' =>'El Yaque',
            'capital' =>'0',
            'estado_id' =>'16',

          ],
          [           
            'name_ciudad' =>'Juangriego',
            'capital' =>'0',
            'estado_id' =>'16',

          ],
          [           
            'name_ciudad' =>'La Asunci??n',
            'capital' =>'1',
            'estado_id' =>'16',

          ],
          [           
            'name_ciudad' =>'La Guardia',
            'capital' =>'0',
            'estado_id' =>'16',

          ],
          [           
            'name_ciudad' =>'Pampatar',
            'capital' =>'0',
            'estado_id' =>'16',

          ],
          [           
            'name_ciudad' =>'Porlamar',
            'capital' =>'0',
            'estado_id' =>'16',

          ],
          [           
            'name_ciudad' =>'Puerto Ferm??n',
            'capital' =>'0',
            'estado_id' =>'16',

          ],
          [           
            'name_ciudad' =>'Punta de Piedras',
            'capital' =>'0',
            'estado_id' =>'16',

          ],
          [           
            'name_ciudad' =>'San Francisco de Macanao',
            'capital' =>'0',
            'estado_id' =>'16',

          ],
          [           
            'name_ciudad' =>'San Juan Bautista',
            'capital' =>'0',
            'estado_id' =>'16',

          ],
          [           
            'name_ciudad' =>'San Pedro de Coche',
            'capital' =>'0',
            'estado_id' =>'16',

          ],
          [           
            'name_ciudad' =>'Santa Ana de Nueva Esparta',
            'capital' =>'0',
            'estado_id' =>'16',

          ],
          [           
            'name_ciudad' =>'Villa Rosa',
            'capital' =>'0',
            'estado_id' =>'16',

          ],
          [           
            'name_ciudad' =>'Acarigua',
            'capital' =>'0',
            'estado_id' =>'17',

          ],
          [           
            'name_ciudad' =>'Agua Blanca',
            'capital' =>'0',
            'estado_id' =>'17',

          ],
          [           
            'name_ciudad' =>'Araure',
            'capital' =>'0',
            'estado_id' =>'17',

          ],
          [           
            'name_ciudad' =>'Biscucuy',
            'capital' =>'0',
            'estado_id' =>'17',

          ],
          [           
            'name_ciudad' =>'Boconoito',
            'capital' =>'0',
            'estado_id' =>'17',

          ],
          [           
            'name_ciudad' =>'Campo El??as',
            'capital' =>'0',
            'estado_id' =>'17',

          ],
          [           
            'name_ciudad' =>'Chabasqu??n',
            'capital' =>'0',
            'estado_id' =>'17',

          ],
          [           
            'name_ciudad' =>'Guanare',
            'capital' =>'1',
            'estado_id' =>'17',

          ],
          [           
            'name_ciudad' =>'Guanarito',
            'capital' =>'0',
            'estado_id' =>'17',

          ],
          [           
            'name_ciudad' =>'La Aparici??n',
            'capital' =>'0',
            'estado_id' =>'17',

          ],
          [           
            'name_ciudad' =>'La Misi??n',
            'capital' =>'0',
            'estado_id' =>'17',

          ],
          [           
            'name_ciudad' =>'Mesa de Cavacas',
            'capital' =>'0',
            'estado_id' =>'17',

          ],
          [           
            'name_ciudad' =>'Ospino',
            'capital' =>'0',
            'estado_id' =>'17',

          ],
          [           
            'name_ciudad' =>'Papel??n',
            'capital' =>'0',
            'estado_id' =>'17',

          ],
          [           
            'name_ciudad' =>'Payara',
            'capital' =>'0',
            'estado_id' =>'17',

          ],
          [           
            'name_ciudad' =>'Pimpinela',
            'capital' =>'0',
            'estado_id' =>'17',

          ],
          [           
            'name_ciudad' =>'P??ritu de Portuguesa',
            'capital' =>'0',
            'estado_id' =>'17',

          ],
          [           
            'name_ciudad' =>'San Rafael de Onoto',
            'capital' =>'0',
            'estado_id' =>'17',

          ],
          [           
            'name_ciudad' =>'Santa Rosal??a',
            'capital' =>'0',
            'estado_id' =>'17',

          ],
          [           
            'name_ciudad' =>'Tur??n',
            'capital' =>'0',
            'estado_id' =>'17',

          ],
          [           
            'name_ciudad' =>'Altos de Sucre',
            'capital' =>'0',
            'estado_id' =>'18',

          ],
          [           
            'name_ciudad' =>'Araya',
            'capital' =>'0',
            'estado_id' =>'18',

          ],
          [           
            'name_ciudad' =>'Cariaco',
            'capital' =>'0',
            'estado_id' =>'18',

          ],
          [           
            'name_ciudad' =>'Car??pano',
            'capital' =>'0',
            'estado_id' =>'18',

          ],
          [           
            'name_ciudad' =>'Casanay',
            'capital' =>'0',
            'estado_id' =>'18',

          ],
          [           
            'name_ciudad' =>'Cuman??',
            'capital' =>'1',
            'estado_id' =>'18',

          ],
          [           
            'name_ciudad' =>'Cumanacoa',
            'capital' =>'0',
            'estado_id' =>'18',

          ],
          [           
            'name_ciudad' =>'El Morro Puerto Santo',
            'capital' =>'0',
            'estado_id' =>'18',

          ],
          [           
            'name_ciudad' =>'El Pilar',
            'capital' =>'0',
            'estado_id' =>'18',

          ],
          [           
            'name_ciudad' =>'El Poblado',
            'capital' =>'0',
            'estado_id' =>'18',

          ],
          [           
            'name_ciudad' =>'Guaca',
            'capital' =>'0',
            'estado_id' =>'18',

          ],
          [           
            'name_ciudad' =>'Guiria',
            'capital' =>'0',
            'estado_id' =>'18',

          ],
          [           
            'name_ciudad' =>'Irapa',
            'capital' =>'0',
            'estado_id' =>'18',

          ],
          [           
            'name_ciudad' =>'Manicuare',
            'capital' =>'0',
            'estado_id' =>'18',

          ],
          [           
            'name_ciudad' =>'Mariguitar',
            'capital' =>'0',
            'estado_id' =>'18',

          ],
          [           
            'name_ciudad' =>'R??o Caribe',
            'capital' =>'0',
            'estado_id' =>'18',

          ],
          [           
            'name_ciudad' =>'San Antonio del Golfo',
            'capital' =>'0',
            'estado_id' =>'18',

          ],
          [           
            'name_ciudad' =>'San Jos?? de Aerocuar',
            'capital' =>'0',
            'estado_id' =>'18',

          ],
          [           
            'name_ciudad' =>'San Vicente de Sucre',
            'capital' =>'0',
            'estado_id' =>'18',

          ],
          [           
            'name_ciudad' =>'Santa Fe de Sucre',
            'capital' =>'0',
            'estado_id' =>'18',

          ],
          [           
            'name_ciudad' =>'Tunapuy',
            'capital' =>'0',
            'estado_id' =>'18',

          ],
          [           
            'name_ciudad' =>'Yaguaraparo',
            'capital' =>'0',
            'estado_id' =>'18',

          ],
          [           
            'name_ciudad' =>'Yoco',
            'capital' =>'0',
            'estado_id' =>'18',

          ],
          [           
            'name_ciudad' =>'Abejales',
            'capital' =>'0',
            'estado_id' =>'19',

          ],
          [           
            'name_ciudad' =>'Borota',
            'capital' =>'0',
            'estado_id' =>'19',

          ],
          [           
            'name_ciudad' =>'Bramon',
            'capital' =>'0',
            'estado_id' =>'19',

          ],
          [           
            'name_ciudad' =>'Capacho',
            'capital' =>'0',
            'estado_id' =>'19',

          ],
          [           
            'name_ciudad' =>'Col??n',
            'capital' =>'0',
            'estado_id' =>'19',

          ],
          [           
            'name_ciudad' =>'Coloncito',
            'capital' =>'0',
            'estado_id' =>'19',

          ],
          [           
            'name_ciudad' =>'Cordero',
            'capital' =>'0',
            'estado_id' =>'19',

          ],
          [           
            'name_ciudad' =>'El Cobre',
            'capital' =>'0',
            'estado_id' =>'19',

          ],
          [           
            'name_ciudad' =>'El Pinal',
            'capital' =>'0',
            'estado_id' =>'19',

          ],
          [           
            'name_ciudad' =>'Independencia',
            'capital' =>'0',
            'estado_id' =>'19',

          ],
          [           
            'name_ciudad' =>'La Fr??a',
            'capital' =>'0',
            'estado_id' =>'19',

          ],
          [           
            'name_ciudad' =>'La Grita',
            'capital' =>'0',
            'estado_id' =>'19',

          ],
          [           
            'name_ciudad' =>'La Pedrera',
            'capital' =>'0',
            'estado_id' =>'19',

          ],
          [           
            'name_ciudad' =>'La Tendida',
            'capital' =>'0',
            'estado_id' =>'19',

          ],
          [           
            'name_ciudad' =>'Las Delicias',
            'capital' =>'0',
            'estado_id' =>'19',

          ],
          [           
            'name_ciudad' =>'Las Hern??ndez',
            'capital' =>'0',
            'estado_id' =>'19',

          ],
          [           
            'name_ciudad' =>'Lobatera',
            'capital' =>'0',
            'estado_id' =>'19',

          ],
          [           
            'name_ciudad' =>'Michelena',
            'capital' =>'0',
            'estado_id' =>'19',

          ],
          [           
            'name_ciudad' =>'Palmira',
            'capital' =>'0',
            'estado_id' =>'19',

          ],
          [           
            'name_ciudad' =>'Pregonero',
            'capital' =>'0',
            'estado_id' =>'19',

          ],
          [           
            'name_ciudad' =>'Queniquea',
            'capital' =>'0',
            'estado_id' =>'19',

          ],
          [           
            'name_ciudad' =>'Rubio',
            'capital' =>'0',
            'estado_id' =>'19',

          ],
          [           
            'name_ciudad' =>'San Antonio del Tachira',
            'capital' =>'0',
            'estado_id' =>'19',

          ],
          [           
            'name_ciudad' =>'San Cristobal',
            'capital' =>'1',
            'estado_id' =>'19',

          ],
          [           
            'name_ciudad' =>'San Jos?? de Bol??var',
            'capital' =>'0',
            'estado_id' =>'19',

          ],
          [           
            'name_ciudad' =>'San Josecito',
            'capital' =>'0',
            'estado_id' =>'19',

          ],
          [           
            'name_ciudad' =>'San Pedro del R??o',
            'capital' =>'0',
            'estado_id' =>'19',

          ],
          [           
            'name_ciudad' =>'Santa Ana T??chira',
            'capital' =>'0',
            'estado_id' =>'19',

          ],
          [           
            'name_ciudad' =>'Seboruco',
            'capital' =>'0',
            'estado_id' =>'19',

          ],
          [           
            'name_ciudad' =>'T??riba',
            'capital' =>'0',
            'estado_id' =>'19',

          ],
          [           
            'name_ciudad' =>'Umuquena',
            'capital' =>'0',
            'estado_id' =>'19',

          ],
          [           
            'name_ciudad' =>'Ure??a',
            'capital' =>'0',
            'estado_id' =>'19',

          ],
          [           
            'name_ciudad' =>'Batatal',
            'capital' =>'0',
            'estado_id' =>'20',

          ],
          [           
            'name_ciudad' =>'Betijoque',
            'capital' =>'0',
            'estado_id' =>'20',

          ],
          [           
            'name_ciudad' =>'Bocon??',
            'capital' =>'0',
            'estado_id' =>'20',

          ],
          [           
            'name_ciudad' =>'Carache',
            'capital' =>'0',
            'estado_id' =>'20',

          ],
          [           
            'name_ciudad' =>'Chejende',
            'capital' =>'0',
            'estado_id' =>'20',

          ],
          [           
            'name_ciudad' =>'Cuicas',
            'capital' =>'0',
            'estado_id' =>'20',

          ],
          [           
            'name_ciudad' =>'El Dividive',
            'capital' =>'0',
            'estado_id' =>'20',

          ],
          [           
            'name_ciudad' =>'El Jaguito',
            'capital' =>'0',
            'estado_id' =>'20',

          ],
          [           
            'name_ciudad' =>'Escuque',
            'capital' =>'0',
            'estado_id' =>'20',

          ],
          [           
            'name_ciudad' =>'Isnot??',
            'capital' =>'0',
            'estado_id' =>'20',

          ],
          [           
            'name_ciudad' =>'Jaj??',
            'capital' =>'0',
            'estado_id' =>'20',

          ],
          [           
            'name_ciudad' =>'La Ceiba',
            'capital' =>'0',
            'estado_id' =>'20',

          ],
          [           
            'name_ciudad' =>'La Concepci??n de Trujllo',
            'capital' =>'0',
            'estado_id' =>'20',

          ],
          [           
            'name_ciudad' =>'La Mesa de Esnujaque',
            'capital' =>'0',
            'estado_id' =>'20',

          ],
          [           
            'name_ciudad' =>'La Puerta',
            'capital' =>'0',
            'estado_id' =>'20',

          ],
          [           
            'name_ciudad' =>'La Quebrada',
            'capital' =>'0',
            'estado_id' =>'20',

          ],
          [           
            'name_ciudad' =>'Mendoza Fr??a',
            'capital' =>'0',
            'estado_id' =>'20',

          ],
          [           
            'name_ciudad' =>'Meseta de Chimpire',
            'capital' =>'0',
            'estado_id' =>'20',

          ],
          [           
            'name_ciudad' =>'Monay',
            'capital' =>'0',
            'estado_id' =>'20',

          ],
          [           
            'name_ciudad' =>'Motat??n',
            'capital' =>'0',
            'estado_id' =>'20',

          ],
          [           
            'name_ciudad' =>'Pamp??n',
            'capital' =>'0',
            'estado_id' =>'20',

          ],
          [           
            'name_ciudad' =>'Pampanito',
            'capital' =>'0',
            'estado_id' =>'20',

          ],
          [           
            'name_ciudad' =>'Sabana de Mendoza',
            'capital' =>'0',
            'estado_id' =>'20',

          ],
          [           
            'name_ciudad' =>'San L??zaro',
            'capital' =>'0',
            'estado_id' =>'20',

          ],
          [           
            'name_ciudad' =>'Santa Ana de Trujillo',
            'capital' =>'0',
            'estado_id' =>'20',

          ],
          [           
            'name_ciudad' =>'Tost??s',
            'capital' =>'0',
            'estado_id' =>'20',

          ],
          [           
            'name_ciudad' =>'Trujillo',
            'capital' =>'1',
            'estado_id' =>'20',

          ],
          [           
            'name_ciudad' =>'Valera',
            'capital' =>'0',
            'estado_id' =>'20',

          ],
          [           
            'name_ciudad' =>'Carayaca',
            'capital' =>'0',
            'estado_id' =>'21',

          ],
          [           
            'name_ciudad' =>'Litoral',
            'capital' =>'0',
            'estado_id' =>'21',

          ],
          [           
            'name_ciudad' =>'Archipi??lago Los Roques',
            'capital' =>'0',
            'estado_id' =>'25',

          ],
          [           
            'name_ciudad' =>'Aroa',
            'capital' =>'0',
            'estado_id' =>'22',

          ],
          [           
            'name_ciudad' =>'Boraure',
            'capital' =>'0',
            'estado_id' =>'22',

          ],
          [           
            'name_ciudad' =>'Campo El??as de Yaracuy',
            'capital' =>'0',
            'estado_id' =>'22',

          ],
          [           
            'name_ciudad' =>'Chivacoa',
            'capital' =>'0',
            'estado_id' =>'22',

          ],
          [           
            'name_ciudad' =>'Cocorote',
            'capital' =>'0',
            'estado_id' =>'22',

          ],
          [           
            'name_ciudad' =>'Farriar',
            'capital' =>'0',
            'estado_id' =>'22',

          ],
          [           
            'name_ciudad' =>'Guama',
            'capital' =>'0',
            'estado_id' =>'22',

          ],
          [           
            'name_ciudad' =>'Mar??n',
            'capital' =>'0',
            'estado_id' =>'22',

          ],
          [           
            'name_ciudad' =>'Nirgua',
            'capital' =>'0',
            'estado_id' =>'22',

          ],
          [           
            'name_ciudad' =>'Sabana de Parra',
            'capital' =>'0',
            'estado_id' =>'22',

          ],
          [           
            'name_ciudad' =>'Salom',
            'capital' =>'0',
            'estado_id' =>'22',

          ],
          [           
            'name_ciudad' =>'San Felipe',
            'capital' =>'1',
            'estado_id' =>'22',

          ],
          [           
            'name_ciudad' =>'San Pablo de Yaracuy',
            'capital' =>'0',
            'estado_id' =>'22',

          ],
          [           
            'name_ciudad' =>'Urachiche',
            'capital' =>'0',
            'estado_id' =>'22',

          ],
          [           
            'name_ciudad' =>'Yaritagua',
            'capital' =>'0',
            'estado_id' =>'22',

          ],
          [           
            'name_ciudad' =>'Yumare',
            'capital' =>'0',
            'estado_id' =>'22',

          ],
          [           
            'name_ciudad' =>'Bachaquero',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'Bobures',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'Cabimas',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'Campo Concepci??n',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'Campo Mara',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'Campo Rojo',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'Carrasquero',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'Casigua',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'Chiquinquir??',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'Ciudad Ojeda',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'El Batey',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'El Carmelo',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'El Chivo',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'El Guayabo',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'El Mene',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'El Venado',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'Encontrados',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'Gibraltar',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'Isla de Toas',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'La Concepci??n del Zulia',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'La Paz',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'La Sierrita',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'Lagunillas del Zulia',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'Las Piedras de Perij??',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'Los Cortijos',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'Machiques',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'Maracaibo',
            'capital' =>'1',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'Mene Grande',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'Palmarejo',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'Paraguaipoa',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'Potrerito',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'Pueblo Nuevo del Zulia',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'Puertos de Altagracia',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'Punta Gorda',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'Sabaneta de Palma',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'San Francisco',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'San Jos?? de Perij??',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'San Rafael del Moj??n',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'San Timoteo',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'Santa B??rbara Del Zulia',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'Santa Cruz de Mara',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'Santa Cruz del Zulia',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'Santa Rita',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'Sinamaica',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'Tamare',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'T??a Juana',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'Villa del Rosario',
            'capital' =>'0',
            'estado_id' =>'23',

          ],
          [           
            'name_ciudad' =>'La Guaira',
            'capital' =>'1',
            'estado_id' =>'21',

          ],
          [           
            'name_ciudad' =>'Catia La Mar',
            'capital' =>'0',
            'estado_id' =>'21',

          ],
          [           
            'name_ciudad' =>'Macuto',
            'capital' =>'0',
            'estado_id' =>'21',

          ],
          [           
            'name_ciudad' =>'Naiguat??',
            'capital' =>'0',
            'estado_id' =>'21',

          ],
          [           
            'name_ciudad' =>'Archipi??lago Los Monjes',
            'capital' =>'0',
            'estado_id' =>'25',

          ],
          [           
            'name_ciudad' =>'Isla La Tortuga y Cayos adyacentes',
            'capital' =>'0',
            'estado_id' =>'25',

          ],
          [           
            'name_ciudad' =>'Isla La Sola',
            'capital' =>'0',
            'estado_id' =>'25',

          ],
          [           
            'name_ciudad' =>'Islas Los Testigos',
            'capital' =>'0',
            'estado_id' =>'25',

          ],
          [           
            'name_ciudad' =>'Islas Los Frailes',
            'capital' =>'0',
            'estado_id' =>'25',

          ],
          [           
            'name_ciudad' =>'Isla La Orchila',
            'capital' =>'0',
            'estado_id' =>'25',

          ],
          [           
            'name_ciudad' =>'Archipi??lago Las Aves',
            'capital' =>'0',
            'estado_id' =>'25',

          ],
          [           
            'name_ciudad' =>'Isla de Aves',
            'capital' =>'0',
            'estado_id' =>'25',

          ],
          [           
            'name_ciudad' =>'Isla La Blanquilla',
            'capital' =>'0',
            'estado_id' =>'25',

          ],
          [           
            'name_ciudad' =>'Isla de Patos',
            'capital' =>'0',
            'estado_id' =>'25',

          ],
          [           
            'name_ciudad' =>'Islas Los Hermanos',
            'capital' =>'0',
            'estado_id' =>'25',

          ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ciudad');
    }
}
