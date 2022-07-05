<?php
    require __DIR__.'/../vendor/autoload.php';
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
    $dotenv->load();

    $host = $_ENV['HOST'];
    $userDb = $_ENV['USER'];
    $passwordDb = $_ENV['PASSWORD'] ;
    $database = $_ENV['DATABASE'];

    function conecta() {
        $host = $GLOBALS['host'];
        $userDb = $GLOBALS['userDb'];
        $passwordDb = $GLOBALS['passwordDb'] ;
        $database = $GLOBALS['database'];
        $mysqli = mysqli_connect($host, $userDb, $passwordDb, $database);
        if (mysqli_connect_errno()) {
            return NULL;
        }else {
            return $mysqli;
        }
    }
    function login($user,$password){
        $query = "SELECT id, login, nome FROM users WHERE login = '$user' and password = '$password'";
        $link = conecta();
        if($link !== NULL){
            $result = mysqli_query($link, $query);
        }else {
            header("Location: ../login.php?erro=banco");
        }
        if($result){
            while($row = mysqli_fetch_row($result)){
                $login = array(
                    'id' => $row[0],
                    'login' => $row[1],
                    'nome' => $row[2]
                );
            }
            $nome = $login['nome'];
            $id = $login['id'];
            header("Location: ../bemvindo.php?username=$nome&id=$id");
        }else{
            header("Location: ../login.php?erro=query");
        }
    }
    function cadastrarUser($nome, $user, $password, $typeUser){
            $query = "INSERT INTO users (nome, login, password, tipo) values ('$nome', '$user', '$password', $typeUser );";
            $link = conecta();
            if($link !== NULL){
                $result = mysqli_query($link, $query);
                if($result){
                    header("Location: ../login.php");
                }else{
                    header("Location: ../cadastraUser.php?erro=query");
                }
            }else{
                header("Location: ../login.php?erro=banco");
        }
    }
    function listarUser(){
        $lista = [];
        $query = 'SELECT id, login, nome FROM users;';
        $link = conecta();
        if($link !== NULL){
            $result = mysqli_query($link, $query);
            if($result){
                while ($row = mysqli_fetch_row($result)){
                    $users = array(
                    'id' => (INT) $row[0],
                    'login' => $row[1],
                    'nome' => $row[2]
                    );
                    array_push($lista, $users);
                }
            }
        }
        return $lista;
    }
    function editUser($id, $nome, $login, $tipo){
        $link = conecta();
        $query = "UPDATE users SET nome='$nome', login='login', tipo='$tipo' WHERE id='$id'";

        if($link !== NULL){
            $result = mysqli_query($link, $query);
            if($result){
                header('Location: ../listagem.php');
            }else{
                header("Location: ../editUser.php?id=$id&erro");
            }
        }
    }
    function cadastraMarca($marca){
        $link = conecta();
        $query = "INSERT INTO marcas (nome) values('$marca');";

        if($link !== NULL){
            $result = mysqli_query($link, $query);
            if($result){
                header("Location: ../listaMarcas.php");
            }else{
                header("Location: ../cadastraMarca.php?erro=query");
            }
        }else{
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
            }else{
                header("Location: ../cadastraMarca.php?erro=query");
            }
            }else{
                header("Location: ../listaMarcas.php?erro=Banco");
            }
        }
?>