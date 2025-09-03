<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OuvidoriaController;

Route::get('/ouvidoria', [OuvidoriaController::class, 'create'])->name('ouvidoria.form');
Route::post('/ouvidoria', [OuvidoriaController::class, 'store'])->name('ouvidoria.store');
Route::get('/show/{id}', [OuvidoriaController::class, 'show'])->name('ouvidoria.show');
Route::get('/edicao/{id}', [OuvidoriaController::class, 'edit'])->name('ouvidoria.edicao');
Route::delete('/delete/{id}', [OuvidoriaController::class, 'destroy'])->name('ouvidoria.destroy');
Route::get('/dashboard', [OuvidoriaController::class, 'dashboard'])->name('dashboard');
Route::post('/update/{id}', [OuvidoriaController::class, 'update'])->name('ouvidoria.update');

Route::get('/', function () {
    return view('principal');
});

