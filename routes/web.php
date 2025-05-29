<?php

use App\http\controllers\LoginController;
use Illuminate\Support\Facades\Route;


Route::get("/login",[LoginController::class, "index"]);
 