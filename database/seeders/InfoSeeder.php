<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $info = [
            ['info' => 'Rental Mobil Abadi melayani selama 24/7 jam', 'no_admin' => '087638751278', 'sdk' => 'setiap rental mobil harus menyertakan jaminan berupa KTP', 'lokasi' => 'Jl. Setia Abadi no 75', 'procedure' => 'pilih mobil yang tersedia, kemudian melakukan pembayaran, serahkan bukti pembayaran ke admin, kemudian tunngu persetujuan admin'],
            ['info' => 'Rental Mobil Jaya Selalu melayani dengan sepenuh hati setiap hari', 'no_admin' => '086214563456', 'sdk' => 'setiap rental mobil harus menyertakan jaminan berupa KTP', 'lokasi' => 'Jl. Setia Abadi no 75', 'procedure' => 'pilih mobil yang tersedia, kemudian melakukan pembayaran, serahkan bukti pembayaran ke admin, kemudian tunngu persetujuan admin']
        ];

        DB::table('info')->insert($info);
    }
}
