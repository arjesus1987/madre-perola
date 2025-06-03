<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    public function index()
    {
        $medicos = Medico::all();
        return view('medicos.index', compact('medicos'));
    }

    public function create()
    {
        return view('medicos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'crm' => 'required|string',
            'uf' => 'required|string|max:2',
            'idUsuario' => 'required|exists:cadastro_usuario,idUsuario',
        ]);

        Medico::create($request->all());

        return redirect()->route('medicos.index');
    }

    public function edit(Medico $medico)
    {
        return view('medicos.edit', compact('medico'));
    }

    public function update(Request $request, Medico $medico)
    {
        $request->validate([
            'crm' => 'required|string',
            'uf' => 'required|string|max:2',
            'idUsuario' => 'required|exists:cadastro_usuario,idUsuario',
        ]);

        $medico->update($request->all());

        return redirect()->route('medicos.index');
    }

    public function destroy(Medico $medico)
    {
        $medico->delete();

        return redirect()->route('medicos.index');
    }
}
