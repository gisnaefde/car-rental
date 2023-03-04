<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeMobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            ['type' => 'Sedan', 'merk' => 'Toyota'],
            ['type' => 'SUV', 'merk' => 'Toyota'],
            ['type' => 'Hatchback', 'merk' => 'Toyota'],
            ['type' => 'Sedan', 'merk' => 'Honda'],
            ['type' => 'SUV', 'merk' => 'Honda']
        ];

        foreach ($types as $type) {
            Type::create($type);
        }
    }
}
