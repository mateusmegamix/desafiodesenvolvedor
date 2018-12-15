@extends('layouts.app')

<link href="{{ asset('css/novo.css') }}" rel="stylesheet">

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Novo Candidato
                </div>

                <div class="card-body">
                    <form method="post" action="{{url('candidatos')}}" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="id" value="{{ $candidato->id }}">

                        <div class="form-group row">
                            <label for="nome" class="col-md-4 col-form-label text-md-right">Nome</label>

                            <div class="col-md-6">
                                <input maxlength="255" id="nome" type="text" class="form-control{{ $errors->has('nome') ? ' is-invalid' : '' }}" name="nome" value="{{ old('nome', $candidato->nome )}}"  required>

                                @if ($errors->has('nome'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nome') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="data_nascimento" class="col-md-4 col-form-label text-md-right">Data de Nascimento</label>

                            <div class="col-md-6">
                                <input id="data_nascimento" type="date" class="form-control{{ $errors->has('data_nascimento') ? ' is-invalid' : '' }}" name="data_nascimento"  value="{{ old('data_nascimento', ((!empty($candidato->data_nascimento)) ? $candidato->data_nascimento->format('Y-m-d') : '' ))}}" required>

                                @if ($errors->has('data_nascimento'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('data_nascimento') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sexo" class="col-md-4 col-form-label text-md-right">Sexo</label>

                            <div class="col-md-6">

                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <label class="radio-inline">
                                            <input type="radio" name="sexo" value="masculino"
                                                   @if($candidato->sexo == null && old('sexo', $candidato->sexo) == null) checked @endif
                                                   @if(old('sexo', $candidato->sexo) == 'masculino') checked @endif
                                            > Masculino
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="radio-inline">
                                            <input type="radio" name="sexo" value="feminino"
                                                   @if($candidato->sexo == 'feminino' || old('sexo', $candidato->sexo) == 'feminino') checked @endif
                                            > Feminino
                                        </label>
                                    </div>
                                </div>


                                @if ($errors->has('sexo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sexo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="data_cadastro" class="col-md-4 col-form-label text-md-right">Data de Cadastro</label>

                            <div class="col-md-6">
                                <input id="data_cadastro" type="date" class="form-control{{ $errors->has('data_cadastro') ? ' is-invalid' : '' }}" name="data_cadastro" value="{{ old('data_cadastro', ((!empty($candidato->data_cadastro)) ? $candidato->data_cadastro->format('Y-m-d') : '' ))}}" required>

                                @if ($errors->has('data_cadastro'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('data_cadastro') }}</strong>
                                    </span>
                                @endif



                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="data_cadastro" class="col-md-4 col-form-label text-md-right">Currículo</label>
                            <div class="col-md-6">

                                @if($candidato->curriculo)
                                    <button class="btn btn-info" id="btn-vizualizar-curriculo">
                                        <a href="{{action('CandidatoController@getCurriculo', $candidato['id'])}}" target="_blank" class="clear_link text-white">
                                            Vizualizar Curriculo Cadastrado
                                        </a>
                                    </button>
                                @endif

                                <div class="file-loading">
                                    <input id="file-1" type="file" name="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2" @if(!$candidato->curriculo) required @endif>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 ">
                                <a class="clear_link" href="{{ route('home') }}">
                                    <button type="button" class="btn btn-danger" >
                                        Cancelar
                                    </button>
                                </a>
                            </div>

                            <div class="col-md-6">
                                <button type="submit" class="btn btn-success float-right">
                                    Salvar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
