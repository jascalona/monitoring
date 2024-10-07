<!DOCTYPE html>
<html>
    <head>
        <title>Geolocalizacion</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="area-nav">
            <div><h2>Pide permisos de hubicacion al navegador</h2></div>
            <button id="pedirvan">Pedir permisos geolocalizacion navegador</button>
            <div>por navegador</div>
            <div id="nlat"></div>
            <div id="nlon"></div>
        </div>
    </body>
    <script>
        $(document).ready(function () {
            //Click al boton para pedir permisos
            $("#pedirvan").click(function () {
                //Si el navegador soporta geolocalizacion
                if (!!navigator.geolocation) {
                    //Pedimos los datos de geolocalizacion al navegador
                    navigator.geolocation.getCurrentPosition(
                            //Si el navegador entrega los datos de geolocalizacion los imprimimos
                            function (position) {
                                window.alert("nav permitido");
                                $("#nlat").text(position.coords.latitude);
                                $("#nlon").text(position.coords.longitude);
                            },
                            //Si no los entrega manda un alerta de error
                            function () {
                                window.alert("nav no permitido");
                            }
                    );
                }
            });

        });



    </script>


</html>