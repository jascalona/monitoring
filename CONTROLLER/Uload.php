<?php

if (!empty($_POST['carga'])) {
    if (!empty($_POST['ci']) and !empty($_POST['name']) and !empty($_POST['surname']) and !empty($_POST['email']) and !empty($_POST['date']) and !empty($_POST['time']) and !empty($_POST['location'])) {

        $ci = $_POST['ci'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $location = $_POST['location'];


    $sql = $conexion->query("  INSERT INTO Uload (ci,name,surname,email,date,time,location)VALUES('$ci','$name','$surname','$email','$date','$time','$location') ");
        if ($sql==1) {
            echo '';
        } else {
            echo '<div style="margin-left: 470px; position: absolute;" class="alert alert-danger">ERROR DE CONEXION COD: 10231514</div>';
        }
    
    } else {
        echo '<div style="margin-left: 207px; position: absolute;" class="alert alert-warning">DEBE LLENAR LOS CAMPOS VACIOS</div>';
    }
}

mysqli_close($conexion)

?>