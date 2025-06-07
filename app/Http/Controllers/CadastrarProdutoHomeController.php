<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;  // Model do produto


class CadastrarProdutoHomeController extends Controller
{
   

   public function index()
    {
        return view('adm.cadastrarProduto');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'preco' => 'required|numeric',
            'quantidade' => 'required|integer',
            'categoria' => 'required|string|max:100',
            'fornecedor_id' => 'required|exists:cadastro_fornecedor,id_fornecedor',
            'imagem' => 'nullable|image|max:2048',
            'status' => 'required|boolean',
        ]);

        $produto = new Produto();

        $produto->nome_produto = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;
        $produto->quantidade = $request->quantidade;
        $produto->categoria = $request->categoria;
        $produto->id_fornecedor = $request->fornecedor_id;
        $produto->status = $request->status;

        // Upload da imagem, se existir
        if ($request->hasFile('imagem')) {
            $path = $request->file('imagem')->store('produtos', 'public');
            $produto->imagem = $path;
        }

        $produto->save();

        return redirect('/cadastrarProduto')->with('success', 'Produto cadastrado com sucesso!');
    }

    
}
