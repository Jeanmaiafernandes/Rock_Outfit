<?php

require_once ('./app/config.php');

global $connection;

function connectToDatabase()
{
    global $globalConfiguration;
    global $connection;

    $connection = mysqli_connect(
        $globalConfiguration['database']['hostname'],
        $globalConfiguration['database']['username'],
        $globalConfiguration['database']['password'],
        $globalConfiguration['database']['database']
    );

    if ($connection->connect_error) {
        die('Erro ao conectar-se ao banco de dados: ' . $connection->connect_error);
    }
}
function executarQuery(string $query): mysqli_result
{
    global $connection;

    $result = $connection->query($query);
    if (!$result) {
        die('Erro executar consulta ao banco de dados: ' . $connection->error);
    }

    return $result;
}