<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSewasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sewa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tenant_id')->required();
            $table->unsignedBigInteger('mobil_id')->required();
            $table->timestamp('tanggal_sewa')->required();
            $table->timestamp('tanggal_kembali')->required();
            $table->integer('lama_sewa')->required();
            $table->integer('harga_sewa')->required();
            $table->integer('denda')->required();
            $table->integer('status')->required();
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
        Schema::dropIfExists('sewas');
    }
}
