<?php
// You'd put this code at the top of any "protected" page you create

// Always start this first
session_start();
if ( isset( $_SESSION['login'] ) ) {
    header("location: dashboard.php");
}
?>
<!DOCTYPE HTML>
<html>
<head>
  <title>Fada do Dente</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
  <!-- Custom CSS -->
  <link href="css/style.css" rel='stylesheet' type='text/css' />
  <link href="css/font-awesome.css" rel="stylesheet"> 
  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style type="text/css">
  #logojf{
    vertical-align: middle;
  }
  #voltar{
    color: black;
  }
  #voltar:hover{
    color: #0677ff;
    text-decoration: none;
  }
</style>
</head>
<body id="login">
  <div class="login-logo">
  </div>
  
  <?php include('conecta.php'); 
  

  if(isset($_POST['acao']))
  {
    $user =  $_POST['usuario']; 
    $password = md5($_POST['senha']); 
   
    $sql =  "SELECT * FROM tb_usuario WHERE login_usuario= '$user' AND senha_usuario= '$password'";

    $res = $pdo->query($sql);
    $num_rows = $res->fetchAll();
    //$res =  $con->query($sql);
     //$lin = mysqli_num_rows($res);
      $md5 = md5("mudar@123");
      if($password == $md5){
        $_SESSION['usuario'] = $user; 
        $_SESSION['senha'] = $password;
        header('Location: redefinir.php');

      }else{
        if ($num_rows)
        {
        
          $_SESSION['login'] = true; 
          $_SESSION['usuario'] = $user; 
          $_SESSION['senha'] = $password;
          


          header('Location: loading.html'); 
        } else 
        { 
          echo'<script>alert("Erro ao logar!");</script>'; 
        }
  }
}

      ?> 

      <h2 class="form-heading"><img src="images/fadadodente.png" width="200" height="110"></h2>
      <div class="app-cam" style="padding-bottom: 40px;">
       <form method="post" action="login.php">
        <input type="text" class="text" placeholder="Nome de Usuário" name="usuario" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nome de Usuário';}">
        <input type="password" placeholder="Senha" name="senha" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Senha';}">
        <div style="margin-bottom: 10px;" class="submit"><input type="submit" name="acao" onclick="myFunction()" value="Login"></div>
      </form>
      <center><a id="voltar" href="recuperar.php">Esqueceu sua senha?</a></center>
    </div>

    <center><p id="textopreto">© 2018 Fada do Dente. Todos os Direitos Reservados. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Desenvolvido por &nbsp;&nbsp;<a href="http://sw5.com.br/" target="_blank"><img id="logojf" src="images/sw5.png" width="75" height="39"></a></p></center>

  </body>
  </html>
