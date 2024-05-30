<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailcoffeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailcoffee', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('id_coffee');
            // $table->foreign('id_coffee')->references('id')->on('coffee');
            $table->integer('qty');
            $table->dateTime('tanggal_pembelian');

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
        Schema::dropIfExists('detailcoffee');
    }
}
