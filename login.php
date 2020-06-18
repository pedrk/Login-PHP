<?php
// Iniciando sessões
session_start();

// Incluindo a conexao com o banco de dados
include('conexoes/conexao.php');

// Teste se os campos de logins estão vazios
if(empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: index.php');
    exit();
}

// Arrumando os dados do formulário
$usuario = mysqli_real_escape_string($conexao,$_POST['usuario']);
$senha = mysqli_real_escape_string($conexao ,$_POST['senha']);

// Criando a query de validação
$query="select idUsuario, login_usuario from usuario where login_usuario = '{$usuario}' and senha = md5('{$senha}');";

// Desenvolve a query no banco, com a conexão e a query desejada
$result = mysqli_query($conexao, $query);

// Checa o número de linhas que retornam da query
// echo $row; exit();
$row = mysqli_num_rows($result);


// Teste se retornar dados, envia o usuario a uma página
if($row == 1) {
    $_SESSION['usuario'] = $usuario;
    header('Location: painel.php');
    exit();
}
// Se não retorna para o index e Cria a session de não_autenticado
else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: index.php');
    exit();
}