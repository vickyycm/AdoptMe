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
    DB::statement("INSERT INTO animals (nombre, especie, edad, estado, photo) VALUES
('Luna', 'Perro', 2, 'disponible', 'images/animals/luna.jpg'),
('Milo', 'Gato', 1, 'adoptado', 'images/animals/milo.jpg'),
('Toby', 'Perro', 4, 'disponible', 'images/animals/toby.jpg'),
('Nina', 'Gato', 3, 'disponible', 'images/animals/nina.jpg'),
('Rocky', 'Perro', 5, 'adoptado', 'images/animals/rocky.jpg'),
('Coco', 'Conejo', 2, 'disponible', 'images/animals/coco.jpg'),
('Simba', 'Gato', 6, 'adoptado', 'images/animals/simba.jpg'),
('Kira', 'Perro', 1, 'disponible', 'images/animals/kira.jpg'),
('Lola', 'Gato', 4, 'disponible', 'images/animals/lola.jpg')");
}
}
