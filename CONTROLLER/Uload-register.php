<?php

if (!empty($_POST['btn-uload'])) {
    if (!empty($_POST['ci']) and !empty($_POST['name']) and !empty($_POST['surname']) and !empty($_POST['customer']) 
    and !empty($_POST['email']) and !empty($_POST['password']) and !empty($_POST['roll']) and !empty($_POST['location'])) {
        
        $ci = $_POST['ci'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $customer = $_POST['customer'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $roll = $_POST['roll'];
        $location = $_POST['location'];


    $sql = $conexion->query(" INSERT INTO user_lg (ci,name,surname,customer,email,password,roll,location)VALUES('$ci','$name','$surname','$customer','$email','$password','$roll','$location') ");
        if ($sql==1) {
            echo '<div class="alert alert-success" role="alert">Su Registro fue Exito!</div>';
        } else {
            echo '<div class="alert alert-danger" role="danger">Error de Conexion, Comuniquese con el Administrador de Sistema!</div>';
        }
        
    } else {
        echo '<div class="alert alert-warning" role="warning">Debe llenar los Campos Vacios</div>';
    }
}

?>