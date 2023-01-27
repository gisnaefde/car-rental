<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SewaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sewa = [
            ['tenant_id' => 1, 'mobil_id' => 3, 'tanggal_sewa' => '2022-01-01', 'tanggal_kembali' => '2022-01-05', 'lama_sewa' => 4, 'harga_sewa' => 2000000, 'denda' => 0, 'status' => 2],
            ['tenant_id' => 2, 'mobil_id' => 5, 'tanggal_sewa' => '2022-02-01', 'tanggal_kembali' => '2022-02-07', 'lama_sewa' => 6, 'harga_sewa' => 3000000, 'denda' => 0, 'status' => 1],
            ['tenant_id' => 3, 'mobil_id' => 2, 'tanggal_sewa' => '2022-03-01', 'tanggal_kembali' => '2022-03-03', 'lama_sewa' => 2, 'harga_sewa' => 800000, 'denda' => 100000, 'status' => 0],
            ['tenant_id' => 4, 'mobil_id' => 7, 'tanggal_sewa' => '2022-04-01', 'tanggal_kembali' => '2022-04-10', 'lama_sewa' => 9, 'harga_sewa' => 4000000, 'denda' => 0, 'status' => 2],
            ['tenant_id' => 5, 'mobil_id' => 1, 'tanggal_sewa' => '2022-05-01', 'tanggal_kembali' => '2022-05-03', 'lama_sewa' => 2, 'harga_sewa' => 1500000, 'denda' => 50000, 'status' => 1],
        ];

        DB::table('sewa')->insert($sewa);
    }
}
