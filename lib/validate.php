<?php
    include 'mysql.php';

    // login
    if(isset($_POST['username']) && isset($_POST['password'])){

        $user = htmlspecialchars($_POST['username']);
        $password = md5(htmlspecialchars($_POST['password']));
    
        login($user, $password);
    }
    
    //registerNewUser
    if(isset($_POST['nome']) && isset($_POST['username']) && isset($_POST['password']) && isset ($_POST['tipo'])){

        $name = htmlspecialchars($_POST['nome']);
        $username = htmlspecialchars($_POST['username']);
        $password = md5(htmlspecialchars($_POST['password']));
        $typeUser = convertCharToInt($_POST['tipo']);// this can work too, using int($_POST['tipo'])

        cadastrarUser($name, $username, $password,$typeUser);
    }
    // criar uma função para converter char para inteiro
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

    if(isset($_GET) && isset($_GET['deletar'])){ // Com a função GET que vem la do js 
        // se obtém o id que é passado como parâmetro e salva dentro da variável id

        $id = (INT) $_GET['deletar'];
        $remove = removeUser($id);

        if($remove === NULL){
            header('Location: ../listar.php?erro=connection'); 

        }else if($remove === false){
            header('Location: ../listar.php?erro=query');

        }else {
            header('Location: ../listar.php'); 
        }
    }

    if(isset($_GET) && isset($_GET['editar'])){
        
        $id = (INT) $_GET['editar'];
        $search_user = found_user($id);

        if($search_user === NULL){
            header('Location: ../listar.php?erro=connection'); 

        }else if($search_user === false){
            header('Location: ../listar.php?erro=query');

        }else {
            $id = $resposta['id'];
            $password = $resposta['modelo'];
            $marca = $resposta['marca'];
            $ano = $resposta['ano'];
            $preco = $resposta['preco'];
            // sucesso redirecionar para a lista.
            header('Location: ../editar.php?id='.$id. '&modelo='.$modelo. '&ano='.$ano.'&preco='.$preco . '&marca='.$marca); 
        }
    }
    if(isset($_POST['nome']) && isset($_POST['username']) && isset($_POST['password']) && isset ($_POST['tipo'])){

        $name = htmlspecialchars($_POST['nome']);
        $username = htmlspecialchars($_POST['username']);
        $password = md5(htmlspecialchars($_POST['password']));
        $typeUser = convertCharToInt($_POST['tipo']);// this can work too, using int($_POST['tipo'])

        cadastrarUser($name, $username, $password,$typeUser);
    }
?>  
