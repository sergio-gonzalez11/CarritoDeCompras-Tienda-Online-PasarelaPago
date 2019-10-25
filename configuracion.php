<?php
//DB details
$dbHost = 'localhost';
$dbUsername = 'carta';
$dbPassword = 'carta';
$dbName = 'carta';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("No hay Conexion con la base de datos: " . $db->connect_error);
} 

if (!$db->set_charset("utf8")) {
       die("Error cargando el conjunto de caracteres utf8");
}

?>