<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stock_mobil = [
            ['id_mobil' => '1', 'jumlah' => '20', 'status' => '1'],
            ['id_mobil' => '2', 'jumlah' => '15', 'status' => '1'],
            ['id_mobil' => '3', 'jumlah' => '10', 'status' => '1']
        ];
        DB::table('stock')->insert($stock_mobil);
    }
}
