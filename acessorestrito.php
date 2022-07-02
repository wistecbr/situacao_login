<?php
session_start();
$user = '';
if($login !== 0){
    $user = $_SESSION['user']['nome'];
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
    <title>ERRO</title>
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
        </ul>
    </header>
    <main>
        <h1> Acesso NEGADO </h1>

    </main>
    <footer>

    </footer>
</body>

</html>