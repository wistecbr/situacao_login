<?php

$usuario = 'root';
$senha = '';
$database = 'situacao_login';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli -> error){
    die("Falha ao conectar banco de dados!!!" . $mysqli->error);
}

?>