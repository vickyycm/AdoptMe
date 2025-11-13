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
        <div class="row">
            @foreach($solicituds as $s)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm" style="border: 2px solid #4fc3f7; border-radius: 16px; background: #fffde7;">
                        <div class="card-body">
                            <h5 class="card-title" style="color:#0288d1;">{{ $s->nombre }}</h5>
                            <h6 class="card-subtitle mb-2" style="color:#ff9800;">{{ $s->mail }}</h6>
                            <p class="card-text">
                                <strong>Animal:</strong> {{ $s->animal->nombre ?? 'Sin asignar' }}<br>
                                <strong>Creada:</strong>
                                @if($s->created_at)
                                    {{ $s->created_at->format('d/m/Y') }}
                                @else
                                    Sin fecha
                                @endif
                            </p>
                            <a href="{{ route('solicituds.edit', $s->id) }}" class="btn btn-primary btn-sm">Editar</a>
                            <form action="{{ route('solicituds.destroy', $s->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
