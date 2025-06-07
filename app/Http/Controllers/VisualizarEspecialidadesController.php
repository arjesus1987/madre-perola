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

        $especialidades = $query->orderBy('nome')->paginate(10);


        return view('adm.visualizarEspecialidades', compact('especialidades', 'nome', 'status'));
    }

    public function show($id)
{
    $especialidade = Especialidade::findOrFail($id);
    return view('adm.detalharEspecialidades', compact('especialidade'));
}
}
