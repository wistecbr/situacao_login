<?php
include './lib/utils.php';
    $login = verificaSessao();
    if($login !== 0){
        header('Location: ./bemvindo.php');   
    }else {
        header('Location: ./login.php'); 
    }
?>