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
use App\Http\Controllers\Controller;
use App\Http\Middleware\Authentication;



// Rotas Cadastro Usuário
Route::get('/cadastrousuario', [CadastroUsuarioController::class, 'index'])->name('cadastrousuario.index');
Route::get('/usuario/create', [CadastroUsuarioController::class, 'create'])->name('usuario.create');
Route::post('/usuario/store', [CadastroUsuarioController::class, 'store'])->name('usuario.store');
Route::get('/visualizarUsuario', [VisualizarUsuariosHomeController::class, 'index'])->name('visualizarUsuarios.index');
Route::get('/detalharUsuario/{id}', [VisualizarUsuariosHomeController::class, 'show'])->name('detalharUsuarios.show');
Route::get('/usuario/{id}/edit', [VisualizarUsuariosHomeController::class, 'edit'])->name('usuarios.edit');
Route::put('/usuarios/{id}', [VisualizarUsuariosHomeController::class, 'update'])->name('usuarios.update');


//Rotas Agendas
Route::get('/cadastroAgenda', [CadastroAgendaHomeController::class, 'index'])->name('agendas.index');
Route::get('/cadastroAgenda/create', [CadastroAgendaHomeController::class, 'create'])->name('agendas.create');
Route::post('/cadastroAgenda', [CadastroAgendaHomeController::class, 'store'])->name('agendas.store');


//Rotas de autenticação
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'logar'])->name('login.logar');
Route::get('/logout', [LoginController::class, 'destroy'])->name('login.logout');

// Rotas de autenticação, tudo que estiver dentro desta função de rota só será acessado após a autenticação 27-05
// Tem que inserir a importação use App\Http\Middleware\Authentication;
Route::middleware('auth.custom')->group(function () {

    Route::get('/home', [LoginController::class, 'indexHome'])->name('adm.home');

    //Rota ADM Home

    //Rotas Fornecedores
    Route::get('/cadastrarfornecedor', [CadastrarFornecedorHomeController::class, 'index'])->name('cadastrofornecedor.index');
    Route::post('/cadastrarfornecedor', [CadastrarFornecedorHomeController::class, 'store'])->name('cadastrofornecedor.store');
    Route::get('/visualizarFornecedores', [VisualizarFornecedoresHomeController::class, 'index'])->name('visualizarFornecedores.index');
    Route::get('/detalharFornecedores/{id}', [VisualizarFornecedoresHomeController::class, 'show'])->name('detalharFornecedores.show');
    Route::get('/fornecedores/{id}/editar', [VisualizarFornecedoresHomeController::class, 'edit'])->name('fornecedores.edit');
    Route::put('/fornecedores/{id}', [VisualizarFornecedoresHomeController::class, 'update'])->name('fornecedores.update');

    //Rotas Especialidades
    Route::get('/cadastroespecialidade', [CadastrarEspecialidadeController::class, 'index'])->name('cadastroespecialidade.index');
    Route::post('/cadastroespecialidade', [CadastrarEspecialidadeController::class, 'store'])->name('cadastroespecialidade.store');
    Route::get('/visualizarEspecialidades', [VisualizarEspecialidadesController::class, 'index'])->name('visualizarEspecialidades.index');
    Route::get('/detalharEspecialidades/{id}', [VisualizarEspecialidadesController::class, 'show'])->name('detalharEspecialidades.show');
    Route::get('/especialidades/{id}/editar', [CadastrarEspecialidadeController::class, 'edit'])->name('especialidades.edit');
    Route::put('/especialidades/{id}', [CadastrarEspecialidadeController::class, 'update'])->name('especialidades.update');

    // Rotas Cadastro produto
    Route::get('/cadastrarProduto', [CadastrarProdutoHomeController::class, 'index'])->name('cadastrarProduto.index');
    Route::post('/cadastrarProduto', [CadastrarProdutoHomeController::class, 'store'])->name('cadastrarProduto.store');
    Route::get('/visualizarProdutos', [VisualizarProdutosHomeController::class, 'index'])->name('visualizarProdutos.index');
    Route::get('/detalharProdutos/{id}', [VisualizarProdutosHomeController::class, 'show'])->name('detalharProdutos.show');
    Route::get('/produtos/{id}/edit', [VisualizarProdutosHomeController::class, 'edit'])->name('produtos.edit');
    Route::put('/produtos/{id}', [VisualizarProdutosHomeController::class, 'update'])->name('produtos.update');
});


Route::get('/', [HomeSiteController::class, "index"]);


// Route::get('/home', [HomeController::class, "index"])->name('admhome');

Route::get('/cadastrousuario', [CadastroHomeController::class, "index"]);

Route::get('/cadastrousuario', [CadastroUsuarioController::class, 'index']);
Route::get('/cadastrousuario', [CadastroUsuarioController::class, 'create']);
Route::post('/cadastrousuario', [CadastroUsuarioController::class, 'store']);




Route::get('/experiencias', function () {
    return view('home.experiencias');
});

Route::get('/catalogo', function () {
    return view('home.catalogo');
});


Route::get('/teste', function () {
    return view('especialidades.tricologia');
});
