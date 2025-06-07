<?php

namespace App\Http\Controllers;

use App\Models\CadastroAgenda;      // modelo que representa a tabela cadastro_agenda
use App\Models\Medico;      // para popular selects
use Illuminate\Http\Request;

class CadastroAgendaHomeController extends Controller
{

   public function index()
{
    $agendas = CadastroAgenda::with('medico')->latest()->paginate(10);
    $medicos = Medico::orderBy('nome')->pluck('nome', 'id');  // adiciona esta linha
    return view('adm.cadastroAgenda', compact('agendas', 'medicos'));
}


    /* FORMULÁRIO DE CRIAÇÃO */
    public function create()
    {
        $medicos = Medico::orderBy('nome')->pluck('nome', 'id');
        return view('adm.cadastroAgendaCreate', compact('medicos'));
    }

    /* GRAVAR NOVA AGENDA */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'data'           => ['required', 'date'],
            'hora_inicio'    => ['required', 'date_format:H:i'],
            'hora_fim'       => ['required', 'date_format:H:i', 'after:hora_inicio'],
            'duracao_consulta'=> ['required', 'integer', 'min:5'],
            'medico_id'      => ['required', 'exists:medico,id'],
            'especialidade'  => ['required', 'string'],
            'tipo_atendimento'=> ['required', 'in:presencial,teleconsulta'],
            'sala'           => ['nullable', 'string'],
            'observacoes'    => ['nullable', 'string'],
        ]);

        CadastroAgenda::create($validated);
        return redirect()->route('agendas.index')
                         ->with('success', 'Agenda criada com sucesso.');
    }

    /* FORMULÁRIO DE EDIÇÃO */
    public function edit(CadastroAgenda $agenda)
    {
        $medicos = Medico::orderBy('nome')->pluck('nome', 'id');
        return view('adm.cadastroAgendaEdit', compact('agenda', 'medicos'));
    }

    /* ATUALIZAR AGENDA */
    public function update(Request $request, CadastroAgenda $agenda)
    {
        $validated = $request->validate([
            'data'           => ['required', 'date'],
            'hora_inicio'    => ['required', 'date_format:H:i'],
            'hora_fim'       => ['required', 'date_format:H:i', 'after:hora_inicio'],
            'duracao_consulta'=> ['required', 'integer', 'min:5'],
            'medico_id'      => ['required', 'exists:medico,id'],
            'especialidade'  => ['required', 'string'],
            'tipo_atendimento'=> ['required', 'in:presencial,teleconsulta'],
            'sala'           => ['nullable', 'string'],
            'observacoes'    => ['nullable', 'string'],
        ]);

        $agenda->update($validated);
        return redirect()->route('agendas.index')
                         ->with('success', 'Agenda atualizada.');
    }

    /* EXCLUIR AGENDA */
    public function destroy(CadastroAgenda $agenda)
    {
        $agenda->delete();
        return redirect()->route('agendas.index')
                         ->with('success', 'Agenda removida.');
    }
}
