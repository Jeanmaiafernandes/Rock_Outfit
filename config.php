<?php
function connect()
{
    $con = mysqli_connect(
        '127.0.0.1',
        'rockoutfit',
        'rockoutfit',
        'db',
        '3306');

    if ($con->connect_error) {
        die("Falha na conexão: " . $con->connect_error);
        exit();
    }
    return $con;
}