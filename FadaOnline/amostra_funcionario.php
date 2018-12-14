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
	<title>Fada do Dente</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/font-awesome.css" rel="stylesheet"> 
	<link href="css/amostra_paciente.css" rel="stylesheet"> 
	<link href="css/menu.css" rel='stylesheet' type='text/css' />
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
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
				<!-- /.sidebar-collapse -->
			</div>
			<!-- /.navbar-static-side -->
		</nav>
		<div id="page-wrapper">
			<div class="graphs">
				<div class="xs" style="background-color: #fff;padding-top: 2em;">

					<div class="tab-pane" style="background-color: #fff;">
						<center><h3>Funcionários</h3></center>
						<div style="padding-bottom: 2em;background-color: #fff;" class="col-md-12">
							<center><i id="coricone" class="fas fa-users fa-7x"></i></center>
						</div>
						<script type="text/javascript">
							$(function(){
								$("#tabela input").keyup(function(){		

									var index = $(this).parent().index();
									var nth = "#tabela td:nth-child("+(index+1).toString()+")";
									var valor = $(this).val().toUpperCase();
									$("#tabela tbody tr").show();
									$(nth).each(function(){
										if($(this).text().toUpperCase().indexOf(valor) < 0){
											$(this).parent().hide();
										}
									});
								});

								$("#tabela input").blur(function(){
									$(this).val("");
								});	
							});
						</script>
						<div class="col-md-12 panel-body1" style="overflow: auto; max-height: 800px;">
							<table class="table" id="tabela">
								<thead>
									<tr>
										<th>Nome</th>
										<th>E-mail</th>
										<th>CPF</th>
									</tr>
									<tr>
										<th><input type="text" id="txtColuna1" class="form-control1"></th>
										<th><input type="text" id="txtColuna2" class="form-control1"></th>
										<th><input type="text" id="txtColuna3" class="form-control1"></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Sérgio Paulo Vianna Cintra Junior</td>
										<td>apspvcintraj@gmail.com</td>
										<td>180.121.557-02</td>
									</tr>
									<tr>
										<td>Lucas Freitas Miranda</td>
										<td>lucasdef.miranda@gmail.com</td>
										<td>154.649.267-47</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<br>
				</div>
				<div style="padding-top: 2em;padding-bottom: 3em;">
					<center><p id="textopreto" style="background-color: #fff;">© 2018 Fada do Dente. Todos os Direitos Reservados. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Desenvolvido por &nbsp;&nbsp;<a href="http://sw5.com.br/" target="_blank"><img id="logojf" src="images/sw5.png" width="75" height="39"></a></p></center>
				</div>
			</div>
		</div>
		<!-- /#page-wrapper -->
	</div>
	<!-- /#wrapper -->
	<!-- Nav CSS -->
	<link href="css/custom.css" rel="stylesheet">
	<!-- Metis Menu Plugin JavaScript -->
	<script src="js/metisMenu.min.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>
