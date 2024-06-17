<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "dpsgv02";


$conexion = new mysqli($server, $user, $password, $database);
$conexion->set_charset("utf8");


?>