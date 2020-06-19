<?php
// Iniciando sessões
if(!isset($_SESSION)){
    session_start();
}
// Incluindo a verificação de login
include('verificaLogin.php');
?>
<link href="../template/estilo.css" rel="stylesheet">
    <div class="apresentacao" style="height:200px;
                                    width: 100%;
                                    background-color: #BD5D38;">
        <a href="http://smcsistemas.prefeitura.sp.gov.br/indexsistemas/"><img src="../Imagens/Icone.png" style="width:50%; height: 80%;"/></a>
        <h2 style="color: rgba(255,255,255,0.5)">Olá, <?php echo $_SESSION['nome']?></h2>                       
    <div>
<h2><a href="logout.php">Sair</a></h2>