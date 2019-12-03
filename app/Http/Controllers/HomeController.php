<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function listarPerfil(){
        //Si esta autenticado manda el usuario al perfil
        if (Auth::user()){
            $usuarioAutenticado = Auth::user();
            return view ('perfil',compact('usuarioAutenticado'));
        }
    }
}
