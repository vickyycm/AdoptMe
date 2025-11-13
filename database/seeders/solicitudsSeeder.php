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
        DB::statement("INSERT INTO `solicituds` (`id`, `nombre`, `mail`, `animal_id`, `created_at`, `updated_at`) VALUES
(7, 'Juan', 'juan@gmail.com', 30, '2025-11-13 20:28:11', '2025-11-13 20:28:11'),
(8, 'Pilar', 'pilimili@yahoo.com', 24, '2025-11-13 20:28:46', '2025-11-13 20:28:46');");
    }
}
