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
            ['mobil_id' => '1', 'jumlah' => '20', 'tersedia' => '10', 'pinjam' => '10'],
            ['mobil_id' => '2', 'jumlah' => '15', 'tersedia' => '5', 'pinjam' => '10'],
            ['mobil_id' => '3', 'jumlah' => '10', 'tersedia' => '5', 'pinjam' => '5']
        ];
        DB::table('stock_mobil')->insert($stock_mobil);
    }
}
