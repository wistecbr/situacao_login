<?php
    include('mysql.php');

     if(!empty($_POST['login']) && !empty($_POST['password'])){
        $usuario = $_POST['login'];
        $password = ($_POST['password']);
        $senha = md5($password);
        logar($usuario, $senha);
    }
    if(isset($_POST['nome']) && isset($_POST['username']) && isset($_POST['password'])){

       $name = htmlspecialchars($_POST['nome']);
       $username = htmlspecialchars($_POST['username']);
       $password = md5(htmlspecialchars($_POST['password']));

       cadastrarUser($name, $username, $password);
   }
?>
