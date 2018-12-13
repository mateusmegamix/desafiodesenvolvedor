<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
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
        $migalhas = json_encode([
            ["titulo"=>"Admin","url"=>route('home')]

        ]);
        $qtd_usuarios = count(User::all());

        return view('home',compact('qtd_usuarios','migalhas'));
    }
}
