<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class CadastrarFornecedorHomeController extends Controller
{
    public function index()
    {
        return view('adm.cadastrarfornecedor');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'cnpj_cpf' => 'required|string|max:20',
            'email' => 'nullable|email|max:255',
            'telefone' => 'nullable|string|max:20',
            'endereco' => 'nullable|string|max:255',
            'status' => 'required|in:1,0',
        ]);

        // Sem usuário autenticado, setando null para idUsuario
        Fornecedor::create([
            'nome' => $request->nome,
            'cnpj_cpf' => $request->cnpj_cpf,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'endereco' => $request->endereco,
            'status' => $request->status,
            // 'idUsuario' => 1, Ainda não temos a autenticação implementada, então deixamos o idUsuario como null
        ]);

        return redirect()->back()->with('success', 'Fornecedor cadastrado com sucesso!');
    }
}
