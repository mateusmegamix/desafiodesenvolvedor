@extends('layouts.app')

<link href="{{ asset('css/home.css') }}" rel="stylesheet">

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Lista de Candidatos
                    <a class="clear_link" href="{{ route('candidatos.create') }}">
                        <button type="button" class="btn btn-success float-right" >
                                Novo
                        </button>
                    </a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div class="container">
                            <br />
                            @if (\Session::has('success'))
                                <div class="alert alert-success">
                                    <p>{{ \Session::get('success') }}</p>
                                </div><br />
                            @endif
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Data de Nascimento</th>
                                    <th>Sexo</th>
                                    <th>Data de Cadastro</th>
                                    <th colspan="3">Ações</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($candidatos as $candidato)
                                    @php
                                        $dateNascimento = date_format( $candidato['data_nascimento'],'d/m/Y');
                                        $datadeCadastro = date_format( $candidato['data_cadastro'],'d/m/Y');
                                    @endphp
                                    <tr>
                                        <td>{{$candidato['id']}}</td>
                                        <td>{{substr($candidato['nome'], 0, 30)}}</td>
                                        <td>{{$dateNascimento}}</td>
                                        <td>{{ucfirst($candidato['sexo'])}}</td>
                                        <td>{{$datadeCadastro}}</td>

                                        <td class="">
                                            <a href="{{action('CandidatoController@edit', $candidato['id'])}}" class="btn btn-warning d-inline-block">Editar</a>
                                            <form action="{{action('CandidatoController@destroy', $candidato['id'])}}" method="post" class="d-inline-block" id="form-deletar">
                                                @csrf
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button class="btn btn-danger" type="submit">Deletar</button>
                                            </form>
                                            <button class="btn btn-info" id="btn-vizualizar-curriculo inline_block">
                                                <a href="{{action('CandidatoController@getCurriculo', $candidato['id'])}}" target="_blank" class="clear_link text-white">
                                                    Currículo
                                                </a>
                                            </button>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
