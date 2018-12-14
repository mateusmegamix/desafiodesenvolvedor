<?php

function pegaValor($valor) {
	return isset($_POST[$valor]) ? $_POST[$valor] : '';
}

function validaEmail($email) {
	return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function enviaEmail($de, $assunto, $pedido, $para, $email_servidor) {
	$headers = "From: $email_servidor\r\n" .
	"Reply-To: $de\r\n" .
	"X-Mailer: PHP/" . phpversion() . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
	$email = mail($para, $assunto, nl2br($pedido), $headers);

	if ($email == true){

		echo '<script> window.location.href = "contato_suporte.html"; alert("E-mail Enviado!");</script>';

	} else {

		echo 'E-mail não enviado!';
	}

}



$email_servidor = "Sw5";
$para = "contato@sw5.com.br";
$nome = pegaValor("nome");
$de = pegaValor("email");
$texto = pegaValor("texto");
$assunto = "Contato via Fada do Dente" . " - " . pegaValor("assunto");
$email = "<strong>Nome:</strong> " . $nome . '<br>' . "<strong>E-mail:</strong> " . $de . '<br>' . "<strong>Mensagem:</strong> " . $texto;

enviaEmail ($de, $assunto, $email, $para, $email_servidor);

?>