<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilVisualizarHomeController extends Controller
{
    public function index()
    {
        return view('adm.visualizarPerfilUsuario');
    }
}
