<?php

	$nome = filter_input(INPUT_GET, "nome");
	$data_nasc = filter_input(INPUT_GET, "data_nasc");
	$sexo = filter_input(INPUT_GET, "sexo");
	$data_cadastro = filter_input(INPUT_GET, "data_cadastro");

	$mysqllink = mysqli_connect("127.0.0.1","root","", "crud_city");

	if ($mysqllink) {
		$query = mysqli_query($mysqllink, "insert into cadastro(id, nome, data_nasc, sexo, data_cadastro) values('','$nome','$data_nasc','$sexo','$data_cadastro');");

		if($query){

			header("location: gerenciarDados.php");

		}else
			die("Erro: ". mysqli_error($mysqllink));

	}else{
		die("Erro: ". mysqli_error($mysqllink));
	}
	
?>