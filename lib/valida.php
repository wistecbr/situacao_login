<?php
    include 'mysql.php';

    // login
    if(isset($_POST['username']) && isset($_POST['password'])){

        $user = htmlspecialchars($_POST['username']);
        $password = md5(htmlspecialchars($_POST['password']));

        login($user, $password);
    }

    //registerNewUser
    if(isset($_POST['nome']) && isset($_POST['username']) && isset($_POST['password']) && isset ($_POST['tipo'])){

        $name = htmlspecialchars($_POST['nome']);
        $username = htmlspecialchars($_POST['username']);
        $password = md5(htmlspecialchars($_POST['password']));
        $typeUser = convertCharToInt($_POST['tipo']);// this can work too, using int($_POST['tipo'])

        cadastrarUser($name, $username, $password,$typeUser);
    }
    // criar uma função para converter char para inteiro
    function convertCharToInt($typeChar){

        switch ($typeChar){
            case '1':
                return 1;
            case '2':
                return 2;
            case '3':
                return 3;
            default:
                return 0;
        }
    }
?>
