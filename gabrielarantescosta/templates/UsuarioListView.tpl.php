<?php
	$this->assign('title','GabrielArantesCosta | Usuarios');
	$this->assign('nav','usuarios');

	$this->display('_Header.tpl.php');
?>

<script type="text/javascript">
	$LAB.script("scripts/app/usuarios.js").wait(function(){
		$(document).ready(function(){
			page.init();
		});
		
		// hack for IE9 which may respond inconsistently with document.ready
		setTimeout(function(){
			if (!page.isInitialized) page.init();
		},1000);
	});
</script>

<div class="container">

<h1>
	<i class="icon-th-list"></i> Usuarios
	<span id=loader class="loader progress progress-striped active"><span class="bar"></span></span>
	<span class='input-append pull-right searchContainer'>
		<input id='filter' type="text" placeholder="Pesquisar..." />
		<button class='btn add-on'><i class="icon-search"></i></button>
	</span>
</h1>

	<!-- Modelo de sublinhado para a coleção -->
	<script type="text/template" id="usuarioCollectionTemplate">
		<table class="collection table table-bordered table-hover">
		<thead>
			<tr>
				<th id="header_Id">Id<% if (page.orderBy == 'Id') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_Nome">Nome<% if (page.orderBy == 'Nome') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_DataDeNascimento">Data De Nascimento<% if (page.orderBy == 'DataDeNascimento') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_Sexo">Sexo<% if (page.orderBy == 'Sexo') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_DataDeCadastro">Data De Cadastro<% if (page.orderBy == 'DataDeCadastro') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
			</tr>
		</thead>
		<tbody>
		<% items.each(function(item) { %>
			<tr id="<%= _.escape(item.get('id')) %>">
				<td><%= _.escape(item.get('id') || '') %></td>
				<td><%= _.escape(item.get('nome') || '') %></td>
				<td><%if (item.get('dataDeNascimento')) { %><%= _date(app.parseDate(item.get('dataDeNascimento'))).format('DD/MM/YYYY') %><% } else { %>NULL<% } %></td>
				<td><%= _.escape(item.get('sexo') || '') %></td>
				<td><%if (item.get('dataDeCadastro')) { %><%= _date(app.parseDate(item.get('dataDeCadastro'))).format('DD/MM/YYYY') %><% } else { %>NULL<% } %></td>
			</tr>
		<% }); %>
		</tbody>
		</table>

		<%=  view.getPaginationHtml(page) %>
	</script>

	<!-- Modelo de sublinhado para a coleção -->
	<script type="text/template" id="usuarioModelTemplate">
		<form class="form-horizontal" onsubmit="return false;">
			<fieldset>
				<div id="idInputContainer" class="control-group">
					<label class="control-label" for="id">Id</label>
					<div class="controls inline-inputs">
						<span class="input-xlarge uneditable-input" id="id"><%= _.escape(item.get('id') || '') %></span>
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="nomeInputContainer" class="control-group">
					<label class="control-label" for="nome">Nome</label>
					<div class="controls inline-inputs">
						<input required type="text" class="input-xlarge" id="nome" placeholder="Nome" value="<%= _.escape(item.get('nome') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="dataDeNascimentoInputContainer" class="control-group">
					<label class="control-label" for="dataDeNascimento">Data De Nascimento</label>
					<div class="controls inline-inputs">
						<div class="input-append date date-picker" data-date-format="dd/mm/yyyy">
							<input required id="dataDeNascimento" type="text" value="<%= _date(app.parseDate(item.get('dataDeNascimento'))).format('DD/MM/YYYY') %>" />
							<span class="add-on"><i class="icon-calendar"></i></span>
						</div>
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="sexoInputContainer" class="control-group">
					<label class="control-label" for="sexo">Sexo</label>
					<div class="controls inline-inputs">
						<select required id="sexo" name="sexo">
							<option value=""></option>
							<option value="Masculino"<% if (item.get('sexo')=='Masculino') { %> selected="selected"<% } %>>Masculino</option>
							<option value="Feminino"<% if (item.get('sexo')=='Feminino') { %> selected="selected"<% } %>>Feminino</option>
						</select>
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="dataDeCadastroInputContainer" class="control-group">
					<label class="control-label" for="dataDeCadastro">Data De Cadastro</label>
					<div class="controls inline-inputs">
						<div class="input-append date date-picker" data-date-format="dd/mm/yyyy">
							<input readonly id="dataDeCadastro" type="text" value="<%= _date(app.parseDate(item.get('dataDeCadastro'))).format('DD/MM/YYYY') %>" />
							<span class="add-on"><i class="icon-calendar"></i></span>
						</div>
						<span class="help-inline"></span>
					</div>
				</div>
			</fieldset>
		</form>

		<!-- O botão de exclusão é um formulário separado para impedir que a tecla Enter acione uma exclusão -->
		<form id="deleteUsuarioButtonContainer" class="form-horizontal" onsubmit="return false;">
			<fieldset>
				<div class="control-group">
					<label class="control-label"></label>
					<div class="controls">
						<button id="deleteUsuarioButton" class="btn btn-mini btn-danger"><i class="icon-trash icon-white"></i> Apagar Usuario</button>
						<span id="confirmDeleteUsuarioContainer" class="hide">
							<button id="cancelDeleteUsuarioButton" class="btn btn-mini">Cancelar</button>
							<button id="confirmDeleteUsuarioButton" class="btn btn-mini btn-danger">Confirmar</button>
						</span>
					</div>
				</div>
			</fieldset>
		</form>
	</script>

	<!-- Diálogo de edição modal -->
	<div class="modal hide fade" id="usuarioDetailDialog">
		<div class="modal-header">
			<a class="close" data-dismiss="modal">&times;</a>
			<h3>
				<i class="icon-edit"></i> Editar Usuario
				<span id="modelLoader" class="loader progress progress-striped active"><span class="bar"></span></span>
			</h3>
		</div>
		<div class="modal-body">
			<div id="modelAlert"></div>
			<div id="usuarioModelContainer"></div>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" >Cancelar</button>
			<button id="saveUsuarioButton" class="btn btn-primary">Salvar Mudanças</button>
		</div>
	</div>

	<div id="collectionAlert"></div>
	
	<div id="usuarioCollectionContainer" class="collectionContainer">
	</div>

	<p id="newButtonContainer" class="buttonContainer">
		<button id="newUsuarioButton" class="btn btn-primary">Cadastrar Usuario</button>
	</p>

</div> <!-- /container -->

<?php
	$this->display('_Footer.tpl.php');
?>
