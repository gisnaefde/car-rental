<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tenants = [
            ['nama' => 'John Doe', 'alamat' => 'Jl. Asem Baris Raya No.1', 'no_hp' => '08123456789', 'nik' => '1234567890123', 'email' => 'johndoe@email.com'],
            ['nama' => 'Jane Smith', 'alamat' => 'Jl. Kebon Jeruk No.12', 'no_hp' => '08987654321', 'nik' => '2345678901234', 'email' => 'janesmith@email.com'],
            ['nama' => 'Michael Brown', 'alamat' => 'Jl. Gajah Mada No.35', 'no_hp' => '08111222333', 'nik' => '3456789012345', 'email' => 'michaelbrown@email.com'],
            ['nama' => 'Emily Davis', 'alamat' => 'Jl. Merdeka Selatan No.5', 'no_hp' => '085566778899', 'nik' => '4567890123456', 'email' => 'emilydavis@email.com'],
            ['nama' => 'Jacob Taylor', 'alamat' => 'Jl. Ciputat Raya No.22', 'no_hp' => '089988776655', 'nik' => '5678901234567', 'email' => 'jacobtaylor@email.com']
        ];
        DB::table('tenants')->insert($tenants);
    }
}
