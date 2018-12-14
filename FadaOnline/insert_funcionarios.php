<?php
	include('conecta.php');

	if(isset($_POST['acao'])){
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$nascimento = $_POST['nascimento'];
	$cpf = $_POST['cpf'];
	$rg = $_POST['rg'];
	$estadocivil = $_POST['estadocivil'];
	$sexo = $_POST['sexo'];
	// Declara a data! :P
	$dataidade = $_POST['nascimento'];

	// Separa em dia, mês e ano
	list($dia, $mes, $ano) = explode('/', $dataidade);

	// Descobre que dia é hoje e retorna a unix timestamp
	$hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
	// Descobre a unix timestamp da data de nascimento do fulano
	$nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);

	// Depois apenas fazemos o cálculo já citado :)
	$idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
	$funcao = $_POST['funcao'];
	$cep = $_POST['cep'];
	$rua = $_POST['rua'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$numero = $_POST['numero'];
	$complemento = $_POST['complemento'];
	$telefone = $_POST['telefone'];
	$celular = $_POST['celular'];
	$salario = $_POST['salario'];

	$sql = $pdo->prepare("INSERT INTO `tb_funcionario` VALUES(null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

	$sql->execute(array($nome, $email, $nascimento, $cpf, $rg, $salario, $estadocivil, $sexo, $idade, $funcao, $cep, $rua, $bairro, $cidade, $estado, $numero, $complemento, $telefone, $celular));
	
	echo '<script> alert("Funcionario inserido!")</script>';
	echo '<script>   window.location.href = "cadastro_funcionario.php";</script>';
	}



?>