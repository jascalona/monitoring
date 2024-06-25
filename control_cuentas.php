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
    <title>Control de Cuentas</title>

  <!--CSS STYLES-->
  <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="http://localhost/monitoring//CSS/conf.css">
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

       
  <div style="background: #154360;" class="hero_area">
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
   

    
          <!-- Blog Start -->
          <div class="container-fluid pt-5">
                <div class="container">
                    <div class="text-center pb-2">
                        <h1 class="mb-4"><?php echo $_SESSION['name'];?>, Bienvenido al portal de Socios XDV</h1>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-5">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                                <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center rounded-circle"
                                    style="width: 60px; height: 60px; bottom: -30px; right: 30px;">
                                    <h4 class="font-weight-bold mb-n1">01</h4>
                                </div>
                            </div>
                            <div class="bg-secondary" style="padding: 30px;">
                                <div class="d-flex mb-3">
                                    <div class="d-flex align-items-center">
                                        <p class="text-muted ml-2" href=""></p>
                                    </div>
                                    <div class="d-flex align-items-center ml-4">
                                        <i class="far fa-bookmark text-primary"></i>
                                        <p class="text-muted ml-2">Monitoring program<p/>
                                    </div>
                                </div>
                                <h4 style="color: #fff;" class="font-weight-bold mb-3">Monitoreo de Personal</h4>
                                <p style="color: #fff;">Dolor sea ipsum ipsum et. Erat duo lorem magna vero dolor dolores. Rebum eirmod no dolor diam dolor amet ipsum. Lorem lorem sea sed diam est lorem magna</p>
                            </div>
                        </div>

                        <div class="col-md-6 mb-5">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="https://images.unsplash.com/photo-1539627831859-a911cf04d3cd?q=80&w=1771&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                                <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center rounded-circle"
                                    style="width: 60px; height: 60px; bottom: -30px; right: 30px;">
                                    <h4 class="font-weight-bold mb-n1">02</h4>
                                </div>
                            </div>
                            <div class="bg-secondary" style="padding: 30px;">
                                <div class="d-flex mb-3">
                                    <div class="d-flex align-items-center">
                                    </div>
                                    <div class="d-flex align-items-center ml-4">
                                        <i class="far fa-bookmark text-primary"></i>
                                        <p class="text-muted ml-2" href="./Mi Banco/panel.php">Monitoring program</p>
                                    </div>
                                </div>
                                <h4 style="color: #fff;" class="font-weight-bold mb-3">Control de Salidas y Entradas</h4>
                                <p style="color: #fff;">Dolor sea ipsum ipsum et. Erat duo lorem magna vero dolor dolores. Rebum eirmod no dolor diam dolor amet ipsum. Lorem lorem sea sed diam est lorem magna</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog End -->
             
    <!-- end header section -->
    
    


        <?php
            include "./CONTROLLER/conexion.php";
            include "./CONTROLLER/Uload.php";

        ?>

        <div class="container-tables">
            <table class="table table-bordered" >    
                    
                    <thead class="class-primary">
                        <tr>
                            <th class="col">CI</th>
                            <th class="col">Nombre</th>
                            <th class="col">Apellido</th>
                            <th class="col">Status</th>
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
                                <td><?= $datos->status?></td>
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