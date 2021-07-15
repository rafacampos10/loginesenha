<?php

session_start();

include_once('conectar.php');


// Para limpar a variável que vem do formulário
$nome_sobrenome = $_POST['nome_sobrenome'];
$email = $_POST ['email'];
$senha = $_POST ['senha'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

$result_usuarios = "insert into usuarios(nome_sobrenome, email, senha, cidade, estado, data_cadastro) values ('$nome_sobrenome','$email', '$senha', '$cidade', '$estado', NOW())";

$result_usuarios = mysqli_query($conn, $result_usuarios);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:white;'>Usuario cadastrado com sucesso.</p>";
	header("Location: usuarios.php");
	}else{
		$_SESSION['msg'] = "<p style='color:red;'>Erro de cadastrado!</p>";
		header("Location: usuarios.php");
		
	}
	
?>