<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileProcessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfil_procesos', function (Blueprint $table) {
            $table->id();
            $table->timestamp('fecha_registro')->nullable();
            $table->unsignedBigInteger('process_id');
            $table->unsignedBigInteger('profile_id');

            $table->foreign('process_id')->references('id')->on('procesos');
            $table->foreign('profile_id')->references('id')->on('perfil');
        });
        DB::table('perfil_procesos')->insert([
            'fecha_registro' => now(),
            'process_id' => 1,
            'profile_id' => 1,
        ]);
        DB::table('perfil_procesos')->insert([
            'fecha_registro' => now(),
            'process_id' => 2,
            'profile_id' => 1,
        ]);
        DB::table('perfil_procesos')->insert([
            'fecha_registro' => now(),
            'process_id' => 3,
            'profile_id' => 1,
        ]);
        DB::table('perfil_procesos')->insert([
            'fecha_registro' => now(),
            'process_id' => 4,
            'profile_id' => 1,
        ]);
        DB::table('perfil_procesos')->insert([
            'fecha_registro' => now(),
            'process_id' => 5,
            'profile_id' => 1,
        ]);
        DB::table('perfil_procesos')->insert([
            'fecha_registro' => now(),
            'process_id' => 6,
            'profile_id' => 1,
        ]);
        DB::table('perfil_procesos')->insert([
            'fecha_registro' => now(),
            'process_id' => 7,
            'profile_id' => 1,
        ]);        
        DB::table('perfil_procesos')->insert([
            'fecha_registro' => now(),
            'process_id' => 8,
            'profile_id' => 1,
        ]);
        DB::table('perfil_procesos')->insert([
            'fecha_registro' => now(),
            'process_id' => 9,
            'profile_id' => 1,
        ]);
        DB::table('perfil_procesos')->insert([
            'fecha_registro' => now(),
            'process_id' => 10,
            'profile_id' => 1,
        ]);
        DB::table('perfil_procesos')->insert([
            'fecha_registro' => now(),
            'process_id' => 11,
            'profile_id' => 1,
        ]);
        DB::table('perfil_procesos')->insert([
            'fecha_registro' => now(),
            'process_id' => 12,
            'profile_id' => 1,
        ]);
        DB::table('perfil_procesos')->insert([
            'fecha_registro' => now(),
            'process_id' => 13,
            'profile_id' => 1,
        ]);
        DB::table('perfil_procesos')->insert([
            'fecha_registro' => now(),
            'process_id' => 14,
            'profile_id' => 1,
        ]);        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfil_procesos');
    }
}
