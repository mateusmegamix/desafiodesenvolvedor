<?php 

include_once "dao/autoload.php";

$cadastro = new Cadastro();

$dados = [

	"id" => "3",
	"nome" => "Lucas",
	"dtNasc" => "21/01/1984",
	"sexo" => "M"

];

//$cadastro->insertCadastro($dados);
//$cadastro->updateCadastro($dados);

//$cadastro->deleteCadastro(2);

print_r($cadastro->buscaTodos());