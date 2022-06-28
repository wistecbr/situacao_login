<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Dados</title>
</head>
<body>
    <header>
        <ul>
            <li> <a href="./">Home</a> </li>
            <li> <a href ="./listar.php"</a> listar Cadastrados </li>
            <li> <a href ="./login.php"> Login </a> </li>

        </ul>
    </header>
    <main>
            <p>
                <label> Nome: </label>
                <input name="up_nome" type="text" id="box_nome">
            </p>
            <p>
                <label> Senha: </label>
                <input name="up_password" type="password" id="box_password">
            </p>
            <p>
                <label> Função: </label>
                <select name="up_tipo" id="box_tipo" >
                    <option value="1">Administrador</option>
                    <option value="2">Cliente</option>
                    <option value="3">Funcionário</option>
                </select>
            </p>
    </main>
    <footer>

    </footer>
</body>
</html>