<?php 
    include "../dao/autoload.php";
    $cadastro = new Cadastro();

    $retorno = $cadastro->buscaTodos();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro - Inicio</title>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../issets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../issets/css/estilo.css">
    <!-- JS -->
    <script src="issets/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.32.2/dist/sweetalert2.all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <!-- https://unpkg.com/feather-icons@4.9.0/dist/feather.js -->

    <script src="../issets/js/listar.js"></script>

</head>
<body>
    <div class="container">

    	<div class="conteudo">
    		<h1>Lista</h1>
    		<p>Página onde e listado todos os registros gravados no banco, a lista contem o id., nome e dois botões, um para excluir e outro para alterar.</p>
            <div class="list">
    		    <?php foreach ($retorno as $key => $value): ?>
                    <div>
                        <label class="infoId"><?= $value['id'] ?></label>
                        <label class="infoNome"><?=$value['nome']?></label>
                        <label class="icon">
                            <a href="../page/cadastrar.php?id=<?= $value['id'] ?>">
                                <i data-feather="edit-2" ></i>
                            </a>
                            <a href="javascript:void(0)" >
                                <i data-feather="trash" onclick="exclui(<?= $value['id'] ?>)" data-id="<?= $value['id'] ?>"></i>
                            </a>
                        </label>
                        <hr>
                    </div>                    
                <?php endforeach ?>
                <a href="cadastrar.php">
                    <button type="button" class="btn btn-success" >Cadastrar</button>
                </a>
            </div>
          
        </div>
    	
    </div>


<script>
  feather.replace()
</script>

</body>
</html>