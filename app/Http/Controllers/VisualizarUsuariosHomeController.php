<?php

namespace App\Http\Controllers;

use App\Models\CadastroUsuario;
use Illuminate\Http\Request;

class VisualizarUsuariosHomeController extends Controller
{
    public function index()
    {
        $showUsuario = CadastroUsuario::orderBy('idUsuario', 'asc')->paginate(2);

        return view('adm.visualizarUsuario')->with('showUsuario', $showUsuario);
    }


    public function show($id)
    {
        $usuario = CadastroUsuario::findOrFail($id);
        return view('adm.visualizarUsuarioDetalhes')->with('usuario', $usuario);
    }

    // public function update(Request $request, $id){
    //     $updateIMC = ImcModel::findOrFail($id);

    //     $updateIMC->nome = $request->novo_nome;
    //     $updateIMC->peso = $request->novo_peso;
    //     $updateIMC->altura = $request->novo_altura;

    //     $updateIMC->save();

    //     return redirect('/dashboard');


    



}
