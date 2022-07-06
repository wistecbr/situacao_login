<?php
    include './lib/mysqli.php';
    $users = listarUsers();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/stilo.css">
    <script src="./assets/js/utils.js" defer></script>
    <title>Lista </title>
</head>
<body>
    <header>
        <figure>
            <img src="" alt="logo">
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
        <table>
            <tr>
                <th> Nome </th>
                <th> Login </th>
                <th> Tipo </th>
                <th> Opções </th>
            </tr>
            <?php
            for ($i = 0; $i < count($users); $i++) {
                echo '<tr>';
                    echo '<td>'.$users[$i]['nome'].'</td>';
                    echo '<td>'.$users[$i]['login'].'</td>';
                    echo '<td>';
                        switch($users[$i]['tipo']){
                            case 1:
                                echo 'Administrador';
                                break;
                            case 2:
                                echo 'Cliente';
                                break;
                            case 3:
                                echo 'Funcionário';
                                break;
                            default:
                                echo 'Inválido';
                        }
                    echo '</td>';
                    echo '<td>';
                        echo '<button onclick="editarUser('.$users[$i]['id'].')">Editar</button>';
                        echo '<button onclick="detelarUser('.$users[$i]['id'].')">Deletar</button>';
                    echo '</td>';
                echo'</tr>';
            }
            ?>
        </table>
    </main>
    <footer>
    </footer>
</body>
</html>
