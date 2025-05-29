<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroAgendaHomeController extends Controller
{
    public function index()
    {
        return view('adm.agendaCadastro');
    }
}
