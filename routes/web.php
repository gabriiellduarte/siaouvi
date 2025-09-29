<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OuvidoriaController;
use App\Http\Controllers\MovimentacaoController;
;
use App\Http\Controllers\FuncaoController;
use App\Http\Controllers\PermissionController;
use App\Models\Manifestacao;
use Inertia\Inertia;
use Illuminate\Validation\Rules\Can;




//Página inicial
Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

//Rotas protegidas
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');

    //     Route::middleware(['auth', 'role:admin'])->group(function () {
// //     // rotas de roles
// //     // rotas de permissões
// //     // rotas de atribuição
//  });



    Route::group(['middleware' => ['can:editar manifestações']], function () {
        //SISTEMA ANTIGO
        Route::get('/show/{id}', [OuvidoriaController::class, 'show'])->name('ouvidoria.show');
        Route::get('/edicao/{id}', [OuvidoriaController::class, 'edit'])->name('ouvidoria.edicao');
        Route::delete('/delete/{id}', [OuvidoriaController::class, 'destroy'])->name('ouvidoria.destroy');
        Route::get('/ouvi/dashboard', [OuvidoriaController::class, 'dashboard'])->name('dashboardouvi');
        Route::post('/update/{id}', [OuvidoriaController::class, 'update'])->name('ouvidoria.update');
        Route::get('/satisfacaodapag', [OuvidoriaController::class, 'index'])
            ->name('satisfacaodapag.index');


    });
    Route::get('/ouvidoria', [OuvidoriaController::class, 'create'])->name('ouvidoria.form');
    Route::post('/ouvidoria', [OuvidoriaController::class, 'store'])->name('ouvidoria.store');

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
    Route::put('usuarios/{user}/roles', [App\Http\Controllers\UsuariosController::class, 'updateRoles'])->name('usuarios.update.roles');
    Route::put('usuarios/{user}/permissions', [App\Http\Controllers\UsuariosController::class, 'updatePermissions'])->name('usuarios.update.permissions');

    //Atribuir funções e permissões ao usuário
    Route::get('users/{id}/assign', [App\Http\Controllers\UsuariosController::class, 'showAssignForm'])->name('users.assign');
    Route::post('users/{id}/assign', [App\Http\Controllers\UsuariosController::class, 'assignRolePermission'])->name('users.assign.save');


    //Rotas de permissões
    Route::get('/permissoes', [App\Http\Controllers\PermissionController::class, 'index'])->name('permissoes.index');
    Route::post('/permissoes', [App\Http\Controllers\PermissionController::class, 'store'])->name('permissoes.store');
    Route::get('/criarpermissao', [App\Http\Controllers\PermissionController::class, 'create'])->name('permissoes.create');
    Route::delete('/permissoes/{id}', [App\Http\Controllers\PermissionController::class, 'destroy'])->name('permissoes.destroy');
    Route::get('/permissoes/{id}/edit', [App\Http\Controllers\PermissionController::class, 'edit'])->name('permissoes.edit');
    Route::put('/permissoes/{id}', [App\Http\Controllers\PermissionController::class, 'update'])->name('permissoes.update');



    Route::get('/atribuirpermissoesafuncao/{id}', [FuncaoController::class, 'showAssignForm'])->name('funcao.atribuirpermissoes');
    Route::post('/atribuirpermissoesafuncao/{id}', [FuncaoController::class, 'assignPermissionRole'])->name('funcao.atribuirpermissoes.store');




    //Rotas de listagem de função
    Route::get('/listadefuncao', [App\Http\Controllers\FuncaoController::class, 'index'])->name('listadefuncao.index');
    Route::post('/listadefuncao', [App\Http\Controllers\FuncaoController::class, 'store'])->name('listadefuncao.store');
    Route::get('/criarlistadefuncao', [App\Http\Controllers\FuncaoController::class, 'create'])->name('listadefuncao.create');
    Route::delete('/listadefuncoes/{id}', [App\Http\Controllers\FuncaoController::class, 'destroy'])->name('listadefuncao.destroy');
    Route::get('/listadefuncao/{id}/edit', [App\Http\Controllers\FuncaoController::class, 'edit'])->name('listadefuncao.edit');
    Route::put('/listadefuncao/{id}', [App\Http\Controllers\FuncaoController::class, 'update'])->name('listadefuncao.update');

    //Rotas de avaliação
    Route::get('/avaliacao', [OuvidoriaController::class, 'avaliacaoCreate'])->name('avaliacao.create');
    Route::post('/avaliacao', [OuvidoriaController::class, 'avaliacaoStore'])->name('avaliacaoStore');
    Route::get('/avaliacoes', [OuvidoriaController::class, 'avaliacaoperguntaCreate'])->name('avaliacoes.create');
    Route::post('/avaliacoes', [OuvidoriaController::class, 'avaliacaoperguntaStore'])->name('avaliacoesperguntaStore');
    Route::get('/avdashboard', [OuvidoriaController::class, 'dashboardAvaliacoes'])->name('dashboardavaliacoes');
});

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';

