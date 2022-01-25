<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffHasAreaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_area', function (Blueprint $table) {
            $table->id();
            $table->string('cedula_personal',20);

            $table->unsignedBigInteger('area_id');
            $table->unsignedBigInteger('personal_id');
            $table->boolean('estatus')->default(true);

            $table->foreign('area_id')->references('id')->on('area');                  
            $table->foreign('personal_id')->references('id')->on('personal');                      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_area');
    }
}
