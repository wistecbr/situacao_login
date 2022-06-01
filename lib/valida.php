<?php
    
     //session_start();

     if(!empty($_POST['login']) && !empty($_POST['password']))
    {
        include('mysql.php');
        $usuario = $_POST['login'];
        $password = ($_POST['password']);
        $senha = md5($password);
        //$nome = $_POST['nome'];
        //print_r('Email: ' . $login); teste para  verificar o que estou recebendo
         //print_r('<br>');
         //print_r('Senha: ' . $password);
         print_r('Senha: ' . $md5Password);

         
     }
  logar($usuario, $senha);
  
     
?>
