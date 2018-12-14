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
  <!-- <link href="css/font-awesome.css" rel="stylesheet"> -->
  <link href="css/menu.css" rel='stylesheet' type='text/css' />
  <!-- <link href="css/fontawesome.css" rel="stylesheet"> -->
  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <?php include('conecta.php') ?>
</head>
<body>
  <div id="wrapper">
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
        <div class="xs">
          <h3>Contato</h3>
          <div class="col-md-4 email-list1">
            <ul class="collection">
              <li style="padding-left: 5em;" class="collection-item avatar email-unread">
                <div class="avatar_left">
                  <i class="fas fa-users-cog icon_1"></i><span class="email-title">Lucas Freitas</span><br>
                  <i class="fab fa-whatsapp nav_icon2" style="color: #ccc;"></i><span class="truncate grey-text ultra-small">(24) 99226-7342</span>
                </div>
                <div class="clearfix"> </div>
              </li>
              <li style="padding-left: 5em;" class="collection-item avatar email-unread">
                <div class="avatar_left">
                  <i class="fas fa-users-cog icon_1"></i><span class="email-title">Júnior Cintra</span><br>
                  <i class="fab fa-whatsapp nav_icon2" style="color: #ccc;"></i><span class="truncate grey-text ultra-small">(24) 98158-4658</span>
                </div>
                <br>
              </li>
            </ul>
          </div>
          <div class="col-md-8 inbox_right">
            <div class="Compose-Message">               
              <div class="panel panel-default">
                <div class="panel-heading">
                  Enviar E-Mail
                </div>
                <div class="panel-body">
                  <div class="alert alert-info">
                    Por Favor, preencha detalhadamente de acordo com seu problema.
                  </div>
                  <hr>
                  <form method="post" action="envio_contato.php">
                    <label>Seu nome : </label>
                    <input type="text" name="nome" class="form-control1 control3">
                    <label>E-mail : </label>
                    <input type="text" name="email" class="form-control1 control3">
                    <label>Assunto :  </label>
                    <input type="text" name="assunto" class="form-control1 control3">
                    <label>Mensagem : </label>
                    <textarea rows="6" name="texto" class="form-control1 control2"></textarea>
                    <hr>
                    <button type="submit" name="acao" class="btn btn-warning btn-warng1"><i class="fas fa-check"></i>  Enviar</button>
                    <!-- Dar Alert ao clicar em "Enviar" -->
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"> </div>
        </div>
        <div>
          <center><p id="textopreto">© 2018 Fada do Dente. Todos os Direitos Reservados. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Desenvolvido por &nbsp;&nbsp;<a href="http://sw5.com.br/" target="_blank"><img id="logojf" src="images/sw5.png" width="75" height="39"></a></p></center>
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
