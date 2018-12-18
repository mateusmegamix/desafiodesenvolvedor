@extends('layouts.app')

@section('content')
<pagina>
    <painel>
        <migalhas :lista="{{$migalhas}}"></migalhas>
        
        <div class="row">
            <div class="col-md-6 offset-3">
                <box titulo="Usuários" descricao="Ver mais" :qtd="{{$qtd_usuarios}}" icone="ion ion-person" url="{{Route('usuarios.index')}}"></box>
            </div>                           
        </div>
    </painel>
</pagina>
@endsection
