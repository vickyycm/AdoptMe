<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Solicitud;
use App\Models\Animal;

class SolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $solicituds = Solicitud::with('animal')->orderBy('id', 'desc')->get();
        return view('solicituds.index', compact('solicituds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $animals = Animal::orderBy('nombre')->get();
        return view('solicituds.create', compact('animals'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'mail' => 'required|email|max:255',
            'animal_id' => 'required|exists:animals,id',
        ]);

        Solicitud::create($data);

        return redirect()->route('solicituds.index')->with('success', 'Solicitud creada correctamente.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Solicitud $solicitud)
    {
        $animals = Animal::orderBy('nombre')->get();
        return view('solicituds.edit', compact('solicitud', 'animals'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Solicitud $solicitud)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'mail' => 'required|email|max:255',
            'animal_id' => 'required|exists:animals,id',
        ]);

        $solicitud->update($data);

        return redirect()->route('solicituds.index')->with('success', 'Solicitud actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Solicitud $solicitud)
    {
        $solicitud->delete();
        return redirect()->route('solicituds.index')->with('success', 'Solicitud eliminada correctamente.');
    }

    public function indexForUser()
    {
        $solicituds = Solicitud::with('animal')->orderBy('id', 'desc')->get();
        return view('users.solicituds.index', compact('solicituds'));
    }

    public function showForUser(Solicitud $solicitud)
    {
        return view('users.solicituds.show', compact('solicitud'));
    }
}