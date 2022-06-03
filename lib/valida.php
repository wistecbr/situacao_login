<?php
    include('mysql.php');

     if(!empty($_POST['login']) && !empty($_POST['password'])){
        $usuario = $_POST['login'];
        $password = ($_POST['password']);
        $senha = md5($password);
        logar($usuario, $senha);
    }
?>
