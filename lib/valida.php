<?php
     include('mysql.php');

     if(isset($_POST['login']) && isset($_POST['password'])){
         if(strlen($_POST['login'])== 0){ //verifica se o campo login está zerado sem caracteres
             echo "Preencha seu e-mail";
         }else if(strlen($_POST['password'])== 0){ //verifica se a zero caracteres campo senha
             echo "Preencha sua senha";
         }else{
             $login = $mysqli -> real_escape_string($_POST['login']); //Limpa o campo e-mail
             $password = $mysqli -> real_escape_string($_POST['password']);
 
             //verificar login e senha
             $sql_code = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
             $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
 
             $quantidade = $sql_query->num_rows;
             if( $quantidade == 1){
                 $usuario = $sql_query-> fetch_assoc();
                 //fazer nova sessão
                 if(!isset($_SESSION)){
                     session_start(); //inicia nova sessão
                 }
                 $_SESSION['id']= $usuario['id'];
                 $_SESSION['nome']= $usuario['nome'];
                 header("Location: .bemvindo.php");
             }else{
                 echo "Falha ao logar! Login ou senha incorretos";
             }
 
         }
     }
?>
