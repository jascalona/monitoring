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
                <form action="" method="POST">
                    <div class="container-lg">
                        <h5>Inicar Sesion</h5>

                        <?php
                        include "./CONTROLLER/validar.php"

                        ?>                    


                        <div class="inputs">
                            <input type="email" name="user" id="user" placeholder="Ingrese su Usuario" required>
                            <br>
                            <br>
                            <input type="password" name="password" id="password" placeholder="Clave de Intranet" required>
                        </div>
                    
                        <div class="btn">
                            <button name="btn-i" type="submit" value="submit"><a href="">Ingresar</a></button>
                        </div>
                    </>
                </form>

</body>
</html>