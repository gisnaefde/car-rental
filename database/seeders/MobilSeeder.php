<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mobil = [
            ['type' => 'Sedan', 'merk' => 'Honda', 'jumlah_kursi' => '5', 'bahan_bakar' => 'Solar', 'harga_sewa_jam' => '20000' , 'harga_sewa_hari' => '100000'],
            ['type' => 'SUV', 'merk' => 'Toyota', 'jumlah_kursi' => '7', 'bahan_bakar' => 'Bensin', 'harga_sewa_jam' => '25000' ,'harga_sewa_hari' => '120000'],
            ['type' => 'MPV', 'merk' => 'Mitsubishi', 'jumlah_kursi' => '8', 'bahan_bakar' => 'Solar', 'harga_sewa_jam' => '30000' ,'harga_sewa_hari' => '150000']
        ];
        DB::table('mobil')->insert($mobil);
    }
}
