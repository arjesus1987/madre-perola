<?php
namespace App\Http\Controllers;

use App\Models\CadastroAgenda;
use App\Models\User;
use App\Models\Especialidade;
use Illuminate\Http\Request;

class MarcarConsultaController extends Controller
{
    public function index(Request $request)
    {
        $query = CadastroAgenda::with('medico', 'especialidade')
            ->where('status', 'disponivel');

        if ($request->filled('especialidade')) {
            $query->where('especialidade_id', $request->especialidade);
        }

        if ($request->filled('medico')) {
            $query->where('medico_id', $request->medico);
        }

        if ($request->filled('data')) {
            $query->where('data', $request->data);
        }

        $agendas = $query->orderBy('data')->orderBy('hora_inicio')->get();

        $medicos = User::where('tipo_usuario', 4)->get(); // ajuste conforme seu sistema
        $especialidades = Especialidade::where('status', 'ativo')->get();

        return view('adm.consultagit', compact('agendas', 'medicos', 'especialidades'));
    }

    public function agendar($id)
    {
        $agenda = CadastroAgenda::findOrFail($id);

        if ($agenda->status == 'agendado') {
            return redirect()->back()->with('error', 'Este horário já foi agendado.');
        }

        $agenda->status = 'agendado';
        $agenda->save();

        return redirect()->back()->with('success', 'Consulta agendada com sucesso!');
    }
}
