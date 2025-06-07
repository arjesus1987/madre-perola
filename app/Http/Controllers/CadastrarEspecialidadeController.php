<?php

namespace App\Http\Controllers;

use App\Models\Especialidade;
use Illuminate\Http\Request;

class CadastrarEspecialidadeController extends Controller
{
    public function index()
{
    
        // Busca o maior código já cadastrado
        $ultimoCodigo = Especialidade::max('codigo') ?? 0;

        // Incrementa 1 para o próximo código
        $proximoCodigo = $ultimoCodigo + 1;

        // Retorna a view passando o próximo código
        return view('adm.cadastroespecialidade', compact('proximoCodigo'));
    
}
    public function create()
    {
        return view('adm.cadastroespecialidade');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomeEspecialidade' => 'required|string|max:255',
            'codigoEspecialidade' => 'nullable|string|max:100',
            'descricao' => 'nullable|string',
            'statusEspecialidade' => 'required|in:ativo,inativo',
            'observacoes' => 'nullable|string',
        ]);

        Especialidade::create([
            'nome' => $request->nomeEspecialidade,
            'codigo' => $request->codigoEspecialidade,
            'descricao' => $request->descricao,
            'status' => $request->statusEspecialidade,
            'observacoes' => $request->observacoes,
        ]);

        return redirect()->route('especialidades.create')->with('success', 'Especialidade cadastrada com sucesso!');
    }
}

