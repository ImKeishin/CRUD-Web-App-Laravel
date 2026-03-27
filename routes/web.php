<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicController;
use App\Http\Controllers\PacientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MedicamentController;
use App\Http\Controllers\ProgramareController;
use App\Http\Controllers\ConsultatieController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('medici', MedicController::class);
Route::resource('pacienti', PacientController::class);
Route::resource('medicamente', MedicamentController::class);
Route::resource('programari', ProgramareController::class);
Route::resource('consultatii', ConsultatieController::class);
