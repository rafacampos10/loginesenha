<?php
include("conectar.php");

?>

<html>
<head>
<title>Autenticação de Usuário</title>
<script>
function login_sucesso(){
	
	setTimeout("window.location='index.php'", 2000);
	
}

function login_error(){
	
	setTimeout("window.location='login.php'", 2000);
	
}
</script>
</head>






<?php

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = mysqli_query($conn,"select * from usuarios where email = '$email' and senha = '$senha'");

$row = mysqli_fetch_array($sql);


if($row > 0){
	
	session_start();
	$_SESSION['email']=$_POST['email'];
	$_SESSION['senha']=$_POST['senha'];
	
	echo "<center>Login efetuado com sucesso! Aguarde...</center>";
	echo "<script>login_sucesso()</script>";
	
} else {
	
	echo "<center>Usuario ou senha invalidos! Tente novamente.<center>";
	echo "<script>login_error()</script>";
	
}


?>

</body>

</html>