@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-5">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-info text-white text-center">
                    <h3 class="mb-0">Login</h3>
                </div>
                <div class="card-body p-4">
                    @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>¡Error!</strong> {{ $errors->first() }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <form method="POST" action="{{ route('login.post') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold">
                                <i class="bi bi-envelope"></i> Correo electrónico
                            </label>
                            <input
                                id="email"
                                name="email"
                                type="email"
                                class="form-control form-control-lg"
                                value="{{ old('email') }}"
                                placeholder="ejemplo@correo.com"
                                required
                                autofocus>
                        </div>

                        <div class="mb-4">
                            <label for="password" class="form-label fw-bold">
                                <i class="bi bi-lock"></i> Contraseña
                            </label>
                            <input
                                id="password"
                                name="password"
                                type="password"
                                class="form-control form-control-lg"
                                placeholder="••••••••"
                                required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">
                                Iniciar Sesión
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection