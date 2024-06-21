<?php

if (!empty($_POST['cargar'])) {
    if (!empty($_POST['nombre']) and !empty($_POST['apellido'])) {
        

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];


        $sql =  $conexion->query(" INSERT INTO prueba (nombre,apellido)VALUES('$nombre','$apellido') ");
        if ($sql==1) {
            echo '<div style="margin-left: 470px; position: absolute;" class="alert alert-success">LA CARGA SE REALIZO CORRECTAMENTE</div>';
        }  else {
            echo '<div style="margin-left: 470px; position: absolute;" class="alert alert-danger">ERROR DE CONEXION COD: 10231514</div>';
        } 
        
    } else {
        echo '<div style="margin-left: 207px; position: absolute;" class="alert alert-warning">DEBE LLENAR LOS CAMPOS VACIOS</div>';

    }
}


?>