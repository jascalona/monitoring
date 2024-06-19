<?php

if (!empty($_POST['btnCarga'])) {
    if (!empty($_POST['name']) and !empty(($_POST['surname']) and !empty($_POST['CI']) AND !empty($_POST['email']) and !empty($_POST['date']) and !empty($_POST['time']) and !empty($_POST['location']))) {
        
        /*VARIABLES*/
        $name = $_POST['name'];
        $surname = $_POST['$surname'];
        $CI = $_POST['CI'];
        $email = $_POST['email'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $location = $_POST['location'];


        $sql = $conexao->query(" INSERT INTO repositorio (name,surname,CI,email,date,time,location) VALUE('$name','$surname','$CI','$email','$date','$time','$location') ");
        if ($sql==1) {
            echo '<script> alert("Su asistencia se cargo con exito")</script>';
        }

    }
}


?>