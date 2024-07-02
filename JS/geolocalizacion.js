
//var success
//var error
//options

if (navigator.geolocation) {
                
    navigator.geolocation.getCurrentPosition(success,error, options);

        
    } else{
        
        alert("Este Navegador no es compatible con la geolocalizacion, NOTA: Utilice otro navegador")
    }

// var options
var options = {
    EnableHighAccuracy:true,
    Timeout: 500,
    MaximunAge:0
}

//Insesion geolocalizacion
//var success

function success(getCurrentPosition){
    //var geo

    let coords = getCurrentPosition.coords;

    document.getElementById("geolocalizacion").innerHTML = "latitud:" + coords.latitude + "<br>" + "longitud:" + coords.longitude;
}

//script error

function error(err){

    alert("Solicitud de geolocalización denegada por el usuario!")
}
