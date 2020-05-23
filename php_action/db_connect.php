<?php
// Conexão com banco de dados através da API MYSQL
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "projeto";

$connect = mysqli_connect($servername, $username, $password, $db_name);
mysqli_set_charset($connect, "utf8");

if(mysqli_connect_error()):
	echo "Falha na conexão: ".mysqli_connect_error();
else:
	//teste......
	//echo "Sucesso ao se conectar com banco de dados Mysql!";
endif;