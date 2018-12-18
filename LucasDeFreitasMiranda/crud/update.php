<?php

include('conn.php');

if(isset($_POST['acao'])){
    $id_update = $_POST['id_cadastro'];
    $id = (int)$id_update;
    $nome = $_POST['nome'];
    $dataNascimento = $_POST['dataNascimento'];
    $sexo = $_POST['sexo'];

    
    $sql = $pdo->prepare("UPDATE cadastros SET nome = ?, data_nascimento = ?, sexo= ? WHERE id_cadastro = ?");

    $sql->execute(array($nome, $dataNascimento, $sexo, $id));
   
      
    if($sql->rowCount() > 0){
        echo '<script> alert("Cadastro atualizado com sucesso!");</script>';
        echo '<script>window.location.href = "readListaCadastros.php";</script>';
    }else{
        echo '<script> alert("Atualização com erro!");</script>';
        echo 'PDO::errorInfo()';
        print_r($sql->errorInfo()); 
      //  echo '<script>window.location.href = "cadastro.php";</script>';
    }
}
?>