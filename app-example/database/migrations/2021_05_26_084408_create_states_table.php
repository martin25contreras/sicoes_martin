<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estado', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_estado', 50);
            
            $table->unsignedBigInteger('pais_id');        

            $table->foreign('pais_id')->references('id')->on('pais');

        });

        DB::table('estado')->insert([ 
          [
            'nombre_estado' =>'Amazonas',
            'pais_id' =>'1',
          ],   
          [          
            'nombre_estado' =>'Anzoátegui',
            'pais_id' =>'1',

          ],   
          [          
            'nombre_estado' =>'Apure',
            'pais_id' =>'1',

          ],   
          [          
            'nombre_estado' =>'Aragua',
            'pais_id' =>'1',

          ],   
          [          
            'nombre_estado' =>'Barinas',
            'pais_id' =>'1',

          ],   
          [          
            'nombre_estado' =>'Bolívar',
            'pais_id' =>'1',

          ],   
          [          
            'nombre_estado' =>'Carabobo',
            'pais_id' =>'1',

          ],   
          [          
            'nombre_estado' =>'Cojedes',
            'pais_id' =>'1',

          ],   
          [          
            'nombre_estado' =>'Delta Amacuro',
            'pais_id' =>'1',

          ],   
          [          
            'nombre_estado' =>'Falcón',
            'pais_id' =>'1',

          ],   
          [          
            'nombre_estado' =>'Guárico',
            'pais_id' =>'1',

          ],   
          [          
            'nombre_estado' =>'Lara',
            'pais_id' =>'1',

          ],   
          [          
            'nombre_estado' =>'Mérida',
            'pais_id' =>'1',

          ],   
          [          
            'nombre_estado' =>'Miranda',
            'pais_id' =>'1',

          ],   
          [          
            'nombre_estado' =>'Monagas',
            'pais_id' =>'1',

          ],   
          [          
            'nombre_estado' =>'Nueva Esparta',
            'pais_id' =>'1',

          ],   
          [          
            'nombre_estado' =>'Portuguesa',
            'pais_id' =>'1',

          ],   
          [          
            'nombre_estado' =>'Sucre',
            'pais_id' =>'1',

          ],   
          [          
            'nombre_estado' =>'Táchira',
            'pais_id' =>'1',

          ],   
          [          
            'nombre_estado' =>'Trujillo',
            'pais_id' =>'1',

          ],   
          [          
            'nombre_estado' =>'La Guaira',
            'pais_id' =>'1',

          ],   
          [          
            'nombre_estado' =>'Yaracuy',
            'pais_id' =>'1',

          ],   
          [          
            'nombre_estado' =>'Zulia',
            'pais_id' =>'1',

          ],   
          [          
            'nombre_estado' =>'Distrito Capital',
            'pais_id' =>'1',

          ],   
          [          
            'nombre_estado' =>'Dependencias Federales',
            'pais_id' =>'1',

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
        Schema::dropIfExists('estado');
    }
}
