@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Editar solicitud</h1>
    <form action="{{ route('solicituds.update', $solicitud->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('solicituds._form', ['buttonText' => 'Actualizar'])
    </form>
</div>
@endsection