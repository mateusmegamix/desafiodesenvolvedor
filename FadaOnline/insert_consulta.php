<?php
include('conecta.php');

if(isset($_POST['acao'])){
	$data_consulta = $_POST['data'];
	/*$data = explode('/', $data_consulta);
	$dataNoFormatoParaOBranco = $data[2].'-'.$data[1].'-'.$data[0];*/

    $dataatual = date('d/m/Y');
	$data = explode('/', $dataatual);
	$dataatualNoFormatoParaOBranco = $data[2].'-'.$data[1].'-'.$data[0];
	$paciente = $_POST['paciente'];
	$dentista = $_POST['dentista'];
	$funcionario = $_POST['funcionario'];
	$horario = $_POST['horario'];
	$hora = explode(':', $horario);
	$horaNoFormatoParaOBranco = $hora[0].':'.$hora[1].':'.'00';
	$tipo = $_POST['tipo'];
	$motivo = $_POST['motivo'];
	$valor = $_POST['valor'];


	#echo $dataNoFormatoParaOBranco;
	$sql = $pdo->prepare("INSERT INTO `tb_consulta` VALUES(null, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

	$sql->execute(array($data_consulta, $horaNoFormatoParaOBranco,$dataatualNoFormatoParaOBranco, $tipo, $motivo, $funcionario, $dentista, $paciente, $valor));

	echo '<script>   window.location.href = "cadastro_consulta.php";</script>';
	//echo '<script> alert("Dentista incluído!")</script>';
	

}
?>