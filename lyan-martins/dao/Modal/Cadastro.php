<?php



class Cadastro  Extends Sql
{

    private $sql;
    private $func;

	function __construct(){

		$this->sql = new Sql();
		$this->func = new Funcoes();

	}
	public function buscaTodos(){

		return  $this->sql->select("Select * from cadastro");

	}
	public function buscaCadastro($id){

		$param = [

			"id"=>$id
		];
		
		$retorno = $this->sql->select("Select * from cadastro where id = :id",$param);
		
		return $retorno[0];

	}

	public function insertCadastro($cadastro = array()){

		$data = $this->func->formata_data($cadastro['dtNasc'],"Y-m-d");
		$cadastro['dtNasc'] = $data;
		$ver = $this->func->verifica_array_vazio($cadastro);
		if(isset($cadastro['m'])){

			unset($cadastro['m']);
			$cadastro['sexo'] = "M";

		}elseif (isset($cadastro['f'])) {

			unset($cadastro['f']);
			$cadastro['sexo'] = "F";

		}else{

			return false;
		
		}
		
		
		if ($ver) {
			
			return "Problemas ao cadastrar.<br>".$ver;

		}else{
			if (isset($cadastro['id'])) {
				unset($cadastro['id']);
			}
			
			// insert into cadastro(nome,dtNasc,sexo) values ("Lyan","2018-04-12","M");
			
			$retorno = $this->sql->query("INSERT into cadastro(nome,dtNasc,sexo) values(:nome,:dtNasc,:sexo)",$cadastro);
			
			return $retorno;

		}

	}
	public function updateCadastro($dados){


		if(isset($dados['m'])){

			unset($dados['m']);
			$dados['sexo'] = "M";

		}elseif (isset($dados['f'])) {

			unset($dados['f']);
			$dados['sexo'] = "F";

		}else{

			return false;
		
		}
		
		$ver = $this->func->verifica_array_vazio($dados);
		if ($ver) {
			return "Problemas ao atualizar.<br>".$ver;
		}else{

			$param =[
	
				"id"=>$dados['id']
	
			];
			$retorno = $this->sql->select("SELECT * from cadastro where id = :id",$param);
			if (count($retorno)>0) {
				
				return $this->sql->query("UPDATE cadastro SET nome=:nome,dtNasc=:dtNasc,sexo=:sexo where id = :id",$dados);
	
			}
		}

	}

	public function deleteCadastro($id){

		$param =[

			"id"=>$id

		];
		$retorno = $this->sql->select("SELECT * from cadastro where id = :id",$param);
		if (count($retorno)>0) {
			
			return $this->sql->query("DELETE FROM cadastro where id = :id",$param);

		}

	}
}
