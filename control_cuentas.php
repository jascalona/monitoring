<?php
session_start();
if (!empty($_SESSION["CI"])) {
    header("loaction: ./index.php");
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
    <link rel="icon" href="./images/x.png">
    <title>Control de Cuentas</title>

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

    <!-- SCRIPT SEARCH-->
    <script src="./JS/search.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- SCRIPT SEARCH-->
   

    <?php
    if ($_SESSION['roll'] == "administrator") { ?>


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
                    <li><a class="dropdown-item" href="./CONTROLLER/close.php">Cerrar Sesion</a></li>
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
                <a style="color: #FF5733;" href="panel.php">Panel</a>
                <a style="color: #C70039;" href="./control_asistencia.php">Control de Asistencias</a>
                <a style="color: #900C3F;" href="./control_cuentas.php">Control de Cuentas</a>
                <a style="color: #581845;" href="./registro.php">Registros</a>
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
                                <img class="img-fluid w-100" src="./images/computer_cuentas.avif" alt="">
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
                                        <p class="text-muted ml-2">Asistencia Virtual</p>
                                    </div>
                                </div>
                                <h4 style="color: #fff;" class="font-weight-bold mb-3">Monitoreo de Personal</h4>
                                <p style="color: #fff;">Lleva un control ordenado y grafico de su personal; liste 'usuarios', filtrer valores especificos haciendo uso de un search con nuevas tecnologías.</p>
                            </div>
                        </div>

                        <div class="col-md-6 mb-5">
                            <div class="position-relative">
                            <iframe style="width: 100%;" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15692.935450111461!2d-66.84468849999999!3d10.4822217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sve!4v1728310897199!5m2!1ses-419!2sve" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                                    </div>
                                </div>
                                <h4 style="color: #fff;" class="font-weight-bold mb-3">Control de Salidas y Entradas</h4>
                                <p style="color: #fff;">Lleva un control de entradas y salidas con esta asistencia virtual, conoce la hora, fecha y ubicacion en tiempo real mediante coordenadas generadas por GPS.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog End -->
             
    <!-- end header section -->
    

        <!-- start search filter -->
        <div class="search">
            <div class="container">
                <form class="">
                    <input class="form-control me-2 light-table-filter" data-table="table" type="text" placeholder="Buscar...">
                </form>
            </div>
        </div>    
        <!-- end search filter -->


        <div class="container-drop-m">   

            <?php  include './CONTROLLER/drop_m.php';?> 
                <form action="" method="POST" >
                    <div class="btn-drop-m">
                        <button type="submit" name="drop" class="btn btn-primary" value="enviar" >
                            limpiar datos <i class='bx bx-brush-alt'></i>
                        </button>
                    </div>
                </form>
        
            
            <div class="btn-export">
                <form action="" method="POST">
                    <button name="export" class="btn btn-primary">
                            <a href="./CONTROLLER/export_data.php">Exportar Datos <i class='bx bx-export'></i></a>
                    </button>
                </form>
            </div>    

        
        </div>

        

        <?php
            include "./CONTROLLER/conexion.php";
            include "./CONTROLLER/Uload.php";

        ?>

        <div class="container-tables">
            <table class="table table-bordered" >    
                    
                    <thead class="class-dark">
                        <tr>
                            <th class="col">CI</th>
                            <th class="col">Nombre</th>
                            <th class="col">Apellido</th>
                            <th class="col">Cliente</th>
                            <th class="col">Status</th>
                            <th class="col">Fecha</th>
                            <th class="col">Tiempo</th>
                            <th class="col">Localidad</th>
                        </tr>
                
                    </thead>
                    <tbody>

                
                        <?php
                        
                        include "./CONTROLLER/conexion.php";
                        $SQL="SELECT m_Uload.ci, m_Uload.name, m_Uload.surname, m_Uload.customer, m_Uload.status,
                        m_Uload.date, m_Uload.time, m_Uload.location FROM m_Uload
                        $where";
                        $dato = mysqli_query($conexion, $SQL);
    
                        if($dato -> num_rows >1){
                        while($fila=mysqli_fetch_array($dato)){
                        
                        ?>
                            <tr>
                            <td><?php echo $fila['ci']; ?></td>
                            <td><?php echo $fila['name']; ?></td>
                            <td><?php echo $fila['surname']; ?></td>
                            <td><?php echo $fila['customer']; ?></td>
                            <td><?php echo $fila['status']; ?></td>
                            <td><?php echo $fila['date']; ?></td>
                            <td><?php echo $fila['time']; ?></td>
                            <td><?php echo $fila['location']; ?></td>
    
                            </tr>
    
    
                        <?php
                        }
                        }else{
    
                        ?>
                        <tr class="text-center">
                        <td colspan="16">No existen registros</td>
                        </tr>
    
                        <?php
        
                        }
    
                        ?>
                            

                    </tbody>
                    </table>
            

                </div>



                 <!--START FOOTER-->
                 <section class="container-fluid footer_section">
                 <div class="footer">
                 <div class="container-fluid" style="display: flex; justify-content: center; margin-top: 50px;">
                  <div class="row">
                      <div class="">
                          <p style="color: #000;" class="m-0">Virtual Assistance
                              &copy;  Todos los derechos reservados. XDV® | Designed by <a href="" style="color: blue;">XDV</a>
                          </p>
                          <br>
                          <div class="linear"></div>
                          <div style="display: flex; justify-content: center;" class="icons">
                              <img style="width: 40px;" src="./images/linkkedin.svg" alt="">
                              <img style="width: 40px;" src="./images/wp.svg" alt="">
                              <img style="width: 40px;" src="./images/instagram.svg" alt="">                                
                          </div>
      
                      </div>
                  </div>
              </div>
            </div>
            </div>
            </section>
            <!--START FOOTER-->

            <?php
            }
            ?>

        <?php 
            if ($_SESSION['roll'] == "operator") { ?>
                
                <div style="display: flex; justify-content: center; margin-top: 5%;" class="container-restring">
                    <img src="./images/restrin.png" alt="">
                </div>
                <br><br>

                <p style="display: flex; justify-content: center; font-size: 30px; font-weight: 600; color: #900C3F; ">You do not have access to this site</p>
        <?php
            }
        ?>

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