<?php
    $lista = [];
    $users = array('id' => '1', 'login' => 'Bia', 'nome' => 'Bianca');
    array_push($lista, $users);
    $users = array('id' => '2', 'login' => 'admin', 'nome' => 'admin');
    array_push($lista, $users);

    function exportaLista(){
        return $GLOBALS['lista'];
    }
?>
