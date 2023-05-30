<?php

$hostname_conexao = "localhost";
$database_conexao = "instituto";
$username_conexao = "root";
$password_conexao = "";

$conexao = mysqli_connect($hostname_conexao, $username_conexao, $password_conexao, $database_conexao);
mysqli_set_charset($conexao, 'utf8');

if (!$conexao) {
    echo "<script>alert('Não Conectou... !')</script>";
}