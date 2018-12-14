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
  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>
</head>
<body id="login">
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
  <div class="login-logo">
    <img src="images/fadadodente.png" width="200" height="110">
  </div>
  <h2 class="form-heading">Recuperar Senha </h2>
  <form class="form-signin app-cam" method="post" action="envio_recuperar.php">
    <center><p>Preencha os campos abaixo</p></center>
    <input type="text" class="form-control1" placeholder="Nome Completo" autofocus="">
    <input type="text" class="form-control1" placeholder="E-mail" autofocus="">
    <button style="margin-bottom: 10px;" class="btn btn-lg btn-success1 btn-block" type="submit">Submit</button>
  </form>
  <center><a style="margin: 0 auto;" id="voltar" href="login.php">Voltar</a></center>
  <div class="copy_layout login register">
    <center><p id="textopreto">© 2018 Fada do Dente. Todos os Direitos Reservados. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Desenvolvido por &nbsp;&nbsp;<a href="http://sw5.com.br/" target="_blank"><img id="logojf" src="images/sw5.png" width="75" height="39"></a></p></center>
  </div>
</body>
<style type="text/css">
#voltar{
  color: black;
}
#voltar:hover{
  color: #0677ff;
  text-decoration: none;
}
#logojf{
  vertical-align: middle;
}
</style>
</html>
