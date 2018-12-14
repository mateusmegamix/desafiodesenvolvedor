<?php 


class Sql extends Connectar
{
	
	private $db;

   	function __construct()
	{
		$this->db = Connectar::create();
	}

	private function setarParam($statment, $params = array()){
		
		foreach ($params as $key => $value) {
		
			$this->setParam($statment ,$key, $value);
			
		}
	}
	
	private function setParam($statment, $key, $value){

		$statment->bindParam($key,$value);
	}

	Public function query($sql,$param = array()){

		$stmt = $this->db->prepare($sql);
		$this->setarParam($stmt,$param);
		$stmt->execute();
		return $stmt;

	}
	public function select($rawSql,$param = array()){

		$stmt = $this->query($rawSql,$param);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	public function Run(){
		return "Run..";
	}

}