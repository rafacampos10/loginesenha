<?php
session_start();
include_once("conectar.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if(!empty($id)){
	$result_usuario = "DELETE FROM usuarios WHERE id='$id'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	if(mysqli_affected_rows($conn)){
		header("Location: listausuario.php");
	}else{
		header("Location: listausuario.php");
	}
}else{	
	header("Location: listausuario.php");
}
?>