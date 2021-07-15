<?php
	session_start();
	include_once('conectar.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Contato</title>
	<head>
	<body>
		<?php
		// Definimos o nome do arquivo que será exportado
		$arquivo = 'listausuarios.xls';
		
		// Criamos uma tabela HTML com o formato da planilha
		$html = '';
		$html .= '<table border="1">';
		$html .= '<tr>';
		$html .= '<td colspan="7"><center>Planilha lista de usuarios</center></tr>';
		$html .= '</tr>';
		
		
		$html .= '<tr>';
		$html .= '<td><b>ID</b></td>';
		$html .= '<td><b>Nome e Sobrenome</b></td>';
		$html .= '<td><b>E-mail</b></td>';
		$html .= '<td><b>Cidade</b></td>';
        $html .= '<td><b>Estado</b></td>';
        $html .= '<td><b>Data de cadastro</b></td>';
		$html .= '<td><b>Modificado</b></td>';
		$html .= '</tr>';
		
		//Selecionar todos os itens da tabela 
		$result_msg_usuarios = "SELECT * FROM usuarios";
		$resultado_msg_usuarios = mysqli_query($conn , $result_msg_usuarios);
		
		while($row_msg_usuarios = mysqli_fetch_assoc($resultado_msg_usuarios)){
			$html .= '<tr>';
			$html .= '<td>'.$row_msg_usuarios["id"].'</td>';
			$html .= '<td>'.$row_msg_usuarios["nome_sobrenome"].'</td>';
			$html .= '<td>'.$row_msg_usuarios["email"].'</td>';
			$html .= '<td>'.$row_msg_usuarios["cidade"].'</td>';
			$html .= '<td>'.$row_msg_usuarios["estado"].'</td>';
            $html .= '<td>'.$row_msg_usuarios["data_cadastro"].'</td>';
            $html .= '<td>'.$row_msg_usuarios["modificado"].'</td>';
			$html .= '</tr>';
			;
		}
		// Configurações header para forçar o download
		header ("Cache-Control: no-cache, must-revalidate");
		header("Pragma: no-cache");  
        header("Expires: 0");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );
		// Envia o conteúdo do arquivo
		echo $html;
		exit; 
        ?>
	</body>
        </head>
    </head>
</html>