<?php
include 'conexao.php';
session_start();

if (!isset($_SESSION['usuario_id'])) { //Explicar isset($_SESSION['usuario_id']): se essa variável não existir, significa que ninguém fez login, então a página redireciona de volta para o login.
 header("Location: ../login.php");
 exit;
}
?>
