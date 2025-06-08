<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Fornecedor; // Model do fornecedor

class VisualizarProdutosHomeController extends Controller
{
    public function index(Request $request)
    {
        $query = Produto::query();

        if ($request->filled('nome')) {
            $query->where('nome_produto', 'like', '%' . $request->nome . '%');
        }

        if ($request->filled('categoria')) {
            $query->where('categoria', $request->categoria);
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Buscar todos os produtos, você pode adicionar paginação se quiser
        $produtos = Produto::orderBy('nome_produto')->paginate(10);

        // Passar os produtos para a view
        return view('adm.visualizarProdutos', compact('produtos'));
    }

    public function show($id)
    {
        $produto = Produto::with('fornecedor')->findOrFail($id);
        $fornecedores = \App\Models\Fornecedor::all();
        return view('adm.detalharProduto', compact('produto', 'fornecedores'));
    }

    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        $fornecedores = Fornecedor::all();

        return view('adm.editarProduto', compact('produto', 'fornecedores'));
    }

    public function update(Request $request, $id)
    {
        $produto = Produto::findOrFail($id);

        $validated = $request->validate([
            'nome_produto' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'preco' => 'required|numeric',
            'quantidade' => 'required|integer',
            'categoria' => 'required|string',
            'id_fornecedor' => 'required|exists:cadastro_fornecedor,id_fornecedor',
            'status' => 'required|in:0,1',
            'imagem' => 'nullable|image'
        ]);

        if ($request->hasFile('imagem')) {
            $path = $request->file('imagem')->store('produtos', 'public');
            $validated['imagem'] = $path;
        }

        $produto->update($validated);

        return redirect()->route('detalharProdutos.show', $produto->id_produto)->with('success', 'Produto atualizado com sucesso.');
    }
}
