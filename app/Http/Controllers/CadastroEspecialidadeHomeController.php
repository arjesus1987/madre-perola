<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroEspecialidadeHomeController extends Controller
{
     public function index()
    {
        return view('adm.cadastroespecialidade');
    }
}
