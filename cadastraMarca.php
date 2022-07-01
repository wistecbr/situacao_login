<?php
    $login = 0;
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
            <li> <a href="./cadastraUser.php">Cadastrar Usuário</a></li>
            <li> <a href="./listaUsers.php">Lista Usuários</a></li>
            <li> <a href="./cadastraMarca.php">Cadastrar Marca</a></li>
            <li> <a href="./listaMarcas.php">Lista Marcas</a></li>
        </ul>
    </header>
    <main>
        <form action="./lib/valida.php" method="post" enctype="multipart/form-data">
            <p>
                <label> Nome: </label>
                <input name="nomeMarca" type="text" id="box_nome">
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