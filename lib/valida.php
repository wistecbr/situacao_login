<?php
    include 'mysql.php';
    session_start();
    
    if(isset($_POST['nome']) && isset($_POST['login']) && isset ($_POST['tipo'])){
        $name = htmlspecialchars($_POST['nome']);
        $login = htmlspecialchars($_POST['login']);
        $typeUser = (int)($_POST['tipo']);

        $id = (int)($_POST['id']);
        editUser($id,$name,$login,$typeUser);
    }
    if(isset($_POST) && isset($_POST['login']) && isset($_POST['password']) ){
        $login = htmlspecialchars($_POST['login']);
        $password = md5(htmlspecialchars($_POST['password']));
        verificaLogin($login, $password);
    }
    if(isset($_GET) && isset($_GET['cadastra'])){
        $cadastra = $_GET['cadastra'];
        if($cadastra === 'marca' && isset($_POST) && isset($_POST['nomeMarca'])){
            $marca = htmlspecialchars($_POST['nomeMarca']);
            cadastraMarca($marca);
        }
        if($cadastra === 'user' && isset($_POST['nome']) && isset($_POST['login']) && isset($_POST['password']) && isset ($_POST['tipo'])){
            $name = htmlspecialchars($_POST['nome']);
            $username = htmlspecialchars($_POST['login']);
            $password = md5(htmlspecialchars($_POST['password']));
            $typeUser = (int)($_POST['tipo']);

            cadastrarUser($name, $username, $password,$typeUser);
        }
    }
    if(isset($_GET) && isset($_GET['deletar']) && isset($_GET['id'])){
        $id = (int) $_GET['id'];
        $tabela = $_GET['deletar'];
        deletePeloId($tabela, $id);
    }
    if(isset($_GET) && isset($_GET['logout'])){
        session_unset();
        header("Location: ../");
}
