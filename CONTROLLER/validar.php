<?php

include "./CONTROLLER/conexion.php";

session_start();

if (!empty($_POST['btn-lg'])) {
    if (!empty($_POST['user']) and !empty($_POST['password'])) {
        

        $user = $_POST['user'];
        $password = $_POST['password'];


        $sql=$conexion->query(" SELECT *FROM user_lg WHERE user='$user' AND password='$password'  ");


        if ($datos=$sql->fetch_object()) {
            $_SESSION["id"]= $datos->id;
            $_SESSION["user"]= $datos->user;
            $_SESSION["name"]= $datos->name;
            $_SESSION["surname"]= $datos->surname;



            header("location: ./panel_gc.php");
        } else {
            echo '<div style="background: rgb(190, 34, 34, 0.542); position: absolute; padding: 10px; margin-top: -66px; margin-left: -75px;" class="alert alert-danger">ACCESO DENEGADO. "COMUNIQUESE CON EL ADMINISTRADOR DE SISTEMA"</div>';
        }
        

    } else {
        echo "DEBE LLENAR LOS CAMPOS";
    }
}

?>