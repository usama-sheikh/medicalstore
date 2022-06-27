<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderdetails', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id')->references('id')->unsigned()->nullable();
            $table->bigInteger('medicine_id')->references('id')->unsigned()->nullable();
            $table->bigInteger('nursing_id')->references('id')->unsigned()->nullable();
            $table->string('Medicine_Name')->nullable();
            $table->string('facility_Name')->nullable();
            $table->string('Qantity');
            $table->string('Price');
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
        Schema::dropIfExists('orderdetails');
    }
};
