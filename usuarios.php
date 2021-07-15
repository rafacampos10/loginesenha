<?php
session_start();
if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
	
	header("Location: login.php");
	exit();
}


include "menu.php";

?>
<!DOCTYPE html>

<html lang="pt-br">
	<head>
	<title>Cadastro de Usuários</title> 
	<style>
        body{
        min-height: 1000px;
        width: 99.3%;
            background: url(img/papel-cadas-edit.png) rgb(64,178,248)no-repeat; 
        background-position: 50% 65%;
            background-attachment:scroll;
        }
        
        h1{
            color: white;
        }
        
        h2{
            color: lightslategray;
            font-size: 0.8em;
            margin-top: 2px;
            margin-bottom: 2px;
            margin-left: 50px;
        }
        
    
        
        </style>
	</head>

	<body>
	
    <?php
	
	if(isset($_SESSION['msg'])){
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
	}
	
	?>
	
	  <form method="post" id="cadastro" action="cadas_usuarios.php">
	  <h1>Cadastro de Usuários</h1>
		Nome:
		<input type="text" name="nome_sobrenome" size="40" placeholder="Digite o seu nome completo" required="required"><br><br>
		Email:
		<input type="email" name="email" size="40" placeholder="Crie email" required="required"><br><br>
		Senha:
		<input type="password" name="senha" size="15" placeholder="Crie uma senha" required="required"><br><h2>De 4 a 8 caracteres</h2>
		Cidade:
		<input type="text" name="cidade" size="40" placeholder="Digite a sua cidade" required="required"><br><br>
		Estado:
		<input type="text" name="estado" size="2" placeholder="UF" required="required"><br><br>
		<input type="submit" value="Cadastrar">
		<input type="reset" value="Limpar">
		<input type="button" value="Voltar" onClick="location.href='index.php'">
		</form>
		
	</body>
	
</html>