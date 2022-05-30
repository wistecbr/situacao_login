<?php
    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['usuario'])== true)and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['usuario']); //se não tiver esta variável ele destroi a sessão
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
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assests/css/reset.css">
    <link rel="stylesheet" href="./assets/css/estilo.css">
    <script src="./assets/js/script.js" defer></script>
    <title>Bem Vindo</title>
</head>

<body>
<header>
        <h1>Sistema Login</h1>
        <ul>
            <li> <a href="./">Home</a></li>
        </ul>
    </header>
    <main>


        <?php

        
            echo "<h1> Bem-Vindo </h1>";
            echo'<h2>'.$logado.'</h2>';
            
     
        ?>




    </main>
    <footer>

    </footer>
</body>

</html>