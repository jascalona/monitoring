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
    <title>Registros</title>

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


    <div style="background: #330E70;" class="hero_area">
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
    <br>
    <!-- end header section -->
    </div>    

     <!-- About Start -->
     <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5">
                    <img class="img-fluid rounded" src="./images/xven.jpeg" alt="">
                </div>
                <div class="col-lg-7 mt-4 mt-lg-0">
                    <h6 class="text-uppercase">NOSOTROS</h6>
                    <h1 class="text-dark" class="mb-4">Bienvenido(a) a la modulo de registro XDV</h1>
                    <p>Somos un eficiente grupo empresarial, con la mejor propuesta integral de tecnología, productos, soluciones y servicios, para facilitar la gestión documental, los servicios de artes gráficas y la logística nacional.  
                        Representante Exclusivo de la marca Xerox en Venezuela, dedicada a la comercialización y distribución directa e indirecta de productos, tecnologías y soluciones Xerox para el sustento de nuestros clientes en el manejo de sus documentos.
                    </p>
                    <P>Nuestra meta es ayudar a las pequeñas, medianas y grandes empresas a reducir la complejidad, proporcionar un entorno optimizado, reducir la impresión, mejorar sus procesos de negocios, para que puedan centrarse en la innovación de productos. Todo esto se resume en una palabra "Eficiencia" que solo es posible si cuenta con el equipo idóneo y el soporte necesario de Xerox.

                    </P>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->




    <div style="background: #DBD9DF;" class="container-tables">
            <table class="table table-bordered" >    
                    
                    <thead class="table-primary">
                        <tr>
                            <th class="col">CI</th>
                            <th class="col">Nombre</th>
                            <th class="col">Apellido</th>
                            <th class="col">Email</th>
                            <th class="col">Cliente</th>
                            <th class="col">Localidad</th>
                        </tr>
                
                    </thead>
                    <tbody>

                
                        <?php
                        include "./CONTROLLER/conexion.php";
                        
                        $sql=$conexion->query(" SELECT *FROM  employees ");
                        while($datos = $sql->fetch_object()){ 
                            ?>
                
                            <tr>
                                <td><?= $datos->CI?></td>
                                <td><?= $datos->name?></td>
                                <td><?= $datos->surname?></td>
                                <td><?= $datos->email?></td>
                                <td><?= $datos->customer?></td>
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