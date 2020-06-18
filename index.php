<?php
// Iniciando sessões
session_start();
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="template/estilo.css" rel="stylesheet">

<div class="wrapper fadeInDown">
  <div id="formContent">

    <!-- Icones -->
    <div class="fadeIn first">
        <a href="#"></a><img src="Imagens/Icone.png" alt="Icone"></a>
    </div>

    
    <?php
    // Se a sessao não estiver autenticada, retorna um alerta 
    if(isset($_SESSION['nao_autenticado'])):
    ?>
        <div class="bg-danger">
          <p>Erro ao autenticar usuario</p>
        </div>
    <?php
    endif;
    // Encera a sessao
    unset($_SESSION['nao_autenticado']);
    ?>
    <form action="login.php" method="POST">
      <input type="text" id="login" class="fadeIn second" name="usuario" placeholder="Login">
      <input type="text" id="password" class="fadeIn third" name="senha" placeholder="Password">
      <input type="submit" class="fadeIn fourth" value="Entrar">
    </form>

    <!-- Relembrar a senha -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Cadastrar usuário</a>
    </div>

  </div>
</div>