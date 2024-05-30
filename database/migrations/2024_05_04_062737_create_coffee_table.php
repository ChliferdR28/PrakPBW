<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoffeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coffee', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama',50);
            $table->double('harga',8,2);
            $table->integer('stok');
            $table->enum('kategori',['coffee', 'noncoffee'])->default('coffee');
            $table->text('deskripsi');
            $table->string('gambar',255);
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
        Schema::dropIfExists('coffee');
    }
}
