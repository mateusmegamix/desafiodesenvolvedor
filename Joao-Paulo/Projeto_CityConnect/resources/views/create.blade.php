@extends('layout')

@section('titulo') Página de cadastro @endsection

@section('conteudo')

	<div style="width: 850px; margin: auto">
		<div class="page-header">
			<h1 align="center">Novo cadastro</h1>
		</div>
		<br>

		<div class="well">
			<form action="{{ route('pessoas.store') }}" method="post" id="formCreate">
				@csrf
				<div class="form-group">
					<label for="Nome">Nome: </label>
					<input type="text" name="Nome" class="form-control" required>
				</div>

				<div class="form-group">
					<label for="Data_Nasc">Data de nascimento: </label>
					<input type="date" name="Data_Nasc" class="form-control" required>
				</div>

				<div class="form-group">
					<label for="Sexo">Sexo: </label>
					<input type="radio" name="Sexo" value="Masculino" required> Masculino
					<input type="radio" name="Sexo" value="Feminino" required> Feminino
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-success"> Confirmar </button>
					<button type="reset" class="btn btn-warning" style="float: right">Limpar formulário</button>
				</div>

				<br>

			</form>

			<a href="/pessoas"> Voltar para a página principal </a>
		</div>
	</div>

@endsection