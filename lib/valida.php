<?php
        function login($user, $password){

            if($usuarioOficial === 'admin' && $passOficial === '553c4a7cc063f5667404db3037e30ba9'){
                header('Location: ./bemvindo.php');
            }else{
                header('Location: ./login.php?login=erro');
        }
    }
?>
