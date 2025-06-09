<?php

namespace App\Http\Controllers;

use App\Models\CadastroAgenda;
use App\Models\Usuario;
use App\Models\Especialidade;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CadastroAgendaHomeController extends Controller
{
    // Listagem e paginação das agendas cadastradas (CRUD)
    public function index()
    {
        $agendas = CadastroAgenda::with('medico', 'especialidade')->latest()->paginate(10);

        $medicos = Usuario::where('tipo_usuario', 4)->get()->mapWithKeys(function ($usuario) {
            return [$usuario->idUsuario => $usuario->nome];
        });

        $especialidades = Especialidade::where('status', 'ativo')->pluck('nome', 'id');

        return view('adm.cadastroAgenda', compact('agendas', 'medicos', 'especialidades'));
    }

    public function create()
    {
        $medicos = Usuario::where('tipo_usuario', 4)->get()->mapWithKeys(function ($usuario) {
            return [$usuario->idUsuario => $usuario->nome];
        });

        $especialidades = Especialidade::where('status', 'ativo')->pluck('nome', 'id');

        return view('adm.cadastroAgendaCreate', compact('medicos', 'especialidades'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'data' => ['required', 'date'],
            'hora_inicio' => ['required', 'date_format:H:i'],
            'hora_fim' => ['required', 'date_format:H:i', 'after:hora_inicio'],
            'duracao_consulta' => ['required', 'integer', 'min:5'],
            'medico_id' => ['required', 'exists:cadastro_usuario,idUsuario'],
            'especialidade_id' => ['required', 'exists:especialidades,id'],
            'tipo_atendimento' => ['required', 'in:presencial,teleconsulta'],
            'sala' => ['nullable', 'string'],
            'observacoes' => ['nullable', 'string'],
        ]);

        $inicio = Carbon::createFromFormat('Y-m-d H:i', $validated['data'] . ' ' . $validated['hora_inicio']);
        $fim = Carbon::createFromFormat('Y-m-d H:i', $validated['data'] . ' ' . $validated['hora_fim']);
        $duracao = (int) $validated['duracao_consulta'];

        $contador = 0;

        while ($inicio->copy()->addMinutes($duracao)->lte($fim)) {
            CadastroAgenda::create([
                'data' => $validated['data'],
                'hora_inicio' => $inicio->format('H:i'),
                'hora_fim' => $inicio->copy()->addMinutes($duracao)->format('H:i'),
                'duracao_consulta' => $duracao,
                'medico_id' => $validated['medico_id'],
                'especialidade_id' => $validated['especialidade_id'],
                'tipo_atendimento' => $validated['tipo_atendimento'],
                'sala' => $validated['sala'] ?? null,
                'observacoes' => $validated['observacoes'] ?? null,
                'status' => 'disponivel', // Adicione status 'livre' por padrão ao criar horário
            ]);

            $inicio->addMinutes($duracao);
            $contador++;
        }

        return redirect()->route('agendas.index')->with('success', "$contador consulta(s) criada(s) com sucesso.");
    }

    public function edit(CadastroAgenda $agenda)
    {
        $medicos = Usuario::where('tipo_usuario', 4)->get()->mapWithKeys(function ($usuario) {
            return [$usuario->idUsuario => $usuario->nome];
        });

        $especialidades = Especialidade::where('status', 'ativo')->pluck('nome', 'id');

        return view('adm.cadastroAgendaEdit', compact('agenda', 'medicos', 'especialidades'));
    }

    public function update(Request $request, CadastroAgenda $agenda)
    {
        $validated = $request->validate([
            'data' => ['required', 'date'],
            'hora_inicio' => ['required', 'date_format:H:i'],
            'hora_fim' => ['required', 'date_format:H:i', 'after:hora_inicio'],
            'duracao_consulta' => ['required', 'integer', 'min:5'],
            'medico_id' => ['required', 'exists:cadastro_usuario,idUsuario'],
            'especialidade_id' => ['required', 'exists:especialidades,id'],
            'tipo_atendimento' => ['required', 'in:presencial,teleconsulta'],
            'sala' => ['nullable', 'string'],
            'observacoes' => ['nullable', 'string'],
        ]);

        $agenda->update($validated);

        return redirect()->route('agendas.index')->with('success', 'Agenda atualizada.');
    }

    public function destroy(CadastroAgenda $agenda)
    {
        $agenda->delete();
        return redirect()->route('agendas.index')->with('success', 'Agenda removida.');
    }

    // =============================
    // Método público para listar horários disponíveis com filtro e botão agendar
    // =============================
    public function publicAgenda(Request $request)
    {
        $especialidadeId = $request->input('especialidade');
        $medicoId = $request->input('medico');
        $data = $request->input('data');

        // Buscar especialidades e médicos para filtro
        $especialidades = Especialidade::where('status', 'ativo')->pluck('nome', 'id');
        $medicos = Usuario::where('tipo_usuario', 4)->pluck('nome', 'idUsuario');

        $query = CadastroAgenda::with('medico', 'especialidade')
            ->where('status', 'disponivel'); // Apenas horários livres

        if ($especialidadeId) {
            $query->where('especialidade_id', $especialidadeId);
        }

        if ($medicoId) {
            $query->where('medico_id', $medicoId);
        }

        if ($data) {
            $query->where('data', $data);
        }

        $horariosDisponiveis = $query->orderBy('data')->orderBy('hora_inicio')->get();

        return view('agenda.publica', compact(
            'especialidades',
            'medicos',
            'horariosDisponiveis',
            'especialidadeId',
            'medicoId',
            'data'
        ));
    }
}
