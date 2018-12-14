<?php

	date_default_timezone_set('America/Sao_Paulo');
	
	//$pdo = new PDO("mysql:host=localhost;dbname=sw5combr_fadadodente","sw5combr_adminfa","fadadodente2018");

	

$development = "web";

if($development == "Local" or $development == "local"){
	$pdo = new PDO("mysql:host=localhost;dbname=fadadodente_novo","root","",  array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
else {
	$pdo = new PDO("mysql:host=localhost;dbname=sw5combr_fadadodente2","sw5combr_adminfa","fadadodente2018",  array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
} 

?>