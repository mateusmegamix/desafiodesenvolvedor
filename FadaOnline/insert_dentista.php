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
	$cro = $_POST['cro'];
	$salario = $_POST['salario'];
	$especialidade = $_POST['especialidade'];
	$cep = $_POST['cep'];
	$rua = $_POST['rua'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$numero = $_POST['numero'];
	$complemento = $_POST['complemento'];
	$telefone = $_POST['telefone'];
	$celular = $_POST['celular'];
	$foto = $_FILES["photo"];

	if (!empty($foto["name"])) {

		// Largura máxima em pixels
		$largura = 1500;
		// Altura máxima em pixels
		$altura = 1800;
		// Tamanho máximo do arquivo em bytes
		$tamanho = 10000000;

		$error = array();

    	// Verifica se o arquivo é uma imagem
		if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto["type"])){
			$error[1] = "Isso não é uma imagem.";
		} 

		// Pega as dimensões da imagem
		$dimensoes = getimagesize($foto["tmp_name"]);

		// Verifica se a largura da imagem é maior que a largura permitida
		if($dimensoes[0] > $largura) {
			$error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
		}

		// Verifica se a altura da imagem é maior que a altura permitida
		if($dimensoes[1] > $altura) {
			$error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
		}

		// Verifica se o tamanho da imagem é maior que o tamanho permitido
		if($foto["size"] > $tamanho) {
			$error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
		}

		// Se não houver nenhum erro
		if (count($error) == 0) {

			// Pega extensão da imagem
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);

        	// Gera um nome único para a imagem
			$nome_imagem = md5(uniqid(time())) . "." . $ext[1];

        	// Caminho de onde ficará a imagem
			$caminho_imagem = "fotos/" . $nome_imagem;

			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($foto["tmp_name"], $caminho_imagem);

			$sql = $pdo->prepare("INSERT INTO `tb_dentista` VALUES(null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

			$sql->execute(array($nome, $email, $nascimento, $cpf, $rg, $cro, $especialidade, $salario, $estadocivil, $sexo, $idade, $cep, $rua, $bairro, $cidade, $estado, $numero, $complemento, $telefone, $celular, $caminho_imagem));

			echo '<script> alert("Dentista incluído!")</script>';
			echo '<script>   window.location.href = "cadastro_dentista.php";</script>';
			
		}

		// Se houver mensagens de erro, exibe-as
		if (count($error) != 0) {
			foreach ($error as $erro) {
				echo $erro . "<br />";
			}
		}


	}

	
	

}
?>