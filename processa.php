<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
// echo "Nome: $nome <br>";
// echo "Email: $email <br>";

$result_usuario = "INSERT INTO usuarios (nome, email, telefone, estado, created) VALUES('$nome', '$email', '$telefone', '$estado', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)) {
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastro com sucesso</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color: red;'>Usuário não foi cadastro</p>";
	header("Location: index.php");
}
