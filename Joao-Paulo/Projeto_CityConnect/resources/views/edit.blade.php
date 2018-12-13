@extends('layout')

@section('titulo') Editar cadastro @endsection

@section('conteudo')

	<div style="width: 850px; margin: auto">
		<div class="page-header">
			<h1 align="center">Edição de cadastro</h1>
		</div>

		<br>

		<div class="well">
			<form action="{{ route('pessoas.update', $pessoa->id) }}" method="post" id="formEdit">
				@csrf
				@method('PATCH')
				<div class="form-group">
					<label for="Nome">Nome: </label>
					<input type="text" name="Nome" class="form-control" value="{{ $pessoa->Nome }}" required>
				</div>

				<div class="form-group">
					<label for="Data_Nasc">Data de nascimento: </label>
					<input type="date" name="Data_Nasc" class="form-control" value="{{ $pessoa->Data_Nasc }}" required>
				</div>

				<div class="form-group">
					<label for="Sexo">Sexo: </label>
					@if($pessoa->Sexo == 'Masculino')
						<input type="radio" name="Sexo" value="Masculino" checked required> Masculino
					@else
						<input type="radio" name="Sexo" value="Masculino" required> Masculino
					@endif
					
					@if($pessoa->Sexo == 'Feminino')
						<input type="radio" name="Sexo" value="Feminino" checked required> Feminino
					@else
						<input type="radio" name="Sexo" value="Feminino" required> Feminino
					@endif
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-success"> Confirmar </button>
				</div>

				<br>

			</form>

			<a href="/pessoas"> Voltar para a página principal </a>
		</div>
	</div>

@endsection