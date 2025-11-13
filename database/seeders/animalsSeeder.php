<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class animalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    DB::statement("INSERT INTO `animals` (`id`, `nombre`, `especie`, `edad`, `estado`, `photo`, `created_at`, `updated_at`) VALUES
(22, 'Tini', 'Hamster', 1, 'disponible', 'archivos/1763054562.jpg', '2025-11-13 20:22:42', '2025-11-13 20:22:42'),
(23, 'Carmen', 'Cobayo', 3, 'disponible', 'archivos/1763054587.jpg', '2025-11-13 20:23:07', '2025-11-13 20:23:07'),
(24, 'Rihanna', 'Suricata', 6, 'adoptado', 'archivos/1763054610.jpg', '2025-11-13 20:23:30', '2025-11-13 20:23:30'),
(25, 'Mia', 'Gato', 1, 'adoptado', 'archivos/1763054635.jpg', '2025-11-13 20:23:55', '2025-11-13 20:23:55'),
(26, 'Mustafa', 'Gato', 2, 'disponible', 'archivos/1763054658.jpg', '2025-11-13 20:24:18', '2025-11-13 20:24:18'),
(27, 'Mariano', 'Hamster', 2, 'disponible', 'archivos/1763054788.jpg', '2025-11-13 20:26:28', '2025-11-13 20:26:28'),
(28, 'Pochoclo', 'Perro', 8, 'disponible', 'archivos/1763054812.jpg', '2025-11-13 20:26:52', '2025-11-13 20:26:52'),
(29, 'Coco', 'Perro', 1, 'disponible', 'archivos/1763054839.jpg', '2025-11-13 20:27:19', '2025-11-13 20:27:19'),
(30, 'Malala', 'Perro', 3, 'disponible', 'archivos/1763054863.jpg', '2025-11-13 20:27:43', '2025-11-13 20:27:43');");
}
}
