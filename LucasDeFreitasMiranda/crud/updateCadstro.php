<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="update.php" method="POST" >
    <?php 
        include('conn.php');
        $id_update = $_POST['id_cadastro'];
        $id = (int)$id_update;
        $sql = $pdo->prepare("SELECT * FROM cadastros WHERE id_cadastro = ?");
        $sql->execute(array($id));

        //echo 'PDO::errorInfo()';
        //print_r($sql->errorInfo()); 
        if($sql->rowCount() > 0){
        foreach($sql->fetchAll() as $dados):
        $id_cadastro = $dados['id_cadastro'];
    
    ?>
        <label>Nome:</label>
        <input style="border-radius: 5px;" type="text" name="nome" placeholder="" required="" value=" <?php echo $dados['nome']; ?>">
        <label>Data Nascimento:</label>
        <input style="border-radius: 5px;" type="date" name="dataNascimento" value="<?php echo $dados['data_nascimento']; ?>" required="">
        <label>Sexo:</label>
        <select style="border-radius: 5px;" name="sexo" >
            <option  value="">Selecione...</option>
            <option <?php if($dados['sexo']=='Feminino'){?> selected="selected" <?php } ?>  value="Feminino">Feminino</option>
            <option <?php if($dados['sexo']=='Masculino'){?> selected="selected" <?php } ?> value="Masculino">Masculino</option>
        </select>
        <input type="hidden" name="id_cadastro" value="<?php echo $id; ?>"/>
        <button type="submit" name="acao">Salvar</button>
        <?php endforeach;} ?>
</body>
</html>