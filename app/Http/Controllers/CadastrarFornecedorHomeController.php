<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastrarFornecedorHomeController extends Controller
{
  
    public function index()
    {
        return view('adm.cadastrarfornecedor');
    }
}
