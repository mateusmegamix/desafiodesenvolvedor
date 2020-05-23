<?php
//sessão
session_start();
//conexão
require_once 'db_connect.php';

//buscando os campos atraves do POST
if(isset($_POST['btn-editar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$nascimento = mysqli_escape_string($connect, $_POST['nascimento']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$sexo = mysqli_escape_string($connect, $_POST['sexo']);
	$data = mysqli_escape_string($connect, $_POST['data']);

	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql = "UPDATE usuario SET nome = '$nome', nascimento = '$nascimento', email = '$email', sexo = '$sexo', data = '$data' WHERE id = '$id'";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../index.php?sucesso');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar!";
		header('Location: ../index.php?erro');
	endif;
endif;