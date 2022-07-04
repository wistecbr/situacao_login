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
    if(isset($_GET) && isset($_GET['deletar'])){
        $id = (INT) $_GET['deletar'];
        $remove = removeUser($id);
        if($remove === NULL){
            header('Location: ../listagem.php?erro=connection');

        }else if($remove === false){
            header('Location: ../listagem.php?erro=query');

        }else {
            header('Location: ../listagem.php');
        }
    }
    if(isset($_GET) && isset($_GET['editar'])){
        $id = (INT) $_GET['editar'];
        $search_user = found_user($id);
        if($search_user === NULL){
            header('Location: ../listagem.php?erro=connection');
        }else if($search_user === false){
            header('Location: ../listagem.php?erro=query');
        }else{
            $id = $resposta['id'];
            $password = $resposta['modelo'];
            $marca = $resposta['marca'];
            $ano = $resposta['ano'];
            $preco = $resposta['preco'];
            header('Location: ../editar.php?id='.$id. '&modelo='.$modelo. '&ano='.$ano.'&preco='.$preco . '&marca='.$marca);
        }
    if(isset($_POST['nome']) && isset($_POST['username']) && isset($_POST['password']) && isset ($_POST['tipo'])){
        $name = htmlspecialchars($_POST['nome']);
        $username = htmlspecialchars($_POST['username']);
        $password = md5(htmlspecialchars($_POST['password']));
        $typeUser = convertCharToInt($_POST['tipo']);
        cadastrarUser($name, $username, $password,$typeUser);
    }
?>
