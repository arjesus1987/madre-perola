<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Especialidade;

class VisualizarEspecialidadesController extends Controller
{
    public function index(Request $request)
    {
        $nome = $request->input('nome');
        $status = $request->input('status');

        $query = Especialidade::query();

        if ($nome) {
            $query->where('nome', 'like', '%' . $nome . '%');
        }

        if ($status) {
            $query->where('status', $status);
        }

        $especialidades = $query->paginate(10);

        return view('adm.visualizarEspecialidade', compact('especialidades', 'nome', 'status'));
    }
}
