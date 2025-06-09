<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CadastroAgenda;
use App\Models\Consulta;

class PacienteConsultaController extends Controller
{
    // Formulário para agendar (recebe o id da agenda para passar no formulário)
    public function criar($agendaId)
    {
        $agenda = CadastroAgenda::with('medico', 'especialidade')->findOrFail($agendaId);

        if ($agenda->status == 'agendado') {
            return redirect()->back()->with('error', 'Este horário já foi agendado.');
        }

        return view('consulta.agendar', compact('agenda'));
    }

    // Recebe os dados do paciente e marca a consulta
    public function agendar(Request $request)
    {
        $validated = $request->validate([
            'agenda_id' => 'required|exists:cadastro_agendas,id',
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefone' => 'required|string|max:20',
            'data_nascimento' => 'required|date',
        ]);

        $agenda = CadastroAgenda::findOrFail($validated['agenda_id']);

        if ($agenda->status == 'agendado') {
            return redirect()->back()->with('error', 'Este horário já foi agendado.');
        }

        Consulta::create([
            'agenda_id' => $agenda->id,
            'nome_paciente' => $validated['nome'],
            'email_paciente' => $validated['email'],
            'telefone_paciente' => $validated['telefone'],
            'data_nascimento' => $validated['data_nascimento'],
        ]);

        $agenda->status = 'agendado';
        $agenda->save();

        return redirect()->route('agenda.index')->with('success', 'Consulta agendada com sucesso!');
    }
}

