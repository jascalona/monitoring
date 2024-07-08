<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "dpsgv02";

// Create connection
$conexion = mysqli_connect($server, $user, $password, $database);

// Check connection
if (!$conexion) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

?>