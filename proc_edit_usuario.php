<?php

include_once("conectar.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome_sobrenome = filter_input(INPUT_POST, 'nome_sobrenome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_EMAIL);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_EMAIL);
$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_EMAIL);
//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "UPDATE usuarios SET nome_sobrenome='$nome_sobrenome',email='$email',senha='$senha',cidade='$cidade',estado='$estado',  modificado=NOW() WHERE id='$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:white;'>Usuário editado com sucesso</p>";
	header("Location: edit_usuario.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
	header("Location: edit_usuario.php?id=$id");
}
