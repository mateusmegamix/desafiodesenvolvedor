<?php
//conexão
include_once 'php_action/db_connect.php';
//header
include_once 'includes/header.php';
//select
if(isset($_GET['id'])):
  $id = mysqli_escape_string($connect, $_GET['id']);

  $sql = "SELECT * FROM usuario WHERE id = '$id'";
  $resultado = mysqli_query($connect, $sql);
  $dados = mysqli_fetch_array($resultado);
endif;
?>

<?php

if(isset($_POST['enviarformulario'])):
  //Array de erros
  $erros = array();

//Sanitize para não entrar informações falsas nos campos
  $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
    $erros[] = "Email inválido";
    endif;

  //Exibindo mensagens
  if(!empty($erros)):
    foreach($erros as $erro):
      echo "<li> $erro </li>";
    endforeach;
  else:
    echo "Parabéns, seus dados estão corretos!";
  endif;
endif;
?>

<div class="row">
  <div class="container">
    <h3 class="light">Editar Usuário</h3>
    <form action="php_action/update.php" method="POST">
      <input type="hidden" required name="id" value="<?php echo $dados['id']; ?>">
      <div class="input-field">
        <input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
        <label for="nome">Nome Completo</label>
      </div>
      
      <label for="nascimento">Data de Nascimento:</label>
      <input type="date" id="nascimento" name="nascimento"
             value="1990-01-01"
             min="1900-01-01" max="2030-12-31">

      <div class="input-field">
        <input type="email" required name="email" id="email" value="<?php echo $dados['email']; ?>">
        <label for="email">Email</label>
      </div>

      <p>Sexo</p>
        <div>
            <p>
              <label for="masculino">
                <input type="radio" required name="sexo" class="filled-in" id="masculino" value="masculino" />
                <span>Masculino</span>
              </label>
              </p>
              <p>
              <label for="feminino">
                <input type="radio" name="sexo" class="filled-in" id="feminino" value="feminino" />
                <span>Feminino</span>
              </label>
            </p>
            <p>
              <label for="outros">
                <input type="radio" name="sexo" class="filled-in" id="outros" value="outros" />
                <span>Outros</span>
              </label>
            </p>
          </div>
      <br>
      <div class="input-field">
          <input type="text" readonly="true" name="data" id="data" value="<?php date_default_timezone_set('America/Sao_Paulo'); $data = date('d-m-Y H:i'); echo $data; ?>">
          <label for="data">Data de Atualização</label>
        </div>

      <button type="submit" name="btn-editar" class="btn green waves-effect">Atualizar</button>
      <a href="index.php" type="submit" class="btn waves-effect">Lista de usuários</a>
    </form>
  </div>
</div>

<?php
//footer
include_once 'includes/footer.php';
?>