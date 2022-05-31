<?php
   
    $msgErr = '';
    if (isset($_GET) && isset($_GET['error'])) {
        $msgErr = $_GET['error'];
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/estilo.css">
    <script src="./assets/js/script.js" defer></script>
    <title>Login</title>
</head>
<body>
    <header>
        <h1>Sistema Login</h1>
        <ul>
            <li> <a href="./">Home</a></li>
        </ul>
    </header>
    <main>
        <section class="principal">
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
                echo '<label> Dados incorretos. Tente novamente. ' . $msgErr . '</label>';
                echo '</p>';
            }
            ?>
            <p class="botao">
                <input class="btn" type="submit" value="Entrar">
                <input class="btn" type="button" value="Cancelar" onclick="bt_cancelar()">
            </p>
            <p class="cadastro"><a href="./cadastra.php">É novo no site? Cadastra-se aqui!</a></p>

            </form>
        </section>
    </main>
    <footer>

    </footer>
</body>

</html>