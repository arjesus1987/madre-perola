<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisualizarProdutosHomeController extends Controller
{
    public function index()
    {
        return view('adm.visualizarProdutos');
    }
}
