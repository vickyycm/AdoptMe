@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Foro de Novedades</h1>
    <div class="mb-4">
        @foreach($novedades as $novedad)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $novedad->titulo }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Por {{ $novedad->autor }}</h6>
                <p class="card-text">{{ $novedad->contenido }}</p>
            </div>
        </div>
        @endforeach
        @if($novedades->isEmpty())
            <p>No hay novedades aún.</p>
        @endif
    </div>
</div>
@endsection
