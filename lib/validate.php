<?php
    include 'mysql.php';

    if(isset($_POST['username']) && isset($_POST['password'])){

        $user = htmlspecialchars($_POST['username']);
        $password = md5(htmlspecialchars($_POST['password']));
    
        login($user,$password);
    }
    
?>