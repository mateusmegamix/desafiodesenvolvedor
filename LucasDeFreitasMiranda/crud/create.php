<?php
include('conn.php');

if(isset($_POST['acao'])){

    $nome = $_POST['nome'];
    $dataNascimento = $_POST['dataNascimento'];
    $sexo = $_POST['sexo'];
    $dataCadastro = date("Y/m/d");
    $data = explode('/', $dataCadastro);
    $dataFromato = $data[2].'-'.$data[1].'-'.$data[0];
    
    $sql = $pdo->prepare("INSERT INTO cadastros values(null, ?, ?, ?, ?)");

    $sql->execute(array($nome, $dataNascimento, $sexo, $dataCadastro));
   
      
    if($sql->rowCount() > 0){
        echo '<script> alert("Cadastro efetuado com sucesso!");</script>';
        echo '<script>window.location.href = "readListaCadastros.php";</script>';
    }else{
        echo '<script> alert("Cadastro com erro!");</script>';
        echo 'PDO::errorInfo()';
        print_r($sql->errorInfo()); 
        echo '<script>window.location.href = "cadastro.php";</script>';
    }
}

?>