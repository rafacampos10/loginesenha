<html lang="pt-br">
	<head>
	<title>Sistema de Busca de Usuarios</title>
	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/javascriptpersonalizado.js"></script>
	
	<?php
        include("menu.php");
session_start();
if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
	
	header("Location: login.php");
	exit();
}
        ?>
	<style>
        
        body{
            background: url(img/papel-pesquisa.png) no-repeat rgb(253,218,62);
            background-attachment: fixed;
            background-position: 80% 75%;
            height: auto;
        }
        
        h1{
            text-align: center;
            float: left;
            margin-left: 300px;
            color: black;
        }
        
        #form_pesquisa{
            float: left;
            margin-left: 20%;
            margin-right: 45%;
            display: block;
        }
        
        
        
        </style> 
	</head>
	
	<body>
	<h1>Pesquisar por Usuarios</h1>
	<form method="post" id="form_pesquisa" action=""> 
	    <input type="text" name="pesquisa" id="pesquisa" size="45" placeholder="Digite aqui o que você está procurando?">
	    <input type="submit" name="enviar" value="Pesquisar">
	</form>
	
	
	<ul class="resultado">
	    
	    
	    
	</ul>
	
	</body>
	
	
</html>
