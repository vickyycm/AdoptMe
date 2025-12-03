<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Novedad;

class NovedadesSeeder extends Seeder
{
    public function run(): void
    {
        Novedad::create([
            'titulo' => '¡Nuevo perro en adopción!',
            'contenido' => 'Hoy ingresó Max, un perro mestizo muy cariñoso que busca familia. ¡Conócelo en la sección de animales!',
            'autor' => 'Centro de Adopciones',
        ]);
        Novedad::create([
            'titulo' => 'Adopción exitosa',
            'contenido' => 'Felicitamos a Laura por adoptar a Luna. ¡Gracias por darle un hogar lleno de amor!',
            'autor' => 'Centro de Adopciones',
        ]);
        Novedad::create([
            'titulo' => 'Nuevo proceso de solicitud',
            'contenido' => 'Ahora puedes realizar tu solicitud de adopción directamente desde la web. ¡Haz clic en "Solicitar adopción" en el perfil del animal!',
            'autor' => 'Centro de Adopciones',
        ]);
    }
}
