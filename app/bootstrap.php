<?php

session_start();

echo '<pre>';
var_dump($_SESSION);
echo '</pre>';

require_once ('app/config.php');
require_once ('app/database.php');

connectToDatabase();