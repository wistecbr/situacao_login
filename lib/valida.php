<?php
     login();
     if(!empty($_POST['login']) && !empty($_POST['password']))
    {
        include('mysql.php');
        $usuario = $_POST['login'];
        $password = ($_POST['password']);
        $senha = md5($password);
        $nome = $_POST['nome'];

         $query = "SELECT id, login, password FROM users WHERE login = '$usuario' and password = '$senha'";
         $link = conect();
         if($link !== NULL){
                $result = mysqli_query($link, $query);
         if(mysqli_num_rows($result)<1){
            unset($_SESSION['usuario']);
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
