<?php
// You'd put this code at the top of any "protected" page you create

// Always start this first

session_start();

if ( isset( $_SESSION['login'] ) ) {
    // Grab user data from the database using the user_id
    // Let them access the "logged in only" pages
} else {
    // Redirect them to the login page
    header("Location: login.php");
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Fada Do Dente</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/menu.css" rel='stylesheet' type='text/css' />

    <link href="css/font-awesome.css" rel="stylesheet"> 
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>  
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <?php include('conecta.php') ?>
</head>
<body>
	<script>
		function formatar(mascara, documento){
			var i = documento.value.length;
			var saida = mascara.substring(0,1);
			var texto = mascara.substring(i)

			if (texto.substring(0,1) != saida){
				documento.value += texto.substring(0,1);
			}

		}
	</script>
	<script type="text/javascript" >

		$(document).ready(function() {

			function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                        	if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>
    <div id="wrapper">
    	<!-- Navigation -->
    	<nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    		<div class="navbar-header">
    			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    				<span class="sr-only">Toggle navigation</span>
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    			</button>
    			<a class="navbar-brand" href="logout.php"><img src="images/fadadodente.png" width="50" height="28"></a>
    		</div> 
    		<!-- /.navbar-header -->
    		<ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <?php 
                  $user = $_SESSION['usuario'];
                  $sql1 =  $pdo->prepare("SELECT foto FROM tb_usuario WHERE login_usuario = '$user'");
                  $sql1->execute();
                  $res = $sql1->fetch();
                  ?>
                  <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="<?php echo $res['foto']; ?>"><!-- <i class="fas fa-bars"></i> --></a>
                  <ul class="dropdown-menu">
                    <!-- <li class="m_2"><a href="amostra_usuario.php"><i class="fa fa-user"></i> Perfil </a></li> -->
                    <li style="max-width: 50px;" class="m_2"><a href="logout.php"><i class="fa fa-power-off"></i> Sair </a></li>  
                </ul>
            </li>
        </ul>
            <div class="navbar-default sidebar" role="navigation">
             <div class="sidebar-nav navbar-collapse">
                <?php
                include('menu_dinamico.php');
                echo $menu;
                ?>
            </div>
            <br>
            <center><a class="novaconsulta" href="cadastro_consulta.php"><i class="fas fa-plus-square"></i> Nova consulta</a></center>
            <center><a class="novaconsulta" href="cadastro_paciente.php"><i class="fas fa-plus-square"></i> Novo Paciente</a></center>
        </div>    <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        <div class="graphs">
            <div class="md">
                <center><h3>Cadastro de Consulta</h3></center>
                <form method="post" action="insert_consulta.php">
                    <div class="form-group">
                        <div class="row">
                            <div style="padding-bottom: 2em;" class="col-md-12">
                                <center><img src="images/icones_novos/cadastro_consulta.png" width="112" height="112"></center>
                            </div>
                            <div class="col-md-6">
                                <label for="sel1">Dentista:</label>
                                <select class="form-control" name="dentista" id="sel1">
                                    <option>Selecione o Dentista:</option>
                                    <?php
                                    $sql =  $pdo->prepare("SELECT  id_dentista,nome_dentista FROM tb_dentista ORDER BY nome_dentista");
                                    $sql->execute();
                                    if ($sql->rowCount() > 0){
                                        foreach($sql->fetchAll() as $nomedodentista):
                                         echo '<option value=" '.$nomedodentista["id_dentista"].' ">'. $nomedodentista['nome_dentista'].'</option>'; 
                                     endforeach;
                                 } 
                                 ?>
                             </select>
                         </div>
                         <div class="col-md-6">
                            <label for="sel1">Paciente:</label>
                            <select class="form-control" name="paciente" id="sel1">
                                <option>Selecione o Paciente:</option>
                                <?php
                                $sql =  $pdo->prepare("SELECT id_paciente, nome_paciente FROM tb_paciente ORDER BY nome_paciente");
                                $sql->execute();
                                if ($sql->rowCount() > 0){
                                    foreach($sql->fetchAll() as $nomedopaciente):
                                     echo '<option value=" '.$nomedopaciente["id_paciente"].' ">'. $nomedopaciente['nome_paciente'].'</option>'; 
                                 endforeach;
                             } 
                             ?>
                         </select>
                     </div>

                     <div class="clearfix"> </div>
                 </div>
             </div>
             <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                            <label for="sel1">Funcionario Marcador:</label>
                            <select class="form-control" name="funcionario" id="sel1">
                                <option>Selecione o Funcionario:</option>
                                <?php
                                $sql =  $pdo->prepare("SELECT id_funcionario, nome_funcionario FROM tb_funcionario ORDER BY nome_funcionario");
                                $sql->execute();
                                if ($sql->rowCount() > 0){
                                    foreach($sql->fetchAll() as $nomedopaciente):
                                     echo '<option value=" '.$nomedopaciente["id_funcionario"].' ">'. $nomedopaciente['nome_funcionario'].'</option>'; 
                                 endforeach;
                             } 
                             ?>
                         </select>
                     </div>
                    <div class="col-md-2 grid_box1">
                        <label>Data:</label>
                        <input style="border-radius: 5px;" type="date" class="form-control1" name="data" placeholder="" required="">
                    </div>
                    <div class="col-md-2 grid_box1">
                        <label>Horário:</label>
                        <input style="border-radius: 5px;" name="horario" type="text" class="form-control1" placeholder="" required="" OnKeyPress="formatar('##:##', this)">
                    </div>
                    <div class="col-md-2 grid_box1">
                        <label>Tipo da Consulta:</label>
                        <select style="border-radius: 5px;" name="tipo" class="form-control1">
                            <option value="">Selecione...</option>
                            <option value="Agendada">Agendada</option>
                            <option value="Emergência">Emergência</option>
                            <option value="Orçamento">Orçamento</option>
                        </select>
                    </div>
                    <div class="col-md-2 grid_box1">
                        <label>Valor da Consulta:</label>
                        <input class="form-control1" type="text" name="valor">
                    </div>

                    <div class="clearfix"> </div>
                </div>
                <div  style="padding-bottom: 2em;padding-top: 1em;" class="row">
                    <div class="col-md-12 grid_box1">
                        <label>Motivo da Consulta:</label>
                        <textarea rows="20" cols="50" style="border-radius: 5px;max-width: 100%;min-height: 150px;" type="text" class="form-control1" name="motivo" placeholder="Observações" required=""></textarea>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <button type="submit" name="acao" class="btn btn-warning btn-warng1"><i class="fas fa-save"></i>  Salvar</button>
            </div>
        </form>	
    </div>
</div>
<div style="padding-top: 2em;padding-bottom: 2em;">
    <center>
        <p id="textopreto">© 2018 Fada do Dente. Todos os Direitos Reservados. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Desenvolvido por &nbsp;&nbsp;<a href="http://sw5.com.br/" target="_blank"><img id="logojf" src="images/sw5.png" width="75" height="39"></a></p>
    </center>
</div>	
</div>
<link href="css/custom.css" rel="stylesheet">
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/bootstrap.min.js"></script>
<style type="text/css">
.fileUpload {
    position: relative;
    overflow: hidden;
    margin: 10px;
}
.fileUpload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}
#uploadBtn{
    background-color: #17b0ff;
}
</style>
<script type="text/javascript">
    document.getElementById("uploadBtn").onchange = function () {
        document.getElementById("uploadFile").value = this.value;
    };
</script>
</body>
</html>



