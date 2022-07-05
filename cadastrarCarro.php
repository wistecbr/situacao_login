<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assests/css/reset.css">
    <link rel="stylesheet" href="./assests/css/stilo.css">
    <script src="./assests/js/script.js" defer></script>
    <title>Cadastrar Carro</title>
</head>
<body>
    <header>
        <figure>
            <img src="" alt="logo">
        </figure>
        <ul>
            <li> <a href="./">Home</a></li>
            <li><a href="./carros.php">Lista de carros</a></li>
            <li><a href="./cadastro.php">Cadastrar Carro</a></li>
        </ul>
    </header>
    <main>
        <form action="./lib/valida.php" method="post" enctype="multipart/form-data">
            <p>
                <label> Nome: </label>
                <input name="nome" type="text" id="box_nome">
            </p>
            <p>
                <label> Modelo: </label>
                <input name="modelo" type="text" id="box_modelo">
            </p>
            <p>
                <label> Marca: </label>
                <select id="box_marca" name="marca">
                    <option value="1">VOLKSWAGEM</option>
                    <option value="2">CHEVROLET</option>
                    <option value="3">FIAT</option>
                    <option value="4">JEEP</option>
                    <option value="5">RENAULT</option>
                    <option value="6">PEGOUT</option>
                    <option value="7">HYUNDAI</option>
                    <option value="8">TOYOTA</option>
                    <option value="9">HONDA</option>
                    <option value="10">OUTROS</option>
                </select>
            </p>
            <p>
                <label> Ano: </label>
                <input name="ano" type="number" id="box_ano">
            </p>
            <p>
                <label> Valor: </label>
                <input name="preco" type="number" id="box_preco">
            </p>
            <p>
                <label> Vendido: </label>
                <input name="vendido" type="number" id="box_vendido">
            </p>
            <p>
                <input type="submit" value="Cadastrar">
                <input type="button" value="Cancelar" onclick="bt_cancelar()">
            </p>
        </form>
    </main>
    <footer>
    </footer>
</body>
</html>