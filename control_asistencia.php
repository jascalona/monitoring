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

<?php 
include "./CONTROLLER/conexion.php";
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
                    <li><a href="control_cuentas.php"><i style="color: #09bfdf;" class='bx bxs-contact'></i>Control de Cuentas</a></li>
                    <li><a href="./registro.php"><i style="color: #2F35AF;" class='bx bxs-server' ></i>Registros</a></li>
                    <li></li>
                </ul>
            
            </nav>
        </header>



        <?php
        
        include "./CONTROLLER/load.php";
        ?>


        <div class="carga-modal">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Cargar Asistencia</button>
        
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Control de Asistencias</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                    
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">CI</label>
                        <input type="number" class="form-control" id="CI" name="CI" placeholder="Ingrese su Documento de identidad Ejem. 30836440 ">
                    </div>


                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nombre</label>
                        <input type="text" class="form-control" id="recipient-name" placeholder="Ingrese su Nombre">
                    </div>


                    <!--
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                    -->

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Apellido</label>
                        <input type="text" class="form-control" id="recipient-name" placeholder="Ingrese su Apellido">
                    </div>


                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Email</label>
                        <input type="text" class="form-control" id="recipient-name" placeholder="Ingrese su Email Ejem. example@grupoxvne.com">
                    </div>


                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Fecha</label>
                            <?php
                                date_default_timezone_set('America/Caracas');
                                $current_date=date("Y-m-d");
                            ?>

                        <input type="date" disabled class="form-control" id="recipient-name" value="<?php echo $current_date?>">
                    </div>


                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Hora de Ingreso</label>
                            <?php
                                date_default_timezone_set('America/Caracas');
                                $current_time=date("H:i:s");
                            ?>

                        <input type="time" disabled class="form-control" id="recipient-name" value="<?php echo $current_time?>">
                    </div>


                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Localidad</label>
                        <input type="text" class="form-control" id="recipient-name" placeholder="Localidad">
                    </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" name="btnCarga" value="ok" >Cargar Asistencia</button>
                    </div>
                </div>
            </div>
            </div>
        </div>




        <div class="container-tables">
            <table class="table table-sm" >    
                    
                    <thead class="bg-info">
                        <tr>
                            <th class="col">Nombre</th>
                            <th class="col">Apellido</th>
                            <th class="col">CI</th>
                            <th class="col">Email</th>
                            <th class="col">Fecha</th>
                            <th class="col">Tiempo</th>
                            <th class="col">Localidad</th>
                        </tr>
                
                    </thead>
                    <tbody>

                
                        <?php
                        include "./CONTROLLER/conexion.php";
                        
                        $sql=$conexion->query(" select *from repositorio ");
                        while($datos = $sql->fetch_object()){ 
                            ?>
                
                            <tr>
                                <td><?= $datos->name?></td>
                                <td><?= $datos->surname?></td>
                                <td><?= $datos->CI?></td>
                                <td><?= $datos->email?></td>
                                <td><?= $datos->date?></td>
                                <td><?= $datos->time?></td>
                                <td><?= $datos->location?></td>
                            </tr>
                
                            <?php
                            
                            }
                            ?>
                    </tbody>
                    </table>
            
</body>
</html>