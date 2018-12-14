<?php 
include('conecta.php');
session_start();
if(isset($_POST['acao'])){
	$user = $_SESSION['usuario'];
	$sql1 =  $pdo->prepare("SELECT id_usuario FROM tb_usuario WHERE login_usuario = '$user'");
	$sql1->execute();
	$res = $sql1->fetch();

	if ($_POST['senha'] == $_POST['confirmarsenha']) {
		$password = md5($_POST['senha']);
		$sql = $pdo->prepare("UPDATE `tb_usuario` SET senha_usuario = :senha WHERE id_usuario = :id");

		$sql->execute(array(
			':senha'    => $password,
			':id'	=> $res['id_usuario']
		));
		if($sql1->rowCount() > 0){
		echo '<script>  alert("Senha Redefinida com Sucesso!");</script>';
		echo '<script>   window.location.href = "loading.html";</script>';
		$_SESSION['login'] = true;
		}else {
		echo '<script>  alert("Falha ao alterar a senha!");</script>';
		echo '<script>   window.location.href = "login.php";</script>';
		}
	}
	

}
?>