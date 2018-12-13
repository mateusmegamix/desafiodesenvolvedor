<!DOCTYPE html>
<html>
<head>
	<title>Gerenciar Dados</title>
	<link rel="stylesheet" type="text/css" href="styleDados.css">
	<link rel="icon" href="icon.jpg">
	<?php

		$parametro = filter_input(INPUT_GET, "parametro");
		$mysqllink = mysqli_connect("127.0.0.1","root","", "crud_city");

		if (mysqli_connect_errno()) {
  			echo "Falha ao conectar no MySQL: " . mysqli_connect_error();
 		}

		mysqli_select_db($mysqllink,"teste");

		if($parametro){
			$dados = mysqli_query($mysqllink, "select * from cadastro where nome like '$parametro%' order by nome");
		}else{
			$dados = mysqli_query($mysqllink, "select * from cadastro order by id");
		}

		$linha = mysqli_fetch_assoc($dados);
		$total = mysqli_num_rows($dados);
	?>
</head>
<body>
	<div class="form">
		<h1>Lista de Cadastros</h1>

		<!--<p>
			<form action="<?php echo $_SERVER[PHP_SELF]; ?>">
				<input type="text" name="parametro">
				<input type="submit" value="Buscar"> Código para realizar uma pesquisa
			</form>
		</p> -->

		<p>
			<a href="cadastro.html">Cadastrar um novo registro</a>
		</p>

		<table>
			<tr class="principal">
				<td>ID</td>
				<td>Nome</td>
				<td>Data Nascimento</td>
				<td>Sexo</td>
				<td>Data do Cadastro</td>
				<td colspan="2">Ações</td>
			</tr>
			<?php 
				if($total){ do{
			?>
			<tr>
				<td><?php echo $linha['id'] ?></td>
				<td><?php echo $linha['nome'] ?></td>
				<td><?php echo date('d/m/Y', strtotime($linha['data_nasc'])) ?></td>
				<td><?php $linha['sexo'] = strtoupper($linha['sexo']); echo $linha['sexo'] ?></td>
				<td><?php echo date('d/m/Y', strtotime($linha['data_cadastro'])) ?></td>
				<td><a href="<?php echo "paginaAlterar.php?id=" . $linha['id'] . "&nome=" . $linha['nome'] . "&data_nasc=" . $linha['data_nasc'] . "&sexo=" . $linha['sexo'] . "&data_cadastro=" . $linha['data_cadastro'] ?>">Alterar</a></td>
				<div class="apagar">
					<td><a href="<?php echo "excluir.php?id=" . $linha['id']?>">Excluir</a></td>
				</div>
			</tr>

			<?php
				} while($linha = mysqli_fetch_assoc($dados));

				mysqli_free_result($dados);}

				mysqli_close($mysqllink);
			?>
		</table>
	</div>

</body>
</html>