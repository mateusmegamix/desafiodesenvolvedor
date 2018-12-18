<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <tr>
        <th>Nome</th>
        <th>Data de Nascimento</th>
        <th>Sexo</th>
        <th>Data de Cadastro</th>
    </tr>

    <tbody>

		<?php
			include('conn.php');
			$sql =  $pdo->prepare("SELECT * FROM cadastros");
			$sql->execute();
				if ($sql->rowCount() > 0){
					foreach($sql->fetchAll() as $dados):
						$id_cadastro = $dados['id_cadastro'];
		?>
				
			<tr>
					<br />
					<td><?php echo $dados['nome'];?></td>
					<td><?php echo $dados['data_nascimento'];?></td>
					<td><?php echo $dados['sexo'];?></td>
					<td><?php echo $dados['data_cadastro'];?></td>
					<br />
                    <td>
					<form action="updateCadstro.php" method="POST">
				    <input type="text" style="display: none;" name="id_cadastro" value="<?php echo $id_cadastro;?>" />
						<button type="submit" name="acao" >Alterar</button>
					</form>
					<form action="delete.php" method="POST">
                    <input type="text" style="display: none;" name="id_cadastro" value="<?php echo $id_cadastro;?>" />
						<button type="submit" name="acao">Deletar</button>
					</form>
				    </td>
			</tr>
				
					<?php endforeach;}?>
					
	</tbody>
</body>
</html>