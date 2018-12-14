<?php
include('conn.php');

if(isset($_POST['acao'])){
    $id = $_POST['id_cadastro'];
    $idNumber = (int)$id;

    $sql = $pdo->prepare("DELETE FROM cadastros WHERE id_cadastro = ?");

    $sql->execute(array($id));

    if($sql->rowCount() > 0){
        echo '<script> alert("Cadastro deletado com sucesso!");</script>';
        echo '<script>window.location.href = "readListaCadastros.php";</script>';
    }else{
        echo '<script> alert("Exclusao com erro!");</script>';
        echo 'PDO::errorInfo()';
        print_r($sql->errorInfo()); 
        echo '<script>window.location.href = "readListaCadastros.php";</script>';
    }
}




?>