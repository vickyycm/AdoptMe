<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    // Nombre de la tabla (ajusta si tu tabla tiene otro nombre)
    protected $table = 'animals';

    // Campos que se pueden asignar en masa
    protected $fillable = [
        'nombre',
        'especie',
        'edad',
        'estado',
    ];

    // Usar timestamps (si la tabla tiene created_at/updated_at)
    public $timestamps = true;
}
