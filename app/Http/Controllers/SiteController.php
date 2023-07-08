<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function index()
    {
        return view('pages.home', [
            'titulo' => 'Home',
        ]);
    }
    public function loginPage()
    {
        return view('pages.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $credentials = [
            'email' => $credentials['email'],
            'password' => $credentials['password'],
        ];
       $result = Auth::attempt($credentials);
       dd($result);
        if (Auth::attempt($credentials)) {
            // Autenticação bem-sucedida
            return view('pages.clientes');
        } else {
            // Autenticação falhou
            return back()->withErrors(['email' => 'Credenciais inválidas']);
        }
    }
}
