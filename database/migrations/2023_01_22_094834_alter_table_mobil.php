<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableMobil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mobil', function (Blueprint $table) {
            $table->string('warna')->after('bahan_bakar');
            $table->string('tahun')->after('warna');
            $table->string('nopol')->after('tahun');
            $table->string('status')->after('harga_sewa_hari');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
