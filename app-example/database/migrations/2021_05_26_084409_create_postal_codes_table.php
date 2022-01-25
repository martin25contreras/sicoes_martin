<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostalCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codigo_postal', function (Blueprint $table) {
            $table->id();
            $table->string('code', 8);
            
            $table->unsignedBigInteger('estado_id');            

            $table->foreign('estado_id')->references('id')->on('estado');

        });
        
        DB::table('codigo_postal')->insert([  
          [     
            'code' =>'6001',
            'estado_id' =>'2',

          ],
          [            
            'code' =>'6002',
            'estado_id' =>'2',

          ],
          [            
            'code' =>'6003',
            'estado_id' =>'2',

          ],
          [            
            'code' =>'6007',
            'estado_id' =>'2',

          ],
          [            
            'code' =>'6008',
            'estado_id' =>'2',

          ],
          [            
            'code' =>'6009',
            'estado_id' =>'2',

          ],
          [            
            'code' =>'6012',
            'estado_id' =>'2',

          ],
          [            
            'code' =>'6014',
            'estado_id' =>'2',

          ],
          [            
            'code' =>'6016',
            'estado_id' =>'2',

          ],
          [            
            'code' =>'6020',
            'estado_id' =>'2',

          ],
          [            
            'code' =>'6022',
            'estado_id' =>'2',

          ],
          [            
            'code' =>'6023',
            'estado_id' =>'2',

          ],
          [            
            'code' =>'6027',
            'estado_id' =>'2',

          ],
          [            
            'code' =>'6032',
            'estado_id' =>'2',

          ],
          [            
            'code' =>'6048',
            'estado_id' =>'2',

          ],
          [            
            'code' =>'6050',
            'estado_id' =>'2',

          ],
          [            
            'code' =>'6052',
            'estado_id' =>'2',

          ],
          [            
            'code' =>'6054',
            'estado_id' =>'2',

          ],
          [            
            'code' =>'6055',
            'estado_id' =>'2',

          ],
          [            
            'code' =>'6057',
            'estado_id' =>'2',

          ],
          [            
            'code' =>'5063',
            'estado_id' =>'3',

          ],
          [            
            'code' =>'5067',
            'estado_id' =>'3',

          ],
          [            
            'code' =>'7001',
            'estado_id' =>'3',

          ],
          [            
            'code' =>'7002',
            'estado_id' =>'3',

          ],
          [            
            'code' =>'7003',
            'estado_id' =>'3',

          ],
          [            
            'code' =>'7004',
            'estado_id' =>'3',

          ],
          [            
            'code' =>'7005',
            'estado_id' =>'3',

          ],
          [            
            'code' =>'7007',
            'estado_id' =>'3',

          ],
          [            
            'code' =>'7010',
            'estado_id' =>'3',

          ],
          [            
            'code' =>'7011',
            'estado_id' =>'3',

          ],
          [            
            'code' =>'2101',
            'estado_id' =>'4',

          ],
          [            
            'code' =>'2102',
            'estado_id' =>'4',

          ],
          [            
            'code' =>'2103',
            'estado_id' =>'4',

          ],
          [            
            'code' =>'2104',
            'estado_id' =>'4',

          ],
          [            
            'code' =>'2105',
            'estado_id' =>'4',

          ],
          [            
            'code' =>'2107',
            'estado_id' =>'4',

          ],
          [            
            'code' =>'2110',
            'estado_id' =>'4',

          ],
          [            
            'code' =>'2112',
            'estado_id' =>'4',

          ],
          [            
            'code' =>'2113',
            'estado_id' =>'4',

          ],
          [            
            'code' =>'2114',
            'estado_id' =>'4',

          ],
          [            
            'code' =>'2115',
            'estado_id' =>'4',

          ],
          [            
            'code' =>'2116',
            'estado_id' =>'4',

          ],
          [            
            'code' =>'2117',
            'estado_id' =>'4',

          ],
          [            
            'code' =>'2118',
            'estado_id' =>'4',

          ],
          [            
            'code' =>'2119',
            'estado_id' =>'4',

          ],
          [            
            'code' =>'2121',
            'estado_id' =>'4',

          ],
          [            
            'code' =>'2122',
            'estado_id' =>'4',

          ],
          [            
            'code' =>'2123',
            'estado_id' =>'4',

          ],
          [            
            'code' =>'2125',
            'estado_id' =>'4',

          ],
          [            
            'code' =>'2126',
            'estado_id' =>'4',

          ],
          [            
            'code' =>'2127',
            'estado_id' =>'4',

          ],
          [            
            'code' =>'2128',
            'estado_id' =>'4',

          ],
          [            
            'code' =>'2311',
            'estado_id' =>'4',

          ],
          [            
            'code' =>'2334',
            'estado_id' =>'4',

          ],
          [            
            'code' =>'2335',
            'estado_id' =>'4',

          ],
          [            
            'code' =>'2338',
            'estado_id' =>'4',

          ],
          [            
            'code' =>'2340',
            'estado_id' =>'4',

          ],
          [            
            'code' =>'5201',
            'estado_id' =>'5',

          ],
          [            
            'code' =>'5203',
            'estado_id' =>'5',

          ],
          [            
            'code' =>'5206',
            'estado_id' =>'5',

          ],
          [            
            'code' =>'5207',
            'estado_id' =>'5',

          ],
          [            
            'code' =>'5208',
            'estado_id' =>'5',

          ],
          [            
            'code' =>'5210',
            'estado_id' =>'5',

          ],
          [            
            'code' =>'5213',
            'estado_id' =>'5',

          ],
          [            
            'code' =>'5214',
            'estado_id' =>'5',

          ],
          [            
            'code' =>'5216',
            'estado_id' =>'5',

          ],
          [            
            'code' =>'5217',
            'estado_id' =>'5',

          ],
          [            
            'code' =>'5219',
            'estado_id' =>'5',

          ],
          [            
            'code' =>'5220',
            'estado_id' =>'5',

          ],
          [            
            'code' =>'5221',
            'estado_id' =>'5',

          ],
          [            
            'code' =>'5224',
            'estado_id' =>'5',

          ],
          [            
            'code' =>'8001',
            'estado_id' =>'6',

          ],
          [            
            'code' =>'8003',
            'estado_id' =>'6',

          ],
          [            
            'code' =>'8009',
            'estado_id' =>'6',

          ],
          [            
            'code' =>'8011',
            'estado_id' =>'6',

          ],
          [            
            'code' =>'8013',
            'estado_id' =>'6',

          ],
          [            
            'code' =>'8050',
            'estado_id' =>'6',

          ],
          [            
            'code' =>'8051',
            'estado_id' =>'6',

          ],
          [            
            'code' =>'8052',
            'estado_id' =>'6',

          ],
          [            
            'code' =>'8054',
            'estado_id' =>'6',

          ],
          [            
            'code' =>'8055',
            'estado_id' =>'6',

          ],
          [            
            'code' =>'8056',
            'estado_id' =>'6',

          ],
          [            
            'code' =>'8057',
            'estado_id' =>'6',

          ],
          [            
            'code' =>'2001',
            'estado_id' =>'7',

          ],
          [            
            'code' =>'2002',
            'estado_id' =>'7',

          ],
          [            
            'code' =>'2003',
            'estado_id' =>'7',

          ],
          [            
            'code' =>'2005',
            'estado_id' =>'7',

          ],
          [            
            'code' =>'2006',
            'estado_id' =>'7',

          ],
          [            
            'code' =>'2010',
            'estado_id' =>'7',

          ],
          [            
            'code' =>'2015',
            'estado_id' =>'7',

          ],
          [            
            'code' =>'2016',
            'estado_id' =>'7',

          ],
          [            
            'code' =>'2017',
            'estado_id' =>'7',

          ],
          [            
            'code' =>'2018',
            'estado_id' =>'7',

          ],
          [            
            'code' =>'2035',
            'estado_id' =>'7',

          ],
          [            
            'code' =>'2039',
            'estado_id' =>'7',

          ],
          [            
            'code' =>'2040',
            'estado_id' =>'7',

          ],
          [            
            'code' =>'2041',
            'estado_id' =>'7',

          ],
          [            
            'code' =>'2042',
            'estado_id' =>'7',

          ],
          [            
            'code' =>'2044',
            'estado_id' =>'7',

          ],
          [            
            'code' =>'2050',
            'estado_id' =>'7',

          ],
          [            
            'code' =>'2051',
            'estado_id' =>'7',

          ],
          [            
            'code' =>'2053',
            'estado_id' =>'7',

          ],
          [            
            'code' =>'2201',
            'estado_id' =>'8',

          ],
          [            
            'code' =>'2203',
            'estado_id' =>'8',

          ],
          [            
            'code' =>'2204',
            'estado_id' =>'8',

          ],
          [            
            'code' =>'2206',
            'estado_id' =>'8',

          ],
          [            
            'code' =>'2207',
            'estado_id' =>'8',

          ],
          [            
            'code' =>'2209',
            'estado_id' =>'8',

          ],
          [            
            'code' =>'2213',
            'estado_id' =>'8',

          ],
          [            
            'code' =>'2214',
            'estado_id' =>'8',

          ],
          [            
            'code' =>'2216',
            'estado_id' =>'8',

          ],
          [            
            'code' =>'2052',
            'estado_id' =>'10',

          ],
          [            
            'code' =>'2054',
            'estado_id' =>'10',

          ],
          [            
            'code' =>'2055',
            'estado_id' =>'10',

          ],
          [            
            'code' =>'4101',
            'estado_id' =>'10',

          ],
          [            
            'code' =>'4102',
            'estado_id' =>'10',

          ],
          [            
            'code' =>'4103',
            'estado_id' =>'10',

          ],
          [            
            'code' =>'4104',
            'estado_id' =>'10',

          ],
          [            
            'code' =>'4109',
            'estado_id' =>'10',

          ],
          [            
            'code' =>'4110',
            'estado_id' =>'10',

          ],
          [            
            'code' =>'4114',
            'estado_id' =>'10',

          ],
          [            
            'code' =>'4117',
            'estado_id' =>'10',

          ],
          [            
            'code' =>'4118',
            'estado_id' =>'10',

          ],
          [            
            'code' =>'4132',
            'estado_id' =>'10',

          ],
          [            
            'code' =>'4136',
            'estado_id' =>'10',

          ],
          [            
            'code' =>'4137',
            'estado_id' =>'10',

          ],
          [            
            'code' =>'4150',
            'estado_id' =>'10',

          ],
          [            
            'code' =>'4152',
            'estado_id' =>'10',

          ],
          [            
            'code' =>'4154',
            'estado_id' =>'10',

          ],
          [            
            'code' =>'4167',
            'estado_id' =>'10',

          ],
          [            
            'code' =>'2301',
            'estado_id' =>'11',

          ],
          [            
            'code' =>'2303',
            'estado_id' =>'11',

          ],
          [            
            'code' =>'2304',
            'estado_id' =>'11',

          ],
          [            
            'code' =>'2305',
            'estado_id' =>'11',

          ],
          [            
            'code' =>'2312',
            'estado_id' =>'11',

          ],
          [            
            'code' =>'2316',
            'estado_id' =>'11',

          ],
          [            
            'code' =>'2319',
            'estado_id' =>'11',

          ],
          [            
            'code' =>'2320',
            'estado_id' =>'11',

          ],
          [            
            'code' =>'2332',
            'estado_id' =>'11',

          ],
          [            
            'code' =>'2350',
            'estado_id' =>'11',

          ],
          [            
            'code' =>'2351',
            'estado_id' =>'11',

          ],
          [            
            'code' =>'2354',
            'estado_id' =>'11',

          ],
          [            
            'code' =>'2355',
            'estado_id' =>'11',

          ],
          [            
            'code' =>'2356',
            'estado_id' =>'11',

          ],
          [            
            'code' =>'2358',
            'estado_id' =>'11',

          ],
          [            
            'code' =>'8007',
            'estado_id' =>'11',

          ],
          [            
            'code' =>'3001',
            'estado_id' =>'12',

          ],
          [            
            'code' =>'3004',
            'estado_id' =>'12',

          ],
          [            
            'code' =>'3009',
            'estado_id' =>'12',

          ],
          [            
            'code' =>'3015',
            'estado_id' =>'12',

          ],
          [            
            'code' =>'3016',
            'estado_id' =>'12',

          ],
          [            
            'code' =>'3021',
            'estado_id' =>'12',

          ],
          [            
            'code' =>'3023',
            'estado_id' =>'12',

          ],
          [            
            'code' =>'3025',
            'estado_id' =>'12',

          ],
          [            
            'code' =>'3028',
            'estado_id' =>'12',

          ],
          [            
            'code' =>'3031',
            'estado_id' =>'12',

          ],
          [            
            'code' =>'3032',
            'estado_id' =>'12',

          ],
          [            
            'code' =>'3033',
            'estado_id' =>'12',

          ],
          [            
            'code' =>'3034',
            'estado_id' =>'12',

          ],
          [            
            'code' =>'3050',
            'estado_id' =>'12',

          ],
          [            
            'code' =>'3051',
            'estado_id' =>'12',

          ],
          [            
            'code' =>'3052',
            'estado_id' =>'12',

          ],
          [            
            'code' =>'3054',
            'estado_id' =>'12',

          ],
          [            
            'code' =>'3055',
            'estado_id' =>'12',

          ],
          [            
            'code' =>'3056',
            'estado_id' =>'12',

          ],
          [            
            'code' =>'3057',
            'estado_id' =>'12',

          ],
          [            
            'code' =>'3058',
            'estado_id' =>'12',

          ],
          [            
            'code' =>'3059',
            'estado_id' =>'12',

          ],
          [            
            'code' =>'3060',
            'estado_id' =>'12',

          ],
          [            
            'code' =>'3061',
            'estado_id' =>'12',

          ],
          [            
            'code' =>'3063',
            'estado_id' =>'12',

          ],
          [            
            'code' =>'3112',
            'estado_id' =>'13',

          ],
          [            
            'code' =>'3133',
            'estado_id' =>'13',

          ],
          [            
            'code' =>'5101',
            'estado_id' =>'13',

          ],
          [            
            'code' =>'5102',
            'estado_id' =>'13',

          ],
          [            
            'code' =>'5105',
            'estado_id' =>'13',

          ],
          [            
            'code' =>'5106',
            'estado_id' =>'13',

          ],
          [            
            'code' =>'5107',
            'estado_id' =>'13',

          ],
          [            
            'code' =>'5108',
            'estado_id' =>'13',

          ],
          [            
            'code' =>'5110',
            'estado_id' =>'13',

          ],
          [            
            'code' =>'5111',
            'estado_id' =>'13',

          ],
          [            
            'code' =>'5112',
            'estado_id' =>'13',

          ],
          [            
            'code' =>'5114',
            'estado_id' =>'13',

          ],
          [            
            'code' =>'5115',
            'estado_id' =>'13',

          ],
          [            
            'code' =>'5116',
            'estado_id' =>'13',

          ],
          [            
            'code' =>'5124',
            'estado_id' =>'13',

          ],
          [            
            'code' =>'5129',
            'estado_id' =>'13',

          ],
          [            
            'code' =>'5130',
            'estado_id' =>'13',

          ],
          [            
            'code' =>'5131',
            'estado_id' =>'13',

          ],
          [            
            'code' =>'5133',
            'estado_id' =>'13',

          ],
          [            
            'code' =>'5134',
            'estado_id' =>'13',

          ],
          [            
            'code' =>'5138',
            'estado_id' =>'13',

          ],
          [            
            'code' =>'5141',
            'estado_id' =>'13',

          ],
          [            
            'code' =>'5142',
            'estado_id' =>'13',

          ],
          [            
            'code' =>'5144',
            'estado_id' =>'13',

          ],
          [            
            'code' =>'5145',
            'estado_id' =>'13',

          ],
          [            
            'code' =>'5154',
            'estado_id' =>'13',

          ],
          [            
            'code' =>'1070',
            'estado_id' =>'14',

          ],
          [            
            'code' =>'1073',
            'estado_id' =>'14',

          ],
          [            
            'code' =>'1080',
            'estado_id' =>'14',

          ],
          [            
            'code' =>'1201',
            'estado_id' =>'14',

          ],
          [            
            'code' =>'1203',
            'estado_id' =>'14',

          ],
          [            
            'code' =>'1204',
            'estado_id' =>'14',

          ],
          [            
            'code' =>'1209',
            'estado_id' =>'14',

          ],
          [            
            'code' =>'1210',
            'estado_id' =>'14',

          ],
          [            
            'code' =>'1211',
            'estado_id' =>'14',

          ],
          [            
            'code' =>'1212',
            'estado_id' =>'14',

          ],
          [            
            'code' =>'1214',
            'estado_id' =>'14',

          ],
          [            
            'code' =>'1215',
            'estado_id' =>'14',

          ],
          [            
            'code' =>'1220',
            'estado_id' =>'14',

          ],
          [            
            'code' =>'1221',
            'estado_id' =>'14',

          ],
          [            
            'code' =>'1224',
            'estado_id' =>'14',

          ],
          [            
            'code' =>'1225',
            'estado_id' =>'14',

          ],
          [            
            'code' =>'1226',
            'estado_id' =>'14',

          ],
          [            
            'code' =>'1228',
            'estado_id' =>'14',

          ],
          [            
            'code' =>'1231',
            'estado_id' =>'14',

          ],
          [            
            'code' =>'1232',
            'estado_id' =>'14',

          ],
          [            
            'code' =>'1235',
            'estado_id' =>'14',

          ],
          [            
            'code' =>'1238',
            'estado_id' =>'14',

          ],
          [            
            'code' =>'1241',
            'estado_id' =>'14',

          ],
          [            
            'code' =>'1243',
            'estado_id' =>'14',

          ],
          [            
            'code' =>'1245',
            'estado_id' =>'14',

          ],
          [            
            'code' =>'1246',
            'estado_id' =>'14',

          ],
          [            
            'code' =>'2120',
            'estado_id' =>'14',

          ],
          [            
            'code' =>'6005',
            'estado_id' =>'14',

          ],
          [            
            'code' =>'6201',
            'estado_id' =>'15',

          ],
          [            
            'code' =>'6202',
            'estado_id' =>'15',

          ],
          [            
            'code' =>'6204',
            'estado_id' =>'15',

          ],
          [            
            'code' =>'6206',
            'estado_id' =>'15',

          ],
          [            
            'code' =>'6207',
            'estado_id' =>'15',

          ],
          [            
            'code' =>'6208',
            'estado_id' =>'15',

          ],
          [            
            'code' =>'6209',
            'estado_id' =>'15',

          ],
          [            
            'code' =>'6210',
            'estado_id' =>'15',

          ],
          [            
            'code' =>'6211',
            'estado_id' =>'15',

          ],
          [            
            'code' =>'6213',
            'estado_id' =>'15',

          ],
          [            
            'code' =>'6214',
            'estado_id' =>'15',

          ],
          [            
            'code' =>'6215',
            'estado_id' =>'15',

          ],
          [            
            'code' =>'6216',
            'estado_id' =>'15',

          ],
          [            
            'code' =>'6218',
            'estado_id' =>'15',

          ],
          [            
            'code' =>'6219',
            'estado_id' =>'15',

          ],
          [            
            'code' =>'6221',
            'estado_id' =>'15',

          ],
          [            
            'code' =>'6223',
            'estado_id' =>'15',

          ],
          [            
            'code' =>'6224',
            'estado_id' =>'15',

          ],
          [            
            'code' =>'6225',
            'estado_id' =>'15',

          ],
          [            
            'code' =>'6226',
            'estado_id' =>'15',

          ],
          [            
            'code' =>'6301',
            'estado_id' =>'16',

          ],
          [            
            'code' =>'6304',
            'estado_id' =>'16',

          ],
          [            
            'code' =>'6309',
            'estado_id' =>'16',

          ],
          [            
            'code' =>'6311',
            'estado_id' =>'16',

          ],
          [            
            'code' =>'6316',
            'estado_id' =>'16',

          ],
          [            
            'code' =>'6320',
            'estado_id' =>'16',

          ],
          [            
            'code' =>'6321',
            'estado_id' =>'16',

          ],
          [            
            'code' =>'6322',
            'estado_id' =>'16',

          ],
          [            
            'code' =>'3301',
            'estado_id' =>'17',

          ],
          [            
            'code' =>'3302',
            'estado_id' =>'17',

          ],
          [            
            'code' =>'3303',
            'estado_id' =>'17',

          ],
          [            
            'code' =>'3304',
            'estado_id' =>'17',

          ],
          [            
            'code' =>'3305',
            'estado_id' =>'17',

          ],
          [            
            'code' =>'3306',
            'estado_id' =>'17',

          ],
          [            
            'code' =>'3307',
            'estado_id' =>'17',

          ],
          [            
            'code' =>'3309',
            'estado_id' =>'17',

          ],
          [            
            'code' =>'3317',
            'estado_id' =>'17',

          ],
          [            
            'code' =>'3350',
            'estado_id' =>'17',

          ],
          [            
            'code' =>'3351',
            'estado_id' =>'17',

          ],
          [            
            'code' =>'3352',
            'estado_id' =>'17',

          ],
          [            
            'code' =>'3353',
            'estado_id' =>'17',

          ],
          [            
            'code' =>'3354',
            'estado_id' =>'17',

          ],
          [            
            'code' =>'3355',
            'estado_id' =>'17',

          ],
          [            
            'code' =>'3357',
            'estado_id' =>'17',

          ],
          [            
            'code' =>'2302',
            'estado_id' =>'18',

          ],
          [            
            'code' =>'6101',
            'estado_id' =>'18',

          ],
          [            
            'code' =>'6102',
            'estado_id' =>'18',

          ],
          [            
            'code' =>'6106',
            'estado_id' =>'18',

          ],
          [            
            'code' =>'6107',
            'estado_id' =>'18',

          ],
          [            
            'code' =>'6110',
            'estado_id' =>'18',

          ],
          [            
            'code' =>'6123',
            'estado_id' =>'18',

          ],
          [            
            'code' =>'6126',
            'estado_id' =>'18',

          ],
          [            
            'code' =>'6150',
            'estado_id' =>'18',

          ],
          [            
            'code' =>'6152',
            'estado_id' =>'18',

          ],
          [            
            'code' =>'6154',
            'estado_id' =>'18',

          ],
          [            
            'code' =>'6155',
            'estado_id' =>'18',

          ],
          [            
            'code' =>'6156',
            'estado_id' =>'18',

          ],
          [            
            'code' =>'6160',
            'estado_id' =>'18',

          ],
          [            
            'code' =>'6161',
            'estado_id' =>'18',

          ],
          [            
            'code' =>'6163',
            'estado_id' =>'18',

          ],
          [            
            'code' =>'6164',
            'estado_id' =>'18',

          ],
          [            
            'code' =>'6167',
            'estado_id' =>'18',

          ],
          [            
            'code' =>'6168',
            'estado_id' =>'18',

          ],
          [            
            'code' =>'5001',
            'estado_id' =>'19',

          ],
          [            
            'code' =>'5002',
            'estado_id' =>'19',

          ],
          [            
            'code' =>'5003',
            'estado_id' =>'19',

          ],
          [            
            'code' =>'5009',
            'estado_id' =>'19',

          ],
          [            
            'code' =>'5010',
            'estado_id' =>'19',

          ],
          [            
            'code' =>'5012',
            'estado_id' =>'19',

          ],
          [            
            'code' =>'5015',
            'estado_id' =>'19',

          ],
          [            
            'code' =>'5017',
            'estado_id' =>'19',

          ],
          [            
            'code' =>'5020',
            'estado_id' =>'19',

          ],
          [            
            'code' =>'5021',
            'estado_id' =>'19',

          ],
          [            
            'code' =>'5022',
            'estado_id' =>'19',

          ],
          [            
            'code' =>'5027',
            'estado_id' =>'19',

          ],
          [            
            'code' =>'5032',
            'estado_id' =>'19',

          ],
          [            
            'code' =>'5033',
            'estado_id' =>'19',

          ],
          [            
            'code' =>'5036',
            'estado_id' =>'19',

          ],
          [            
            'code' =>'5037',
            'estado_id' =>'19',

          ],
          [            
            'code' =>'5038',
            'estado_id' =>'19',

          ],
          [            
            'code' =>'5048',
            'estado_id' =>'19',

          ],
          [            
            'code' =>'5051',
            'estado_id' =>'19',

          ],
          [            
            'code' =>'5054',
            'estado_id' =>'19',

          ],
          [            
            'code' =>'5058',
            'estado_id' =>'19',

          ],
          [            
            'code' =>'5062',
            'estado_id' =>'19',

          ],
          [            
            'code' =>'5065',
            'estado_id' =>'19',

          ],
          [            
            'code' =>'5143',
            'estado_id' =>'19',

          ],
          [            
            'code' =>'3101',
            'estado_id' =>'20',

          ],
          [            
            'code' =>'3102',
            'estado_id' =>'20',

          ],
          [            
            'code' =>'3103',
            'estado_id' =>'20',

          ],
          [            
            'code' =>'3104',
            'estado_id' =>'20',

          ],
          [            
            'code' =>'3105',
            'estado_id' =>'20',

          ],
          [            
            'code' =>'3106',
            'estado_id' =>'20',

          ],
          [            
            'code' =>'3107',
            'estado_id' =>'20',

          ],
          [            
            'code' =>'3108',
            'estado_id' =>'20',

          ],
          [            
            'code' =>'3109',
            'estado_id' =>'20',

          ],
          [            
            'code' =>'3110',
            'estado_id' =>'20',

          ],
          [            
            'code' =>'3113',
            'estado_id' =>'20',

          ],
          [            
            'code' =>'3115',
            'estado_id' =>'20',

          ],
          [            
            'code' =>'3116',
            'estado_id' =>'20',

          ],
          [            
            'code' =>'3118',
            'estado_id' =>'20',

          ],
          [            
            'code' =>'3119',
            'estado_id' =>'20',

          ],
          [            
            'code' =>'3122',
            'estado_id' =>'20',

          ],
          [            
            'code' =>'3123',
            'estado_id' =>'20',

          ],
          [            
            'code' =>'3124',
            'estado_id' =>'20',

          ],
          [            
            'code' =>'3125',
            'estado_id' =>'20',

          ],
          [            
            'code' =>'3127',
            'estado_id' =>'20',

          ],
          [            
            'code' =>'3128',
            'estado_id' =>'20',

          ],
          [            
            'code' =>'3129',
            'estado_id' =>'20',

          ],
          [            
            'code' =>'3132',
            'estado_id' =>'20',

          ],
          [            
            'code' =>'3134',
            'estado_id' =>'20',

          ],
          [            
            'code' =>'3135',
            'estado_id' =>'20',

          ],
          [            
            'code' =>'3136',
            'estado_id' =>'20',

          ],
          [            
            'code' =>'3140',
            'estado_id' =>'20',

          ],
          [            
            'code' =>'3145',
            'estado_id' =>'20',

          ],
          [            
            'code' =>'3146',
            'estado_id' =>'20',

          ],
          [            
            'code' =>'3147',
            'estado_id' =>'20',

          ],
          [            
            'code' =>'3149',
            'estado_id' =>'20',

          ],
          [            
            'code' =>'3150',
            'estado_id' =>'20',

          ],
          [            
            'code' =>'3151',
            'estado_id' =>'20',

          ],
          [            
            'code' =>'3152',
            'estado_id' =>'20',

          ],
          [            
            'code' =>'3153',
            'estado_id' =>'20',

          ],
          [            
            'code' =>'3154',
            'estado_id' =>'20',

          ],
          [            
            'code' =>'3156',
            'estado_id' =>'20',

          ],
          [            
            'code' =>'3157',
            'estado_id' =>'20',

          ],
          [            
            'code' =>'1160',
            'estado_id' =>'21',

          ],
          [            
            'code' =>'1162',
            'estado_id' =>'21',

          ],
          [            
            'code' =>'1165',
            'estado_id' =>'21',

          ],
          [            
            'code' =>'1166',
            'estado_id' =>'21',

          ],
          [            
            'code' =>'1168',
            'estado_id' =>'21',

          ],
          [            
            'code' =>'3201',
            'estado_id' =>'22',

          ],
          [            
            'code' =>'3202',
            'estado_id' =>'22',

          ],
          [            
            'code' =>'3203',
            'estado_id' =>'22',

          ],
          [            
            'code' =>'3205',
            'estado_id' =>'22',

          ],
          [            
            'code' =>'3206',
            'estado_id' =>'22',

          ],
          [            
            'code' =>'3207',
            'estado_id' =>'22',

          ],
          [            
            'code' =>'3209',
            'estado_id' =>'22',

          ],
          [            
            'code' =>'3210',
            'estado_id' =>'22',

          ],
          [            
            'code' =>'3211',
            'estado_id' =>'22',

          ],
          [            
            'code' =>'3214',
            'estado_id' =>'22',

          ],
          [            
            'code' =>'3222',
            'estado_id' =>'22',

          ],
          [            
            'code' =>'3137',
            'estado_id' =>'23',

          ],
          [            
            'code' =>'3141',
            'estado_id' =>'23',

          ],
          [            
            'code' =>'3158',
            'estado_id' =>'23',

          ],
          [            
            'code' =>'3164',
            'estado_id' =>'23',

          ],
          [            
            'code' =>'4001',
            'estado_id' =>'23',

          ],
          [            
            'code' =>'4002',
            'estado_id' =>'23',

          ],
          [            
            'code' =>'4004',
            'estado_id' =>'23',

          ],
          [            
            'code' =>'4005',
            'estado_id' =>'23',

          ],
          [            
            'code' =>'4011',
            'estado_id' =>'23',

          ],
          [            
            'code' =>'4012',
            'estado_id' =>'23',

          ],
          [            
            'code' =>'4013',
            'estado_id' =>'23',

          ],
          [            
            'code' =>'4014',
            'estado_id' =>'23',

          ],
          [            
            'code' =>'4015',
            'estado_id' =>'23',

          ],
          [            
            'code' =>'4016',
            'estado_id' =>'23',

          ],
          [            
            'code' =>'4017',
            'estado_id' =>'23',

          ],
          [            
            'code' =>'4019',
            'estado_id' =>'23',

          ],
          [            
            'code' =>'4020',
            'estado_id' =>'23',

          ],
          [            
            'code' =>'4021',
            'estado_id' =>'23',

          ],
          [            
            'code' =>'4022',
            'estado_id' =>'23',

          ],
          [            
            'code' =>'4032',
            'estado_id' =>'23',

          ],
          [            
            'code' =>'4033',
            'estado_id' =>'23',

          ],
          [            
            'code' =>'4036',
            'estado_id' =>'23',

          ],
          [            
            'code' =>'4037',
            'estado_id' =>'23',

          ],
          [            
            'code' =>'4043',
            'estado_id' =>'23',

          ],
          [            
            'code' =>'4044',
            'estado_id' =>'23',

          ],
          [            
            'code' =>'4045',
            'estado_id' =>'23',

          ],
          [            
            'code' =>'4046',
            'estado_id' =>'23',

          ],
          [            
            'code' =>'4047',
            'estado_id' =>'23',

          ],
          [            
            'code' =>'5147',
            'estado_id' =>'23',

          ],
          [            
            'code' =>'5148',
            'estado_id' =>'23',

          ],
          [            
            'code' =>'1000',
            'estado_id' =>'24',

          ],
          [            
            'code' =>'1010',
            'estado_id' =>'24',

          ],
          [            
            'code' =>'1011',
            'estado_id' =>'24',

          ],
          [            
            'code' =>'1020',
            'estado_id' =>'24',

          ],
          [            
            'code' =>'1030',
            'estado_id' =>'24',

          ],
          [            
            'code' =>'1040',
            'estado_id' =>'24',

          ],
          [            
            'code' =>'1041',
            'estado_id' =>'24',

          ],
          [            
            'code' =>'1050',
            'estado_id' =>'24',

          ],
          [            
            'code' =>'1052',
            'estado_id' =>'24',

          ],
          [            
            'code' =>'1053',
            'estado_id' =>'24',

          ],
          [            
            'code' =>'1060',
            'estado_id' =>'24',

          ],
          [            
            'code' =>'1061',
            'estado_id' =>'24',

          ],
          [            
            'code' =>'1062',
            'estado_id' =>'24',

          ],
          [            
            'code' =>'1064',
            'estado_id' =>'24',

          ],
          [            
            'code' =>'1071',
            'estado_id' =>'24',

          ],
          [            
            'code' =>'1081',
            'estado_id' =>'24',

          ],
          [            
            'code' =>'1083',
            'estado_id' =>'24',

          ],
          [            
            'code' =>'1086',
            'estado_id' =>'24',

          ],
          [            
            'code' =>'1090',
            'estado_id' =>'24',

          ],
          [            
            'code' =>'1223',
            'estado_id' =>'24',

          ],
          [            
            'code' =>'1262',
            'estado_id' =>'24',

          ],
          [            
            'code' =>'6401',
            'estado_id' =>'9',

          ],
          [            
            'code' =>'7101',
            'estado_id' =>'1',

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
        Schema::dropIfExists('codigo_postal');
    }
}
