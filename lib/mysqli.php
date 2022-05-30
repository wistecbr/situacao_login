<?php
 function conect(){
    $user = 'root';
    $password = '';
    $database = 'login';
    $host = 'localhost';

    $mysqli = mysqli_connect($host, $user, $password, $database);

    if (mysqli_connect_errno()) {
        return NULL;
    }else {
        return $mysqli;
    }
    }
?>
