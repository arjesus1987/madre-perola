<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastrarProdutoHomeController extends Controller
{
    public function index()
    {
        return view('adm.cadastrarproduto');
    }
}
