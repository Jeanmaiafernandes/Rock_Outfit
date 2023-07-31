<?php
require_once('config.php');
$con = connect();
var_dump($_SERVER['REQUEST_METHOD']);

// consultar o banco de dados pra obter o usuario com o email informado na request

$requestMethod = $_SERVER['REQUEST_METHOD'];
if ($requestMethod === 'POST') {
    var_dump($_REQUEST);

    $query = "SELECT email, senha FROM clientes WHERE email = '$_REQUEST'";
    $result = $con->query($query);
    if (!$result) {
        die("Erro na consulta: ". $con->error);
    }
    echo '<pre>';
    var_dump($result);
    echo '</pre>';

    if ($result < 0) {
    }
    // se a query nao retornar nada = nao tem usuario com esse email
    // compara a senha que o usuario informou no login com a do registro do banco
}
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RockOutfit</title>
</head>
<body>
    <h1>Formulário de Cadastro</h1>
    <form action="/login.php" method="post">
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
        <br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
