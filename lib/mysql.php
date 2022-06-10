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
    function cadastrarUser($nome, $user, $password){
        $query = "INSERT INTO users (nome, login, password) values ('" . $nome . "', '" . $user . "', '" . $password . "');";
        $link = conecta();
        if($link !== NULL){
            $result = mysqli_query($link, $query);
            return $result;
        }else {
            return NULL;
        }
    }
?>