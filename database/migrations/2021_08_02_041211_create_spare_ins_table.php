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
            $table->bigInteger('id_spare');
            $table->bigInteger('id_notification');
            $table->bigInteger('amount_in');
            $table->bigInteger('price_in');
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
