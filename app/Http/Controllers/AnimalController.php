<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalController extends Controller
{
    public function index()
    {
        $animals = Animal::select('id', 'nombre', 'especie', 'edad', 'estado', 'photo')->orderBy('id', 'asc')->get();
        return view('animals.index', ['animals' => $animals]);
    }

    public function create()
    {
        return view('animals.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'especie' => 'required|string|max:255',
            'edad' => 'required|integer|min:0',
            'estado' => 'nullable|in:disponible,adoptado',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('photo')) {
            $nombre = time() . ".jpg";
            $request->file('photo')->move(public_path('archivos'), $nombre);
            $data['photo'] = 'archivos/' . $nombre;
        } else {
            $data['photo'] = null;
        }

        Animal::create($data);

        return redirect()->route('animals.index')->with('success', 'Animal creado correctamente.');
    }

    public function edit(Animal $animal)
    {
        return view('animals.edit', compact('animal'));
    }

    public function update(Request $request, Animal $animal)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'especie' => 'required|string|max:255',
            'edad' => 'required|integer|min:0',
            'estado' => 'nullable|in:disponible,adoptado',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('photo')) {
            $nombre = time() . ".jpg";
            $request->file('photo')->move(public_path('archivos'), $nombre);
            $data['photo'] = 'archivos/' . $nombre;
        } else {
            unset($data['photo']); // No modificar si no hay nueva foto
        }

        $animal->update($data);

        return redirect()->route('animals.index')->with('success', 'Animal actualizado correctamente.');
    }

    public function destroy(Animal $animal)
    {
        $animal->delete();
        return redirect()->route('animals.index')->with('success', 'Animal eliminado correctamente.');
    }
    public function indexForUser()
    {
        $animals = Animal::select('id', 'nombre', 'especie', 'edad', 'estado', 'photo')->orderBy('id', 'asc')->get();
        return view('users.animals.index', ['animals' => $animals]);
    }

    public function showForUser(Animal $animal)
    {
        return view('users.animals.show', compact('animal'));
    }
}
