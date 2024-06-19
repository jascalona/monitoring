<?php
session_start();
if (!empty($_SESSION["CI"])) {
    header("./index.php");
}else{
    if ((time() - $_SESSION['time']) > 40) {
        header("location: ./index.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring</title>
    <link rel="stylesheet" href="./CSS/style.css">


    <!--BOX-ICONS-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--BOX-ICONS-->

    <!--FRAMEWORK BOOTSTRAP-->
    <link rel="stylesheet" href="./CSS/FRAMEWORK/bootstrap.css">
    <script src="./JS/bootstrap.js"></script>
    <!--FRAMEWORK BOOTSTRAP-->



</head>
<body>
    
        <header class="header">
        
            <div class="logo">
                <p>XDV</p>

            <div class="btn-sesion">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    
                    <?php
                    echo $_SESSION["name"];
                    ?>

                    </button>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="./CONTROLLER//close.php">Cerrar Sesion</a></li>
                    </ul>
                </div>
            </div>
        </div>
        


            <nav>
                <ul class="nav-link">
                    <li><a href="./panel.php"><i style="color: #1EE08E;" class='bx bxs-dashboard'></i>Dashboard</a></li>
                    <li><a href="./control_asistencia.php"><i style="color: #f60551;" class='bx bx-task'></i>Control de Asistencias</a></li>
                    <li><a href="./control_cuentas"><i style="color: #09bfdf;" class='bx bxs-contact'></i>Control de Cuentas</a></li>
                    <li><a href="./registro.php"><i style="color: #2F35AF;" class='bx bxs-server' ></i>Registros</a></li>
                    <li></li>
                </ul>
            
            </nav>
        </header>
        

</body>
</html>