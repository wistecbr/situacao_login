<?php
    require __DIR__.'/../vendor/autoload.php';// Pega o arquivo dentro da pasta vendor
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
    $dotenv->load();


    //$s3_bucket = $_ENV['S3_BUCKET'];
    $host = $_ENV['HOST'];
    $userDb = $_ENV['USER'];
    $password = $_ENV['PASSWORD'] ;
    $database = $_ENV['DATABASE'];

    function conecta() {

        //$s3_bucket = getenv('S3_BUCKET');

        $host = $GLOBALS['host'];
        $userDb = $GLOBALS['userDb'];
        $password = $GLOBALS['password'] ;
        $database = $GLOBALS['database'];

        $mysqli = mysqli_connect($host, $userDb, $password, $database);

        if (mysqli_connect_errno()) {
            return NULL;
        }else {
            return $mysqli;
        }
    }
    function login($user,$password){

        $query = "SELECT id, login, password FROM users WHERE login = '$user' and password = '$password'";
        $link = conecta();

        if($link !== NULL){
            $result = mysqli_query($link, $query);
        }
        if($result){
            print_r("Logado com sucesso");
        }else{
            print_r("Erro ao realizar o login");
        }

    }
?>