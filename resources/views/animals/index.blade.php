<!-- filepath: /C:/Users/Alumno/Proyecto-laravel/resources/views/animals/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Listado de animales</h1>
        <div>
            <a href="{{ route('animals.create') }}" class="btn btn-primary">Crear animal</a>
            <a href="{{ route('solicituds.index') }}" class="btn btn-secondary ms-2">Ver solicitudes</a>
        </div>
    </div>
    <div class="row">
        @foreach ($animals as $animal)
            <div class="col-md-4 mb-4">
                <div class="card">
                    @if ($animal->photo)
                        <img src="{{ asset($animal->photo) }}" class="card-img-top" alt="{{ $animal->nombre }}">
                    @else
                        <img src="https://via.placeholder.com/300x200?text=Sin+Foto" class="card-img-top" alt="Sin foto">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $animal->nombre }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $animal->especie }}</h6>
                        <p class="card-text">
                            <strong>Edad:</strong> {{ $animal->edad }} años<br>
                            <strong>Estado:</strong> {{ ucfirst($animal->estado) }}
                        </p>
                        <a href="{{ route('animals.edit', $animal->id) }}" class="btn btn-primary btn-sm">Editar</a>
                        <form action="{{ route('animals.destroy', $animal->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
