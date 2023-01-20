<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockMobilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_mobil', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mobil_id')->required();
            $table->integer('jumlah')->required();
            $table->boolean('status')->required();
            $table->timestamps();

            $table->foreign('mobil_id')->references('id')->on('mobil')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock_mobil');
    }
}
