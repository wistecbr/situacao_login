<?php
    function conecta() {

        $host ='localhost';
        $user = 'root';
        $password ='' ;
        $database = 'users';

        $mysqli = mysqli_connect($host, $user, $password, $database);

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