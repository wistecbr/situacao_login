<?php

    function logoff(){
        session_start();
        var_dump($_SESSION);
        if(isset($_SESSION['login'])){
            session_unset();
            header('Location: ../index.php');
        }
    }

    function verificaSessao(){
        session_start();
        var_dump($_SESSION);
        if(isset($_SESSION['login']) && $_SESSION['login']['id'] !== 0){
            return (int) $_SESSION['login']['tipo'];
        }else{
            return 0;
        }
    }