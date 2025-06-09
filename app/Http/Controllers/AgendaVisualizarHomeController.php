<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CadastroAgenda;
use App\Models\Especialidade;
use App\Models\Usuario;

class AgendaVisualizarHomeController extends Controller
{
    public function index(Request $request)
    {
        // Consulta base com joins para médico e especialidade
        $query = CadastroAgenda::with(['medico', 'especialidade']);

        // Filtro: Médico (por nome)
        if ($request->filled('medico')) {
            $query->whereHas('medico', function ($q) use ($request) {
                $q->where('nome', 'like', '%' . $request->medico . '%');
            });
        }

        // Filtro: Data da consulta
        if ($request->filled('data')) {
            $query->where('data', $request->data);
        }

        // Filtro: Especialidade (ID)
        if ($request->filled('especialidade')) {
            $query->where('especialidade_id', $request->especialidade);
        }

        // Filtro: Sala
        if ($request->filled('sala')) {
            $query->where('sala', 'like', '%' . $request->sala . '%');
        }

        // Lista de agendas paginada
        $agendas = $query->orderBy('data', 'desc')->paginate(10);

        // Especialidades para o filtro
        $especialidades = Especialidade::where('status', 'ativo')->pluck('nome', 'id');

        return view('adm.agendaVisualizar', compact('agendas', 'especialidades'));
    }
}
