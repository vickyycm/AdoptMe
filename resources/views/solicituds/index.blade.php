@extends('layouts.app')
@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Solicitudes</h1>
        <div>
            <a href="{{ route('solicituds.create') }}" class="btn btn-primary">Crear solicitud</a>
            <a href="{{ route('animals.index') }}" class="btn btn-secondary ms-2">Ver animales</a>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($solicituds->isEmpty())
        <p>No hay solicitudes registradas.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Mail</th>
                    <th>Animal</th>
                    <th>Creada</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($solicituds as $s)
                    <tr>
                        <td>{{ $s->id }}</td>
                        <td>{{ $s->nombre }}</td>
                        <td>{{ $s->mail }}</td>
                        <td>{{ $s->animal->nombre ?? '-' }}</td>
                        <td>{{ optional($s->created_at)->format('Y-m-d') ?? '-' }}</td>
                        <td>
                            <a href="{{ route('solicituds.edit', $s->id) }}" class="btn btn-sm btn-warning">Editar</a>

                            <form action="{{ route('solicituds.destroy', $s->id) }}" method="POST" style="display:inline" onsubmit="return confirm('¿Eliminar esta solicitud?');">
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
