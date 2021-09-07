<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpareDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spare_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_spare');
            $table->bigInteger('id_supplier');
            $table->bigInteger('id_type');
            $table->bigInteger('amount');
            $table->bigInteger('price_reference');
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
        Schema::dropIfExists('spare_details');
    }
}
