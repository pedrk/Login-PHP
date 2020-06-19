<?php
include('conexoes/conexao.php');
// Variaveis de checagem
$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));

// Gerador de senha
$novasenha = substr(md5(time()), 0, 6);

// Query SQL
$sql ="UPDATE usuario SET senha = '{$novasenha}' where nome ='{$nome}' and login_usuario = '{$usuario}'";

// Execução da query
$result = mysqli_query($conexao, $sql);
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="template/estilo.css" rel="stylesheet">

<div class="wrapper fadeInDown">
    <div id="formContent">
        <form action="esqueciSenha.php" method="POST">
            <h2>Sua nova senha é: <?php echo $novasenha?></h2>
        </form>
    </div>
    <div class="bg-success p-3 mt-2">
        Retorne para fazer o login.
        <a href="index.php">Clique aqui para retornar</a>
    </div>
</div>