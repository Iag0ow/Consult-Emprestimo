<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('pages.home', [
            'titulo' => 'Home',
        ]);
    }
    public function login()
    {
        return view('pages.login');
    }
}
