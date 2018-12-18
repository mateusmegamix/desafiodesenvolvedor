<?php 


class Funcoes 
{
	
	function __construct()
	{
		
	}

	public function formata_data($data, $formato){

		/*$data = date_create($data);
		return date_format($data, $formato);*/
		//$hora = date("H:i", strtotime($data));
		$data = trim(str_replace('/','-',$data));
		$phpdate = strtotime($data);
		return date($formato, $phpdate);

	}
	public function verifica_array_vazio($dados = array()){

		foreach ($dados as $key => $value) {
			if($value == ""){

				return $key." está vazio!";

			}
		}

		return false;

	}

}
