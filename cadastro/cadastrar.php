<?php
session_start();
include("../conexoes/conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

$sql ="select count(*) as total from usuario where login_usuario = '$usuario'";

$result = mysqli_query($conexao,$sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
    $_SESSION['usuario_existe'] = true;
    header('Location: cadastro.php');
    exit;
}

$sql = "INSERT INTO usuario (nome, login_usuario, senha) VALUES ('$nome', '$usuario', '$senha')";

if($conexao -> query($sql) === true){
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: cadastro.php');
exit;

?>