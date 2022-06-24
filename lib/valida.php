<?php
    include 'mysqli.php';
    if(isset($_POST['username']) && isset($_POST['password'])){
        $user = htmlspecialchars($_POST['username']);
        $password = md5(htmlspecialchars($_POST['password']));
        login($user, $password);
    }
    if(isset($_POST['nome']) && isset($_POST['username']) && isset($_POST['password']) && isset ($_POST['tipo'])){
        $name = htmlspecialchars($_POST['nome']);
        $username = htmlspecialchars($_POST['username']);
        $password = md5(htmlspecialchars($_POST['password']));
        $typeUser = convertCharToInt($_POST['tipo']);

        cadastrarUser($name, $username, $password,$typeUser);
    }
    function convertCharToInt($typeChar){
        switch ($typeChar){
            case '1':
                return 1;
            case '2':
                return 2;
            case '3':
                return 3;
            default:
                return 0;
        }
    }

    if(isset($_GET) && isset($_GET['remover'])){
        $id = (INT) $_GET['remover'];
        $resposta = removeUser($id);
        if($resposta === NULL){
            header('Location: ../listagem.php?erro=connection');
        }else if($resposta === false){
            header('Location: ../listagem.php?erro=query');
        }else {
            header('Location: ../listagem.php');
        }
    }

    if(isset($_GET) && isset($_GET['editar'])){
        $id = (INT) $_GET['editar'];
        $resposta = buscaUser($id);
        if($resposta === NULL){
            header('Location: ../listagem.php?erro=connection');
        }else if($resposta === false){
            header('Location: ../listagem.php?erro=query');
        }else{
            var_dump($resposta);
            $id = $resposta['id'];
            $login = $resposta['login'];
            $nome = $resposta['nome'];
            header('Location: ../editar.php?id='.$id. '&login='.$login. '&nome='.$nome);
        }
    }
?>
