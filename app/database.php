<?php

require_once ('./app/config.php');

global $connection;
function connectToDatabase()
{
    global $globalConfiguration;
    global $connection;

    try {
        $connection = mysqli_connect(
            $globalConfiguration['database']['hostname'],
            $globalConfiguration['database']['username'],
            $globalConfiguration['database']['password'],
            $globalConfiguration['database']['database']
        );

        // verificação de login no banco.
        if ($connection->connect_error) {
            throw new Exception('Erro ao conectar-se ao banco de dados: '. $connection->connect_error);
        }
    } catch (Exception $e) {
        die('Erro ao conectar-se ao banco de dados: '. $e->getMessage());
    }
}
// função de verificação de consulta no banco.
function executarQuery(string $query): mysqli_result|bool
{
    global $connection;

    $result = $connection->query($query);
    if (!$result) {
        die('Erro ao executar consulta ao banco de dados: ' . $connection->error);
    }

    return $result;
}