@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Editar animal</h1>
    <form action="{{ route('animals.update', $animal->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('animals._form', ['buttonText' => 'Actualizar'])
    </form>
</div>
@endsection