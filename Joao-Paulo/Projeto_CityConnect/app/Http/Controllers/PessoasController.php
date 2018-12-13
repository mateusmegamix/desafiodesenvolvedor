<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pessoa;

class PessoasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pessoas = Pessoa::all();
        return view('index', compact('pessoas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nome' => 'required',
            'Data_Nasc' => 'required',
            'Sexo' => 'required'
        ]);

        $pessoa = new Pessoa([
            'Nome' => $request->get('Nome'),
            'Data_Nasc' => $request->get('Data_Nasc'),
            'Sexo' => $request->get('Sexo')
        ]);

        $pessoa->save();
        return redirect('pessoas');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pessoa = Pessoa::findOrFail($id);
        return view('edit', compact('pessoa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Nome' => 'required',
            'Data_Nasc' => 'required',
            'Sexo' => 'required'
        ]);

        $pessoa = Pessoa::findOrFail($id);
        $pessoa->Nome = $request->get('Nome');
        $pessoa->Data_Nasc = $request->get('Data_Nasc');
        $pessoa->Sexo = $request->get('Sexo');

        $pessoa->save();
        return redirect('pessoas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pessoa = Pessoa::findOrFail($id);
        $pessoa->delete();
        return redirect('pessoas');
    }
}
