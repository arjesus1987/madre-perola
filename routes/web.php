<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CadastroHomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroEspecialidadeHomeController;
use App\Http\Controllers\CadastroAgendaHomeController;
use App\Http\Controllers\AgendaVisualizarHomeController;
use App\Http\Controllers\PerfilVisualizarHomeController;
use App\Http\Controllers\VisualizarUsuariosHomeController;
use App\Http\Controllers\VisualizarEspecialidadesHomeController;
use App\Http\Controllers\CadastrarFornecedorHomeController;
use App\Http\Controllers\VisualizarFornecedoresHomeController;
use App\Http\Controllers\CadastrarProdutoHomeController;
use App\Http\Controllers\VisualizarProdutosHomeController;
use App\Http\Controllers\GerenciamentoProdutoHomeController;
use App\Http\Controllers\ExperienciasController;
use App\Http\Controllers\CatalogoController;    



Route::get('/login',[LoginController::class, "index"]);
Route::get('/home',[HomeController::class, "index"]);
Route::get('/cadastrousuario',[CadastroHomeController::class, "index"]);
Route::get('/cadastroespecialidade',[CadastroEspecialidadeHomeController::class, "index"]);
Route::get('/agendaCadastro',[CadastroAgendaHomeController::class, "index"]);
Route::get('/agendaVisualizar', [AgendaVisualizarHomeController::class, 'index']);
Route::get('/visualizarPerfilUsuario', [PerfilVisualizarHomeController::class, 'index']);
Route::get('/visualizarUsuario', [VisualizarUsuariosHomeController::class, 'index']);
Route::get('/visualizarEspecialidades', [VisualizarEspecialidadesHomeController::class, 'index']);
Route::get('/cadastrarFornecedor', [CadastrarFornecedorHomeController::class, 'index']);
Route::get('/visualizarFornecedores', [VisualizarFornecedoresHomeController::class, 'index']);
Route::get('/cadastrarProduto', [CadastrarProdutoHomeController::class, 'index']);
Route::get('/visualizarProdutos', [VisualizarProdutosHomeController::class, 'index']);
Route::prefix('adm')->name('adm.')->middleware('auth')->group(function () {
    Route::resource('/gerenciamentoProdutos', GerenciamentoProdutoHomeController::class);

});

Route::get('/experiencias', function () {
    return view('experiencias');
});

Route::get('/catalogo', function () {
    return view('catalogo');
});

