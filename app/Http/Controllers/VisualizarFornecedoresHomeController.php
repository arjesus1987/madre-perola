<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class VisualizarFornecedoresHomeController extends Controller
{
    public function index(Request $request)
    {

        $nome = $request->input('nome');
        $cnpj = $request->input('cnpj');
        $status = $request->input('status');

        $query = Fornecedor::query();

        if ($nome) {
            $query->where('nome', 'like', "%$nome%");
        }

        if ($cnpj) {
            $query->where('cnpj_cpf', 'like', "%$cnpj%");
        }

        if ($status) {
            $query->where('status', $status);
        }

        $fornecedores = $query->orderBy('nome')->paginate(10);

        return view('adm.visualizarFornecedores', compact('fornecedores', 'nome', 'cnpj', 'status'));
    }

    public function show($id)
    {
        $fornecedor = Fornecedor::findOrFail($id);
        return view('adm.detalharFornecedor', compact('fornecedor'));
    }

    public function edit($id)
    {
        $fornecedor = Fornecedor::findOrFail($id); // Busca o fornecedor ou dá erro 404
        return view('adm.editarFornecedor', compact('fornecedor'));
    }

    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'descricao' => 'required|string|max:255',
        // ]);

        $fornecedor = Fornecedor::findOrFail($id);
        $fornecedor->update($request->all());

        return redirect()->route('visualizarFornecedores.index')->with('success', 'Fornecedor atualizado com sucesso!');
    }
}
