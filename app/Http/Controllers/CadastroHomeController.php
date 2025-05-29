<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroHomeController extends Controller
{
       public function index()
    {
        return view('adm.cadastrousuario');
    }
}
