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

    public function store(Request $request)
    {
        // Validação (opcional, mas recomendável)
        $request->validate([
            'nome' => 'required|string|max:255',
            'codigo' => 'required|integer|unique:especialidades,codigo',
            'descricao' => 'nullable|string',
            'status' => 'required|string',
            'observacoes' => 'nullable|string',
        ]);

        // Criação da especialidade
        Especialidade::create([
            'nome' => $request->nome,
            'codigo' => $request->codigo,
            'descricao' => $request->descricao,
            'status' => $request->status,
            'observacoes' => $request->observacoes,
        ]);

        // Redireciona de volta com mensagem de sucesso
        return redirect()->route('cadastroespecialidade.index')->with('success', 'Especialidade cadastrada com sucesso!');
    }

    public function edit($id)
    {
        $especialidade = Especialidade::findOrFail($id);
        return view('adm.editarEspecialidade', compact('especialidade'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'status' => 'required|in:ativo,inativo',
            'observacoes' => 'nullable|string',
        ]);

        $especialidade = Especialidade::findOrFail($id);

        $especialidade->update([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'status' => $request->status,
            'observacoes' => $request->observacoes,
        ]);

        return redirect()->route('detalharEspecialidades.show', $especialidade->id)
            ->with('success', 'Especialidade atualizada com sucesso!');
    }
}
