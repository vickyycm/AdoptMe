<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\SolicitudController;

/*
|--------------------------------------------------------------------------
| Rutas públicas (SOLO login)
|--------------------------------------------------------------------------
*/

// Página principal (FUERA del middleware para poder redirigir al login)
Route::get('/', function () {
    if (!Auth::check()) {
        return redirect()->route('login');
    }

    $user = Auth::user();

    if ($user->role === 'admin') {
        return redirect()->route('animals.index');
    } else {
        return redirect()->route('users.animals.index');
    }
})->name('index');

// Login (única ruta sin autenticación)
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

/*
|--------------------------------------------------------------------------
| Rutas que REQUIEREN login
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    /*
    |--------------------------------------------------------------------------
    | Rutas para ADMINISTRADORES (CRUD completo)
    |--------------------------------------------------------------------------
    */
    Route::middleware(['check.role:admin'])->group(function () {
        Route::resource('animals', AnimalController::class);
        Route::resource('solicituds', SolicitudController::class);
    });

    /*
    |--------------------------------------------------------------------------
    | Rutas para USUARIOS NORMALES (solo lectura)
    |--------------------------------------------------------------------------
    */
    Route::middleware(['check.role:user'])->group(function () {
        // Animales (solo ver)
        Route::get('/user/animals', [AnimalController::class, 'indexForUser'])->name('users.animals.index');
        Route::get('/user/animals/{animal}', [AnimalController::class, 'showForUser'])->name('users.animals.show');

        // Solicitudes (solo ver)
        Route::get('/user/solicituds', [SolicitudController::class, 'indexForUser'])->name('users.solicituds.index');
        Route::get('/user/solicituds/{solicitud}', [SolicitudController::class, 'showForUser'])->name('users.solicituds.show');
    });
});
