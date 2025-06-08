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

    public function indexHome()
    {
        return view('adm.home');
    }

    public function username()
    {
        return 'login';
    }

    public function logar(Request $request)
    {
        $request->validate([
            'login' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('login', 'password');

        if (!Auth::attempt($credentials)) {
            return back()->withErrors(['login' => 'Login ou senha inválidos']);
        }
        return to_route('adm.home');

        // return redirect()->route('adm.home');
    }

    public function destroy()
    {
        Auth::logout();

        return to_route('login');
    }
}
