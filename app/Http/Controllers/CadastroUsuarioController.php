<?php
namespace App\Http\Controllers;
use App\Models\Usuario;
use App\Models\EmailUsuario;
use App\Models\TelefoneUsuario;
use App\Models\Endereco;
use App\Models\Medico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CadastroUsuarioController extends Controller
{
  public function index()
    {
        return view('adm.cadastrousuario');
    }

    public function create()
    {
        return view('adm.cadastrousuario');
    }

    public function store(Request $request)
    {
        // Validação básica, incluindo regras condicionais para médico
$rules = [
    'nome' => 'required|string|max:255',
    'cpf' => 'required|string|max:14|unique:cadastro_usuario,cpf',
    'rg' => 'required|string|max:20',
    'dt_nascimento' => 'required|date',
    'sexo' => 'required|string',
    'estado_civil' => 'required|string',
    'email' => 'required|email|unique:email_usuario,email',
    'login' => 'required|string|unique:cadastro_usuario,login',
    'senha' => 'required|string|confirmed|min:6',
    'tipo_usuario' => 'required|integer',
    'status' => 'required|string',
    // outros campos podem ser validados aqui

    // Validação dos CRMs, apenas se for médico
    'crms' => 'required_if:tipo_usuario,4|array',
    'crms.*.numero' => 'required_if:tipo_usuario,4|string',
    'crms.*.uf' => 'required_if:tipo_usuario,4|string',
];

$request->validate($rules);

        DB::beginTransaction();

        try {
            // Criar usuário
            $usuario = Usuario::create([
                'nome' => $request->nome,
                'cpf' => $request->cpf,
                'rg' => $request->rg,
                'dt_nascimento' => $request->dt_nascimento,
                'sexo' => $request->sexo,
                'estado_civil' => $request->estado_civil,
                'login' => $request->login,
                'senha' => Hash::make($request->senha),
                'tipo_usuario' => $request->tipo_usuario,
                'status' => $request->status,
                'observacao' => $request->observacao,
            ]);

            // Criar email vinculado
            EmailUsuario::create([
                'email' => $request->email,
                'idUsuario' => $usuario->idUsuario,
            ]);

            // Criar telefones, se enviados
            if ($request->telefone) {
                TelefoneUsuario::create([
                    'telefone' => $request->telefone,
                    'idUsuario' => $usuario->idUsuario,
                ]);
            }
            if ($request->celular) {
                TelefoneUsuario::create([
                    'telefone' => $request->celular,
                    'idUsuario' => $usuario->idUsuario,
                ]);
            }

            // Criar endereço vinculado
            Endereco::create([
                'logradouro' => $request->logradouro,
                'numero' => $request->numero,
                'cep' => $request->cep,
                'cidade' => $request->cidade,
                'uf' => $request->uf,
                'complemento' => $request->complemento,
                'idUsuario' => $usuario->idUsuario,
            ]);

        // Inserir médico apenas se for médico e campos existirem
         if ($request->tipo_usuario == 4) {
        foreach ($request->crms as $crm) {
            Medico::create([
                'idUsuario' => $usuario->idUsuario,
                'crm' => $crm['numero'],
                'uf' => $crm['uf'],
            ]);
        }
    }

            DB::commit();

            return redirect()->route('usuario.create')->with('success', 'Usuário cadastrado com sucesso!');

        } catch (\Exception $e) {
            DB::rollback();
            return back()->withErrors(['error' => 'Erro ao cadastrar usuário: ' . $e->getMessage()]);
        }
    }
}