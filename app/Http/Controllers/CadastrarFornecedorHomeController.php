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
            'status' => 'required|in:1,0', // supondo que status seja 1 (ativo) ou 0 (inativo)
        ]);

        $idUsuario = auth()->id();

        if (!$idUsuario) {
            // Se não estiver autenticado, retorna com erro ou redireciona
            return redirect()->back()->withErrors(['Usuário não autenticado.'])->withInput();
        }
        Fornecedor::create([
            'nome' => $request->nome,
            'cnpj_cpf' => $request->cnpj_cpf,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'endereco' => $request->endereco,
            'status' => $request->status,
            'idUsuario' => $idUsuario,
        ]);

        return redirect()->back()->with('success', 'Fornecedor cadastrado com sucesso!');
    }
    
}
