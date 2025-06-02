<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CadastroUsuario;
use Illuminate\Support\Facades\Hash; // Import Hash facade for password hashing

class CadastroUsuarioController extends Controller
{

    public function create()
    {
        return view('adm.cadastrousuario');
    }

    public function store(Request $request)
    {

        $request->validate([
            'senha' => 'required|string|min:6|confirmed',
            'tipo_usuario' => 'required|in:1,2,3', // 1: Administrador, 2: Gerente, 3: Usuário
        ]);

        $usuario = CadastroUsuario::create([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'rg' => $request->rg,
            'dt_nascimento' => $request->dt_nascimento,
            'sexo' => $request->sexo,
            'estado_civil' => $request->estado_civil,
            'tipo_usuario' => $request->tipo_usuario,
            'login' => $request->login,
            'senha' => Hash::make($request->senha), // Criptografa a senha
            'status' => $request->status,
            'observacao' => $request->observacao
        ]);
        if ($usuario) {
            return redirect('/cadastrousuario')->with('success', 'Usuário cadastrado com sucesso!');
        } else {
            return back()->with('error', 'Erro ao cadastrar usuário. Tente novamente.');
        }
    }
}
