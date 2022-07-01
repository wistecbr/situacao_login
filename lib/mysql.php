<?php

require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$host = $_ENV['HOST'];
$userDb = $_ENV['USER'];
$passwordDb = $_ENV['PASSWORD'];
$database = $_ENV['DATABASE'];

function conecta()
{
    $host = $GLOBALS['host'];
    $userDb = $GLOBALS['userDb'];
    $passwordDb = $GLOBALS['passwordDb'];
    $database = $GLOBALS['database'];

    $link = mysqli_connect($host, $userDb, $passwordDb, $database);

    if (mysqli_connect_errno()) {
        return NULL;
    } else {
        return $link;
    }
}

function verificaLogin($login, $password)
{
    $link = conecta();
    if ($link === NULL) {
        header('Location: ../login.php?error= Acesso ao BD');
    } else {
        $query = "SELECT id, login, nome, tipo FROM users WHERE login='$login' and password='$password' LIMIT 1";
        $result = mysqli_query($link, $query);

        if (mysqli_num_rows($result) < 1) {
            header('Location: ../login.php?error= Usuário e/ou senha inválidos');
        } else {
            while ($row = mysqli_fetch_row($result)) {
                $usuario = array(
                    'id' => $row[0],
                    'login' => $row[1],
                    'nome' => $row[2],
                    'tipo' => $row[3]
                );
            }
            $username = $usuario['nome'];
            header("Location: ../bemvindo.php?username=$username");
        }
    }
}

function listarUsers()
{
    $link = conecta(); // recebe a conexão com o banco de dados
    $query = "SELECT id, nome, login, tipo FROM users;"; // comando SQL que será executado

    if ($link !== NULL) {
        $result = mysqli_query($link, $query);
        if (mysqli_num_rows($result) >= 0) {
            /*  mysqli_num_rows nos retorna a quantidade de linhas que o result encontrou
                na consulta ao Banco de Dados.
                Lembrar que nossa função retornará uma lista de usuários
              */
            $users = [];
            while ($row = mysqli_fetch_row($result)) {
                /*
                 mysqli_fetch_row irá percorrer a resposta do banco linha por linha
                 e armazenar no objeto $row
                 aqui vamos converter o objeto $row em um objeto $user 
                 */
                $user = array(
                    'id' => $row[0],
                    'nome' => $row[1],
                    'login' => $row[2],
                    'tipo' => $row[3],
                );
                // em seguida adicionamos o novo objeto na lista (vetor) de usuarios
                array_push($users, $user);
            }
            return $users;
        } else {
            // houve algum erro inesperado 
        }
    } else {
        //vamos criar uma página a parte para redirecionar em casos de erros; 
    }
}

function cadastrarUser($nome, $user, $password, $typeUser)
{

    $query = "INSERT INTO users (nome, login, password, tipo) 
        values ('$nome', '$user', '$password', $typeUser );";
    $link = conecta();

    if ($link !== NULL) {
        $result = mysqli_query($link, $query);

        if ($result) {
            header("Location: ../login.php"); //redirect to login page if login exist
        } else {
            header("Location: ../cadastraUser.php?erro=query"); // redirect to cadastra if login don't exist
        }
    } else {
        header("Location: ../login.php?erro=banco"); // if link is null redirect to login  
    }
}

function buscarUserId($id)
{
    $link = conecta(); // recebe a conexão com o banco de dados
    $query = "SELECT id, nome, login, tipo FROM users WHERE id = $id;"; // comando SQL que será executado

    if ($link !== NULL) {
        $result = mysqli_query($link, $query);
        if (mysqli_num_rows($result) > 0) {
            /*  mysqli_num_rows nos retorna a quantidade de linhas que o result encontrou
                na consulta ao Banco de Dados.
                Lembrar que nossa função retornará o usuário econtrado
              */
            while ($row = mysqli_fetch_row($result)) {
                /*
                 mysqli_fetch_row irá percorrer a resposta do banco linha por linha
                 e armazenar no objeto $row
                 aqui vamos converter o objeto $row em um objeto $user 
                 */
                $user = array(
                    'id' => $row[0],
                    'nome' => $row[1],
                    'login' => $row[2],
                    'tipo' => (int)$row[3],
                );
            }
            return $user;
        } else {
            // houve algum erro inesperado 
            header("Location: ../cadastraUser.php");
        }
    } else {
        //vamos criar uma página a parte para redirecionar em casos de erros; 
        echo 'erro 2';
    }
}

function editUser($id, $nome, $login, $tipo)
{
    $link = conecta();
    $query = "UPDATE users SET nome='$nome', login='$login', tipo=$tipo WHERE id=$id";

    if ($link !== NULL) {
        $result = mysqli_query($link, $query);
        if ($result) {
            header('Location: ../listaUsers.php');
        } else {
            header("Location: ../editUser.php?id=$id&erro");
        }
    }
}

function deletePeloId($tabela, $id)
{
    $link = conecta();
    $query = "DELETE FROM $tabela WHERE id=$id";

    if ($link !== NULL) {
        $result = mysqli_query($link, $query);
        if ($result) {
            header('Location: ../listaUsers.php');
        } else {
            header("Location: ../editUser.php?id=$id&erro");
        }
    } else {
        header("Location: ../editUser.php?id=$id&erro");
    }
}

function cadastraMarca($marca){
    $link = conecta();
    $query = "INSERT INTO marcas (nome) values('$marca');";

    if($link !== NULL){
        $result = mysqli_query($link, $query);
        if($result){
            header("Location: ../listaMarcas.php");
        }else {
            header("Location: ../cadastraMarca.php?erro=query"); 
        }
    }else {
        header("Location: ../cadastraMarca.php?erro=Banco");
    }
}

function listarMarcas() {
    $link = conecta();
    $query = "SELECT id, nome FROM marcas;";

    if($link !== NULL){
        $result = mysqli_query($link, $query);
        if(mysqli_num_rows($result)>=0){
            $lista = [];
            while($row = mysqli_fetch_row($result)){
                $marca = array(
                    'id' => $row[0],
                    'nome' => $row[1],
                );
                array_push($lista,$marca);
            }
            return $lista;
        }else {
            header("Location: ../cadastraMarca.php?erro=query"); 
        }
    }else {
        header("Location: ../listaMarcas.php?erro=Banco");
    }

}
