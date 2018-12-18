@extends('layouts.app')

@section('content')
<pagina>
	@if($errors->all())
	@foreach($errors->all() as $key => $value)
	<div class="alert alert-danger alert-dismissible fade show" role="alert">
		{{$value}}
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	@endforeach
	@endif
	
	
	<painel>
		<migalhas :lista="{{$migalhas}}"></migalhas>
		@can('eAdmin')
		<tabela 
		:titulos="['#','Nome','Email','Ação']" 
		:itens="{{json_encode($usuarios)}}" 
		criar="#criar" detalhe="#criar" editar="#editar"  deletar="#deletar"
		action="usuarios/"
		token="{{csrf_token()}}"
		>
		<modalLink></modalLink>
	</tabela>
	<div align="center">
		{{$usuarios}}
	</div>
	@else
	<div class="alert alert-danger" role="alert">
		Logue como administrador para acessar o Painel Usuários
	</div>
	@endcan
</painel>

<modal nome="criar" titulo="Criar Usuário">
	<formulario id="formCriar" action="{{route('usuarios.store')}}" method="post" enctype="" token="{{csrf_token()}}">
		<div class="form-group">
			<label for="name">Nome</label>
			<input id="name" class="form-control" type="text" name="name" value="{{old('name')}}">
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input id="email" class="form-control"  type="text" name="email" value="{{old('email')}}">
		</div>
		<div class="form-group">
			<label for="birth_at">Data de Nascimento</label>
			<input id="birth_at" class="form-control" type="date" name="birth_at" value="{{old('birth_at')}}">
		</div>
		<div class="form-group">
			<label for="sex">Sexo</label>
			<select id="sex" class="form-control" name="sex">
				<option {{(old('sex') && old('sex') == 'M'? 'selected' :'' )}} value="M">Masculino</option>
				<option {{(old('sex') && old('sex') == 'F'? 'selected' :'' )}} value="F">Feminino</option>
			</select>
		</div>
		<div class="form-group">
			<label for="admin">Administrador</label>
			<select id="admin" class="form-control" name="admin">
				<option {{(old('admin') && old('admin') == 'S'? 'selected' :'' )}} value="S">SIM</option>
				<option {{(old('admin') && old('admin') == 'N'? 'selected' :'' )}} value="N">NÃO</option>
			</select>
		</div>
		<div class="form-group">
			<label for="password">Senha</label>
			<input id="password" class="form-control"  type="password" name="password">
		</div>
	</formulario>
	<span slot="botoes">
		<button class="form-control" form="formCriar">Criar</button>
	</span>
</modal>

<modal nome="editar" titulo="Editar">
	<formulario id="formEditar" css="" :action="'/admin/usuarios/' + $store.state.item.id" method="put" enctype="" token="{{csrf_token()}}">
		<div class="form-group">
			<label for="nome">Nome</label>
			<input type="text" class="form-control" id="nome" v-model="$store.state.item.name" name="name" placeholder="Nome">
		</div>
		<div class="form-group">
			<label for="email2">E-mail</label>
			<input type="email" class="form-control" id="email2" v-model="$store.state.item.email" name="email" placeholder="E-mail">
		</div>	
		<div class="form-group">
			<label for="bith_at2">Data de Nascimento</label>
			<input id="bith_at2" class="form-control" v-model="$store.state.item.birth_at" type="date" name="birth_at" value="{{old('birth_at')}}">
		</div>
		<div class="form-group">
			<label for="sex2">Sexo</label>
			<select id="sex2" class="form-control" name="sex">
				<option {{(old('sex') && old('sex') == 'M'? 'selected' :'' )}} value="M">Masculino</option>
				<option {{(old('sex') && old('sex') == 'F'? 'selected' :'' )}} value="F">Feminino</option>
			</select>
		</div>
		<div class="form-group">
			<label for="admin2">Administrador</label>
			<select class="form-control" id="admin2" name="admin" v-model="$store.state.item.admin">
				<option  value="N">Não</option>
				<option  value="S">Sim</option>
			</select>
		</div>
		<div class="form-group">
			<label for="password2">Senha</label>
			<input type="password" class="form-control" id="password2" name="password" value="{{old('password')}}">
		</div>	
	</formulario>
	<span slot="botoes">
		<button form="formEditar" class="btn btn-success">Salvar</button>	
	</span>	
</modal>

{{-- Modal para confirmar a exclusão do usuário --}}
<modal nome="deletar" titulo="Tem certeza que deseja deletar o Usuário?">
	<formulario id="formDeletar" css="" :action="'/admin/usuarios/' + $store.state.item.id" method="delete" enctype="" token="{{csrf_token()}}">
		<detalhe estilo="danger" :lista="{'name':'Nome','email':'E-mail','birth_at':'Data de Nascimento','sex':'Sexo','created_at':'Criado em'}" :datas="['birth_at','created_at']"></detalhe>
	</formulario>
	<span slot="botoes">
		<button form="formDeletar" class="btn btn-danger">Deletar</button>	
	</span>	
</modal>

{{-- Modal para exibir detalhes do usuário --}}
<modal nome="detalhe" titulo="Detalhes">
	<detalhe estilo="primary" :lista="{'name':'Nome','email':'E-mail','birth_at':'Data de Nascimento','sex':'Sexo','created_at':'Criado em','admin':'Administrador'}" :datas="['birth_at','created_at']"></detalhe>
</modal>
</pagina>

@endsection
