<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ClasificacionController;

Route::get('', [HomeController::class, 'index'])->name('admin.home');
Route::resource('clasificacion', [ClasificacionController::class, 'index'])->name('admin.clasificacion');