<?php
    if (
        isset($_GET) && isset($_GET['id']) && isset($_GET['login'])
        && isset($_GET['nome'])
    ) {
        $id = $_GET['id'];
        $login = $_GET['login'];
        $nome = $_GET['nome'];
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
    <title>Editar User</title>
</head>
<body>
    <header>
        <figure>
            <img src="" alt="logo">
        </figure>
        <ul>
            <li> <a href="./">Home</a></li>
            <li><a href="./cadastraUser.php">Cadastrar Usuário</a></li>
            <li><a href="./listagem.php">Lista de Usuários</a></li>
        </ul>
    </header>
    <main>
        <form action="./lib/valida.php" method="post" enctype="multipart/form-data">
            <?php
            echo '<input name="id" type="number"  id="box_id" value="' . $id . '" style="display: none"/>';
            ?>
            <p>
                <label> Nome: </label>
                <?php
                echo '<input name="up_nome" type="text" id="box_nome" value="' . $nome . '"/>';
                ?>
            </p>

            <p>
                <label> UserName: </label>
                <?php
                echo '<input login="up_login" type="text" id="box_login" value="' . $login . '"/>';
                ?>
            </p>
            <p>
                <input type="submit" value="Editar">
                <input type="button" value="Cancelar" onclick="bt_cancelar_up()">
            </p>

        </form>

    </main>
    <footer>

    </footer>
</body>

</html>
