<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/login',[LoginController::class, "index"]);



Route::get('/experiencias', function () {
    return view('experiencias');
});

