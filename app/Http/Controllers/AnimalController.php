<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Trae los animales desde la BD con los campos requeridos (nombres en español)
        $animals = Animal::select('id', 'nombre', 'especie', 'edad', 'estado')
                         ->orderBy('id', 'asc')
                         ->get();

        return view('animals.index', ['animals' => $animals]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('animals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'especie' => 'required|string|max:255',
            'edad' => 'required|integer|min:0',
            'estado' => 'nullable|in:disponible,adoptado',
        ]);

        Animal::create($data);

        return redirect()->route('animals.index')->with('success', 'Animal creado correctamente.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Animal $animal)
    {
        return view('animals.edit', compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Animal $animal)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'especie' => 'required|string|max:255',
            'edad' => 'required|integer|min:0',
            'estado' => 'nullable|in:disponible,adoptado',
        ]);

        $animal->update($data);

        return redirect()->route('animals.index')->with('success', 'Animal actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animal $animal)
    {
        $animal->delete();
        return redirect()->route('animals.index')->with('success', 'Animal eliminado correctamente.');
    }
}
