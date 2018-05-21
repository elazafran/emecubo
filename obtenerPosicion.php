<!-- Format of Data Output
c000s000g000t086r000p000h53b10020 
It outputs 37 bytes per second, including the end CR/LF.

Data Parser:

c000：air direction, degree
s000：air speed(1 minute), 0.1 miles per hour
g000：air speed(5 minutes), 0.1 miles per hour
t086：temperature, Fahrenheit
r000：rainfall(1 hour), 0.01 inches
p000：rainfall(24 hours), 0.01 inches
h53：humidity,% (00％= 100)
b10020：atmosphere,0.1 hpa -->

<!--
 ▄▄▄       ██▓     ██▓ ▄▄▄        ▄████  ▄▄▄      
▒████▄    ▓██▒    ▓██▒▒████▄     ██▒ ▀█▒▒████▄    
▒██  ▀█▄  ▒██░    ▒██▒▒██  ▀█▄  ▒██░▄▄▄░▒██  ▀█▄  
░██▄▄▄▄██ ▒██░    ░██░░██▄▄▄▄██ ░▓█  ██▓░██▄▄▄▄██ 
 ▓█   ▓██▒░██████▒░██░ ▓█   ▓██▒░▒▓███▀▒ ▓█   ▓██▒
 ▒▒   ▓▒█░░ ▒░▓  ░░▓   ▒▒   ▓▒█░ ░▒   ▒  ▒▒   ▓▒█░
  ▒   ▒▒ ░░ ░ ▒  ░ ▒ ░  ▒   ▒▒ ░  ░   ░   ▒   ▒▒ ░
  ░   ▒     ░ ░    ▒ ░  ░   ▒   ░ ░   ░   ░   ▒   
      ░  ░    ░  ░ ░        ░  ░      ░       ░  ░
                                                   
                                                   -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EMECUBO - Microestación Meterológica Móvil </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.css" >
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  
  <!-- <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.4.4.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

    
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    
    <meta name="theme-color" content="#333">
    
    <link rel="shortcut icon" href="/images/icons/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/images/icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles.css"> 
    <link rel="manifest" href="/manifest.json"></link>
</head>
<body>
    <?php 

        include 'menu.php';
        
    ?> 
    <header class="mt-lg">
		 
		
	</header>
    
    
        <div class="container">
        <div class="row">
        <div class="col-6 mt-5">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore at nisi nam, rem placeat est magni facere iusto illo. Magnam, atque labore. Velit, aspernatur. Ipsa placeat dicta eveniet totam animi.

                <script>
                (function(){
                    var content = document.getElementById("geolocation-test");

                    if (navigator.geolocation)
                    {
                        navigator.geolocation.getCurrentPosition(function(objPosition)
                        {
                            var lon = objPosition.coords.longitude;
                            var lat = objPosition.coords.latitude;

                            content.innerHTML = "<p><strong>Latitud:</strong> " + lat + "</p><p><strong>Longitud:</strong> " + lon + "</p>";

                        }, function(objPositionError)
                        {
                            switch (objPositionError.code)
                            {
                                case objPositionError.PERMISSION_DENIED:
                                    content.innerHTML = "No se ha permitido el acceso a la posición del usuario.";
                                break;
                                case objPositionError.POSITION_UNAVAILABLE:
                                    content.innerHTML = "No se ha podido acceder a la información de su posición.";
                                break;
                                case objPositionError.TIMEOUT:
                                    content.innerHTML = "El servicio ha tardado demasiado tiempo en responder.";
                                break;
                                default:
                                    content.innerHTML = "Error desconocido.";
                            }
                        }, {
                            maximumAge: 75000,
                            timeout: 15000
                        });
                    }
                    else
                    {
                        content.innerHTML = "Su navegador no soporta la API de geolocalización.";
                    }
                })();
                </script>
        </div>
        </div>
        </div>
</body>
</html>