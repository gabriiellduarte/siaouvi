<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OuvidoriaController;
use App\Http\Controllers\MovimentacaoController;;
use App\Models\Manifestacao;
use Inertia\Inertia;



//Página inicial
Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

//Rotas protegidas
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
    
    //pagina de movimentação
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

     //Rotas de movimentação
    Route::post('/manifestacoes/{id}/movimentar', [MovimentacaoController::class, 'storeMovimentacao'])
    ->name('manifestacoes.movimentar.store');
    Route::get('/movimentacao/{id}', [MovimentacaoController::class, 'showMovimentacao'])->name('movimentacao.show');
    Route::get('/manifestacoes/{id}/movimentacoes', [MovimentacaoController::class, 'movimentacoes'])->name('manifestacoes.movimentacoes');
    Route::get('/manifestacoes/{id}/movimentacoes', [MovimentacaoController::class, 'showMovimentacao'])
    ->name('manifestacoes.movimentacoes');

    //Rotas de Usuários
    Route::get('/usuarios', [App\Http\Controllers\UsuariosController::class, 'index'])->name('usuarios.index');
    Route::get('/usuarios/{id}', [App\Http\Controllers\UsuariosController::class, 'show'])->name('usuarios.show');
    Route::get('/usuarios/create', [App\Http\Controllers\UsuariosController::class, 'create'])->name('usuarios.create');
    Route::post('/usuarios', [App\Http\Controllers\UsuariosController::class, 'store'])->name('usuarios.store');
    Route::get('/usuarios/{id}/edit', [App\Http\Controllers\UsuariosController::class, 'edit'])->name('usuarios.edit');
    Route::put('/usuarios/{id}', [App\Http\Controllers\UsuariosController::class, 'update'])->name('usuarios.update');
    Route::delete('/usuarios/{id}', [App\Http\Controllers\UsuariosController::class, 'destroy'])->name('usuarios.destroy');

    //Rotas de permissões
    Route::get('/permissoes', [App\Http\Controllers\PermissionController::class, 'index'])->name('permissoes.index');
    Route::post('/permissoes', [App\Http\Controllers\PermissionController::class, 'store'])->name('permissoes.store');
    Route::post('/usuarios/{id}/permissao', [App\Http\Controllers\PermissionController::class, 'givePermission'])->name('usuarios.givePermission');
    Route::get('/criarpermissao', [App\Http\Controllers\PermissionController::class, 'create'])->name('permissoes.create');
    Route::delete('/permissoes/{id}', [App\Http\Controllers\PermissionController::class, 'destroy'])->name('permissoes.destroy');
    Route::get('/permissoes/{id}/edit', [App\Http\Controllers\PermissionController::class, 'edit'])->name('permissoes.edit');
    Route::put('/permissoes/{id}', [App\Http\Controllers\PermissionController::class, 'update'])->name('permissoes.update');


});
require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

