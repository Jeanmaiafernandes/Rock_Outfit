<?php

require_once ('./app/database.php');

global $loginError;
$loginError = null;

function executarLogin()
{
    global $loginError;

    $email = $_REQUEST['email'];
    $queryConsultaUsuario = "SELECT * FROM clientes WHERE email = '$email'";
    $resultado = executarQuery($queryConsultaUsuario);

    if ($resultado->num_rows === 0) {
        $loginError = 'Nenhum usuário encontrado para o e-mail informado.';
        return;
    }

    $linhaUsuario = $resultado->fetch_assoc();
    $senha = hash('sha256', $_REQUEST['senha']);

    if ($senha !== $linhaUsuario['senha']) {
        $loginError = 'A senha informada não é igual à senha cadastrada.';
        return;
    }

    // @TODO: Registrar usuário na sessão
}

$requestMethod = $_SERVER['REQUEST_METHOD'];
if ($requestMethod === 'POST') {
    executarLogin();
}
