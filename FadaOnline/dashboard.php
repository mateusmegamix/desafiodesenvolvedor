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
  <!-- Graph CSS -->
  <link href="css/lines.css" rel='stylesheet' type='text/css' />
  <link href="css/amostra_paciente.css" rel="stylesheet"> 
  <link href="css/menu.css" rel='stylesheet' type='text/css' />
  <link href="css/calendario_sw5.css" rel='stylesheet' type='text/css' />
  <link href="css/font-awesome.css" rel="stylesheet"> 
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>
  <link href="css/custom.css" rel="stylesheet">
  <!-- Metis Menu Plugin JavaScript -->
  <script src="js/metisMenu.min.js"></script>
  <script src="js/custom.js"></script>
  <!-- Graph JavaScript -->
  <script src="js/d3.v3.js"></script>
  <script src="js/rickshaw.js"></script>
  <script src="js/Chart.js"></script>
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
        <div class="col_3">
          <div class="col-md-3 col-sm-6 widget widget1">
            <div class="r3_counter_box">
              <i class="pull-left fa fa-tag icon-rounded"></i>
              <div class="stats">
                <?php

                $res_totalReg = $pdo->prepare("SELECT COUNT(*) AS totalReg FROM tb_consulta WHERE data_registro_consulta >= curdate()");
                $res_totalReg->execute();
                $total = $res_totalReg->fetch(PDO::FETCH_OBJ);

                ?>
                <h5><strong><?php echo $total_de_registros = $total->totalReg; ?></strong></h5>
                <span>Novas consultas</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 widget widget1">
            <div class="r3_counter_box">
              <i class="pull-left fa fa-check user1 icon-rounded"></i>
              <div class="stats">
                <?php

                $res_totalReg = $pdo->prepare("SELECT COUNT(*) AS totalReg FROM tb_consulta WHERE data_registro_consulta < curdate()");
                $res_totalReg->execute();
                $total = $res_totalReg->fetch(PDO::FETCH_OBJ);

                ?>
                <h5><strong><?php echo $total_de_registros = $total->totalReg; ?></strong></h5>
                <span>Consultas Feitas</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 widget widget1">
            <div class="r3_counter_box">
              <i class="pull-left fa fa-users user2 icon-rounded"></i>
              <div class="stats">
                <?php

                $res_totalReg = $pdo->prepare("SELECT COUNT(*) AS totalReg FROM tb_paciente");
                $res_totalReg->execute();
                $total = $res_totalReg->fetch(PDO::FETCH_OBJ);

                ?>
                <h5><strong><?php echo $total_de_registros = $total->totalReg; ?></strong></h5>
                <span>Pacientes</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 widget">
            <div class="r3_counter_box">
              <i class="pull-left fa fa-dollar dollar1 icon-rounded"></i>
              <div class="stats">
                <?php

                $res_totalReg = $pdo->prepare("SELECT SUM(valor_consulta) AS totalReg FROM tb_consulta");
                $res_totalReg->execute();
                $total = $res_totalReg->fetch(PDO::FETCH_OBJ);

                ?>
                <h5><strong>R$<?php echo $total_de_registros = $total->totalReg; ?></strong></h5>
                <span>Toral Recebido</span>
              </div>
            </div>
          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="col_1">
          <div class="col-md-2 span_7">	
            <div class="activity_box">
              <form method="post">
                <center><label class="form-control1">Pesquisar Consultas:</label></center>
                <input type="date" name="data" class="form-control1" style="padding-left: 25%;">
                <input type="submit" name="acao" value="Enviar" class="form-control1">
                <input type="submit" name="clear" value="Atualizar" class="form-control1">
              </form>

            </div>
          </div>
          <div class="col-md-5 span_8">
            <div class="activity_box">
              <div class="scrollbar" id="style-2">
               <?php 
               if (isset($_POST['acao'])) {
                $data_pesquisa = $_POST['data'];
                $data_pesquisada = $pdo->prepare("SELECT  tipo_consulta,hora_consulta,nome_paciente,nome_dentista,foto_paciente FROM tb_consulta INNER JOIN tb_dentista ON tb_dentista.id_dentista = tb_consulta.dentista_consulta INNER JOIN tb_paciente ON tb_paciente.id_paciente = tb_consulta.paciente_consulta WHERE tb_consulta.data_consulta = '$data_pesquisa'");
                $data_pesquisada->execute();
                if ($data_pesquisada->rowCount() > 0){
                  foreach($data_pesquisada->fetchAll() as $dadosconsulta):
                    echo '<div class="activity-row">
                    <div class="col-xs-3 activity-img"><img src="'.$dadosconsulta["foto_paciente"].'" class="img-responsive" alt=""/></div>
                    <div class="col-xs-9 activity-desc" style="padding-bottom: 15px">
                    <h5>Paciente: '.$dadosconsulta["nome_paciente"].'</h5>
                    <p>Dentista: '.$dadosconsulta["nome_dentista"].'</p>
                    <p>Tipo: '.$dadosconsulta["tipo_consulta"].'</p>
                    <p>Horário: '.$dadosconsulta["hora_consulta"].'</p>
                    </div>
                    <div class="clearfix"> </div>
                    </div>'; 
                  endforeach;
                }
              }elseif (isset($_POST['clear'])) {
                $data_atual = $pdo->prepare("SELECT  tipo_consulta,hora_consulta,nome_paciente,nome_dentista,foto_paciente FROM tb_consulta INNER JOIN tb_dentista ON tb_dentista.id_dentista = tb_consulta.dentista_consulta INNER JOIN tb_paciente ON tb_paciente.id_paciente = tb_consulta.paciente_consulta WHERE tb_consulta.data_consulta = curdate()");
                $data_atual->execute();
                if ($data_atual->rowCount() > 0){
                  foreach($data_atual->fetchAll() as $dadosconsulta):
                    echo '<div class="activity-row">
                    <div class="col-xs-3 activity-img"><img src="'.$dadosconsulta["foto_paciente"].'" class="img-responsive" alt=""/></div>
                    <div class="col-xs-9 activity-desc" style="padding-bottom: 15px">
                    <h5>Paciente: '.$dadosconsulta["nome_paciente"].'</h5>
                    <p>Dentista: '.$dadosconsulta["nome_dentista"].'</p>
                    <p>Tipo: '.$dadosconsulta["tipo_consulta"].'</p>
                    <p>Horário: '.$dadosconsulta["hora_consulta"].'</p>
                    </div>
                    <div class="clearfix"> </div>
                    </div>'; 
                  endforeach;
                }
              }else{
                $data_atual = $pdo->prepare("SELECT  tipo_consulta,hora_consulta,nome_paciente,nome_dentista,foto_paciente FROM tb_consulta INNER JOIN tb_dentista ON tb_dentista.id_dentista = tb_consulta.dentista_consulta INNER JOIN tb_paciente ON tb_paciente.id_paciente = tb_consulta.paciente_consulta WHERE tb_consulta.data_consulta = curdate()");
                $data_atual->execute();
                if ($data_atual->rowCount() > 0){
                  foreach($data_atual->fetchAll() as $dadosconsulta):
                    echo '<div class="activity-row">
                    <div class="col-xs-3 activity-img"><img src="'.$dadosconsulta["foto_paciente"].'" class="img-responsive" alt=""/></div>
                    <div class="col-xs-9 activity-desc" style="padding-bottom: 15px">
                    <h5>Paciente: '.$dadosconsulta["nome_paciente"].'</h5>
                    <p>Dentista: '.$dadosconsulta["nome_dentista"].'</p>
                    <p>Tipo: '.$dadosconsulta["tipo_consulta"].'</p>
                    <p>Horário: '.$dadosconsulta["hora_consulta"].'</p>
                    </div>
                    <div class="clearfix"> </div>
                    </div>'; 
                  endforeach;
                }
              }
              ?>
            </div>
          </div>
        </div>
        <div class="col-md-5 grid_2">
          <center>
            <div class="grid_1">
             <h3>Pie</h3>
             <canvas id="pie" height="300" width="400" style="width: 400px; height: 300px;"></canvas>

             <p></p>

           </div>
         </center>

       </div>

       <div class="span_11" style="padding: 0;border: 0;">
        <div class="clearfix"> </div>

      </div>
      <div>
        <center><p id="textopreto">© 2018 Fada do Dente. Todos os Direitos Reservados. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Desenvolvido por &nbsp;&nbsp;<a href="http://sw5.com.br/" target="_blank"><img id="logojf" src="images/sw5.png" width="75" height="39"></a></p></center>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
