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
	<link href="css/amostra_usuario.css" rel="stylesheet"> 
    <link href="css/menu.css" rel='stylesheet' type='text/css' />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
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
            </div>

        </nav>
        <div id="page-wrapper">
            <div class="graphs">
                <div class="xs">
                    <div class="alinharcentro">
                        <center><h3>Perfil</h3></center>
                        <div class="tab-pane">
                            <div>
                                <center>
                                    <?php
                                        $query = $pdo->prepare("SELECT foto AS foto FROM tb_usuario where id_usuario=11");
                                        $query->execute();
                                        $foto = $query->fetch(PDO::FETCH_OBJ);

                                    ?>

                                    <?php
                                        $query2 = $pdo->prepare("SELECT login_usuario AS login FROM tb_usuario where id_usuario=11");
                                        $query2->execute();
                                        $login = $query2->fetch(PDO::FETCH_OBJ);

                                    ?>

                                    <?php
                                        $query3 = $pdo->prepare("SELECT senha_usuario AS nome FROM tb_usuario where id_usuario=11");
                                        $query3->execute();
                                        $nome = $query3->fetch(PDO::FETCH_OBJ);

                                    ?>

                                    <?php
                                        $query4 = $pdo->prepare("SELECT email_usuario AS email FROM tb_usuario where id_usuario=11");
                                        $query4->execute();
                                        $email = $query4->fetch(PDO::FETCH_OBJ);

                                    ?>
                                    <div class="imgradius">
                                        <img src="<?php echo $foto->foto ?>">
                                    </div>
                                    <div class="paddingbot">
                                        <p>Login: <span class="textoemphp"><?php echo $login->login ?></span></p>
                                        <p>Nome: <span class="textoemphp"><?php echo $nome->nome ?></span></p>
                                        <p>E-mail: <span class="textoemphp"><?php echo $email->email ?></span></p>
                                    </div>
                                    <a href="alterar_usuario.php" class="btn btn-warning btn-warng1"><i class="fas fa-save"></i>  Editar</a>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div style="padding-top: 2em;">
                        <center><p id="textopreto">© 2018 Fada do Dente. Todos os Direitos Reservados. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Desenvolvido por &nbsp;&nbsp;<a href="http://sw5.com.br/" target="_blank"><img id="logojf" src="images/sw5.png" width="75" height="39"></a></p></center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#wrapper -->
    <!-- Nav CSS -->
    <link href="css/custom.css" rel="stylesheet">
    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
