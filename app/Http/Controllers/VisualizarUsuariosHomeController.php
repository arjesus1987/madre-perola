<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisualizarUsuariosHomeController extends Controller
{
    public function index()
    {
        return view('adm.visualizarUsuarios');
    }
}
