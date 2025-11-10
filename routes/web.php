<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\SolicitudController;

// crea una ruta "home" para evitar el error Route [home] not defined
Route::get('/', function () {
    return redirect()->route('animals.index'); // o return view('index');
})->name('home');

// rutas resource para poder navegar
Route::resource('animals', AnimalController::class);
Route::resource('solicituds', SolicitudController::class);