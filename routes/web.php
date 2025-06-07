<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CadastroHomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CadastroAgendaHomeController;
use App\Http\Controllers\AgendaVisualizarHomeController;
use App\Http\Controllers\CadastrarEspecialidadeController;
use App\Http\Controllers\PerfilVisualizarHomeController;
use App\Http\Controllers\VisualizarUsuariosHomeController;
use App\Http\Controllers\EspecialidadeController;
use App\Http\Controllers\HomeSiteController;
use App\Http\Controllers\CadastrarFornecedorHomeController;
use App\Http\Controllers\VisualizarFornecedoresHomeController;
use App\Http\Controllers\CadastroUsuarioController;
use App\Http\Controllers\VisualizarProdutosHomeController;
use App\Http\Controllers\GerenciamentoProdutoHomeController;
use App\Http\Controllers\ExperienciasController;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\CadastrarProdutoController;
use App\Http\Controllers\VisualizarEspecialidadesController;
use App\Http\Controllers\UsuarioController;

use App\Http\Controllers\CadastrarProdutoHomeController;
use App\Http\Controllers\CepController;


// Rotas Cadastro Usuário
Route::get('/cadastrousuario', [CadastroUsuarioController::class, 'index'])->name('cadastrousuario.index');
Route::get('/usuario/create', [CadastroUsuarioController::class, 'create'])->name('usuario.create');
Route::post('/usuario/store', [CadastroUsuarioController::class, 'store'])->name('usuario.store');



// Rotas Cadastro produto
Route::post('/cadastrarProduto', [CadastrarProdutoHomeController::class, 'store']);
Route::get('/cadastrarProduto', [CadastrarProdutoHomeController::class, 'index']);

//Rotas Agendas
Route::get('/cadastroAgenda', [CadastroAgendaHomeController::class, 'index'])->name('agendas.index');
Route::get('/cadastroAgenda/create', [CadastroAgendaHomeController::class, 'create'])->name('agendas.create');
Route::post('/cadastroAgenda', [CadastroAgendaHomeController::class, 'store'])->name('agendas.store');

//Rotas Especialidades
Route::get('/cadastroespecialidade', [CadastrarEspecialidadeController::class, 'index'])->name('cadastroespecialidade.index');
Route::post('/cadastroespecialidade', [CadastrarEspecialidadeController::class, 'store'])->name('cadastroespecialidade.store');
Route::get('/visualizarEspecialidades', [VisualizarEspecialidadesController::class, 'index'])->name('visualizarEspecialidades.index');

//Rotas Fornecedores
Route::get('/cadastrarfornecedor', [CadastrarFornecedorHomeController::class, 'index'])->name('cfornecedor.index');
Route::post('/cadastrarfornecedor', [CadastrarFornecedorHomeController::class, 'store'])->name('fornecedor.store');





Route::get('/', [HomeSiteController::class, "index"]);
Route::get('/login', [LoginController::class, 'index'])->name('login');


Route::get('/home', [HomeController::class, "index"]);

Route::get('/cadastrousuario', [CadastroHomeController::class, "index"]);

Route::get('/cadastrousuario', [CadastroUsuarioController::class, 'create']);
Route::post('/cadastrousuario', [CadastroUsuarioController::class, 'store']);




Route::get('/experiencias', function () {
    return view('experiencias');
});