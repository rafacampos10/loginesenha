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
    <meta charset="UTF-8">
    <title>Página principal</title>

    <!-- css e js do lightbox -->
    <link href="css/lightbox.css" rel="stylesheet">
    <script src="js/lightbox-plus-jquery.js"></script>
    <!-- fim css e js do lightbox-->
    <style>
        * {
            padding: 0 auto;
        }
        
        body{
            height: auto;
            width: 100%;
            min-width: 1024px;
            background: url(img/papel-index2.png) no-repeat rgb(191, 127, 63);
            background-position: 50% 90%;
            background-attachment:scroll;
        }
        p {
            font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
            font-size: 1.2em;
            text-align: justify;
            color: black;
            word-wrap:normal;
            margin-left: 100px;
            background: ;
           
        }

        header {
            margin-top: 20px;
            height: auto;
            width: 500px;
            float: left;
            background: ;
        }

        section {
            width: 250px;
            height: auto;
            float: right;
            margin-top: 20px;
            margin-right: 100px;
            background: ;
        }

        #bloco-galeria {
            width: 250px;
            height: auto;
            float: right;
        }

        h1 {
            text-align: center;
            font-family: sans-serif;
        }

        .imagem {
            float: left;
            margin-left: 30px;
            /*margin-right: 650px;*/
            margin-bottom: 20px;
        }

        footer {
            float: left;
            height: 120px;
            width: 100%;
        }

        h2 {
            float: left;
            color: black;
            font-size: 0.9em;
            margin-left: 50px;
        }
    </style>
</head>

<body>
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/pt_BR/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

    </script>

    <div class="fb-customerchat" attribution=setup_tool page_id="349585481829385">
    </div>
    <header>        
            <p>"Não acredite em algo simplesmente porque ouviu. Não acredite em algo simplesmente porque todos falam a respeito. Não acredite em algo simplesmente porque está escrito em seus livros religiosos. Não acredite em algo só porque seus professores e mestres dizem que é verdade. Não acredite em tradições só porque foram passadas de geração em geração. Mas, depois de muita análise e observação, se você vê que algo concorda com a razão e que conduz ao bem e benefício de todos, aceite-o e viva-o. Podemos acreditar que tudo que a vida nos oferecerá no futuro é repetir o que fizemos ontem e hoje. Mas, se prestarmos atenção, vamos nos dar conta de que nenhum dia é igual a outro. Cada manhã traz uma bênção escondida; uma bênção que só serve para esse dia e que não se pode guardar nem desaproveitar. Se não usamos este milagre hoje, ele vai se perder. Este milagre está nos detalhes do cotidiano; é preciso viver cada minuto porque ali encontramos a saída de nossas confusões, a alegria de nossos bons momentos, a pista correta para a decisão que tomaremos."</p>

    </header>
    <section>
        <div id="bloco-galeria">
            <h1>Galeria de foto</h1>
            <a href="img/1-grande.jpg" data-lightbox="roadtrip" class="imagem">
                <img src="img/1-pequena.jpg" alt="">
            </a>

            <a href="img/2-grande.jpg" data-lightbox="roadtrip" class="imagem">
                <img src="img/2-pequena.jpg" alt="">
            </a>

            <a href="img/3-grande.jpg" data-lightbox="roadtrip" class="imagem">
                <img src="img/3-pequena.jpg" alt="">
            </a>

            <a href="img/4-grande.jpg" data-lightbox="roadtrip" class="imagem">
                <img src="img/4-pequena.jpg" alt="">
            </a>

            <a href="img/5-grande.jpg" data-lightbox="roadtrip" class="imagem">
                <img src="img/5-pequena.jpg" alt="">
            </a>
            <a href="img/6-grande.jpg" data-lightbox="roadtrip" class="imagem">
                <img src="img/6-pequena.jpg" alt="">
            </a>

        </div>

    </section>
    <footer>
        <h2>Desenvolvido por Rafael Campos Martins</h2>
    </footer>
</body>

</html>
