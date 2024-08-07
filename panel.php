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


    <!--CSS STYLES-->
    <link rel="stylesheet" href="http://localhost/monitoring//CSS/style.css">
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
<body>
    
        
  <div class="hero_area">
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
            

          <!-- control de sesiones administrator nav start -->
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

    <section class=" slider_section position-relative">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="detail-box">
              <h2>
                Monitoring
              </h2>
              <h1>
                Virtual  <br />
                Assistance
              </h1>
              <div>
           <!--     <a style="text-decoration: none;" href="">
                  Echar un Vistazo
                </a>   -->
              </div>
            </div>
          </div>
          <div class="col-md-5">
         
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="img-box">
                    <img src="./images/tablero.png" alt="" />
                  </div>
                </div>
                
            </div>
          </div>
        </div>
      </div>
    </section>
  
    </div>


          <div class="sesion-public">
                <i class="text-center">
                  <p><b>L</b>o que sabemos es una gota, lo que ignoramos es un océano!
                  <br>
                  "Isaac Newton"
                  <br><br>
                  Vivimos en un mundo modelado por la tecnología. En nuestra vida
                  cotidiana la tecnología esta omnipresente, la misma marca el ritmo 
                  del progreso en las pautas de la vida
                  La idea del progreso, tal como lo concebimos hoy,
                  está íntimamente asociada a la idea de la
                  tecnología, y por consiguiente a la idea de ciencia y de
                  técnica. Estas tres palabras clave, ciencia,
                  técnica y tecnología, vinculadas a actividades
                  específicas del hombre,
                  están indisolublemente ligadas al mundo en que vivimos, un
                  mundo más artificial que natural, un mundo creado por
                  el hombre en
                  sus ansias de dominar transformar las fuerzas de la naturaleza.
                  </p>
                </i>  

                <img class="img-fluid" src="https://images.unsplash.com/photo-1489486501123-5c1af10d0be6?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
              </div>
          </div>








    <!-- close sesion administrator -->
    <?php
    }
    ?>
    <!-- panel habilitado para administradores end -->



      <!-- control de sesiones operator nav start -->
      <!-- panel habilitado para operator start -->
       <?php
          if ($_SESSION['roll'] == "operator") {  ?>

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
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <section class=" slider_section position-relative">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="detail-box">
              <h2>
                Monitoring
              </h2>
              <h1>
                Monitoring  <br />
                program
              </h1>
              <div>
            <!--    <a style="text-decoration: none;" href="">
                  Echar un Vistazo
                </a> -->
              </div>
            </div>
          </div>
          <div class="col-md-5">
         
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="img-box">
                    <img src="./images/tablero.png" alt="" />
                  </div>
                </div>
                
            </div>
          </div>
        </div>
      </div>
    </section>

    </div>

    <div class="sesion-public">
                <i class="text-center">
                  <p><b>L</b>o que sabemos es una gota, lo que ignoramos es un océano!
                  <br>
                  "Isaac Newton"
                  <br><br>
                  Vivimos en un mundo modelado por la tecnología. En nuestra vida
                  cotidiana la tecnología esta omnipresente, la misma marca el ritmo 
                  del progreso en las pautas de la vida
                  La idea del progreso, tal como lo concebimos hoy,
                  está íntimamente asociada a la idea de la
                  tecnología, y por consiguiente a la idea de ciencia y de
                  técnica. Estas tres palabras clave, ciencia,
                  técnica y tecnología, vinculadas a actividades
                  específicas del hombre,
                  están indisolublemente ligadas al mundo en que vivimos, un
                  mundo más artificial que natural, un mundo creado por
                  el hombre en
                  sus ansias de dominar transformar las fuerzas de la naturaleza.
                  </p>
                </i>  

                <img class="img-fluid" src="https://images.unsplash.com/photo-1489486501123-5c1af10d0be6?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
              </div>
          </div>


          
    <?php
    }
    ?>
    <!-- panel habilitado para operator end -->
   

  

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
    
        


</body>
</html>