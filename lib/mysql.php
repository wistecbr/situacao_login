<?php

    require __DIR__.'/../vendor/autoload.php';// Pega o arquivo dentro da pasta vendor
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
    $dotenv->load();

    //$s3_bucket = $_ENV['S3_BUCKET'];
    $host = $_ENV['HOST'];
    $userDb = $_ENV['USER'];
    $passwordDb = $_ENV['PASSWORD'] ;
    $database = $_ENV['DATABASE'];

    function conecta() {

        //$s3_bucket = getenv('S3_BUCKET');

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
                header("Location: ../login.php");//redirect to login page if login exist
            }else{
                header("Location: ../cadastraUser.php?erro=query");// redirect to cadastra if login don't exist
            }
        }else {
            header("Location: ../login.php?erro=banco");// if link is null redirect to login  
        }
    }

    function removeUser($id){

        $query = "DELETE FROM users WHERE id = '$id'";
        $link = conecta();

        if($link !== NULL){
            $result = mysqli_query($link, $query);
            return $result;
        }else {
            header("Location: ../index.php?erro=banco");
        }
    }

    function listUsers(){

        $list = [];
        $query = "SELECT id, login, nome, tipo FROM users ";
        $link = conecta();

        if($link !== NULL){
            $result = mysqli_query($link, $query);

            if($result){

                while($row = mysqli_fetch_row($result)){
                    
                    $lista_user = array(
                        'id' => $row[0],
                        'login' => $row[1],
                        'nome' => $row[2],
                        'tipo' => $row[3]
                    );
                    array_push($list, $lista_user);
                }
            }
        }
        return $list;
    }

    function editUser($id, $nome, $password, $tipo){

        $query = "UPDATE users SET nome = '$nome', password = '$password', tipo = '$tipo' WHERE id = '$id'";
        $link = conecta();

        if($link !== NULL){
            $result = mysqli_query($link, $query);
            return $result;
            
        }else {
            header("Location: ../index.php?erro=banco");
        }

    }
?>