@extends('layouts.app')

@section('content')
<div class="container">
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Listado de animales</h1>
        <div>
            <a href="{{ route('users.solicituds.index') }}" class="btn btn-secondary ms-2">Ver solicitudes</a>
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
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection