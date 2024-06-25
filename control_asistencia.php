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
    <title>Control de Asistencia</title>

  <!--CSS STYLES-->
  <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/conf.css">
    <link rel="stylesheet" href="./CSS/responsive.css">
    <link rel="stylesheet" href="./CSS/FRAMEWORK/bootstrap.css">
    <!--CSS STYLES-->

    <!--BOX-ICONS-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--BOX-ICONS-->

    <!--FRAMEWORK BOOTSTRAP-->
    <script src="./JS/FRAMEWORK/bootstrap.js"></script>
    <script src="./JS/FRAMEWORK/jquery.js"></script>
    <script src="./JS/FRAMEWORK/bootstrap_ii.js"></script>
    <!--FRAMEWORK BOOTSTRAP-->
    
</head>
<body class="sub_page">

       
  <div style="background: #212F3D;" class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">

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
            

          <div class="navbar-collapse" id="">
            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <span class="s-1"> </span>
                <span class="s-2"> </span>
                <span class="s-3"> </span>
              </button>
            </div>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="panel.php">Panel</a>
                <a href="./control_asistencia.php">Control de Asistencias</a>
                <a href="./control_cuentas.php">Control de Cuentas</a>
                <a href="./registro.php">Registros</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    


    


        <?php
            include "./CONTROLLER/conexion.php";
            include "./CONTROLLER/Uload.php";

        ?>



        <div class="carga-modal">
        


            <form action="" method="post">

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Cargar Asistencia</button>
        
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Control de Asistencias</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">CI</label>
                        <input type="number" name="ci" id="ci" class="form-control" placeholder="Ingrese su Documento de identidad Ejem. 30836440 " required>
                    </div>


                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nombre</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Ingrese su Nombre" required>
                    </div>


                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Apellido</label>
                        <input type="text" name="surname" id="surname" class="form-control" placeholder="Ingrese su Apellido" required>
                    </div>


                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Email</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Ingrese su Email Ejem. example@grupoxvne.com" required>
                    </div>


                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Fecha</label>
                            <?php
                                date_default_timezone_set('America/Caracas');
                                $current_date=date("Y-m-d");
                            ?>

                        <input type="date" name="date" id="date" readonly  class="form-control" value="<?php echo $current_date?>">
                    </div>


                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Hora de Ingreso</label>
                            <?php
                                date_default_timezone_set('America/Caracas');
                                $current_time=date("H:i:s");
                            ?>

                        <input  type="time" name="time" id="time" readonly class="form-control" value="<?php echo $current_time?>" >
                    </div>


                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Localidad</label>
                        <input type="text" name="location" id="location" class="form-control" placeholder="Localidad" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" name="carga" value="submit" >Cargar</button>
                    </div>
                </div>
            </div>
            </div>

            </form>
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
                        
                        $sql=$conexion->query(" SELECT *FROM  Uload ");
                        while($datos = $sql->fetch_object()){ 
                            ?>
                
                            <tr>
                                <td><?= $datos->ci?></td>
                                <td><?= $datos->name?></td>
                                <td><?= $datos->surname?></td>
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
            



    <script>
      function openNav() {
        document.getElementById("myNav").classList.toggle("menu_width");
        document
          .querySelector(".custom_menu-btn")
          .classList.toggle("menu_btn-style");
      }
    </script>
</body>
</html>