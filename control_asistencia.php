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
    <title>Control de Asistencia</title>
    <link rel="icon" href="./images/x.png">
    

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

    <!-- SCRIPT GEOLOCALIZACION -->
    <script src="./JS/geolocalizacion.js"></script>
    <!-- SCRIPT GEOLOCALIZACION -->

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
                    <li><a class="dropdown-item" href="./CONTROLLER/close.php">Cerrar Sesion</a></li>
                    </ul>
                </div>
            </div>
            

        <!-- control de sesiones administrator nav start-->  
        <!-- panel habilitado para administradores start -->

        <?php
            if ($_SESSION['roll'] == "administrator") { ?>
            

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
    
        <!-- Features Start -->
        <div style="background: #5D6D7E; padding: 50px;" class="container-fluid my-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">

                    <div id="carouselExampleCaptions" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="./images/asistencia_1.avif" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Monitoring Program</h5>
                                <p>Lo que sabemos es una gota, lo que ignoramos es un océano!</p>
                            </div>
                            </div>
                            <div class="carousel-item">
                            <img src="./images/asistencia_2.avif" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                            </div>
                            <div class="carousel-item">
                            <img src="./images/asistencia_3.avif" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        </div>

                    </div>
                    <div class="col-lg-7 py-5 py-lg-0">
                        <h6 class="text-uppercase font-weight-bold">XDV</h6>
                        <h1 class="mb-4">CONTROL DE ASISTENCIA</h1>
                        <p class="mb-4">
                        En el el siguiente modulo usted podra cargar su asitencia. <br> NOTA: solo debera definir su status actual "Entrada o Salida"
                        </p>
                        <ul class="list-inline">
                            <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>Control de Llegada</h6></li>
                            <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>Control de Salida</h6></li>
                            <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>Desarrollo Continuo</h6></li>
                        </ul>
                        
                    <!-- sesion carga modal start-->
                        <div class="carga-modal">
                            <form action="" method="post">

                            <button id="permiso_geo" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Cargar Asistencia</button>
                        
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
                                        <input type="number" name="ci" id="ci" class="form-control" placeholder="Ingrese su Documento de identidad Ejem. 30836440 " readonly value="<?php echo$_SESSION['CI']?>">
                                    </div>


                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Nombre</label>
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Ingrese su Nombre" readonly value="<?php echo $_SESSION['name']?>" >
                                    </div>

                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Apellido</label>
                                        <input type="text" name="surname" id="surname" class="form-control" placeholder="Ingrese su Apellido" readonly value="<?php  echo $_SESSION['surname']?>">
                                    </div>


                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Cliente</label>
                                        <input type="text" name="customer" id="customer" class="form-control" readonly value="<?php  echo $_SESSION['customer']?>">
                                    </div>


                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Status</label>
                                        <select name="status" id="status" class="form-select form-select-lg mb-3" aria-label="Large select example" required>
                                            <option></option>
                                            <option value="Entrada">Entrada</option>
                                            <option value="Salida">Salida</option>
                                        </select>

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
                                        <input id="geo" type="text" name="location" class="form-control" readonly required>
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
                    <!-- sesion carga modal end-->
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->

  
     <!-- tables responsive administradores -->

        <?php
            include "./CONTROLLER/conexion.php";
            include "./CONTROLLER/Uload.php";
        ?>

        <div class="container-tables">
            <div class="tables-responsives">
                <table class="table table-bordered" >    
                    
                    <thead class="table-dark">
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
                        
                        $sql=$conexion->query(" SELECT *FROM  m_Uload ");
                        while($datos = $sql->fetch_object()){ 
                            ?>
                
                            <tr>
                                <td><?= $datos->ci?></td>
                                <td><?= $datos->name?></td>
                                <td><?= $datos->surname?></td>
                                <td><?= $datos->customer?></td>
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

            </div>
        </div>

    <!-- tables responsive administradores -->
       
        <?php
        //CLOSE VIST ADMINISTRATOR
        }
        ?>
    <!-- panel habilitado para administradores end -->



        <!-- control de sesiones operator nav start -->
        <!-- panel habilitado para operator start -->
            <?php
            
            if ($_SESSION['roll'] == "operator") { ?>
                
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
                  </div>
                </div>
              </div>
            </nav>
          </div>
        </header>
        
            <!-- Features Start -->
            <div style="background: #5D6D7E; padding: 50px;" class="container-fluid my-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
    
                        <div id="carouselExampleCaptions" class="carousel slide">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img src="./images/asistencia_1.avif" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Monitoring Program</h5>
                                    <p>Lo que sabemos es una gota, lo que ignoramos es un océano!</p>
                                </div>
                                </div>
                                <div class="carousel-item">
                                <img src="./images/asistencia_2.avif" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                                </div>
                                <div class="carousel-item">
                                <img src="./images/asistencia_3.avif" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                            </div>
    
                        </div>
                        <div class="col-lg-7 py-5 py-lg-0">
                            <h6 class="text-uppercase font-weight-bold">XDV</h6>
                            <h1 class="mb-4">CONTROL DE ASISTENCIA</h1>
                            <p class="mb-4">
                                En el el siguiente modulo usted podra cargar su asitencia. <br> NOTA: solo debera definir su status actual "Entrada o Salida"
                            </p>
                            <ul class="list-inline">
                                <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>Control de Llegada</h6></li>
                                <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>Control de Salida</h6></li>
                                <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>Desarrollo Continuo</h6></li>
                            </ul>
                            
                        <!-- sesion carga modal start-->
                            <div class="carga-modal">
                                <form action="" method="post">
    
                                <button id="permiso_geo" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Cargar Asistencia</button>
                            
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
                                            <input type="number" name="ci" id="ci" class="form-control" placeholder="Ingrese su Documento de identidad Ejem. 30836440 " readonly value="<?php echo$_SESSION['CI']?>">
                                        </div>
    
    
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Nombre</label>
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Ingrese su Nombre" readonly value="<?php echo $_SESSION['name']?>" >
                                        </div>
    
    
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Apellido</label>
                                            <input type="text" name="surname" id="surname" class="form-control" placeholder="Ingrese su Apellido" readonly value="<?php  echo $_SESSION['surname']?>">
                                        </div>
    
    
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Cliente</label>
                                            <input type="text" name="customer" id="customer" class="form-control" readonly value="<?php  echo $_SESSION['customer']?>">
                                        </div>
    
    
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Status</label>
                                            <select name="status" id="status" class="form-select form-select-lg mb-3" aria-label="Large select example" required>
                                                <option></option>
                                                <option value="Entrada">Entrada</option>
                                                <option value="Salida">Salida</option>
                                            </select>
    
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
                                            <!--NOTA: se aplica el hidden solo para roll operator-->
                                            <input id="geo" type="hidden" name="location" class="form-control" readonly required>
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
                        <!-- sesion carga modal end-->
                            
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Features End -->
        
        
    
    
            <?php
                include "./CONTROLLER/conexion.php";
                include "./CONTROLLER/Uload.php";
            ?>
    
            <div class="container-tables">
                <table class="table table-bordered" >    
                    
                    <thead class="table-primary">
                        <tr>
                            <th class="col">CI</th>
                            <th class="col">Nombre</th>
                            <th class="col">Apellido</th>
                            <th class="col">Cliente</th>
                            <th class="col">Status</th>
                            <th class="col">Fecha</th>
                            <th class="col">Tiempo</th>
                        </tr>
                
                    </thead>
                    <tbody>

                
                        <?php
                        include "./CONTROLLER/conexion.php";
                        include "./CONTROLLER/validar.php";
                        $sql=$conexion->query(" SELECT *FROM  m_Uload WHERE ci= $_SESSION[CI] ");
                        while($datos = $sql->fetch_object()){ 
                            ?>
                
                            <tr>
                                <td><?= $datos->ci?></td>
                                <td><?= $datos->name?></td>
                                <td><?= $datos->surname?></td>
                                <td><?= $datos->customer?></td>
                                <td><?= $datos->status?></td>
                                <td><?= $datos->date?></td>
                                <td><?= $datos->time?></td>
                            </tr>
                
                            <?php
                            
                            }
                            ?>
                    </tbody>
                    </table>
                


             

    
            <?php
            }
            ?>
        <!-- panel habilitado para operator end -->


        </div>
        
        
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
     <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
            <div class="row pt-5">
                <div class="col-lg-3 col-md-6 mb-5">
                    <a href="" class="navbar-brand">
                        <h1 class="text-primary"><span class="text-white">GRUPO XDV</span></h1>
                    </a>
                    <p>
                      Somos XDV, nos enfocamos con calidad, excelencia y gran entusiasmo para lograr los retos propuestos y alcanzar la satisfacción tanto de nuestros clientes internos y externos, 
                      a través de nuestra tecnología, nuestra experiencia y nuestro servicio profecional, que permite que su negocio funcione de un modo
                      más inteligente, facil y rapido sea cual sea su situación.
                    </p>
                    <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">SIGUENOS</h6>
                    <div class="d-flex justify-content-start">
                        <p class="btn btn-outline-primary btn-square mr-2"><i class='bx bxl-facebook'></i></p>
                        <p class="btn btn-outline-primary btn-square mr-2"><i class='bx bxl-instagram'></i></p>
                        <p class="btn btn-outline-primary btn-square"><i class='bx bxl-whatsapp'></i></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Acceso Directo</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white-50 mb-2" href="./panel.php"><i class="fa fa-angle-right mr-2"></i>Panel</a>
                        <a class="text-white-50 mb-2" href="./control_asistencia.php"><i class="fa fa-angle-right mr-2"></i>Control de Asistencia</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-5"></div>

                <div class="col-lg-3 col-md-6 mb-5">
                    <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contacto</h5>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>Av. Ávila, Caracas 1060, Miranda, Venezuela</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>+58 05009376934</p>
                    <p><i class="fa fa-envelope mr-2"></i>cac@grupoxven.com</p>
                    
            </div>
        </div>
        <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="row">
                <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                    <p class="m-0 text-white-50">Virtual Assistance &copy; <a href="" style="color: red;">XDV</a>. Todos los derechos reservados. XDV®</a>
                    </p>
                </div>
                <div class="col-lg-6 text-center text-md-right">
                    <p class="m-0 text-white-50">Designed by <a href="" style="color: red;">JE</a>
                    </p>
                </div>
            </div>
        </div>
        <!-- Footer End -->



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