<?php

session_start();
?>


<html>

<head>
    <title>Projeto final</title>
    
    
    <style>
        body{
            max-height: 700px;
            width: 100%;
        }
        
            /* animação para webkit */
@-webkit-keyframes fundocor {
    
    0% {
            background: url(img/papel-css3.png) no-repeat rgb(64,178,248);
            background-position: 0% 50%;
            background-attachment:fixed;
    }
    25%   {
        
            background: url(img/papel-pesquisa.png) no-repeat rgb(253,218,62);
        background-position: 0% 50%;
            background-attachment: fixed;
    }
    50%  {
        background: url(img/papel-cadas-edit.png) no-repeat rgb(64,178,248);
            background-position: 0% 50%;
            background-attachment:fixed;
        }
    75%  {
            background: url(img/papel-lista.png) rgb(124,145,196)no-repeat; 
        background-position: 0% 50%;
            background-attachment:fixed;}
    100% {
            background: url(img/papel-html.png) no-repeat rgb(191, 127, 63);
            background-position: 0% 50%;
            background-attachment:fixed;
    }
        }

/* animação padrão */
@keyframes fundocor {
    
    
    0% {
            background: url(img/papel-css3.png) no-repeat rgb(64,178,248);
            background-position: 0% 50%;
            background-attachment:fixed;
    }
    25%   {
        
            background: url(img/papel-pesquisa.png) no-repeat rgb(253,218,62);
        background-position: 0% 50%;
            background-attachment: fixed;
    }
    50%  {
        background: url(img/papel-cadas-edit.png) no-repeat rgb(64,178,248);
            background-position: 0% 50%;
            background-attachment:fixed;
        }
    75%  {
            background: url(img/papel-lista.png) rgb(102, 102, 153)no-repeat; 
        background-position: 0% 50%;
            background-attachment:fixed;}
    100% {
            background: url(img/papel-html.png) no-repeat rgb(191, 127, 63);
            background-position: 0% 50%;
            background-attachment:fixed;
    }    
        }    
        
        h1{
            color: black;
        }
        
        
/* executa a chamada da animação no body */
body{
-webkit-animation: fundocor 15s linear 0s infinite alternate; /* chamada para Chrome, Safari, Opera */
    animation: fundocor 15s linear 0s infinite alternate; /* chamada padrão */
        }
        
    </style>
</head>

<body>
    <center>
	<h1>Login de Usuário</h1>
	</center>
	<br />
	<hr>
	<br />
    <form name="formlogin" method="post" action="autenticacao.php">
        <table width="200" border="0" height="200" cellspacing="0" cellpadding="0" align="center">

            <tr>
                <td >
                    <label>Email:</label></td>
                <td >
                    <input type="text" name="email"></td>
			</tr>
			<tr>
			<td >
			<label>Senha:</label></td>
			<td>
                    <input type="password" name="senha"></td>
			</tr>
			<tr>
			
			<td colspan="2" align="center" >
                    <input type="submit" value="Logar">
                <input type="reset" value="Limpar"></td>
            </tr>
                    </table>
    </form>


</body>


</html>


