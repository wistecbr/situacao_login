<?php
    
     session_start();

     if(!empty($_POST['login']) && !empty($_POST['password']))
    {
        include('mysql.php');
        $usuario = $_POST['login'];
        $password = ($_POST['password']);
        $senha = md5($password);
        $nome = $_POST['nome'];
        //print_r('Email: ' . $login); teste para  verificar o que estou recebendo
         //print_r('<br>');
         //print_r('Senha: ' . $password);
         //print_r('Senha: ' . $md5Password);

         $query = "SELECT id, login, password FROM users WHERE login = '$usuario' and password = '$senha'";
         $link = conecta();
        if($link !== NULL){
            $result = mysqli_query($link, $query);
 
        //print_r($result);
         //print_r($usuario); teste para verificar o que estou recebendo
         //print_r($query);
         if(mysqli_num_rows($result)<1){
            unset($_SESSION['usuario']); //se não tiver esta variável ele destroi a sessão
            unset($_SESSION['senha']);
            header('Location: ../login.php');
         }else{
            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;
            $_SESSION['nome'] = $nome;
             header('Location: ../bemvindo.php');

         }
        }
     }
  
     
?>
