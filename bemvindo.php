<?php
    login();

    if((!isset($_SESSION['usuario'])== true)and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('Location: ./login.php ');
    }else{
        $logado = $_SESSION['usuario'];
    }

    $users = '';
    if (isset($_GET) && isset($_GET['nome'])) {
        $users = $_GET['nome'];
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
        <title>Bem vindo</title>
    </head>
    <body>
        <header>
            <figure>
                <img src="" alt="logo">
            </figure>
            <ul>
                <li> <a href="./">Bem Vindo</a></li>
            </ul>
        </header>
        <main>

            <?php

            if ($user !== '') {
                echo '<h1> Bem-Vindo </h1>';
                echo '<h2>'.$user.'</h2>';
            }
            ?>

        </main>
        <footer>
        </footer>
    </body>
</html>
