@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Crear solicitud</h1>
    <form action="{{ route('solicituds.store') }}" method="POST">
        @csrf
        @include('solicituds._form', ['buttonText' => 'Crear'])
    </form>
</div>
@endsection