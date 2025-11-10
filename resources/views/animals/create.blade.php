@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Crear animal</h1>
    <form action="{{ route('animals.store') }}" method="POST">
        @csrf
        @include('animals._form', ['buttonText' => 'Crear'])
    </form>
</div>
@endsection