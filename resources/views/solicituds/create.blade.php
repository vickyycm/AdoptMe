@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Crear solicitud</h1>
    <form action="{{ auth()->user()->role === 'user' ? route('users.solicituds.store') : route('solicituds.store') }}" method="POST">
        @csrf
        @include('solicituds._form', ['buttonText' => 'Crear'])
    </form>
</div>
@endsection