@extends('layouts.app')
@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Listado de animales</h1>
        <div>
            <a href="{{ route('animals.create') }}" class="btn btn-primary">Crear animal</a>
            <a href="{{ route('solicituds.index') }}" class="btn btn-secondary ms-2">Ver solicitudes</a>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($animals->isEmpty())
        <p>No hay animales registrados.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Especie</th>
                    <th>Edad</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($animals as $animal)
                    <tr>
                        <td>{{ $animal->id }}</td>
                        <td>{{ $animal->nombre }}</td>
                        <td>{{ $animal->especie }}</td>
                        <td>{{ $animal->edad }}</td>
                        <td>{{ $animal->estado }}</td>
                        <td>
                            <a href="{{ route('animals.edit', $animal->id) }}" class="btn btn-sm btn-warning">Editar</a>

                            <form action="{{ route('animals.destroy', $animal->id) }}" method="POST" style="display:inline" onsubmit="return confirm('¿Eliminar este animal?');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
