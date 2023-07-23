<?php

namespace App\Http\Controllers;

use App\Services\SeachService;
use App\Services\SiteService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Http;


class SiteController extends Controller
{
    public function index()
    {
        return view('pages.home', [
            'titulo' => 'Home',
        ]);
    }

    public function clientes()
    {
        $sc = new  SiteService();
        $data['clientes']= $sc->getClientes();
        return view('pages.clientes', $data);
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
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/clientes');
        } else {
            return back()->withErrors(['error' => 'Credenciais inválidas']);
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return Redirect::to('/login');
    }
    public function simular()
    {  
        /* $autorizado = session()->get('autorizado');
        if(is_null($autorizado) || !$autorizado){
            return Redirect::to('/');
        }
        session()->forget('autorizado'); */
        return view('pages.simulacao');
    }
    public function simulacao(Request $request)
    {
        $ss = new SiteService();
        $response = $ss->simular($request);
        return $response;
    }

    public function search(Request $request)
    {
        $ss = new SeachService();
        $pesquisa = $request->get('pesquisa');
        $data['clientes']= $ss->searchClientes($pesquisa);
        return view('pages.clientes', $data);
    }
}
