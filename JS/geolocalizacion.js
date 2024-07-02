
//var success
//var error
//options

if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(success,error,options);

        
    } else{
        
        alert("Este Navegador no es compatible con la geolocalizacion, NOTA: Utilice otro navegador")
    }

// var options
var options = {
    EnableHighAccuracy: true,
    Timeout: 500,
    MaximunAge:0
}

//Insesion geolocalizacion
//var success

function success(getCurrentPosition){
    //var geo

    let geo = getCurrentPosition.geo;
    
    document.getElementById("location").innerHTML = "lt:" + geo.latitude + "<br>" + "lg" + geo.longitude;
}

//script error

function error(err) {
    alert("Solicitud de geolocalización denegada por el usuario!")
}
