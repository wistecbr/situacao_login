<?php
 function conecta() {
    $user = 'root';
    $password = '';
    $database = 'situacao_login';
    $host = 'localhost';

    $mysqli = mysqli_connect($host, $user, $password, $database);

    if (mysqli_connect_errno()) {
        return NULL;
    }else {
        return $mysqli;
    }
    }
?>