<?php
include('conecta.php');
include('fadaDente.php');

	if(FadaDoDente::logado() == false){
		include('login.php');
	}else{
		echo 'Erro';
	}


?>