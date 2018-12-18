@extends('layout')

@section('titulo') Página principal @endsection

@section('conteudo')
	
	<div style="width: 850px; margin: auto">
		<div class="page-header">
			<h1 align="center">Página principal</h1>
		</div>

		<div>
			<form action="{{ route('pessoas.create') }}" style="float: left">
				<input type="submit" class="btn btn-primary" value="Cadastrar">
			</form>

			<input type="text" id="procurar" placeholder="Procurar" class="form-control" style="float: right; width: 25%">
		</div>

		<br><br><br>

		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>Data de nascimento</th>
					<th>Sexo</th>
					<th>Data de cadastro</th>
					<th></th> <!-- para os botões editar e excluir -->
					<th></th>
				</tr>
			</thead>

			<tbody id="dadosTabela">
				@foreach($pessoas as $pessoa)
					<tr>
						<td>{{ $pessoa->id }}</td>
						<td>{{ $pessoa->Nome }}</td>
						<td>{{ date('d/m/Y', strtotime($pessoa->Data_Nasc)) }}</td> <!--data com formato d/m/a-->
						<td>{{ $pessoa->Sexo }}</td>
						<td>{{ date('d/m/Y', strtotime($pessoa->created_at)) }}</td>
						<td>
							<form action="{{ route('pessoas.edit', $pessoa->id) }}">
								<input type="submit" class="btn btn-info" value="Editar">
							</form>
						</td>
						<td>
							<form action="{{ route('pessoas.destroy', $pessoa->id) }}" method="post">
								@csrf
								@method('DELETE')
								<input type="submit" class="btn btn-danger" value="Excluir">
							</form>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>

@endsection