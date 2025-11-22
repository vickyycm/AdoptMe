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
        DB::table('animals')->insert([
            [
                'id' => 22,
                'nombre' => 'Tini',
                'especie' => 'Hamster',
                'edad' => 1,
                'estado' => 'disponible',
                'photo' => 'archivos/1763054562.jpg',
                'created_at' => '2025-11-13 20:22:42',
                'updated_at' => '2025-11-13 20:22:42'
            ],
            [
                'id' => 23,
                'nombre' => 'Carmen',
                'especie' => 'Cobayo',
                'edad' => 3,
                'estado' => 'disponible',
                'photo' => 'archivos/1763054587.jpg',
                'created_at' => '2025-11-13 20:23:07',
                'updated_at' => '2025-11-13 20:23:07'
            ],
            [
                'id' => 24,
                'nombre' => 'Rihanna',
                'especie' => 'Suricata',
                'edad' => 6,
                'estado' => 'adoptado',
                'photo' => 'archivos/1763054610.jpg',
                'created_at' => '2025-11-13 20:23:30',
                'updated_at' => '2025-11-13 20:23:30'
            ],
            [
                'id' => 25,
                'nombre' => 'Mia',
                'especie' => 'Gato',
                'edad' => 1,
                'estado' => 'adoptado',
                'photo' => 'archivos/1763054635.jpg',
                'created_at' => '2025-11-13 20:23:55',
                'updated_at' => '2025-11-13 20:23:55'
            ],
            [
                'id' => 26,
                'nombre' => 'Mustafa',
                'especie' => 'Gato',
                'edad' => 2,
                'estado' => 'disponible',
                'photo' => 'archivos/1763054658.jpg',
                'created_at' => '2025-11-13 20:24:18',
                'updated_at' => '2025-11-13 20:24:18'
            ],
            [
                'id' => 27,
                'nombre' => 'Mariano',
                'especie' => 'Hamster',
                'edad' => 2,
                'estado' => 'disponible',
                'photo' => 'archivos/1763054788.jpg',
                'created_at' => '2025-11-13 20:26:28',
                'updated_at' => '2025-11-13 20:26:28'
            ],
            [
                'id' => 28,
                'nombre' => 'Pochoclo',
                'especie' => 'Perro',
                'edad' => 8,
                'estado' => 'disponible',
                'photo' => 'archivos/1763054812.jpg',
                'created_at' => '2025-11-13 20:26:52',
                'updated_at' => '2025-11-13 20:26:52'
            ],
            [
                'id' => 29,
                'nombre' => 'Coco',
                'especie' => 'Perro',
                'edad' => 1,
                'estado' => 'disponible',
                'photo' => 'archivos/1763054839.jpg',
                'created_at' => '2025-11-13 20:27:19',
                'updated_at' => '2025-11-13 20:27:19'
            ],
            [
                'id' => 30,
                'nombre' => 'Malala',
                'especie' => 'Perro',
                'edad' => 3,
                'estado' => 'disponible',
                'photo' => 'archivos/1763054863.jpg',
                'created_at' => '2025-11-13 20:27:43',
                'updated_at' => '2025-11-13 20:27:43'
            ]
        ]);
    }
}
