<?php

require_once ('./app/database.php');

global $registrarError;
$registrarError = null;

global $registrarSucessoMensagem;
$registrarSucessoMensagem = null;

function executarRegistro()
{
    if (!verificarConfirmacaoSenha()) {
        return;
    }
    if (!verificarRegistro()) {
        return;
    }
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = hash('sha256', $_REQUEST['senha']);

    global $registrarError;
    global $registrarSucessoMensagem;
    global $connection;

    $registrarUsuario = "INSERT INTO clientes (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    $resultado = executarQuery($registrarUsuario);

    if ($resultado === true) {
        $registrarSucessoMensagem = 'Usuário cadastrado com sucesso.';
    } else {
        $registrarError = 'Erro ao cadastrar usuário: ' . mysqli_error($connection);
    }

}
function verificarConfirmacaoSenha(): bool
{
    $confirmacao_senha = $_POST["confirmacao_senha"];
    $senha = $_POST["senha"];
    global $registrarError;
    global $connection;

    if ($senha !== $confirmacao_senha) {
        $registrarError = 'As senhas não coincidem. Por favor, tente novamente: ' . mysqli_error($connection);
        return false;
    }
    return true;
}

// função de verificar registro consultando banco de dados.
function verificarRegistro(): bool {
    global $registrarError;
    $email = $_REQUEST['email'];
    $queryConsultaUsuario = "SELECT * FROM clientes WHERE email = '$email'";
    $resultado = executarQuery($queryConsultaUsuario);

    if ($resultado->num_rows >= 1) {
        $registrarError = 'Usuário já registrado.';
        return false;
    }

    return true;
}

$requestMethod = $_SERVER['REQUEST_METHOD'];
if ($requestMethod === 'POST') {
   executarRegistro();
}