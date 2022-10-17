<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ClasificacionController;
use App\Http\Controllers\Admin\GeneroController;
use App\Http\Controllers\Admin\BeneficioController;
use App\Http\Controllers\Admin\PeliculaController;


Route::get('', [HomeController::class, 'index'])->name('admin.home');
Route::resource('clasificacion', ClasificacionController::class)->names('admin.clasificacion');
