<html>
   <head>
    <style>
    nav {
    border-bottom: 1px solid white;
    text-align: right;
    height: 70px;
    line-height: 70px;
    background: ;
    width: 100%;
}

.menu {
    margin: 0 30px 0 0;
    text-align: center;
    width: auto;
    display: none;
    background: ;
    height: auto;

}

.menu a {
    clear: right;
    text-decoration: none;
    color: black;
    margin: 0 10px;
    line-height: 70px;
    display: block;
    border-bottom: 1px solid white;
    margin: 0;
}

span {
    color: #0e64d8;
}

label {
    margin: 0 40px 0 0;
    font-size: 26px;
    line-height: 70px;
    width: 26px;
    float: right;
    display: block;
    color: white;
    cursor: pointer;
}

#menu {
    display: none;
    text-align: center;
    width: 100%;
}

#menu:checked + .menu {    
    display: block;
    height: 360px;
    float: left;
    width: 100%;
}
    
    </style>
    
    <body>
        <nav>
            <label for="menu">&#9776;</label>
            <input type="checkbox" id="menu">
            <div class="menu">
               <a href="index.php">Menu Principal</a>
                <a href="usuarios.php">Cadastro de Usuarios</a>
                <a href="listausuario.php">Lista de Usuarios</a>
                <a href="pesqusuarios.php">Pesquisa de Usuarios</a>
                <a href="logout.php">Sair</a>
            </div>
    
        </nav>
    
    </body>
</head>
</html>
