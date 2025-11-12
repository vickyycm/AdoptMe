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
        DB::statement("INSERT INTO solicituds (nombre, mail, id_animal) VALUES
('Camila Torres', 'camila.torres@example.com', 3),
('Juan Pérez', 'juanperez@example.com', 1),
('Mariana López', 'mariana.lopez@example.com', 8),
('Sofía Díaz', 'sofia.diaz@example.com', 12),
('Carlos Gómez', 'carlos.gomez@example.com', 5);");
    }
}
