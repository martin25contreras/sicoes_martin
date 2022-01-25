<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMunicipalitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipio', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_municipio', 50);
            
            $table->unsignedBigInteger('estado_id');

            $table->foreign('estado_id')->references('id')->on('estado');
        });

        DB::table('municipio')->insert([
          [
            'nombre_municipio' =>'Alto Orinoco',
            'estado_id' =>'1',

          ],
          [         
            'nombre_municipio' =>'Atabapo',
            'estado_id' =>'1',

          ],
          [         
            'nombre_municipio' =>'Atures',
            'estado_id' =>'1',

          ],
          [         
            'nombre_municipio' =>'Autana',
            'estado_id' =>'1',

          ],
          [         
            'nombre_municipio' =>'Manapiare',
            'estado_id' =>'1',

          ],
          [         
            'nombre_municipio' =>'Maroa',
            'estado_id' =>'1',

          ],
          [         
            'nombre_municipio' =>'Río Negro',
            'estado_id' =>'1',

          ],
          [         
            'nombre_municipio' =>'Anaco',
            'estado_id' =>'2',

          ],
          [         
            'nombre_municipio' =>'Aragua',
            'estado_id' =>'2',

          ],
          [         
            'nombre_municipio' =>'Manuel Ezequiel Bruzual',
            'estado_id' =>'2',

          ],
          [         
            'nombre_municipio' =>'Diego Bautista Urbaneja',
            'estado_id' =>'2',

          ],
          [         
            'nombre_municipio' =>'Fernando Peñalver',
            'estado_id' =>'2',

          ],
          [         
            'nombre_municipio' =>'Francisco Del Carmen Carvajal',
            'estado_id' =>'2',

          ],
          [         
            'nombre_municipio' =>'General Sir Arthur McGregor',
            'estado_id' =>'2',

          ],
          [         
            'nombre_municipio' =>'Guanta',
            'estado_id' =>'2',

          ],
          [         
            'nombre_municipio' =>'Independencia',
            'estado_id' =>'2',

          ],
          [         
            'nombre_municipio' =>'José Gregorio Monagas',
            'estado_id' =>'2',

          ],
          [         
            'nombre_municipio' =>'Juan Antonio Sotillo',
            'estado_id' =>'2',

          ],
          [         
            'nombre_municipio' =>'Juan Manuel Cajigal',
            'estado_id' =>'2',

          ],
          [         
            'nombre_municipio' =>'Libertad',
            'estado_id' =>'2',

          ],
          [         
            'nombre_municipio' =>'Francisco de Miranda',
            'estado_id' =>'2',

          ],
          [         
            'nombre_municipio' =>'Pedro María Freites',
            'estado_id' =>'2',

          ],
          [         
            'nombre_municipio' =>'Píritu',
            'estado_id' =>'2',

          ],
          [         
            'nombre_municipio' =>'San José de Guanipa',
            'estado_id' =>'2',

          ],
          [         
            'nombre_municipio' =>'San Juan de Capistrano',
            'estado_id' =>'2',

          ],
          [         
            'nombre_municipio' =>'Santa Ana',
            'estado_id' =>'2',

          ],
          [         
            'nombre_municipio' =>'Simón Bolívar',
            'estado_id' =>'2',

          ],
          [         
            'nombre_municipio' =>'Simón Rodríguez',
            'estado_id' =>'2',

          ],
          [         
            'nombre_municipio' =>'Achaguas',
            'estado_id' =>'3',

          ],
          [         
            'nombre_municipio' =>'Biruaca',
            'estado_id' =>'3',

          ],
          [         
            'nombre_municipio' =>'Muñóz',
            'estado_id' =>'3',

          ],
          [         
            'nombre_municipio' =>'Páez',
            'estado_id' =>'3',

          ],
          [         
            'nombre_municipio' =>'Pedro Camejo',
            'estado_id' =>'3',

          ],
          [         
            'nombre_municipio' =>'Rómulo Gallegos',
            'estado_id' =>'3',

          ],
          [         
            'nombre_municipio' =>'San Fernando',
            'estado_id' =>'3',

          ],
          [         
            'nombre_municipio' =>'Atanasio Girardot',
            'estado_id' =>'4',

          ],
          [         
            'nombre_municipio' =>'Bolívar',
            'estado_id' =>'4',

          ],
          [         
            'nombre_municipio' =>'Camatagua',
            'estado_id' =>'4',

          ],
          [         
            'nombre_municipio' =>'Francisco Linares Alcántara',
            'estado_id' =>'4',

          ],
          [         
            'nombre_municipio' =>'José Ángel Lamas',
            'estado_id' =>'4',

          ],
          [         
            'nombre_municipio' =>'José Félix Ribas',
            'estado_id' =>'4',

          ],
          [         
            'nombre_municipio' =>'José Rafael Revenga',
            'estado_id' =>'4',

          ],
          [         
            'nombre_municipio' =>'Libertador',
            'estado_id' =>'4',

          ],
          [         
            'nombre_municipio' =>'Mario Briceño Iragorry',
            'estado_id' =>'4',

          ],
          [         
            'nombre_municipio' =>'Ocumare de la Costa de Oro',
            'estado_id' =>'4',

          ],
          [         
            'nombre_municipio' =>'San Casimiro',
            'estado_id' =>'4',

          ],
          [         
            'nombre_municipio' =>'San Sebastián',
            'estado_id' =>'4',

          ],
          [         
            'nombre_municipio' =>'Santiago Mariño',
            'estado_id' =>'4',

          ],
          [         
            'nombre_municipio' =>'Santos Michelena',
            'estado_id' =>'4',

          ],
          [         
            'nombre_municipio' =>'Sucre',
            'estado_id' =>'4',

          ],
          [         
            'nombre_municipio' =>'Tovar',
            'estado_id' =>'4',

          ],
          [         
            'nombre_municipio' =>'Urdaneta',
            'estado_id' =>'4',

          ],
          [         
            'nombre_municipio' =>'Zamora',
            'estado_id' =>'4',

          ],
          [         
            'nombre_municipio' =>'Alberto Arvelo Torrealba',
            'estado_id' =>'5',

          ],
          [         
            'nombre_municipio' =>'Andrés Eloy Blanco',
            'estado_id' =>'5',

          ],
          [         
            'nombre_municipio' =>'Antonio José de Sucre',
            'estado_id' =>'5',

          ],
          [         
            'nombre_municipio' =>'Arismendi',
            'estado_id' =>'5',

          ],
          [         
            'nombre_municipio' =>'Barinas',
            'estado_id' =>'5',

          ],
          [         
            'nombre_municipio' =>'Bolívar',
            'estado_id' =>'5',

          ],
          [         
            'nombre_municipio' =>'Cruz Paredes',
            'estado_id' =>'5',

          ],
          [         
            'nombre_municipio' =>'Ezequiel Zamora',
            'estado_id' =>'5',

          ],
          [         
            'nombre_municipio' =>'Obispos',
            'estado_id' =>'5',

          ],
          [         
            'nombre_municipio' =>'Pedraza',
            'estado_id' =>'5',

          ],
          [         
            'nombre_municipio' =>'Rojas',
            'estado_id' =>'5',

          ],
          [         
            'nombre_municipio' =>'Sosa',
            'estado_id' =>'5',

          ],
          [         
            'nombre_municipio' =>'Caroní',
            'estado_id' =>'6',

          ],
          [         
            'nombre_municipio' =>'Cedeño',
            'estado_id' =>'6',

          ],
          [         
            'nombre_municipio' =>'El Callao',
            'estado_id' =>'6',

          ],
          [         
            'nombre_municipio' =>'Gran Sabana',
            'estado_id' =>'6',

          ],
          [         
            'nombre_municipio' =>'Heres',
            'estado_id' =>'6',

          ],
          [         
            'nombre_municipio' =>'Piar',
            'estado_id' =>'6',

          ],
          [         
            'nombre_municipio' =>'Angostura (Raúl Leoni)',
            'estado_id' =>'6',

          ],
          [         
            'nombre_municipio' =>'Roscio',
            'estado_id' =>'6',

          ],
          [         
            'nombre_municipio' =>'Sifontes',
            'estado_id' =>'6',

          ],
          [         
            'nombre_municipio' =>'Sucre',
            'estado_id' =>'6',

          ],
          [         
            'nombre_municipio' =>'Padre Pedro Chien',
            'estado_id' =>'6',

          ],
          [         
            'nombre_municipio' =>'Bejuma',
            'estado_id' =>'7',

          ],
          [         
            'nombre_municipio' =>'Carlos Arvelo',
            'estado_id' =>'7',

          ],
          [         
            'nombre_municipio' =>'Diego Ibarra',
            'estado_id' =>'7',

          ],
          [         
            'nombre_municipio' =>'Guacara',
            'estado_id' =>'7',

          ],
          [         
            'nombre_municipio' =>'Juan José Mora',
            'estado_id' =>'7',

          ],
          [         
            'nombre_municipio' =>'Libertador',
            'estado_id' =>'7',

          ],
          [         
            'nombre_municipio' =>'Los Guayos',
            'estado_id' =>'7',

          ],
          [         
            'nombre_municipio' =>'Miranda',
            'estado_id' =>'7',

          ],
          [         
            'nombre_municipio' =>'Montalbán',
            'estado_id' =>'7',

          ],
          [         
            'nombre_municipio' =>'Naguanagua',
            'estado_id' =>'7',

          ],
          [         
            'nombre_municipio' =>'Puerto Cabello',
            'estado_id' =>'7',

          ],
          [         
            'nombre_municipio' =>'San Diego',
            'estado_id' =>'7',

          ],
          [         
            'nombre_municipio' =>'San Joaquín',
            'estado_id' =>'7',

          ],
          [         
            'nombre_municipio' =>'Valencia',
            'estado_id' =>'7',

          ],
          [         
            'nombre_municipio' =>'Anzoátegui',
            'estado_id' =>'8',

          ],
          [         
            'nombre_municipio' =>'Tinaquillo',
            'estado_id' =>'8',

          ],
          [         
            'nombre_municipio' =>'Girardot',
            'estado_id' =>'8',

          ],
          [         
            'nombre_municipio' =>'Lima Blanco',
            'estado_id' =>'8',

          ],
          [         
            'nombre_municipio' =>'Pao de San Juan Bautista',
            'estado_id' =>'8',

          ],
          [         
            'nombre_municipio' =>'Ricaurte',
            'estado_id' =>'8',

          ],
          [         
            'nombre_municipio' =>'Rómulo Gallegos',
            'estado_id' =>'8',

          ],
          [         
            'nombre_municipio' =>'San Carlos',
            'estado_id' =>'8',

          ],
          [         
            'nombre_municipio' =>'Tinaco',
            'estado_id' =>'8',

          ],
          [         
            'nombre_municipio' =>'Antonio Díaz',
            'estado_id' =>'9',

          ],
          [         
            'nombre_municipio' =>'Casacoima',
            'estado_id' =>'9',

          ],
          [         
            'nombre_municipio' =>'Pedernales',
            'estado_id' =>'9',

          ],
          [         
            'nombre_municipio' =>'Tucupita',
            'estado_id' =>'9',

          ],
          [         
            'nombre_municipio' =>'Acosta',
            'estado_id' =>'10',

          ],
          [         
            'nombre_municipio' =>'Bolívar',
            'estado_id' =>'10',

          ],
          [         
            'nombre_municipio' =>'Buchivacoa',
            'estado_id' =>'10',

          ],
          [         
            'nombre_municipio' =>'Cacique Manaure',
            'estado_id' =>'10',

          ],
          [         
            'nombre_municipio' =>'Carirubana',
            'estado_id' =>'10',

          ],
          [         
            'nombre_municipio' =>'Colina',
            'estado_id' =>'10',

          ],
          [         
            'nombre_municipio' =>'Dabajuro',
            'estado_id' =>'10',

          ],
          [         
            'nombre_municipio' =>'Democracia',
            'estado_id' =>'10',

          ],
          [         
            'nombre_municipio' =>'Falcón',
            'estado_id' =>'10',

          ],
          [         
            'nombre_municipio' =>'Federación',
            'estado_id' =>'10',

          ],
          [         
            'nombre_municipio' =>'Jacura',
            'estado_id' =>'10',

          ],
          [         
            'nombre_municipio' =>'José Laurencio Silva',
            'estado_id' =>'10',

          ],
          [         
            'nombre_municipio' =>'Los Taques',
            'estado_id' =>'10',

          ],
          [         
            'nombre_municipio' =>'Mauroa',
            'estado_id' =>'10',

          ],
          [         
            'nombre_municipio' =>'Miranda',
            'estado_id' =>'10',

          ],
          [         
            'nombre_municipio' =>'Monseñor Iturriza',
            'estado_id' =>'10',

          ],
          [         
            'nombre_municipio' =>'Palmasola',
            'estado_id' =>'10',

          ],
          [         
            'nombre_municipio' =>'Petit',
            'estado_id' =>'10',

          ],
          [         
            'nombre_municipio' =>'Píritu',
            'estado_id' =>'10',

          ],
          [         
            'nombre_municipio' =>'San Francisco',
            'estado_id' =>'10',

          ],
          [         
            'nombre_municipio' =>'Sucre',
            'estado_id' =>'10',

          ],
          [         
            'nombre_municipio' =>'Tocópero',
            'estado_id' =>'10',

          ],
          [         
            'nombre_municipio' =>'Unión',
            'estado_id' =>'10',

          ],
          [         
            'nombre_municipio' =>'Urumaco',
            'estado_id' =>'10',

          ],
          [         
            'nombre_municipio' =>'Zamora',
            'estado_id' =>'10',

          ],
          [         
            'nombre_municipio' =>'Camaguán',
            'estado_id' =>'11',

          ],
          [         
            'nombre_municipio' =>'Chaguaramas',
            'estado_id' =>'11',

          ],
          [         
            'nombre_municipio' =>'El Socorro',
            'estado_id' =>'11',

          ],
          [         
            'nombre_municipio' =>'José Félix Ribas',
            'estado_id' =>'11',

          ],
          [         
            'nombre_municipio' =>'José Tadeo Monagas',
            'estado_id' =>'11',

          ],
          [         
            'nombre_municipio' =>'Juan Germán Roscio',
            'estado_id' =>'11',

          ],
          [         
            'nombre_municipio' =>'Julián Mellado',
            'estado_id' =>'11',

          ],
          [         
            'nombre_municipio' =>'Las Mercedes',
            'estado_id' =>'11',

          ],
          [         
            'nombre_municipio' =>'Leonardo Infante',
            'estado_id' =>'11',

          ],
          [         
            'nombre_municipio' =>'Pedro Zaraza',
            'estado_id' =>'11',

          ],
          [         
            'nombre_municipio' =>'Ortíz',
            'estado_id' =>'11',

          ],
          [         
            'nombre_municipio' =>'San Gerónimo de Guayabal',
            'estado_id' =>'11',

          ],
          [         
            'nombre_municipio' =>'San José de Guaribe',
            'estado_id' =>'11',

          ],
          [         
            'nombre_municipio' =>'Santa María de Ipire',
            'estado_id' =>'11',

          ],
          [         
            'nombre_municipio' =>'Sebastián Francisco de Miranda',
            'estado_id' =>'11',

          ],
          [         
            'nombre_municipio' =>'Andrés Eloy Blanco',
            'estado_id' =>'12',

          ],
          [         
            'nombre_municipio' =>'Crespo',
            'estado_id' =>'12',

          ],
          [         
            'nombre_municipio' =>'Iribarren',
            'estado_id' =>'12',

          ],
          [         
            'nombre_municipio' =>'Jiménez',
            'estado_id' =>'12',

          ],
          [         
            'nombre_municipio' =>'Morán',
            'estado_id' =>'12',

          ],
          [         
            'nombre_municipio' =>'Palavecino',
            'estado_id' =>'12',

          ],
          [         
            'nombre_municipio' =>'Simón Planas',
            'estado_id' =>'12',

          ],
          [         
            'nombre_municipio' =>'Torres',
            'estado_id' =>'12',

          ],
          [         
            'nombre_municipio' =>'Urdaneta',
            'estado_id' =>'12',

          ],
          [         
            'nombre_municipio' =>'Alberto Adriani',
            'estado_id' =>'13',

          ],
          [         
            'nombre_municipio' =>'Andrés Bello',
            'estado_id' =>'13',

          ],
          [         
            'nombre_municipio' =>'Antonio Pinto Salinas',
            'estado_id' =>'13',

          ],
          [         
            'nombre_municipio' =>'Aricagua',
            'estado_id' =>'13',

          ],
          [         
            'nombre_municipio' =>'Arzobispo Chacón',
            'estado_id' =>'13',

          ],
          [         
            'nombre_municipio' =>'Campo Elías',
            'estado_id' =>'13',

          ],
          [         
            'nombre_municipio' =>'Caracciolo Parra Olmedo',
            'estado_id' =>'13',

          ],
          [         
            'nombre_municipio' =>'Cardenal Quintero',
            'estado_id' =>'13',

          ],
          [         
            'nombre_municipio' =>'Guaraque',
            'estado_id' =>'13',

          ],
          [         
            'nombre_municipio' =>'Julio César Salas',
            'estado_id' =>'13',

          ],
          [         
            'nombre_municipio' =>'Justo Briceño',
            'estado_id' =>'13',

          ],
          [         
            'nombre_municipio' =>'Libertador',
            'estado_id' =>'13',

          ],
          [         
            'nombre_municipio' =>'Miranda',
            'estado_id' =>'13',

          ],
          [         
            'nombre_municipio' =>'Obispo Ramos de Lora',
            'estado_id' =>'13',

          ],
          [         
            'nombre_municipio' =>'Padre Noguera',
            'estado_id' =>'13',

          ],
          [         
            'nombre_municipio' =>'Pueblo Llano',
            'estado_id' =>'13',

          ],
          [         
            'nombre_municipio' =>'Rangel',
            'estado_id' =>'13',

          ],
          [         
            'nombre_municipio' =>'Rivas Dávila',
            'estado_id' =>'13',

          ],
          [         
            'nombre_municipio' =>'Santos Marquina',
            'estado_id' =>'13',

          ],
          [         
            'nombre_municipio' =>'Sucre',
            'estado_id' =>'13',

          ],
          [         
            'nombre_municipio' =>'Tovar',
            'estado_id' =>'13',

          ],
          [         
            'nombre_municipio' =>'Tulio Febres Cordero',
            'estado_id' =>'13',

          ],
          [         
            'nombre_municipio' =>'Zea',
            'estado_id' =>'13',

          ],
          [         
            'nombre_municipio' =>'Acevedo',
            'estado_id' =>'14',

          ],
          [         
            'nombre_municipio' =>'Andrés Bello',
            'estado_id' =>'14',

          ],
          [         
            'nombre_municipio' =>'Baruta',
            'estado_id' =>'14',

          ],
          [         
            'nombre_municipio' =>'Brión',
            'estado_id' =>'14',

          ],
          [         
            'nombre_municipio' =>'Buroz',
            'estado_id' =>'14',

          ],
          [         
            'nombre_municipio' =>'Carrizal',
            'estado_id' =>'14',

          ],
          [         
            'nombre_municipio' =>'Chacao',
            'estado_id' =>'14',

          ],
          [         
            'nombre_municipio' =>'Cristóbal Rojas',
            'estado_id' =>'14',

          ],
          [         
            'nombre_municipio' =>'El Hatillo',
            'estado_id' =>'14',

          ],
          [         
            'nombre_municipio' =>'Guaicaipuro',
            'estado_id' =>'14',

          ],
          [         
            'nombre_municipio' =>'Independencia',
            'estado_id' =>'14',

          ],
          [         
            'nombre_municipio' =>'Lander',
            'estado_id' =>'14',

          ],
          [         
            'nombre_municipio' =>'Los Salias',
            'estado_id' =>'14',

          ],
          [         
            'nombre_municipio' =>'Páez',
            'estado_id' =>'14',

          ],
          [         
            'nombre_municipio' =>'Paz Castillo',
            'estado_id' =>'14',

          ],
          [         
            'nombre_municipio' =>'Pedro Gual',
            'estado_id' =>'14',

          ],
          [         
            'nombre_municipio' =>'Plaza',
            'estado_id' =>'14',

          ],
          [         
            'nombre_municipio' =>'Simón Bolívar',
            'estado_id' =>'14',

          ],
          [         
            'nombre_municipio' =>'Sucre',
            'estado_id' =>'14',

          ],
          [         
            'nombre_municipio' =>'Urdaneta',
            'estado_id' =>'14',

          ],
          [         
            'nombre_municipio' =>'Zamora',
            'estado_id' =>'14',

          ],
          [         
            'nombre_municipio' =>'Acosta',
            'estado_id' =>'15',

          ],
          [         
            'nombre_municipio' =>'Aguasay',
            'estado_id' =>'15',

          ],
          [         
            'nombre_municipio' =>'Bolívar',
            'estado_id' =>'15',

          ],
          [         
            'nombre_municipio' =>'Caripe',
            'estado_id' =>'15',

          ],
          [         
            'nombre_municipio' =>'Cedeño',
            'estado_id' =>'15',

          ],
          [         
            'nombre_municipio' =>'Ezequiel Zamora',
            'estado_id' =>'15',

          ],
          [         
            'nombre_municipio' =>'Libertador',
            'estado_id' =>'15',

          ],
          [         
            'nombre_municipio' =>'Maturín',
            'estado_id' =>'15',

          ],
          [         
            'nombre_municipio' =>'Piar',
            'estado_id' =>'15',

          ],
          [         
            'nombre_municipio' =>'Punceres',
            'estado_id' =>'15',

          ],
          [         
            'nombre_municipio' =>'Santa Bárbara',
            'estado_id' =>'15',

          ],
          [         
            'nombre_municipio' =>'Sotillo',
            'estado_id' =>'15',

          ],
          [         
            'nombre_municipio' =>'Uracoa',
            'estado_id' =>'15',

          ],
          [         
            'nombre_municipio' =>'Antolín del Campo',
            'estado_id' =>'16',

          ],
          [         
            'nombre_municipio' =>'Arismendi',
            'estado_id' =>'16',

          ],
          [         
            'nombre_municipio' =>'García',
            'estado_id' =>'16',

          ],
          [         
            'nombre_municipio' =>'Gómez',
            'estado_id' =>'16',

          ],
          [         
            'nombre_municipio' =>'Maneiro',
            'estado_id' =>'16',

          ],
          [         
            'nombre_municipio' =>'Marcano',
            'estado_id' =>'16',

          ],
          [         
            'nombre_municipio' =>'Mariño',
            'estado_id' =>'16',

          ],
          [         
            'nombre_municipio' =>'Península de Macanao',
            'estado_id' =>'16',

          ],
          [         
            'nombre_municipio' =>'Tubores',
            'estado_id' =>'16',

          ],
          [         
            'nombre_municipio' =>'Villalba',
            'estado_id' =>'16',

          ],
          [         
            'nombre_municipio' =>'Díaz',
            'estado_id' =>'16',

          ],
          [         
            'nombre_municipio' =>'Agua Blanca',
            'estado_id' =>'17',

          ],
          [         
            'nombre_municipio' =>'Araure',
            'estado_id' =>'17',

          ],
          [         
            'nombre_municipio' =>'Esteller',
            'estado_id' =>'17',

          ],
          [         
            'nombre_municipio' =>'Guanare',
            'estado_id' =>'17',

          ],
          [         
            'nombre_municipio' =>'Guanarito',
            'estado_id' =>'17',

          ],
          [         
            'nombre_municipio' =>'Monseñor José Vicente de Unda',
            'estado_id' =>'17',

          ],
          [         
            'nombre_municipio' =>'Ospino',
            'estado_id' =>'17',

          ],
          [         
            'nombre_municipio' =>'Páez',
            'estado_id' =>'17',

          ],
          [         
            'nombre_municipio' =>'Papelón',
            'estado_id' =>'17',

          ],
          [         
            'nombre_municipio' =>'San Genaro de Boconoíto',
            'estado_id' =>'17',

          ],
          [         
            'nombre_municipio' =>'San Rafael de Onoto',
            'estado_id' =>'17',

          ],
          [         
            'nombre_municipio' =>'Santa Rosalía',
            'estado_id' =>'17',

          ],
          [         
            'nombre_municipio' =>'Sucre',
            'estado_id' =>'17',

          ],
          [         
            'nombre_municipio' =>'Turén',
            'estado_id' =>'17',

          ],
          [         
            'nombre_municipio' =>'Andrés Eloy Blanco',
            'estado_id' =>'18',

          ],
          [         
            'nombre_municipio' =>'Andrés Mata',
            'estado_id' =>'18',

          ],
          [         
            'nombre_municipio' =>'Arismendi',
            'estado_id' =>'18',

          ],
          [         
            'nombre_municipio' =>'Benítez',
            'estado_id' =>'18',

          ],
          [         
            'nombre_municipio' =>'Bermúdez',
            'estado_id' =>'18',

          ],
          [         
            'nombre_municipio' =>'Bolívar',
            'estado_id' =>'18',

          ],
          [         
            'nombre_municipio' =>'Cajigal',
            'estado_id' =>'18',

          ],
          [         
            'nombre_municipio' =>'Cruz Salmerón Acosta',
            'estado_id' =>'18',

          ],
          [         
            'nombre_municipio' =>'Libertador',
            'estado_id' =>'18',

          ],
          [         
            'nombre_municipio' =>'Mariño',
            'estado_id' =>'18',

          ],
          [         
            'nombre_municipio' =>'Mejía',
            'estado_id' =>'18',

          ],
          [         
            'nombre_municipio' =>'Montes',
            'estado_id' =>'18',

          ],
          [         
            'nombre_municipio' =>'Ribero',
            'estado_id' =>'18',

          ],
          [         
            'nombre_municipio' =>'Sucre',
            'estado_id' =>'18',

          ],
          [         
            'nombre_municipio' =>'Valdéz',
            'estado_id' =>'18',

          ],
          [         
            'nombre_municipio' =>'Andrés Bello',
            'estado_id' =>'19',

          ],
          [         
            'nombre_municipio' =>'Antonio Rómulo Costa',
            'estado_id' =>'19',

          ],
          [         
            'nombre_municipio' =>'Ayacucho',
            'estado_id' =>'19',

          ],
          [         
            'nombre_municipio' =>'Bolívar',
            'estado_id' =>'19',

          ],
          [         
            'nombre_municipio' =>'Cárdenas',
            'estado_id' =>'19',

          ],
          [         
            'nombre_municipio' =>'Córdoba',
            'estado_id' =>'19',

          ],
          [         
            'nombre_municipio' =>'Fernández Feo',
            'estado_id' =>'19',

          ],
          [         
            'nombre_municipio' =>'Francisco de Miranda',
            'estado_id' =>'19',

          ],
          [         
            'nombre_municipio' =>'García de Hevia',
            'estado_id' =>'19',

          ],
          [         
            'nombre_municipio' =>'Guásimos',
            'estado_id' =>'19',

          ],
          [         
            'nombre_municipio' =>'Independencia',
            'estado_id' =>'19',

          ],
          [         
            'nombre_municipio' =>'Jáuregui',
            'estado_id' =>'19',

          ],
          [         
            'nombre_municipio' =>'José María Vargas',
            'estado_id' =>'19',

          ],
          [         
            'nombre_municipio' =>'Junín',
            'estado_id' =>'19',

          ],
          [         
            'nombre_municipio' =>'Libertad',
            'estado_id' =>'19',

          ],
          [         
            'nombre_municipio' =>'Libertador',
            'estado_id' =>'19',

          ],
          [         
            'nombre_municipio' =>'Lobatera',
            'estado_id' =>'19',

          ],
          [         
            'nombre_municipio' =>'Michelena',
            'estado_id' =>'19',

          ],
          [         
            'nombre_municipio' =>'Panamericano',
            'estado_id' =>'19',

          ],
          [         
            'nombre_municipio' =>'Pedro María Ureña',
            'estado_id' =>'19',

          ],
          [         
            'nombre_municipio' =>'Rafael Urdaneta',
            'estado_id' =>'19',

          ],
          [         
            'nombre_municipio' =>'Samuel Darío Maldonado',
            'estado_id' =>'19',

          ],
          [         
            'nombre_municipio' =>'San Cristóbal',
            'estado_id' =>'19',

          ],
          [         
            'nombre_municipio' =>'Seboruco',
            'estado_id' =>'19',

          ],
          [         
            'nombre_municipio' =>'Simón Rodríguez',
            'estado_id' =>'19',

          ],
          [         
            'nombre_municipio' =>'Sucre',
            'estado_id' =>'19',

          ],
          [         
            'nombre_municipio' =>'Torbes',
            'estado_id' =>'19',

          ],
          [         
            'nombre_municipio' =>'Uribante',
            'estado_id' =>'19',

          ],
          [         
            'nombre_municipio' =>'San Judas Tadeo',
            'estado_id' =>'19',

          ],
          [         
            'nombre_municipio' =>'Andrés Bello',
            'estado_id' =>'20',

          ],
          [         
            'nombre_municipio' =>'Boconó',
            'estado_id' =>'20',

          ],
          [         
            'nombre_municipio' =>'Bolívar',
            'estado_id' =>'20',

          ],
          [         
            'nombre_municipio' =>'Candelaria',
            'estado_id' =>'20',

          ],
          [         
            'nombre_municipio' =>'Carache',
            'estado_id' =>'20',

          ],
          [         
            'nombre_municipio' =>'Escuque',
            'estado_id' =>'20',

          ],
          [         
            'nombre_municipio' =>'José Felipe Márquez Cañizalez',
            'estado_id' =>'20',

          ],
          [         
            'nombre_municipio' =>'Juan Vicente Campos Elías',
            'estado_id' =>'20',

          ],
          [         
            'nombre_municipio' =>'La Ceiba',
            'estado_id' =>'20',

          ],
          [         
            'nombre_municipio' =>'Miranda',
            'estado_id' =>'20',

          ],
          [         
            'nombre_municipio' =>'Monte Carmelo',
            'estado_id' =>'20',

          ],
          [         
            'nombre_municipio' =>'Motatán',
            'estado_id' =>'20',

          ],
          [         
            'nombre_municipio' =>'Pampán',
            'estado_id' =>'20',

          ],
          [         
            'nombre_municipio' =>'Pampanito',
            'estado_id' =>'20',

          ],
          [         
            'nombre_municipio' =>'Rafael Rangel',
            'estado_id' =>'20',

          ],
          [         
            'nombre_municipio' =>'San Rafael de Carvajal',
            'estado_id' =>'20',

          ],
          [         
            'nombre_municipio' =>'Sucre',
            'estado_id' =>'20',

          ],
          [         
            'nombre_municipio' =>'Trujillo',
            'estado_id' =>'20',

          ],
          [         
            'nombre_municipio' =>'Urdaneta',
            'estado_id' =>'20',

          ],
          [         
            'nombre_municipio' =>'Valera',
            'estado_id' =>'20',

          ],
          [         
            'nombre_municipio' =>'Vargas',
            'estado_id' =>'21',

          ],
          [         
            'nombre_municipio' =>'Arístides Bastidas',
            'estado_id' =>'22',

          ],
          [         
            'nombre_municipio' =>'Bolívar',
            'estado_id' =>'22',

          ],
          [         
            'nombre_municipio' =>'Bruzual',
            'estado_id' =>'22',

          ],
          [         
            'nombre_municipio' =>'Cocorote',
            'estado_id' =>'22',

          ],
          [         
            'nombre_municipio' =>'Independencia',
            'estado_id' =>'22',

          ],
          [         
            'nombre_municipio' =>'José Antonio Páez',
            'estado_id' =>'22',

          ],
          [         
            'nombre_municipio' =>'La Trinidad',
            'estado_id' =>'22',

          ],
          [         
            'nombre_municipio' =>'Manuel Monge',
            'estado_id' =>'22',

          ],
          [         
            'nombre_municipio' =>'Nirgua',
            'estado_id' =>'22',

          ],
          [         
            'nombre_municipio' =>'Peña',
            'estado_id' =>'22',

          ],
          [         
            'nombre_municipio' =>'San Felipe',
            'estado_id' =>'22',

          ],
          [         
            'nombre_municipio' =>'Sucre',
            'estado_id' =>'22',

          ],
          [         
            'nombre_municipio' =>'Urachiche',
            'estado_id' =>'22',

          ],
          [         
            'nombre_municipio' =>'José Joaquín Veroes',
            'estado_id' =>'22',

          ],
          [         
            'nombre_municipio' =>'Almirante Padilla',
            'estado_id' =>'23',

          ],
          [         
            'nombre_municipio' =>'Baralt',
            'estado_id' =>'23',

          ],
          [         
            'nombre_municipio' =>'Cabimas',
            'estado_id' =>'23',

          ],
          [         
            'nombre_municipio' =>'Catatumbo',
            'estado_id' =>'23',

          ],
          [         
            'nombre_municipio' =>'Colón',
            'estado_id' =>'23',

          ],
          [         
            'nombre_municipio' =>'Francisco Javier Pulgar',
            'estado_id' =>'23',

          ],
          [         
            'nombre_municipio' =>'Páez',
            'estado_id' =>'23',

          ],
          [         
            'nombre_municipio' =>'Jesús Enrique Losada',
            'estado_id' =>'23',

          ],
          [         
            'nombre_municipio' =>'Jesús María Semprún',
            'estado_id' =>'23',

          ],
          [         
            'nombre_municipio' =>'La Cañada de Urdaneta',
            'estado_id' =>'23',

          ],
          [         
            'nombre_municipio' =>'Lagunillas',
            'estado_id' =>'23',

          ],
          [         
            'nombre_municipio' =>'Machiques de Perijá',
            'estado_id' =>'23',

          ],
          [         
            'nombre_municipio' =>'Mara',
            'estado_id' =>'23',

          ],
          [         
            'nombre_municipio' =>'Maracaibo',
            'estado_id' =>'23',

          ],
          [         
            'nombre_municipio' =>'Miranda',
            'estado_id' =>'23',

          ],
          [         
            'nombre_municipio' =>'Rosario de Perijá',
            'estado_id' =>'23',

          ],
          [         
            'nombre_municipio' =>'San Francisco',
            'estado_id' =>'23',

          ],
          [         
            'nombre_municipio' =>'Santa Rita',
            'estado_id' =>'23',

          ],
          [         
            'nombre_municipio' =>'Simón Bolívar',
            'estado_id' =>'23',

          ],
          [         
            'nombre_municipio' =>'Sucre',
            'estado_id' =>'23',

          ],
          [         
            'nombre_municipio' =>'Valmore Rodríguez',
            'estado_id' =>'23',

          ],
          [         
            'nombre_municipio' =>'Libertador',
            'estado_id' =>'24',

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
        Schema::dropIfExists('municipio');
    }
}
