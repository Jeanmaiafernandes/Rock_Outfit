<?php

require_once ('app/database.php');

global $categoriaError;
$categoriaError = null;

function executarCatalogo ()
{
    global $categoriaError;

    $id = $_REQUEST['id'];
    $queryConsultaCategoria = "SELECT * FROM categorias WHERE id = '$id'";
    $resultado = executarQuery($queryConsultaCategoria);

    if ($resultado->num_rows === 0) {
        $categoriaError = 'Nenhuma categoria encontrado para o id informado.';
        return;
    }
}

function buscaSubCatalogo() 
{
    global $categoriaError;
 
    $idPai = $_REQUEST['id_categoria_pai'];
    $queryConsultaCategoria = "SELECT * FROM categorias WHERE id = '$idPai'";
    $resultado = executarQuery($queryConsultaCategoria);

    if ($resultado->num_rows === 0) {
        $categoriaError = 'Nenhuma subcategoria encontrado para o id informado.';
        return;
    }
}
