<?php
// Iniciando sessões
session_start();
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="../template/estilo.css" rel="stylesheet">

<div class="wrapper fadeInDown">
  <div id="formContent">

  
    <!-- Icones -->
    <div class="fadeIn first">
        <a href="#"></a><img src="../Imagens/Icone.png" alt="Icone"></a>
    </div>
      <?php
        if(isset($_SESSION['usuario_existe'])):
      ?>
        <div class="bg-danger">
          <p>Usuario já cadastrado!</p>
        </div>
      <?php
      endif;
      unset($_SESSION['usuario_existe'])
      ?>

      <?php
        if(isset($_SESSION['status_cadastro'])):
      ?>
        <div class="bg-success">
          <p>Cadastro efetuado!</p>
        </div>
      <?php
        endif;
        unset($_SESSION['status_cadastro']);
      ?>
    <form action="cadastrar.php" method="POST">
      <input type="text" id="login" class="fadeIn second" name="nome" placeholder="Nome">
      <input type="text" id="login" class="fadeIn second" name="usuario" placeholder="Login">
      <input type="text" id="password" class="fadeIn third" name="senha" placeholder="Password">
      <input type="submit" class="fadeIn fourth" value="Cadastrar">
    </form>

  </div>
</div>