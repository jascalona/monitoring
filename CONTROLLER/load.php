<?php

if (!empty($_POST['btn-load'])) {
    if (!empty($_POST['name']) and !empty($_POST['surnmae']) and !empty($_POST['ci']) and !empty($_POST['email']) and !empty($_POST['date']) and !empty($_POST['time']) and !empty($_POST['location'])){

        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $ci = $_POST['ci'];
        $email = $_POST['email'];
        $date = $_POST['date'];
        $file = $_POST['time'];


        $sql = $conexion->query(" insert into repositorio(name,surname,ci,email,date,time,location)values('$name','$surname','$ci','$email','$date', '$time', '$location')");
        if ($sql==1) {
            echo '<div style="margin-left: 470px; position: absolute;" class="alert alert-success">LA CARGA SE REALIZO CORRECTAMENTE</div>';
        } else {
            echo '<div style="margin-left: 470px; position: absolute;" class="alert alert-danger">ERROR DE CONEXION COD: 10231514</div>';
        }
        
    } else{
        echo '<div style="margin-left: 207px; position: absolute;" class="alert alert-warning">DEBE LLENAR LOS CAMPOS VACIOS</div>';
    }

}

?>