<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdopMe</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
@vite(['resources/css/app.css', 'resources/js/app.js'])
<style>
body {
    background: linear-gradient(120deg, #e3f6fd 0%, #fffbe6 100%);
    font-family: 'Segoe UI', 'Nunito', Arial, sans-serif;
    color: #3e2723;
    padding-bottom: 80px; /* Ajusta según el alto del footer */
}
h1, h5, h6 {
    color: #ff9800;
    font-family: 'Nunito', 'Segoe UI', Arial, sans-serif;
}
.card {
    background: #fffde7;
    border: 1px solid #ffe082;
    border-radius: 14px;
    box-shadow: 0 2px 8px #90caf933;
    padding: 1.2rem;
}
.btn-primary, .btn-primary:visited {
    background: #ffb300;
    border-color: #ffb300;
    color: #fff;
    font-weight: 600;
}
.btn-primary:hover, .btn-primary:focus {
    background: #ffa000;
    border-color: #ffa000;
    color: #fff;
}
.btn-secondary, .btn-secondary:visited {
    background: #4fc3f7;
    border-color: #4fc3f7;
    color: #fff;
    font-weight: 600;
}
.btn-secondary:hover, .btn-secondary:focus {
    background: #0288d1;
    border-color: #0288d1;
    color: #fff;
}
.btn-danger, .btn-danger:visited {
    background: #ff7043;
    border-color: #ff7043;
    color: #fff;
    font-weight: 600;
}
.btn-danger:hover, .btn-danger:focus {
    background: #d84315;
    border-color: #d84315;
    color: #fff;
}
.table th, .table td {
    background: #fffbe6;
    color: #3e2723;
}
.alert-success {
    background: #ffe082;
    color: #3e2723;
    border: 1px solid #ffd54f;
}
.form-label {
    color: #0288d1;
    font-weight: 600;
}
input[type="text"], input[type="number"], input[type="email"], select, input[type="file"] {
    border: 1px solid #ffe082;
    border-radius: 6px;
    background: #fffde7;
    color: #3e2723;
}
input[type="text"]:focus, input[type="number"]:focus, input[type="email"]:focus, select:focus, input[type="file"]:focus {
    border-color: #4fc3f7;
    outline: none;
    background: #e3f6fd;
}
.card-title {
    color: #ff9800;
}
.card-subtitle {
    color: #4fc3f7;
}
.navbar, header {
    background: linear-gradient(90deg, #ffb300 0%, #4fc3f7 100%);
    color: #fff !important;
    font-family: 'Nunito', 'Segoe UI', Arial, sans-serif;
    font-weight: 700;
    border-bottom: 3px solid #ffa000;
}
.navbar a, header a {
    color: #fff !important;
}
.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background: linear-gradient(90deg, #4fc3f7 0%, #ffb300 100%);
    color: #fff;
    font-family: 'Nunito', 'Segoe UI', Arial, sans-serif;
    font-weight: 600;
    border-top: 3px solid #4fc3f7;
    padding: 1rem 0;
    text-align: center;
    z-index: 100;
}
.form-bottom-space {
    margin-bottom: 3rem;
}
</style>
</head>

<body>
    {{-- navbar integrado en el layout --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">AdoptMe - Panel de administración </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('animals.*') ? 'active' : '' }}" href="{{ route('animals.index') }}">
                            Animales
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('solicituds.*') ? 'active' : '' }}" href="{{ route('solicituds.index') }}">
                            Solicitudes
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        @yield('content')
    </main>

    <footer class="footer mt-auto py-3 bg-dark mt-4">
        <div class="container d-lg-flex justify-content-between">
            <span class="text-light">AdoptMe ©</span>
        </div>
    </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
