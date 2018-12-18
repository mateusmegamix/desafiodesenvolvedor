<?php 

	include "autoload.php";

	$cadastro = New Cadastro();


	$get = $_GET;

	if (isset($get['id'])) {
		$retorno = $cadastro->deleteCadastro($get['id']);
		
		if ($retorno) {
			$return = [
				"ok" => 1,
				"msg" => "Deletado com sucesso!"
			];
		}else{
			$return = [
				"ok" => 0,
				"msg" => "Erro ao deletar!"
			];
		}
		
		echo json_encode($return);
		exit();
	}else{

		$return = [
			"ok" => 0,
			"msg" => "Erro inexplicavel!"
		];

		echo json_encode($return);
		exit();
	}
