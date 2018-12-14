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
	<?php include('conecta.php') ?>
</head>
<body>
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
					<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><i class="fas fa-bars"></i></a>
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
				<!-- /.sidebar-collapse -->
			</div>
			<!-- /.navbar-static-side -->
		</nav>
		<div id="page-wrapper">
			<div class="graphs">
				<div class="md">
					
					<center><h3>Cadastro de Usuário</h3></center>
					<form method="post" action="insert_usuario.php" enctype="multipart/form-data">
						<div class="form-group">
							<div class="row">
								<div style="padding-bottom: 2em;" class="col-md-12">
									<center><i id="coricone" class="fas fa-user-circle fa-7x"></i></center>
								</div>
								<div class="col-md-6">
                                    <label style="margin: 0;">Foto:</label>
                                    <br>
                                    <input style="width: 80%;border-radius: 5px;" class="form-control1"  id="uploadFile" placeholder="Escolha o Arquivo" disabled="disabled" />
                                    <div class="fileUpload btn btn-warning btn-warng1">
                                        <span><i class="fas fa-camera"></i> Upload</span>
                                        <input id="uploadBtn" type="file" name="foto" class="upload"/>
                                    </div>
                                </div>
								<div class="col-md-6 grid_box1">
									<label style="padding-bottom: 5px;">Nome:</label>
									<input style="border-radius: 5px;" type="text" class="form-control1" name="nome" placeholder="Nome Completo" required="">
								</div>
								
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label>E-Mail:</label><br>
									<input style="border-radius: 5px;" type="text" class="form-control1" name="email" placeholder="E-mail" required="">
								</div>
								<div class="col-md-6">
									<label>Usuário:</label>
									<input style="border-radius: 5px;" type="text" class="form-control1" name="usuario" placeholder="Nome de Usuario" required="">
								</div>
								<div class="col-md-6">
									<label for="sel1">Funcionário:</label>
									<select class="form-control" name="funcionario" id="sel1">
										<option>Selecione o funcionario:</option>
										<?php
										$sql =  $pdo->prepare("SELECT  id_funcionario,nome_funcionario FROM tb_funcionario ORDER BY nome_funcionario");
										$sql->execute();
										if ($sql->rowCount() > 0){
											foreach($sql->fetchAll() as $nomedodentista):
												echo '<option value=" '.$nomedodentista["id_funcionario"].' ">'. $nomedodentista['nome_funcionario'].'</option>'; 
											endforeach;
										} 
										?>
									</select>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="form-group">
							<div  style="padding-bottom: 2em;" class="row">

								<button type="submit" name="acao" class="btn btn-warning btn-warng1"><i class="fas fa-save"></i>  Salvar</button>
							</div>	
						</div>


						</form>	

					</div>
				</div>
				<div style="padding-top: 2em;padding-bottom: 2em;">
					<center><p id="textopreto">© 2018 Fada do Dente. Todos os Direitos Reservados. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Desenvolvido por &nbsp;&nbsp;<a href="http://sw5.com.br/" target="_blank"><img id="logojf" src="images/sw5.png" width="75" height="39"></a></p></center>
				</div>	
				<!-- /#page-wrapper -->
			</div>
			<!-- /#wrapper -->
			<!-- Nav CSS -->
			<link href="css/custom.css" rel="stylesheet">
			<!-- Metis Menu Plugin JavaScript -->
			<script src="js/metisMenu.min.js"></script>
			<script src="js/custom.js"></script>
			<!-- Bootstrap Core JavaScript -->
			<script src="js/bootstrap.min.js"></script>
			<script type="text/javascript">
				document.getElementById("uploadBtn").onchange = function () {
					document.getElementById("uploadFile").value = this.value;
				};
			</script>
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
	</body>
	</html>



