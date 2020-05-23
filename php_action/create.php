<?php
//sessão
session_start();
//conexão
require_once 'db_connect.php';
//clear
function clear($input){
	global $connect;
	//sql
	$var = mysqli_escape_string($connect, $input);
	//xss
	$var = htmlspecialchars($var);
	return $var;
}

if(isset($_POST['btn-cadastrar'])):
	$nome = clear($_POST['nome']);
	$nascimento = clear($_POST['nascimento']);
	$email = clear($_POST['email']);
	$sexo = clear($_POST['sexo']);
	$data = clear($_POST['data']);

	$sql = "INSERT INTO usuario (nome, nascimento, email, sexo, data) VALUES ('$nome', '$nascimento', '$email', '$sexo', '$data')";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: ../index.php?sucesso');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar!";
		header('Location: ../index.php?erro');
	endif;
endif;