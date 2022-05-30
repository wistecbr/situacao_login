<?php

    function loginCompare($loginOficial, $passOficial){

        if($loginOficial === 'admin' && $passOficial === '21232f297a57a5a743894a0e4a801fc3'){

            return 1;
        }
        return 0;
    }
?>