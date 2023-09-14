<?php
session_start();
function executarDeslogar()
{
    unset($_SESSION['usuarioLogado']);
    header('Location: /');
}

executarDeslogar();