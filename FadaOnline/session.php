 <?php 
  // include('conecta.php'); 
  /* 
    if(isset($_POST['acao'])){
      $user = $_POST['usuario'];
      $password = $_POST['senha'];
      $sql = "SELECT * FROM usuario WHERE usuario= '$user' AND senha= '$password' ";
      $res = $pdo->query($sql);
      $num_rows = $res->fetchColumn();
      //$res = $con->query($sql);
      //$lin = mysqli_num_rows($res);
      if ($num_rows){
        $_SESSION['login'] = true;
        $_SESSION['usuario'] = $user;
        $_SESSION['senha'] = $password;
        header('Location: loading.html');
      } else {
        echo '<script>alert("Erro ao logar!");</script>';
      }
      
    }*/

  //   session_start();

/*    if(isset($_POST['acao'])){
      
      $user = $_POST['usuario'];
      $password = $_POST['senha'];
      $sql = "SELECT * FROM usuario WHERE usuario= '$user' AND senha= '$password' ";
      $res = $pdo->query($sql);
      $num_rows = $res->fetchColumn();
      //$res = $con->query($sql);
      //$lin = mysqli_num_rows($res);
      if ($num_rows){
        $_SESSION['login'] = true;
        $_SESSION['usuario'] = $user;
        $_SESSION['senha'] = $password;
        header('Location: loading.html');
      } else {
        echo '<script>alert("Erro ao logar!");</script>';
        header('Location: site.php')
      }
      
    }*/
    
    
   /* if(isset($_POST['acao'])){
      if(empty($_POST['usuario']) || empty($_POST['senha'])){
        echo '<script> alert("todas Informações são necessárias")';
      }

      else{
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $sql = "SELECT * FROM usuario WHERE usuario= '$usuario' AND senha= '$senha'";
         $res = $pdo->query($sql);
        /* $res->execute(array(
          'usuario' => $_POST['usuario'],
          'senha' => $_POST['senha']

        ));*/

    /*     $count = $res->fetchColumn();
         if($count){
          $_SESSION['usuario'] = $_POST['usuario'];
          session_start();
           header('Location: loading.php');
           }else{
         echo '<script>alert("Erro ao logar!");</script>';
         }

      }
    } */

    class Session{
      public static function iniciaSessao(){
        include('conecta.php');
        if(isset($_POST['acao'])){
          if(empty($_POST['usuario']) || empty($_POST['senha'])){
            echo '<script> alert("todas Informações são necessárias")';
          }

          else{
            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];
            $sql = "SELECT * FROM tb_usuario WHERE login_usuario= '$usuario' AND senha_usuario= '$senha'";
            $res = $pdo->query($sql);
        /* $res->execute(array(
          'usuario' => $_POST['usuario'],
          'senha' => $_POST['senha']

        ));*/

        $count = $res->fetchColumn();
        if($count){
          $_SESSION['usuario'] = $_POST['usuario'];
          session_start();
          header('Location: loading.php');
        }else{
          echo '<script>alert("Erro ao logar!");</script>';
        }

      }
    }
  }


  public static function destroiSessao(){
    session_start();
    session_destroy();
    header('login.php');
  }
}

?>