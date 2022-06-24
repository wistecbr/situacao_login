<?php
    include './lib/mysql.php';

    $lista_Users = listUsers();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Cadastrados</title>
</head>
<body>
    <header>
            <ul>
                <li> <a href ="./">Home</a></li>

            </ul>
            
    </header>
    <main>
    <table>
            <tr>
                <th>Nome</th>
                <th>Login</th>
                <th>Tipo</th>
                <th>Opções</th>
            </tr>

            <?php
                for($i = 0; $i < count($lista_Users); $i++){
                    
                    echo '<td>'. $lista_Users[$i]['nome'] .'</td>';
                    echo '<td>'. $lista_Users[$i]['login'] .'</td>';
                    echo '<td>'. $lista_Users[$i]['tipo'] .'</td>';
                    echo '<td>
                            <button onclick="removeUser('.$lista_Users[$i]['id'].')"> Deletar </button>
                            <button onclick="editar('.$lista_Users[$i]['id'].')"> Editar </button>
                            
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