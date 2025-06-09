<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\EmailUsuario;
use Illuminate\Http\Request;
use App\Http\Controllers\CadastroUsuarioController;

class VisualizarUsuariosHomeController extends Controller
{
   public function index(Request $request)
{
    $nome = $request->input('nome');
    $cpf = $request->input('cpf');
    $status = $request->input('status');

    $query = Usuario::query();

    if ($nome) {
        $query->where('nome', 'like', '%' . $nome . '%');
    }

    if ($cpf) {
        $query->where('cpf', 'like', '%' . $cpf . '%');
    }

    if ($status) {
        $query->where('status', $status);
    }

    $showUsuario = $query->orderBy('idUsuario', 'asc')
                         ->with('emails')
                         ->paginate(10);

    return view('adm.visualizarUsuario', compact('showUsuario', 'nome', 'cpf', 'status'));
}



    // public function show($id)
    // {
    //     $usuario = Usuario::findOrFail($id);
    //     $usuario = Usuario::with('medico')->findOrFail($id);
    //     return view('adm.detalharUsuario')->with('usuario', $usuario);
    // }

    public function show($id)
    {
        $usuario = Usuario::findOrFail($id);
        // Carrega o usuário junto com o relacionamento 'medico'
        // $usuario = Usuario::with('medico')->findOrFail($id);
        // $usuario = Usuario::with('emails')->findOrFail($id);
        $usuario = Usuario::with(['medico', 'emails', 'telefones', 'enderecos'])->findOrFail($id);

        // Passa para a view o usuário e, para evitar erro no foreach, garante que medico seja array (vazio se null)
        $medicos = $usuario->medico ?? [];
        $emails = $usuario->emails ?? [];
        $telefones = $usuario->telefones ?? [];
        $enderecos = $usuario->enderecos ?? [];

        return view('adm.detalharUsuario', compact('usuario', 'medicos', 'emails', 'telefones', 'enderecos'));
    }


    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);
        // $usuario = Usuario::with('medico')->findOrFail($id);
        // $usuario = Usuario::with('emails')->findOrFail($id);

        $usuario = Usuario::with(['medico', 'emails', 'telefones', 'enderecos'])->findOrFail($id);

        return view('adm.editarUsuario', compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);

        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|max:14|unique:cadastro_usuario,cpf,' . $id . ',idUsuario',
            'rg' => 'required|string|max:20',
            'dt_nascimento' => 'required|date',
            'sexo' => 'required|string',
            'estado_civil' => 'required|string',
            'email' => 'required|email|unique:email_usuario,email,' . $id . ',idUsuario',
            'login' => 'required|string|unique:cadastro_usuario,login,' . $id . ',idUsuario',
            'tipo_usuario' => 'required|integer',
            'status' => 'required|string',
            // outros campos podem ser validados aqui

            // Validação dos CRMs, apenas se for médico
            'crms' => 'required_if:tipo_usuario,4|array',
            'crms.*.numero' => 'required_if:tipo_usuario,4|string',
            'crms.*.uf' => 'required_if:tipo_usuario,4|string',
        ]);

        $usuario->update($validated);

        $emailUsuario = EmailUsuario::where('idUsuario', $usuario->idUsuario)->first();

        if ($emailUsuario) {
            $emailUsuario->email = $request->email;
            $emailUsuario->save();
        } else {
            EmailUsuario::create([
                'email' => $request->email,
                'idUsuario' => $usuario->idUsuario,
            ]);
        }

        // Somente se for médico, trata os CRMs
        if ($usuario->tipo_usuario == 4) {
            // Remove os CRMs marcados para remoção
            if ($request->filled('crms_remove')) {
                $crmIdsToRemove = array_filter($request->input('crms_remove'));
                \App\Models\Medico::whereIn('id', $crmIdsToRemove)->delete();
            }

            // Atualiza CRMs existentes (se for permitido editar o número)
            if ($request->filled('crms_existing')) {
                foreach ($request->input('crms_existing') as $crmId => $crmNumero) {
                    $crm = \App\Models\Medico::find($crmId);
                    if ($crm) {
                        $crm->numero = $crmNumero;
                        $crm->save();
                    }
                }
            }

            // Adiciona novos CRMs
            if ($request->filled('crms_new')) {
                foreach ($request->input('crms_new') as $novoCrmNumero) {
                    if (!empty(trim($novoCrmNumero))) {
                        \App\Models\Medico::create([
                            'idUsuario' => $usuario->idUsuario,
                            'numero' => $novoCrmNumero,
                        ]);
                    }
                }
            }
        } else {
            // Se não for médico, pode remover todos os CRMs vinculados
            \App\Models\Medico::where('idUsuario', $usuario->idUsuario)->delete();
        }

        return redirect()->route('usuarios.edit', $usuario->idUsuario)->with('success', 'Usuário atualizado com sucesso.');
    }
}
