<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class solicitudsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('solicituds')->insert([
            [
                'id' => 7,
                'nombre' => 'Juan',
                'mail' => 'juan@gmail.com',
                'animal_id' => 30,
                'created_at' => '2025-11-13 20:28:11',
                'updated_at' => '2025-11-13 20:28:11'
            ],
            [
                'id' => 8,
                'nombre' => 'Pilar',
                'mail' => 'pilimili@yahoo.com',
                'animal_id' => 24,
                'created_at' => '2025-11-13 20:28:46',
                'updated_at' => '2025-11-13 20:28:46'
            ]
        ]);
    }
}
