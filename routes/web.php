<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OuvidoriaController;
use App\Http\Controllers\MovimentacaoController;;
use App\Models\Manifestacao;
use Inertia\Inertia;




Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');

    //SISTEMA ANTIGO
    Route::get('/ouvidoria', [OuvidoriaController::class, 'create'])->name('ouvidoria.form');
    Route::post('/ouvidoria', [OuvidoriaController::class, 'store'])->name('ouvidoria.store');
    Route::get('/show/{id}', [OuvidoriaController::class, 'show'])->name('ouvidoria.show');
    Route::get('/edicao/{id}', [OuvidoriaController::class, 'edit'])->name('ouvidoria.edicao');
    Route::delete('/delete/{id}', [OuvidoriaController::class, 'destroy'])->name('ouvidoria.destroy');
    Route::get('/ouvi/dashboard', [OuvidoriaController::class, 'dashboard'])->name('dashboardouvi');
    Route::post('/update/{id}', [OuvidoriaController::class, 'update'])->name('ouvidoria.update');
    
    Route::get('/movimentacao', function () {
        $manifestacoes = Manifestacao::all();
        return view('movimentacao', compact('manifestacao'));
    });

    Route::get('/manifestacoes/{id}/movimentacoes/criar', [MovimentacaoController::class, 'create'])->name('movimentacoes.create');
    Route::post('/manifestacoes/{id}/movimentacoes', [MovimentacaoController::class, 'store'])->name('movimentacoes.store');
    Route::get('/movimentacao/{id}', [MovimentacaoController::class, 'show'])->name('movimentacao.show');
    Route::get('/movimentacao', function () {
        return view('movimentacao');
    });

    Route::get('/satisfacaodapag', [OuvidoriaController::class, 'index'])
     ->name('satisfacaodapag.index');

    Route::post('/manifestacoes/{id}/movimentar', [MovimentacaoController::class, 'storeMovimentacao'])
    ->name('manifestacoes.movimentar.store');
    Route::get('/movimentacao/{id}', [MovimentacaoController::class, 'showMovimentacao'])->name('movimentacao.show');
    Route::get('/manifestacoes/{id}/movimentacoes', [MovimentacaoController::class, 'movimentacoes'])->name('manifestacoes.movimentacoes');
    Route::get('/manifestacoes/{id}/movimentacoes', [MovimentacaoController::class, 'showMovimentacao'])
    ->name('manifestacoes.movimentacoes');


});
require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

