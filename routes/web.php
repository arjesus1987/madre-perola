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

Route::get('/login',[LoginController::class, "index"]);
Route::get('/home',[HomeController::class, "index"]);
Route::get('/cadastrousuario',[CadastroHomeController::class, "index"]);
Route::get('/cadastroespecialidade',[CadastroEspecialidadeHomeController::class, "index"]);
Route::get('/agendaCadastro',[CadastroAgendaHomeController::class, "index"]);
Route::get('/agendaVisualizar', [AgendaVisualizarHomeController::class, 'index']);
Route::get('/visualizarPerfilUsuario', [PerfilVisualizarHomeController::class, 'index']);
Route::get('/visualizarUsuarios', [VisualizarUsuariosHomeController::class, 'index']);

Route::get('/experiencias', function () {
    return view('experiencias');
});

Route::get('/catalogo', function () {
    return view('catalogo');
});

