<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100);
            $table->integer('carga_horaria');
            $table->enum('grado', ['1', '2', '3', '4', '5', '6']);
            $table->enum('seccion', ['A', 'B', 'C']);
            $table->boolean('estatus')->default(true);

        });

        DB::table('area')->insert([  
              /*1 Grado*/
          [     
            'nombre'        =>'Matemática',
            'carga_horaria' =>'1',
            'grado'         =>'1',
            'seccion'       =>'A',

          ],
          [     
            'nombre'        =>'Lenguaje',
            'carga_horaria' =>'1',
            'grado'         =>'1',
            'seccion'       =>'A',

          ],
          [     
            'nombre'        =>'Ciencia Naturales',
            'carga_horaria' =>'1',
            'grado'         =>'1',
            'seccion'       =>'A',

          ],
          [     
            'nombre'        =>'Ciencia Sociales',
            'carga_horaria' =>'1',
            'grado'         =>'1',
            'seccion'       =>'A',

          ],
          [     
            'nombre'        =>'Estética',
            'carga_horaria' =>'1',
            'grado'         =>'1',
            'seccion'       =>'A',

          ],
          [     
            'nombre'        =>'Ser y Vivir',
            'carga_horaria' =>'1',
            'grado'         =>'1',
            'seccion'       =>'A',

          ],
          [     
            'nombre'        =>'Matemática',
            'carga_horaria' =>'1',
            'grado'         =>'1',
            'seccion'       =>'B',

          ],
          [     
            'nombre'        =>'Lenguaje',
            'carga_horaria' =>'1',
            'grado'         =>'1',
            'seccion'       =>'B',

          ],
          [     
            'nombre'        =>'Ciencia Naturales',
            'carga_horaria' =>'1',
            'grado'         =>'1',
            'seccion'       =>'B',

          ],
          [     
            'nombre'        =>'Ciencia Sociales',
            'carga_horaria' =>'1',
            'grado'         =>'1',
            'seccion'       =>'B',

          ],
          [     
            'nombre'        =>'Estética',
            'carga_horaria' =>'1',
            'grado'         =>'1',
            'seccion'       =>'B',

          ],
          [     
            'nombre'        =>'Ser y Vivir',
            'carga_horaria' =>'1',
            'grado'         =>'1',
            'seccion'       =>'B',

          ],
          [     
            'nombre'        =>'Matemática',
            'carga_horaria' =>'1',
            'grado'         =>'1',
            'seccion'       =>'C',

          ],
          [     
            'nombre'        =>'Lenguaje',
            'carga_horaria' =>'1',
            'grado'         =>'1',
            'seccion'       =>'C',

          ],
          [     
            'nombre'        =>'Ciencia Naturales',
            'carga_horaria' =>'1',
            'grado'         =>'1',
            'seccion'       =>'C',

          ],
          [     
            'nombre'        =>'Ciencia Sociales',
            'carga_horaria' =>'1',
            'grado'         =>'1',
            'seccion'       =>'C',

          ],
          [     
            'nombre'        =>'Estética',
            'carga_horaria' =>'1',
            'grado'         =>'1',
            'seccion'       =>'C',

          ],
          [     
            'nombre'        =>'Ser y Vivir',
            'carga_horaria' =>'1',
            'grado'         =>'1',
            'seccion'       =>'C',

          ],
              /*2 Grado*/
          [     
            'nombre'        =>'Matemática',
            'carga_horaria' =>'1',
            'grado'         =>'2',
            'seccion'       =>'A',

          ],
          [     
            'nombre'        =>'Lenguaje',
            'carga_horaria' =>'1',
            'grado'         =>'2',
            'seccion'       =>'A',

          ],
          [     
            'nombre'        =>'Ciencia Naturales',
            'carga_horaria' =>'1',
            'grado'         =>'2',
            'seccion'       =>'A',

          ],
          [     
            'nombre'        =>'Ciencia Sociales',
            'carga_horaria' =>'1',
            'grado'         =>'2',
            'seccion'       =>'A',

          ],
          [     
            'nombre'        =>'Estética',
            'carga_horaria' =>'1',
            'grado'         =>'2',
            'seccion'       =>'A',

          ],
          [     
            'nombre'        =>'Ser y Vivir',
            'carga_horaria' =>'1',
            'grado'         =>'2',
            'seccion'       =>'A',

          ],
          [     
            'nombre'        =>'Matemática',
            'carga_horaria' =>'1',
            'grado'         =>'2',
            'seccion'       =>'B',

          ],
          [     
            'nombre'        =>'Lenguaje',
            'carga_horaria' =>'1',
            'grado'         =>'2',
            'seccion'       =>'B',

          ],
          [     
            'nombre'        =>'Ciencia Naturales',
            'carga_horaria' =>'1',
            'grado'         =>'2',
            'seccion'       =>'B',

          ],
          [     
            'nombre'        =>'Ciencia Sociales',
            'carga_horaria' =>'1',
            'grado'         =>'2',
            'seccion'       =>'B',

          ],
          [     
            'nombre'        =>'Estética',
            'carga_horaria' =>'1',
            'grado'         =>'2',
            'seccion'       =>'B',

          ],
          [     
            'nombre'        =>'Ser y Vivir',
            'carga_horaria' =>'1',
            'grado'         =>'2',
            'seccion'       =>'B',

          ],
          [     
            'nombre'        =>'Matemática',
            'carga_horaria' =>'1',
            'grado'         =>'2',
            'seccion'       =>'C',

          ],
          [     
            'nombre'        =>'Lenguaje',
            'carga_horaria' =>'1',
            'grado'         =>'2',
            'seccion'       =>'C',

          ],
          [     
            'nombre'        =>'Ciencia Naturales',
            'carga_horaria' =>'1',
            'grado'         =>'2',
            'seccion'       =>'C',

          ],
          [     
            'nombre'        =>'Ciencia Sociales',
            'carga_horaria' =>'1',
            'grado'         =>'2',
            'seccion'       =>'C',

          ],
          [     
            'nombre'        =>'Estética',
            'carga_horaria' =>'1',
            'grado'         =>'2',
            'seccion'       =>'C',

          ],
          [     
            'nombre'        =>'Ser y Vivir',
            'carga_horaria' =>'1',
            'grado'         =>'2',
            'seccion'       =>'C',

          ],
              /*3 Grado*/
          [     
            'nombre'        =>'Matemática',
            'carga_horaria' =>'1',
            'grado'         =>'3',
            'seccion'       =>'A',

          ],
          [     
            'nombre'        =>'Lenguaje',
            'carga_horaria' =>'1',
            'grado'         =>'3',
            'seccion'       =>'A',

          ],
          [     
            'nombre'        =>'Ciencia Naturales',
            'carga_horaria' =>'1',
            'grado'         =>'3',
            'seccion'       =>'A',

          ],
          [     
            'nombre'        =>'Ciencia Sociales',
            'carga_horaria' =>'1',
            'grado'         =>'3',
            'seccion'       =>'A',

          ],
          [     
            'nombre'        =>'Estética',
            'carga_horaria' =>'1',
            'grado'         =>'3',
            'seccion'       =>'A',

          ],
          [     
            'nombre'        =>'Ser y Vivir',
            'carga_horaria' =>'1',
            'grado'         =>'3',
            'seccion'       =>'A',

          ],
          [     
            'nombre'        =>'Matemática',
            'carga_horaria' =>'1',
            'grado'         =>'3',
            'seccion'       =>'B',

          ],
          [     
            'nombre'        =>'Lenguaje',
            'carga_horaria' =>'1',
            'grado'         =>'3',
            'seccion'       =>'B',

          ],
          [     
            'nombre'        =>'Ciencia Naturales',
            'carga_horaria' =>'1',
            'grado'         =>'3',
            'seccion'       =>'B',

          ],
          [     
            'nombre'        =>'Ciencia Sociales',
            'carga_horaria' =>'1',
            'grado'         =>'3',
            'seccion'       =>'B',

          ],
          [     
            'nombre'        =>'Estética',
            'carga_horaria' =>'1',
            'grado'         =>'3',
            'seccion'       =>'B',

          ],
          [     
            'nombre'        =>'Ser y Vivir',
            'carga_horaria' =>'1',
            'grado'         =>'3',
            'seccion'       =>'B',

          ],
          [     
            'nombre'        =>'Matemática',
            'carga_horaria' =>'1',
            'grado'         =>'3',
            'seccion'       =>'C',

          ],
          [     
            'nombre'        =>'Lenguaje',
            'carga_horaria' =>'1',
            'grado'         =>'3',
            'seccion'       =>'C',

          ],
          [     
            'nombre'        =>'Ciencia Naturales',
            'carga_horaria' =>'1',
            'grado'         =>'3',
            'seccion'       =>'C',

          ],
          [     
            'nombre'        =>'Ciencia Sociales',
            'carga_horaria' =>'1',
            'grado'         =>'3',
            'seccion'       =>'C',

          ],
          [     
            'nombre'        =>'Estética',
            'carga_horaria' =>'1',
            'grado'         =>'3',
            'seccion'       =>'C',

          ],
          [     
            'nombre'        =>'Ser y Vivir',
            'carga_horaria' =>'1',
            'grado'         =>'3',
            'seccion'       =>'C',

          ],
               /*4 Grado*/
          [     
            'nombre'        =>'Matemática',
            'carga_horaria' =>'1',
            'grado'         =>'4',
            'seccion'       =>'A',

          ],
          [     
            'nombre'        =>'Lenguaje',
            'carga_horaria' =>'1',
            'grado'         =>'4',
            'seccion'       =>'A',

          ],
          [     
            'nombre'        =>'Ciencia Naturales',
            'carga_horaria' =>'1',
            'grado'         =>'4',
            'seccion'       =>'A',

          ],
          [     
            'nombre'        =>'Ciencia Sociales',
            'carga_horaria' =>'1',
            'grado'         =>'4',
            'seccion'       =>'A',

          ],
          [     
            'nombre'        =>'Estética',
            'carga_horaria' =>'1',
            'grado'         =>'4',
            'seccion'       =>'A',

          ],
          [     
            'nombre'        =>'Ser y Vivir',
            'carga_horaria' =>'1',
            'grado'         =>'4',
            'seccion'       =>'A',

          ],
          [     
            'nombre'        =>'Matemática',
            'carga_horaria' =>'1',
            'grado'         =>'4',
            'seccion'       =>'B',

          ],
          [     
            'nombre'        =>'Lenguaje',
            'carga_horaria' =>'1',
            'grado'         =>'4',
            'seccion'       =>'B',

          ],
          [     
            'nombre'        =>'Ciencia Naturales',
            'carga_horaria' =>'1',
            'grado'         =>'4',
            'seccion'       =>'B',

          ],
          [     
            'nombre'        =>'Ciencia Sociales',
            'carga_horaria' =>'1',
            'grado'         =>'4',
            'seccion'       =>'B',

          ],
          [     
            'nombre'        =>'Estética',
            'carga_horaria' =>'1',
            'grado'         =>'4',
            'seccion'       =>'B',

          ],
          [     
            'nombre'        =>'Ser y Vivir',
            'carga_horaria' =>'1',
            'grado'         =>'4',
            'seccion'       =>'B',

          ],
          [     
            'nombre'        =>'Matemática',
            'carga_horaria' =>'1',
            'grado'         =>'4',
            'seccion'       =>'C',

          ],
          [     
            'nombre'        =>'Lenguaje',
            'carga_horaria' =>'1',
            'grado'         =>'4',
            'seccion'       =>'C',

          ],
          [     
            'nombre'        =>'Ciencia Naturales',
            'carga_horaria' =>'1',
            'grado'         =>'4',
            'seccion'       =>'C',

          ],
          [     
            'nombre'        =>'Ciencia Sociales',
            'carga_horaria' =>'1',
            'grado'         =>'4',
            'seccion'       =>'C',

          ],
          [     
            'nombre'        =>'Estética',
            'carga_horaria' =>'1',
            'grado'         =>'4',
            'seccion'       =>'C',

          ],
          [     
            'nombre'        =>'Ser y Vivir',
            'carga_horaria' =>'1',
            'grado'         =>'4',
            'seccion'       =>'C',
          ],
               /*5 Grado*/
          [     
            'nombre'        =>'Matemática',
            'carga_horaria' =>'1',
            'grado'         =>'5',
            'seccion'       =>'A',

          ],
          [     
            'nombre'        =>'Lenguaje',
            'carga_horaria' =>'1',
            'grado'         =>'5',
            'seccion'       =>'A',

          ],
          [     
            'nombre'        =>'Ciencia Naturales',
            'carga_horaria' =>'1',
            'grado'         =>'5',
            'seccion'       =>'A',

          ],
          [     
            'nombre'        =>'Ciencia Sociales',
            'carga_horaria' =>'1',
            'grado'         =>'5',
            'seccion'       =>'A',

          ],
          [     
            'nombre'        =>'Estética',
            'carga_horaria' =>'1',
            'grado'         =>'5',
            'seccion'       =>'A',

          ],
          [     
            'nombre'        =>'Ser y Vivir',
            'carga_horaria' =>'1',
            'grado'         =>'5',
            'seccion'       =>'A',

          ],
          [     
            'nombre'        =>'Matemática',
            'carga_horaria' =>'1',
            'grado'         =>'5',
            'seccion'       =>'B',

          ],
          [     
            'nombre'        =>'Lenguaje',
            'carga_horaria' =>'1',
            'grado'         =>'5',
            'seccion'       =>'B',

          ],
          [     
            'nombre'        =>'Ciencia Naturales',
            'carga_horaria' =>'1',
            'grado'         =>'5',
            'seccion'       =>'B',

          ],
          [     
            'nombre'        =>'Ciencia Sociales',
            'carga_horaria' =>'1',
            'grado'         =>'5',
            'seccion'       =>'B',

          ],
          [     
            'nombre'        =>'Estética',
            'carga_horaria' =>'1',
            'grado'         =>'5',
            'seccion'       =>'B',

          ],
          [     
            'nombre'        =>'Ser y Vivir',
            'carga_horaria' =>'1',
            'grado'         =>'5',
            'seccion'       =>'B',

          ],
          [     
            'nombre'        =>'Matemática',
            'carga_horaria' =>'1',
            'grado'         =>'5',
            'seccion'       =>'C',

          ],
          [     
            'nombre'        =>'Lenguaje',
            'carga_horaria' =>'1',
            'grado'         =>'5',
            'seccion'       =>'C',

          ],
          [     
            'nombre'        =>'Ciencia Naturales',
            'carga_horaria' =>'1',
            'grado'         =>'5',
            'seccion'       =>'C',

          ],
          [     
            'nombre'        =>'Ciencia Sociales',
            'carga_horaria' =>'1',
            'grado'         =>'5',
            'seccion'       =>'C',

          ],
          [     
            'nombre'        =>'Estética',
            'carga_horaria' =>'1',
            'grado'         =>'5',
            'seccion'       =>'C',

          ],
          [     
            'nombre'        =>'Ser y Vivir',
            'carga_horaria' =>'1',
            'grado'         =>'5',
            'seccion'       =>'C',
          ],
               /*6 Grado*/
          [     
            'nombre'        =>'Matemática',
            'carga_horaria' =>'1',
            'grado'         =>'6',
            'seccion'       =>'A',

          ],
          [     
            'nombre'        =>'Lenguaje',
            'carga_horaria' =>'1',
            'grado'         =>'6',
            'seccion'       =>'A',

          ],
          [     
            'nombre'        =>'Ciencia Naturales',
            'carga_horaria' =>'1',
            'grado'         =>'6',
            'seccion'       =>'A',

          ],
          [     
            'nombre'        =>'Ciencia Sociales',
            'carga_horaria' =>'1',
            'grado'         =>'6',
            'seccion'       =>'A',

          ],
          [     
            'nombre'        =>'Estética',
            'carga_horaria' =>'1',
            'grado'         =>'6',
            'seccion'       =>'A',

          ],
          [     
            'nombre'        =>'Ser y Vivir',
            'carga_horaria' =>'1',
            'grado'         =>'6',
            'seccion'       =>'A',

          ],
          [     
            'nombre'        =>'Matemática',
            'carga_horaria' =>'1',
            'grado'         =>'6',
            'seccion'       =>'B',

          ],
          [     
            'nombre'        =>'Lenguaje',
            'carga_horaria' =>'1',
            'grado'         =>'6',
            'seccion'       =>'B',

          ],
          [     
            'nombre'        =>'Ciencia Naturales',
            'carga_horaria' =>'1',
            'grado'         =>'6',
            'seccion'       =>'B',

          ],
          [     
            'nombre'        =>'Ciencia Sociales',
            'carga_horaria' =>'1',
            'grado'         =>'6',
            'seccion'       =>'B',

          ],
          [     
            'nombre'        =>'Estética',
            'carga_horaria' =>'1',
            'grado'         =>'6',
            'seccion'       =>'B',

          ],
          [     
            'nombre'        =>'Ser y Vivir',
            'carga_horaria' =>'1',
            'grado'         =>'6',
            'seccion'       =>'B',

          ],
          [     
            'nombre'        =>'Matemática',
            'carga_horaria' =>'1',
            'grado'         =>'6',
            'seccion'       =>'C',

          ],
          [     
            'nombre'        =>'Lenguaje',
            'carga_horaria' =>'1',
            'grado'         =>'6',
            'seccion'       =>'C',

          ],
          [     
            'nombre'        =>'Ciencia Naturales',
            'carga_horaria' =>'1',
            'grado'         =>'6',
            'seccion'       =>'C',

          ],
          [     
            'nombre'        =>'Ciencia Sociales',
            'carga_horaria' =>'1',
            'grado'         =>'6',
            'seccion'       =>'C',

          ],
          [     
            'nombre'        =>'Estética',
            'carga_horaria' =>'1',
            'grado'         =>'6',
            'seccion'       =>'C',

          ],
          [     
            'nombre'        =>'Ser y Vivir',
            'carga_horaria' =>'1',
            'grado'         =>'6',
            'seccion'       =>'C',
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
        Schema::dropIfExists('area');
    }
}
