<?php

$host = "127.0.0.1";
$usuario = "root";
$database = "cheque";
$senha = "";
$conexao = mysqli_connect($host, $usuario, $senha, $database);
mysqli_set_charset($conexao, 'utf8');
?>
