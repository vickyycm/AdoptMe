@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-5">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white text-center">
                    <h3 class="mb-0">Registrarse</h3>
                </div>
                <div class="card-body p-4">
                    @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>¡Error!</strong> {{ $errors->first() }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <form method="POST" action="{{ route('register.post') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">
                                <i class="bi bi-person"></i> Nombre
                            </label>
                            <input id="name" name="name" type="text" class="form-control form-control-lg" value="{{ old('name') }}" required autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold">
                                <i class="bi bi-envelope"></i> Correo electrónico
                            </label>
                            <input id="email" name="email" type="email" class="form-control form-control-lg" value="{{ old('email') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label fw-bold">
                                <i class="bi bi-lock"></i> Contraseña
                            </label>
                            <input id="password" name="password" type="password" class="form-control form-control-lg" required>
                        </div>
                        <div class="mb-4">
                            <label for="password_confirmation" class="form-label fw-bold">
                                <i class="bi bi-lock"></i> Confirmar contraseña
                            </label>
                            <input id="password_confirmation" name="password_confirmation" type="password" class="form-control form-control-lg" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success btn-lg">
                                Registrarse
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
