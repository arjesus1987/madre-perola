<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EspecialidadeController extends Controller
{
        public function index()
    {
        return view('especialidades.tricologia');
        return view('especialidades.cosmiatria');
        return view('especialidades.cirurgia-plastica');
        return view('especialidades.nutrologia');
        return view('especialidades.dermatologia');

    }
}
