<?php
    session_start();
    if((!isset($_SESSION['username'])== true)and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['username']);
        unset($_SESSION['senha']);
        header('Location: ./login.php ');
    }else{
        $logado = $_SESSION['username'];
    }

    $users = '';
    if (isset($_GET) && isset($_GET['name'])) {
        $users = $_GET['name'];
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

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
        <h1>Faça login para continuar </h1>
        <ul>
            <li> <a href="./">Home</a></li>
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