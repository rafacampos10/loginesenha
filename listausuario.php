<?php
session_start();
if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
	
	header("Location: login.php");
	exit();
}
?>

<html>
<head>
	<title>Lista de Usuarios</title>
	<?php
    include("menu.php");
    ?>
    
    <style>
    body{
        width: 100%;
        min-width: 1024px;
            background: url(img/papel-lista.png) rgb(102, 102, 153)no-repeat; 
        background-position: 50% 101%;
            background-attachment:scroll;
        }
        
        table{
            width: 100%;
            color: white;
        }
        
        footer {
            float: left;
            height: 310px;
            width: 100%;
        }
        
    h2 {
            float: left;
            color: white;
            font-size: 0.9em;
        }
        
        h1{
            margin-top: 0px;
            text-align: center;
           color: white;
        }
        
        #exportar{
            background: rgb(135,153,203); 
            color:white;
        }
        input{
            float: left;
        }
        
    </style>
    
    <script>
    function deletar(id) {
     var resposta = confirm("Deseja remover esse registro?");
 
     if (resposta == true) {
          window.location.href = "proc_apagar_usuario.php?id=" + id;
		  alert("Registro deletado");
     } else{
		 alert("Não é possivel deletar");
		 return false;
	 }
}
    
    </script>
</head>


<body>
	<center><table width = "1000" border = "1" bordercolor = "EEE" cellspacing = "0" cellpadding = "10">
	
	<h1>Lista de Usuarios</h1>
	<input type="button" id="exportar" value="Exportar" onClick="location.href='planilha.php'">
		<tr>
		<td>ID</td>
		<td>Nome</td>
		<td>Email</td>	
		<td>Cidade</td>	
		<td>Estado</td>
		<td>Data cadastro</td>
		<td>Data modificado</td>
		<td>Editar</td>
		<td>Excluir</td>
		</tr>
		<?php	include("conectar.php");
	$registros = mysqli_query($conn,"select * from usuarios");
	while($campo = mysqli_fetch_array($registros))
	{
	?>
	<tr>
	<td><?php echo $campo["id"];?></td>
	<td><?php echo $campo["nome_sobrenome"];?></td>
	<td><?php echo $campo["email"];?></td>
	<td><?php echo $campo["cidade"];?></td>
	<td><?php echo $campo["estado"];?></td>
	<td><?php echo $campo["data_cadastro"];?></td>
	<td><?php echo $campo["modificado"];?></td>
	<td><?php echo "<a href='edit_usuario.php?id=" . $campo['id'] . "'><img src='img/editar.png'></a><br>";?></td>
	<td><?php echo 
		"<a href='' onclick='deletar(".$campo['id'].")'><img src='img/deletar.png'></a></a>";
        ?>
        </td>
	</tr>
	<?php
		}
	?>
	</table></center>
	
<footer>
        <h2>Desenvolvido por Rafael Campos Martins</h2>
</footer>	

</body>

<br>


</html>	