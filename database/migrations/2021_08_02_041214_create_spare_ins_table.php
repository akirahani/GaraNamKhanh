<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpareInsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spare_ins', function (Blueprint $table) {
            $table->id();
            $table->string('content');
            $table->bigInteger('id_spare');
            $table->bigInteger('id_filein');
            $table->bigInteger('amount_in');
            $table->bigInteger('price_in');
            $table->bigInteger('all_in');
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
        Schema::dropIfExists('spare_ins');
    }
}
