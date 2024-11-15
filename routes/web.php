<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EncuestaController;
use App\Http\Controllers\PdfController;

// Routes for authentication
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Resource routes
Route::resource('motorgest', 'App\Http\Controllers\HomeController');
Route::resource('vehiculo', 'App\Http\Controllers\VehiculoController');
Route::resource('taller', 'App\Http\Controllers\TallerController');
Route::resource('cita', 'App\Http\Controllers\CitaController');

// Custom routes
Route::get('/obtenerTalleresPorTipo', 'App\Http\Controllers\CitaController@buscarTaller');
Route::get('/validarFecha', 'App\Http\Controllers\CitaController@validarFecha');

// Routes for admin users
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('usuario', 'App\Http\Controllers\UsuarioController');
});

// Other resource routes
Route::resource('mantenimiento', 'App\Http\Controllers\MantenimientoController');
Route::get('imprimirVehiculos', [PdfController::class, 'imprimirVehiculos'])->name('imprimirVehiculos');

// Route for encuesta
Route::get('/encuesta', [EncuestaController::class, 'show']);


Route::resource('mensaje', 'App\Http\Controllers\MensajeController');
