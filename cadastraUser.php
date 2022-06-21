<?php
include './lib/utils.php';
    $login = verificaSessao();
    if($login !== 1){
        header('Location: ./acessorestrito.php');
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assests/css/reset.css">
    <link rel="stylesheet" href="./assests/css/stilo.css">
    <script src="./assests/js/script.js" defer></script>
    <title>Cadastrar Carro</title>
</head>
<body>
    <header>
        <figure>
            <img src="" alt="logo">
            <?php
                if($login !== 0){
                    echo '<a href="./lib/valida.php?logout">Logout</a>';
                }
            ?>
        </figure>
        <ul>
            <li> <a href="./">Home</a></li>
            <li><a href="./carros.php">Lista de carros</a></li>
            <li><a href="./cadastro.php">Cadastrar Carro</a></li>
        </ul>
    </header>
    <main>
        <form action="./lib/valida.php" method="post" enctype="multipart/form-data">
            <p>
                <label> Nome: </label>
                <input name="nome" type="text" id="box_nome">
            </p>
            <p>
                <label> login: </label>
                <select id="box_login" name="login">
            </p>
            <p>
                <label> Senha: </label>
                <input name="password" type="password" id="box_password">
            </p>
            <p>
                <label> Marca: </label>
                <select id="box_tipo" name="tipo">
                    <option value="">Administrador</option>
                    <option value="">Cliente</option>
                    <option value="">Funcionário</option>
                </select>
            </p>
            <p>
                <input type="submit" value="Cadastrar">
                <input type="button" value="Cancelar" onclick="bt_cancelar()">
            </p>
        </form>
    </main>
    <footer>
    </footer>
</body>
</html>