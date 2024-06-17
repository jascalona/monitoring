<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/monitoring//CSS/log.css">
    <title>Login_Monitoring</title>
</head>
<body>




        <div class="container">


            <div class="container-lg">
                <form action="" method="POST">

                <div class="inputs">

                        <h5>Iniciar Sesion</h5>
                        <br>


                        <?php
                        include "./CONTROLLER/validar.php";
                        ?>

                        <input type="email" name="user" id="user" placeholder="Ingrese su Correo" required>
                        <br>
                        <input type="password" name="password" id="password" placeholder="Ingrese su Clave" required>
                    </div>

                    <div class="btn">
                        <button name="btn-lg" id="btn-lg" type="submit"><a href="">Ingresar</a></button>
                    </div>
                </form>
            </div>

        </div>

</body>
</html>