<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OdontologosController;
use App\Http\Controllers\WelcomeController;
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

Route::resource('tratamientos', App\Http\Controllers\TratamientosController::class);

Route::resource('tratamientos_pacientes', App\Http\Controllers\Tratamientos_pacientesController::class);

Route::resource('pagos', App\Http\Controllers\PagoController::class);
Route::resource('expedientes', App\Http\Controllers\ExpedientesController::class);


Route::resource('welcome', App\Http\Controllers\WelcomeController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('/', [WelcomeController::class, 'index']);
Route::get('/tratamientos/{id}', [WelcomeController::class, 'show'])->name('tratamientos.show');
