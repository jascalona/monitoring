
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring</title>


    <!--CSS STYLES-->
    <link rel="stylesheet" href="/CSS/style.css">
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
          <a class="navbar-brand" href="panel.php">
            <span>
                XDV
            </span>
          </a>

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
                <a href="panel.html">Panel</a>
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
                Monitoring  <br />
                program
              </h1>
              <div>
                <a style="text-decoration: none;" href="">
                  Echar un Vistazo
                </a>
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