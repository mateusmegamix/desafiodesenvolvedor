<?php
//header
include_once 'includes/header.php';
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
    <h3 class="light">Cadastro de usuário</h3>
    <form action="php_action/create.php" method="POST">
      <div class="input-field">
        <input type="text" required name="nome" id="nome">
        <label for="nome">Nome</label>
      </div>

       <label for="nascimento">Data de Nascimento:</label>
      <input type="date" id="nascimento" name="nascimento"
             value="1990-01-01"
             min="1900-01-01" max="2030-12-31">

      <div class="input-field">
        <input type="email" required name="email" id="email">
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
          <label for="data">Data de Cadastro</label>
        </div>

      <button type="submit" name="btn-cadastrar" class="btn green waves-effect">Salvar</button>
      <a href="index.php" type="submit" class="btn waves-effect">Lista de Usuarios</a>
    </form>
  </div>
</div>

<?php
//footer
include_once 'includes/footer.php';
?>