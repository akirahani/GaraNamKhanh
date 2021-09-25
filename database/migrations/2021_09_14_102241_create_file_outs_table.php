<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileOutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_outs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_customer');
            $table->bigInteger('id_spareout');
            $table->bigInteger('price_out');
            $table->bigInteger('amount_out');
            $table->bigInteger('status');
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
        Schema::dropIfExists('file_outs');
    }
}
