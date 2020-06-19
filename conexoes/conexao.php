<?php
// Informações sobre a conexão
$HOST =  '127.0.0.1:3030';
$USUARIO = 'admin';
$SENHA = 'admin';
$DB = 'Login';

$conexao = mysqli_connect($HOST, $USUARIO, $SENHA, $DB) or die ('Não foi possível conectar');