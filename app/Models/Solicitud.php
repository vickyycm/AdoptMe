<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Animal;

class Solicitud extends Model
{
    // Nombre de la tabla (ya creada por tu migración)
    protected $table = 'solicituds';

    // Campos asignables en masa
    protected $fillable = [
        'nombre',
        'mail',
        'animal_id',
    ];

    // Usar timestamps
    public $timestamps = true;

    // Relación con Animal
    public function animal()
    {
        return $this->belongsTo(Animal::class);
    }
}
