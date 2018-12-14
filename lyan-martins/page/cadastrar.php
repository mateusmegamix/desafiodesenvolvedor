<?php 
    include "../dao/autoload.php";
    $cadastro = new Cadastro();
    $get = $_GET;
    $retorno= [];
    if (isset($get['id'])) {
        $retorno = $cadastro->buscaCadastro($get['id']);
    }
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
</head>
<body>
    <div class="container">

    	<div class="conteudo">
    		<h1>Cadastro</h1>
    		<p>Nessa página é feito o cadastro de novos registros, e também e a página para alteração de registros já existentes na base de dados.</p>
    		<form name="frmCadastro" id="frmCadastro" class="frmCadastro" method="POST" >

                <input type="text" name="id" value="<?= (isset($retorno['id']))?$retorno['id']:0; ?>" hidden>

                <input type="text" class="form-control" name="nome" id="nome" placeholder="nome" aria-label="nome" aria-describedby="basic-addon1" 
                        value="<?= (isset($retorno['nome']))?$retorno['nome']:""; ?>" required>      

                <input type="date" class="form-control" name="dtNasc" id="dtNasc" placeholder="Data de Nascimento "data-toggle="tooltip" data-placement="top" title="Data de Nascimento"
                        value="<?= (isset($retorno['dtNasc']))?$retorno['dtNasc']:""; ?>" required>

                <div class="inputCheck">
                    <label>Sexo:</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"  name="m" id="radioM" <?= (isset($retorno['sexo'])&&$retorno['sexo'] == 'M')?'checked':'' ?> >
                        <label class="form-check-label" for="inlineCheckbox1">Masculino</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"  name="f" id="radioF" <?= (isset($retorno['sexo'])&&$retorno['sexo'] == 'F')?'checked':'' ?> >
                        <label class="form-check-label" for="inlineCheckbox2">Feminino</label>
                    </div>
                </div>
                <hr>
                <button type="submit" class="btn btn-success">Salvar</button>      
            </form>
    	</div>
    	
    </div>
<script type="text/javascript" src="../issets/js/cadastrar.js"></script>
</body>
</html>