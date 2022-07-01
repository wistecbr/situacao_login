<?php

$login = 0;
$user = '';
if($login !== 0){
    $user = $_SESSION['login']['nome'];
}

if (isset($_GET) && isset($_GET['username'])) {
    $user =htmlspecialchars( $_GET['username']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/stilo.css">
    <script src="./assests/js/script.js" defer></script>
    <title>Bem-Vindo</title>
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
        <?php
            if ($user !== '') {
                echo '<h1> Bem-Vindo </h1>';
                echo '<h2>' . $user . '</h2>';
            }
        ?>

    </main>
    <footer>

    </footer>
</body>

</html>