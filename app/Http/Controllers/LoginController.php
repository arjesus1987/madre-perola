<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index()
    {
        return view('adm.login');
    }

    public function logar(Request $request)
    {
        // Aqui houve um ajuste dessa variavel email que estava como mail, nao sei exatamente se foi o que resolveu o problema.
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'

        ]);

        $credentials = $request->only('email', 'password');
        if (!Auth::attempt($credentials)) {
            return redirect('/login')->withErrors('Usuário ou senha inválidos');
        }
        return to_route('admhome');
    }

    public function destroy()
    {
        Auth::logout();

        return to_route('login');
    }
}
