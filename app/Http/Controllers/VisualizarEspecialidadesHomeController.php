<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisualizarEspecialidadesHomeController extends Controller
{
    public function index()
    {
        return view('adm.visualizarEspecialidades');
    }
}
