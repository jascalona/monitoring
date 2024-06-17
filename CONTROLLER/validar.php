<?php

include ("./conexion.php");

if (!empty($_POST['btn-lg'])) {
    if (!empty($_POST['email']) and !empty($_POST['password'])) {
        

        $user = $_POST['email'];
        $password = $_POST['password'];


    }
}

?>