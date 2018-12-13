<!DOCTYPE html>
<html>
<head>
	<title>Alteração</title>
	<link rel="stylesheet" type="text/css" href="styleLogin.css">
	<link rel="icon" href="icon.jpg">
	<?php

		$id = filter_input(INPUT_GET, "id");
		$nome = filter_input(INPUT_GET, "nome");
		$data_nasc = filter_input(INPUT_GET, "data_nasc");
		$sexo = filter_input(INPUT_GET, "sexo");
		$data_cadastro = filter_input(INPUT_GET, "data_cadastro");

	?>
</head>
<body data-vide-bg="video">
	<div class="login-form">
		<h2>Alterar Dados</h2>
		<form action="alterar.php">
			<input type="hidden" name="id" value="<?php echo $id ?>">
			<div class="form-input">
				Nome:<input type="text" name="nome" value="<?php echo $nome ?>">
			</div>
			<div class="form-input">
				Data de Nascimento<input type="date" name="data_nasc" value="<?php echo $data_nasc ?>">
			</div>
			<div class="form-input">
			Sexo: <br>
			<select name="sexo" id="sexo" value="<?php echo $sexo ?>" >
				  <option value="M">Masculino</option>
				  <option value="F">Feminino</option>
				  <option value="O">Outros</option>
			</select>
			</div>
			<div class="form-input">
			Data do Cadastro<input type="date" name="data_cadastro" value="<?php echo $data_cadastro ?>">
			</div>
			<div class="form-input">
				<input type="submit" name="alterar" value="alterar">
			</div>
		</form>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="jquery.vide.js"></script>
</body>
</html>