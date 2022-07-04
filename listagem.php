<?php
    include './lib/mysqli.php';
    $users = listarUser();
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
    <title>Lista de Usuários</title>
</head>
<body>
    <header>
        <figure>
            <img src="" alt="logo">
        </figure>
    </header>
    <main>
        <table>
            <tr>
                <th class="cor_sim">ID</th>
                <th class="cor_nao">Login</th>
                <th class="cor_sim">Nome</th>
                <th class="cor_sim">Opções</th>
            </tr>
            <?php
                for($i = 0; $i < count($users); $i++){
                    if(($i%2) !== 0 ){
                        echo '<tr class="cor_nao">';
                    }else{
                        echo '<tr>';
                    }
                        echo '<td>'. $users[$i]['id'] .'</td>';
                        echo '<td>'. $users[$i]['login'] .'</td>';
                        echo '<td>'. $users[$i]['nome'] .'</td>';
                        echo '<td>
                        <button onclick="deletar('.$users[$i]['id'].')"> Deletar </button>
                        <button onclick="editar('.$users[$i]['id'].')"> Editar </button>
                        </td>';
                    echo '</tr>';
                }
            ?>
        </table>
    </main>
    <footer>
    </footer>
</body>
</html>
