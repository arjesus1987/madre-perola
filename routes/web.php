<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdutoController;

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::get('/produtos/{id}', [ProdutoController::class, 'show'])->name('produtos.show');

Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');



Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');
