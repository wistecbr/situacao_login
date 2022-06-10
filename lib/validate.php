<?php
    include 'mysql.php';

    // login
    if(isset($_POST['username']) && isset($_POST['password'])){

        $user = htmlspecialchars($_POST['username']);
        $password = md5(htmlspecialchars($_POST['password']));
    
        login($user, $password);
    }
    
    //registerNewUser
    if(isset($_POST['nome']) && isset($_POST['username']) && isset($_POST['password'])){

        $name = htmlspecialchars($_POST['nome']);
        $username = htmlspecialchars($_POST['username']);
        $password = md5(htmlspecialchars($_POST['password']));

        cadastrarUser($name, $username, $password);
    }
?>