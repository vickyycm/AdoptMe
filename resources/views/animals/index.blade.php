<!-- filepath: /C:/Users/Alumno/Proyecto-laravel/resources/views/animals/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($animals as $animal)
            <div class="col-md-4 mb-4">
                <div class="card">
                    @if ($animal->photo)
                        <img src="{{ asset($animal->photo) }}" class="card-img-top" alt="{{ $animal->nombre }}">
                    @else
                        <img src="{{ asset('storage/' . $animal->photo) }}" class="card-img-top" alt="{{ $animal->nombre }}">
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
