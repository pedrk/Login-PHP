<?php
// Iniciando sessões
if(!isset($_SESSION)){
    session_start();
}
// Incluindo a verificação de login
include('verificaLogin.php');
?>

<h2>Olá, <?php echo $_SESSION['usuario']; ?></h2>
<h2><a href="logout.php">Sair</a></h2>