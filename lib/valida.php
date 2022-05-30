<?php
     include('mysql.php');

     if(isset($_POST['login']) && isset($_POST['password'])){
         if(strlen($_POST['login'])== 0){ //verifica se o campo login está zerado sem caracteres
             echo "Preencha seu e-mail";
         }else if(strlen($_POST['password'])== 0){ //verifica se a zero caracteres campo senha
             echo "Preencha sua senha";
         }else{
            $login = htmlspecialchars($_POST['login']);
            $password = md5(htmlspecialchars($_POST['password']));
          
            
     }
     }
  
     function valida_login($login, $password) {
        $query = 'SELECT login, password FROM users WHERE login =' .$login . 'password =' .$password  .' LIMIT 1;';           
        $link = conecta();
        if($link !== NULL){
            $result = mysqli_query($link, $query);
            if($result){
               if ($_POST['login'] ==$login && $_POST['password']== $password){
               var_dump($_POST['login']);
                
                header("Location: ./bemvindo.php");
            }
            }
                echo "Falha ao logar! Login ou senha incorretos";
            
                }}
    
?>
