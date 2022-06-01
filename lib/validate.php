<?php
<<<<<<< HEAD
    include './mysql.php';
=======
    include 'mysql.php';
>>>>>>> cda8ef66abc1620d387b463b7d3e5ed5e9c3ae9d

    if(isset($_POST['username']) && isset($_POST['password'])){

        $user = htmlspecialchars($_POST['username']);
        $password = md5(htmlspecialchars($_POST['password']));
    
        login($user,$password);
    }
    
?>