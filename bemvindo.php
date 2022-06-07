<?php
    $user = '';
    if (isset($_GET) && isset($_GET['username'])) {
        $user = $_GET['username'];
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
