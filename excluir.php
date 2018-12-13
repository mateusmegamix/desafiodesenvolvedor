<?php

	$id = filter_input(INPUT_GET, "id");

	$mysqllink = mysqli_connect("127.0.0.1","root","", "crud_city");

	if ($mysqllink) {
		$query = mysqli_query($mysqllink, "delete from cadastro where id='$id'; ");

		if($query){
			header("location: gerenciarDados.php");

		}else
			die("Erro: ". mysqli_error($mysqllink));

	}else{
		die("Erro: ". mysqli_error($mysqllink));
	}
?>