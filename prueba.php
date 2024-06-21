<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
                include "./CONTROLLER/conexion.php";
                include "./CONTROLLER/cargar.php";
            
            ?>

        <div class="con">

         


            <form action="" method="post">

                <input type="text" name="nombre" id="nombre">
                <br>
                <input type="text" name="apellido" id=apellido>

                <button type="submit" name="cargar" value="submit">cargar</button>

            </form>
        </div>

    
</body>
</html>