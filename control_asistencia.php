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
    <link rel="stylesheet" href="http://localhost/monitoring//CSS/style.css">
    <title>Control de Asistencia</title>

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
                <li><a href=""><i style="color: #09bfdf;" class='bx bxs-contact'></i>Control de Cuentas</a></li>
                <li><a href=""><i style="color: #2F35AF;" class='bx bxs-server' ></i>Registros</a></li>
                <li></li>
            </ul>
        
        </nav>
    </header>




    <div class="carga-modal">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Open modal for @mdo</button>
    
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Recipient:</label>
                    <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                    <label for="message-text" class="col-form-label">Message:</label>
                    <textarea class="form-control" id="message-text"></textarea>
                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send message</button>
            </div>
            </div>
        </div>
        </div>
    </div>



    <div class="container-tables">
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">CI</th>
            <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
            </tr>
        </tbody>
        </table>
    </div>


        
</body>
</html>