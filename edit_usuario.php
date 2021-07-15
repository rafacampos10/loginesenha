<?php
session_start();
if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
	
	header("Location: login.php");
	exit();
}


include_once("conectar.php");
include("menu.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Editar Usuario</title>
		<style>
        body{
        min-height: 1000px;
        width: 99.3%;
            background: url(img/papel-cadas-edit.png) rgb(64,178,248)no-repeat; 
        background-position: 50% 75%;
            background-attachment:scroll;
        }
        
        h1{
            color: white;
        }
        </style>		
	</head>
	<body>
		<br>
		<h1>Editar Usuário</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_edit_usuario.php">
			<input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">
			
			Nome:
			<input type="text" name="nome_sobrenome" size="40" placeholder="Digite o nome completo" value="<?php echo $row_usuario['nome_sobrenome']; ?>"><br><br>
			
			E-mail:
			<input type="email" name="email" size="40" placeholder="Digite o e-mail" value="<?php echo $row_usuario['email']; ?>"><br><br>
			
			Senha:
			<input type="password" name="senha" size="15" placeholder="Digite a senha nova" value="<?php echo $row_usuario['senha']; ?>"><br><br>
			
			Cidade:
			<input type="text" name="cidade" size="40" placeholder="Digite a cidade nova" value="<?php echo $row_usuario['cidade']; ?>"><br><br>
			
			Estado:
			<input type="text" name="estado" size="2" placeholder="UF" value="<?php echo $row_usuario['estado']; ?>"><br><br>
			
			<input type="submit" value="Editar">
			
		</form>
	</body>
</html>