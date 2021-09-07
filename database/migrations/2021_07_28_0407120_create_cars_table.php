<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('license_plate');
            $table->string('name');
            $table->string('engine'); 
            $table->string('chassis');
            $table->string('color');    
            $table->year('year_manufacture');
            $table->bigInteger('run_distance');
            $table->bigInteger('id_company');
            $table->bigInteger('id_type');
            $table->timestamps();
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
