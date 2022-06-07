<?php
    include('mysql.php');
     //session_start();

     if(!empty($_POST['login']) && !empty($_POST['password']))
    {
        $usuario = $_POST['login'];
        $password = ($_POST['password']);
        $senha = md5($password);
        //print_r('Email: ' . $login); teste para  verificar o que estou recebendo
         //print_r('<br>');
         //print_r('Senha: ' . $password);
         //print_r('Senha: ' . $senha);
         logar($usuario, $senha);
     }
  
  
     
?>
