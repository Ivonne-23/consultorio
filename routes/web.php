<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OdontologosController;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('dash', function () {
    return view('das_board');
});
Route::resource('odontologos', App\Http\Controllers\OdontologosController::class);

Route::resource('pacientes', App\Http\Controllers\PacientesController::class);

Route::resource('citas', App\Http\Controllers\CitasController::class);




