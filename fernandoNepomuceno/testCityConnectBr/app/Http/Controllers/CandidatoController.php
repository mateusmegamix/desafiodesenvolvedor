<?php

namespace App\Http\Controllers;

use App\Candidato;
use App\Http\Requests\CandidatoValidador;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CandidatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $candidato = new Candidato();

        return view('novo', ['candidato' => $candidato]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CandidatoValidador $request)
    {
        $candidato = new Candidato();
        $id = $request->get('id');

        if($id != null){
            $candidato = Candidato::find($id);
        }

        $candidato->nome = $request->nome;
        $candidato->data_nascimento = $request->data_nascimento;
        $candidato->sexo = $request->sexo;
        $candidato->data_cadastro = $request->data_cadastro;

        if($request->file != null){
            Storage::delete($candidato->curriculo);
            $nomeArquivo = $request->nome . '-'. Carbon::now();
            $candidato->curriculo = $request->file->storeAs('curriculoCandidatos', $nomeArquivo);
        }
        $candidato->save();

        $status = $id ? "Atualizado" : "Cadastrado";

        return redirect()->route('home')->with('success','Candidato ' . $status .' com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function show(Candidato $candidato)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidato $candidato)
    {
        return view('novo', ['candidato' => $candidato]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidato $candidato)
    {
        //
    }

    /**
     * @param Candidato $candidato
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Candidato $candidato)
    {
        Storage::delete($candidato->curriculo);
        $candidato->delete();

        return redirect('home')->with('success','Candidato deletado com sucesso!');
    }


    public function getCurriculo($id)
    {

        $candidato = Candidato::find($id);
        return response()->download(storage_path('app/public/' . $candidato->curriculo));
    }
}
