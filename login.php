<?php
    include "./lib/valida.php"

    $msgErr = '';
    if (isset($_GET) && isset($_GET['error'])) {
        $msgErr = $_GET['error'];
    }

        include './lib/valida.php';
    if(isset($_POST['username']) && isset($_POST['password'])){
        $user = htmlspecialchars($_POST['username']);
        $password = md5(htmlspecialchars($_POST['password']));

        if(loginValida($user, $password) === admin){
            header('Location: ./home.php ');
        }else{
            header('Location: ./login.php?login=erro');
        }
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
        <title>Log-In</title>
    </head>
    <body>
        <header>
            <figure>
                <img src="" alt="logo">
            </figure>
            <ul>
                <li> <a href="./">Home</a></li>
            </ul>
        </header>
        <main>
            <form action="./lib/valida.php" method="post" enctype="multipart/form-data">
                <p>
                    <label> Login: </label>
                    <input name="login" type="text" id="box_login">
                </p>

                <p>
                    <label> Senha: </label>
                    <input name="password" type="password" id="box_ano">
                </p>

                <?php

                if ($msgErr !== '') {
                    echo '<p>';
                    echo '<label> Erro login/senha ' . $msgErr . '</label>';
                    echo '</p>';
                }
                ?>
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
