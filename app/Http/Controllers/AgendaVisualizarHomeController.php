<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendaVisualizarHomeController extends Controller
{
    public function index()
    {
        return view('adm.agendaVisualizar');
    }
}
