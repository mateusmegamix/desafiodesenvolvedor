<?php
	include('conecta.php');
	include('session.php');
	
	class ExibirImg{


	public static function exibe(){
		include('conecta.php');
		$usuario = $_SESSION['usuario'];
		$sql="select * from dentistas where id=27";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$dentistas = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
/*foreach ($dentistas as $dentista){
    $foto=$dentista['foto'];
		}
	}
} */
foreach ($dentistas as $key -> $dentistas ){

	$foto=$dentista['foto'];

} 

}



}




?>