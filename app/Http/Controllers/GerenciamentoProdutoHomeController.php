<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GerenciamentoProdutoHomeController extends Controller


{
    public function index(Request $request)
    { 
        $query = Produto::query();

        if ($request->filled('nome')) {
            $query->where('nome', 'like', '%' . $request->nome . '%');
        }
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $produtos = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('adm.produtos.gerenciar', compact('produtos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'preco' => 'required|numeric',
            'descricao' => 'required|string',
            'status' => 'required|in:rascunho,publicado',
            'imagem' => 'nullable|image|max:2048',
        ]);

        $data = $request->only(['nome', 'preco', 'descricao', 'status']);

        if ($request->hasFile('imagem')) {
            $data['imagem'] = $request->file('imagem')->store('produtos', 'public');
        }
        $preco = str_replace(['R$', '.', ','], ['', '', '.'], $request->preco);

        Produto::create($data);

        return redirect()->route('adm.produtos.index')->with('success', 'Produto cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        $produtos = Produto::orderBy('created_at', 'desc')->paginate(10);
        return view('adm.produtos.gerenciar', compact('produto', 'produtos'));
    }

    public function update(Request $request, $id)
    {
        $produto = Produto::findOrFail($id);

        $request->validate([
            'nome' => 'required|string|max:255',
            'preco' => 'required|numeric',
            'descricao' => 'required|string',
            'status' => 'required|in:rascunho,publicado',
            'imagem' => 'nullable|image|max:2048',
        ]);

        $data = $request->only(['nome', 'preco', 'descricao', 'status']);

        if ($request->hasFile('imagem')) {
            // Remove imagem antiga se existir
            if ($produto->imagem) {
                Storage::disk('public')->delete($produto->imagem);
            }
            $data['imagem'] = $request->file('imagem')->store('produtos', 'public');
        }

        $produto->update($data);

        return redirect()->route('adm.produtos.index')->with('success', 'Produto atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);

        // Remove imagem se existir
        if ($produto->imagem) {
            Storage::disk('public')->delete($produto->imagem);
        }

        $produto->delete();

        return redirect()->route('adm.produtos.index')->with('success', 'Produto excluído com sucesso!');
    }
}
