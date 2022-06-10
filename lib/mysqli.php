<?php
    require __DIR__. '/../vendor/autoload.php';

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__. '/../');
    $dotenv->load();

    $host = $_ENV['HOST'];
    $userDb = $_ENV['USER'];
    $passwordDb = $_ENV['PASSWORD'];
    $database = $_ENV['DATABASE'];

    function conecta(){
        $userDb = $GLOBALS['userDb'];
        $passwordDb = $GLOBALS['passwordDb'];
        $database = $GLOBALS['database'];
        $host = $GLOBALS['host'];
        $mysqli = mysqli_connect($host, $userDb, $passwordDb, $database);

    if (mysqli_connect_errno()){
        return NULL;
    }else{
        return $mysqli;
    }
}
    function logar($usuario, $senha){
          $query = "SELECT id, login, nome, tipo FROM users WHERE login = '$usuario' and password = '$senha'";
          $link = conecta();
          if($link !== NULL){
              $result = mysqli_query($link, $query);

          if(mysqli_num_rows($result)<1){
              header('Location: ../login.php?erro=query');
          }else{
              while($row = mysqli_fetch_row($result)){
                  $login = array(
                      'id' => $row[0],
                      'login' => $row[1],
                      'nome' => $row[2],
                      'tipo' => $row[3]);

                $nome = $login['nome'];
                $id = $login['id'];
                }
        header("Location: ../bemvindo.php?username=$nome");
        }
        }else{
            header('Location: ../login.php?erro=banco');
        }
    }
    function cadastrarUser($nome, $user, $password){
       $query = "INSERT INTO users (nome, login, password) values ('" . $nome . "', '" . $user . "', '" . $password . "');";
       $link = conecta();
       if($link !== NULL){
           $result = mysqli_query($link, $query);
           return $result;
       }else {
           return NULL;
       }
   }
?>
