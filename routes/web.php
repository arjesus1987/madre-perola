<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CadastroHomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CadastroEspecialidadeHomeController;
use App\Http\Controllers\CadastroAgendaHomeController;
use App\Http\Controllers\AgendaVisualizarHomeController;
use App\Http\Controllers\PerfilVisualizarHomeController;
use App\Http\Controllers\VisualizarUsuariosHomeController;
use App\Http\Controllers\VisualizarEspecialidadesHomeController;
use App\Http\Controllers\EspecialidadeController;
use App\Http\Controllers\HomeSiteController;
use App\Http\Controllers\CadastrarFornecedorHomeController;
use App\Http\Controllers\VisualizarFornecedoresHomeController;
use App\Http\Controllers\CadastroUsuarioController;
use App\Http\Controllers\VisualizarProdutosHomeController;
use App\Http\Controllers\GerenciamentoProdutoHomeController;
use App\Http\Controllers\ExperienciasController;
use App\Http\Controllers\CatalogoController;


use App\Http\Controllers\CadastrarProdutoHomeController;



Route::get('/', [HomeSiteController::class, "index"]);
Route::get('/login', [LoginController::class, 'index'])->name('login');


Route::get('/home', [HomeController::class, "index"]);

Route::get('/cadastrousuario', [CadastroHomeController::class, "index"]);
Route::get('/cadastrousuario', [CadastroUsuarioController::class, 'create']);
Route::post('/cadastrousuario', [CadastroUsuarioController::class, 'store']);


// Rotas de Fornecedores
Route::get('/cadastrarFornecedor', [CadastrarFornecedorHomeController::class, 'index']);
Route::post('/cadastrarFornecedor', [CadastrarFornecedorHomeController::class, 'store']);

//Rotas de Produtos
Route::post('/cadastrarProduto', [CadastrarProdutoHomeController::class, 'store']);
Route::get('/cadastrarProduto', [CadastrarProdutoHomeController::class, 'index']);


Route::get('/cadastroespecialidade', [CadastroEspecialidadeHomeController::class, "index"]);
Route::get('/agendaCadastro', [CadastroAgendaHomeController::class, "index"]);
Route::get('/agendaVisualizar', [AgendaVisualizarHomeController::class, 'index']);
Route::get('/visualizarPerfilUsuario', [PerfilVisualizarHomeController::class, 'index']);
Route::get('/visualizarUsuario', [VisualizarUsuariosHomeController::class, 'index']);
Route::get('/visualizarEspecialidades', [VisualizarEspecialidadesHomeController::class, 'index']);
Route::get('/cadastrarFornecedor', [CadastrarFornecedorHomeController::class, 'index']);
Route::get('/visualizarFornecedores', [VisualizarFornecedoresHomeController::class, 'index']);


Route::get('/visualizarProdutos', [VisualizarProdutosHomeController::class, 'index']);

Route::get('/especialidades', [EspecialidadeController::class, 'index']);

Route::get('/experiencias', function () {
    return view('experiencias');
});

Route::get('/catalogo', function () {
    return view('catalogo');
});

Route::get('/nutrologia', function () {
    return view('especialidades.nutrologia');
});

Route::get('/cirurgia-plastica', function () {
    return view('especialidades.cirurgia-plastica');
});

Route::get('/dermatologia', function () {
    return view('especialidades.dermatologia');
});

Route::get('/tricologia', function () {
    return view('especialidades.tricologia');
});

Route::get('/cosmiatria', function () {
    return view('especialidades.cosmiatria');
});




