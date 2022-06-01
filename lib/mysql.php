<?php
require __DIR__. '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__. '/../');
$dotenv->load();

$host = $_ENV['HOST'];
$user = $_ENV['USER'];
$password = $_ENV['PASSWORD'];
$database = $_ENV['DATABASE'];



 function conecta() {
    $user = $GLOBALS['user'];
    $password = $GLOBALS['password'];
    $database = $GLOBALS['database'];
    $host = $GLOBALS['host'];

    $mysqli = mysqli_connect($host, $user, $password, $database);

    if (mysqli_connect_errno()) {
        return NULL;
    }else {
        return $mysqli;
    }
    }

    function logar($usuario, $senha){
        $query = "SELECT id, login, password nome FROM users WHERE login = '$usuario' and password = '$senha'";
         $link = conecta();
        if($link !== NULL){
            $result = mysqli_query($link, $query);
 
        //print_r($result);
         //print_r($usuario); teste para verificar o que estou recebendo
         //print_r($query);
         if(mysqli_num_rows($result)<1){
            //unset($_SESSION['usuario']); //se não tiver esta variável ele destroi a sessão
            //unset($_SESSION['senha']);
            header('Location: ../login.php');
         }else{
            //$_SESSION['usuario'] = $usuario;
            //$_SESSION['senha'] = $senha;
            //$_SESSION['nome'] = $nome;
             header('Location: ../bemvindo.php?username=$nome');

         }
        }
    }
?>