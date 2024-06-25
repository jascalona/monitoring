<?php

include "./CONTROLLER/conexion.php";

session_start();

if (!empty($_POST['btn-i'])) {
    if (!empty($_POST['user']) and !empty($_POST['password'])) {
        

        $user = $_POST['user'];
        $password = $_POST['password'];


        $sql=$conexion->query(" SELECT *FROM user_lg WHERE email='$user' AND password='$password'  ");


        if ($datos=$sql->fetch_object()) {
            $_SESSION["CI"]= $datos->CI;
            $_SESSION["user"]= $datos->user;
            $_SESSION["name"]= $datos->name;
            $_SESSION["surname"]= $datos->surname;
            $_SESSION["customer"]= $datos->customer;
            $_SESSION["email"]= $datos->email;
            $_SESSION["roll"]= $datos->roll;



            header("location: ./panel.php");
        } else {
            echo '<div style="background: rgb(211, 6, 47); padding: 20px; position: absolute; margin-top: -200px; font-size: 12px; display: flex; margin-left: -100px;" class="alert alert-danger">ACCESO DENEGADO. "COMUNIQUESE CON EL ADMINISTRADOR DE SISTEMA"</div>';
        }
        

    } else {
        echo "DEBE LLENAR LOS CAMPOS";
    }
}

?>