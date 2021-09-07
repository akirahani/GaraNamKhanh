<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepairOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repair_orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('license_plate');
            $table->string('address');
            $table->string('car_type');
            $table->string('phone');
            $table->string('year_manufacture');
            $table->string('insurance_company');
            $table->string('assessor');
            $table->string('final_price');
            $table->bigInteger('id_pricenoti');
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
        Schema::dropIfExists('repair_orders');
    }
}
