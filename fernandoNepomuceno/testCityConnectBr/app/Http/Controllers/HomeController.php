<?php

namespace App\Http\Controllers;

use App\Candidato;
use App\User;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidatos = Candidato::all();

        return view('home',
            ['candidatos' => $candidatos]
        );
    }

    public function novoCurriculo()
    {
        return view('novo');

    }
}
