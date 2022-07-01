<?php
include './lib/mysql.php';
$marcas = listarMarcas();
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
        <!-- Criar a tabela -->
        <table>
            <!-- cabeçalho da tabel -->
            <tr>
                <th> ID </th>
                <th> Nome </th>
                <th> Opções </th>
            </tr>
            <!-- FIM cabeçalho da tabel -->
            <?php
            /* 
                Aqui vamos criar um comando for para percorer o vetor que irá conter o objeto de usuários ($users)
                 que criamos no MYSQL.php  que está sendo recuperado no inicio desse arquivo.
            */

            for ($i = 0; $i < count($marcas); $i++) {
                echo '<tr>'; // tag html para iniciar linha de tabela 
                    echo '<td>'.$marcas[$i]['id'].'</td>'; // primeira coluna da tabela ...
                    echo '<td>'.$marcas[$i]['nome'].'</td>';
                    echo '<td>';
                        echo '<button onclick="editarMarca('.$marcas[$i]['id'].')">Editar</button>';
                        echo '<button onclick="detelarMarca('.$marcas[$i]['id'].')">Deletar</button>';
                    echo '</td>'; 
                echo'</tr>'; // fim da linha da tabela
            }
            ?>
        </table>

    </main>
    <footer>

    </footer>
</body>

</html>