



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        header{
            float: left;
            margin-left: 20%;
            margin-right: 50%;
            color: black;
        }    
    </style>
    <body></body>
</head>

<header>
<?php
    session_start();
if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
	
	header("Location: login.php");
	exit();
}

    
	//Incluir a conexão com banco de dados
	include_once('conectar.php');
	
	//Recuperar o valor da palavra
	$usuarios = $_POST['palavra'];
	
	//Pesquisar no banco de dados o nome do referente treinamento 
	//pela palavra digitada pelo usuário
	$usuarios = "SELECT * FROM usuarios WHERE nome_sobrenome LIKE '%$usuarios%'";
	$resultado_usuarios = mysqli_query($conn, $usuarios);

	if(mysqli_num_rows($resultado_usuarios) <= 0){
		echo "Nenhum usuário encontrado...";
	}else{
		while($rows = mysqli_fetch_assoc($resultado_usuarios)){
			echo "<li>".$rows['nome_sobrenome']."</li>";
		}
	}
?>
</header>
</html>