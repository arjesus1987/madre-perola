<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CadastroHomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroEspecialidadeHomeController;
use App\Http\Controllers\CadastroAgendaHomeController;

Route::get('/login',[LoginController::class, "index"]);
Route::get('/home',[HomeController::class, "index"]);
Route::get('/cadastrousuario',[CadastroHomeController::class, "index"]);
Route::get('/cadastroespecialidade',[CadastroEspecialidadeHomeController::class, "index"]);
Route::get('/agendaCadastro',[CadastroAgendaHomeController::class, "index"]);


