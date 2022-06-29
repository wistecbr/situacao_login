<?php
    include 'mysql.php';
    
    // Post de cadastro
    if(isset($_POST['nome']) && isset($_POST['login']) && isset($_POST['password']) && isset ($_POST['tipo'])){
        
        $name = htmlspecialchars($_POST['nome']);
        $username = htmlspecialchars($_POST['login']);
        $password = md5(htmlspecialchars($_POST['password']));
        $typeUser = (int)($_POST['tipo']);

         cadastrarUser($name, $username, $password,$typeUser);
    }

    // Post de edição
    if(isset($_POST['nome']) && isset($_POST['login']) && isset ($_POST['tipo'])){
        $name = htmlspecialchars($_POST['nome']);
        $login = htmlspecialchars($_POST['login']);
        $typeUser = (int)($_POST['tipo']);

        $id = (int)($_POST['id']);
        editUser($id,$name,$login,$typeUser);

    }

    // post de login
    if(isset($_POST) && isset($_POST['login']) && isset($_POST['password']) ){
        $login = htmlspecialchars($_POST['login']);
        $password = md5(htmlspecialchars($_POST['password']));
        verificaLogin($login, $password);
    }

    // GET delete
    if(isset($_GET) && isset($_GET['deletar']) && isset($_GET['id'])){
        $id = (int) $_GET['id'];
        $tabela = $_GET['deletar'];
        
        deletePeloId($tabela, $id);
    }


?>