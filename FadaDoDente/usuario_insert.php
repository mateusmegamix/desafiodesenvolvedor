<?php

include('conecta.php');

if(isset($_POST['acao'])){
	/*$usuario = $_GET['usuario'];
	$usuarioBD = $pdo->prepare("SELECT * FROM usuario WHERE usuario = '$usuario'");
	$usuarioBD->execute();
	$return = $usuarioBD->fetchALL();
	if(count($return) > 0){
		echo '<script>  alert("Usuário existente!");  window.location.href = "cadastro_usuario.php";</script>';
	}else{*/ 
		if($_POST['senha'] == $_POST['confirmarsenha']){
			$user = $_POST['usuario'];
			$password = md5($_POST['senha']);
			$nome = $_POST['nome'];
			$funcionario = $_POST['funcionario'];
			$email = $_POST['email'];

			$sql = $pdo->prepare("INSERT INTO `tb_usuario` VALUES(null, ?, ?, ?, ?, ?");

			$sql->execute(array($user, $password, $nome, $email, $funcionario));

			echo'<script>   window.location.href = "cadastro_usuario.php";</script>';
			#echo'<script>   alert("Usuário Incluído!");</script>';
		}

	//}
}





?>