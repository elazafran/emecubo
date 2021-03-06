<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Operaciones con sensores</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script> -->
    
    

   <script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
    
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script> -->
</head>
<body>
<div class="container">
<div class="row ">
    <div class="col-12 page-header">

        <h1 class="center">Redirecciones </h1>
    </div>
</div>
<div class="row">
<div class="col ml-auto">   
    <p class="text-center">
    <?php

    $username = "dbo732013555";
    $password = "Pa56word";
    $hostname = "db732013555.db.1and1.com";
    $dbname = "db732013555";

    $mysqli = new mysqli($hostname, $username, $password, $dbname);
    $mysqli->set_charset("utf8");

    /* comprobamos la conexión */
    if ($mysqli->connect_errno) {
        echo '
        <div class="alert alert-danger alert-dismissable text-center">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>¡Oopsss...!</strong> La conexión no falló.
        </div>';
        exit();
        //<div class='alert alert-success'>conexion ko</div>";
    }else {
         echo '
        <div class="alert alert-success alert-dismissable text-center">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>¡Enhorabuena!</strong> Todo ha ido genial.
        </div>';
        //<div class='alert alert-success'>conexion ok</div>";
    }
    ?>
    </p>

    <p>
        <a href="#" onClick="window.open('http://emecubo.extremepromotionsproject.xyz/API/obtener/lista/sensores','popup', 'width=400px,height=400px')">
            Ver de cada instalación una lista de sensores que tiene 
        </a> o selecciona el detalle a ver de m<sup>3</sup> :
    </p>
    

     <?php
        /* realizamoms el select para mostrar en el select y pasarlos como parametro*/
        $consulta = "SELECT nombre FROM tipomedidasensor ";
        $resultado = mysqli_query($mysqli, $consulta);

        echo "<div class='form-group'>";
        echo "<label for='tipomedidasensor' >Obtener tipomedidasensor</label>";
            //cargamos el valor y lo enviamos a la url
            echo "<select id='tipomedidasensor' name='tipomedidasensor' onchange='location = this.value ' class='form-control'>";
            echo "<option> Elija una </option>";
            while ($lista = mysqli_fetch_array($resultado)) {
                echo "<option value='../../API/obtener/sensor/". $lista["nombre"] ."'>" . $lista["nombre"] . "</option>";
            }
            
            echo "</select>";
        echo "</div>";
    ?>
    <?php
        /* realizamoms el select para mostrar en el select y pasarlos como parametro*/
        $consulta = "SELECT id FROM configuracionsensor ";
        $resultado = mysqli_query($mysqli, $consulta);

        echo "<div class='form-group'>";
        echo "<label for='configuracionsensor' >Obtener configuracionsensor</label>";
            //cargamos el valor y lo enviamos a la url
            echo "<select id='configuracionsensor' name='configuracionsensor' onchange='location = this.value ' class='form-control'>";
            echo "<option> Elija uno </option>";
            while ($lista = mysqli_fetch_array($resultado)) {
                echo "<option value='../../API/obtener/configsensor/". $lista["id"] ."'>" . $lista["id"] . "</option>";
            }
            
            echo "</select>";
        echo "</div>";
    ?>
    <?php
        /* realizamoms el select para mostrar en el select y pasarlos como parametro*/
        $consulta = "SELECT id FROM estacion order by id DESC";
        $resultado = mysqli_query($mysqli, $consulta);

        echo "<div class='form-group'>";
        echo "<label for='estaciones' >Obtener configuración estación</label>";
            //cargamos el valor y lo enviamos a la url
            echo "<select id='estaciones' name='estaciones' onchange='location = this.value ' class='form-control'>";
            echo "<option> Elija una </option>";
            while ($lista = mysqli_fetch_array($resultado)) {
                echo "<option value='../../API/obtener/estacion/". $lista["id"] ."'>" . $lista["id"] . "</option>";
            }
            
            echo "</select>";
        echo "</div>";
    ?>
    <?php
        /* realizamoms el select para mostrar en el select y pasarlos como parametro*/
        $consulta = "SELECT email FROM reglaaviso ";
        $resultado = mysqli_query($mysqli, $consulta);

        echo "<div class='form-group'>";
        echo "<label for='reglaaviso' >Obtener regla de aviso</label>";
            //cargamos el valor y lo enviamos a la url
            echo "<select id='reglaaviso' name='reglaaviso' onchange='location = this.value ' class='form-control'>";
            echo "<option> Elija uno </option>";
            while ($lista = mysqli_fetch_array($resultado)) {
                echo "<option value='../../API/obtener/avisos/". $lista["email"] ."'>" . $lista["email"] . "</option>";
            }
            
            echo "</select>";
        echo "</div>";
    ?>
    
    </div>
</div>
</div>
</div>


 <!-- <select id="animales">
  <option value="1" data-type="perro">Caniche</option>
  <option value="2" data-type="gato">Siamés</option>
  <option value="3" data-type="gato">Persa</option>
  <option value="3" data-type="perro">Pastor alemán</option>
</select>
<select id="fruta">
 <option value="1" data-type="perro">Caniche</option>
</select>
<script>

$(function(){
    $('#animales').change(function(){
        
       var seleccionado = $(this).find('option:selected');
       
       // 'type' es lo que va a continuación del guión en data-type
       var animal = seleccionado.data('type');
       
       console.log(animal);
       if(animal=='perro'){
           //alert("adsf");
           console.log("perro");
           $('#fruta').html( "<option>All new content. <em>You bet!</em></option>" );

       }else {
           console.log("gato");
           $('#fruta').html( "<option>-------------</option>" );
       }
       
    });
});
var animales = document.getElementById('animales');
var seleccionado = animales.options[animales.selectedIndex];
var animal = seleccionado.getAttribute('data-type');
</script> -->
<div class="container">
<div class="row">
        <div class="col">
            <h3>Gráfica ficticia</h3>
            <div id="myfirstchart" style="height: 250px;"></div>
            <div id="area-example" style="height: 250px;"></div>
            <script>
            document.addEventListener("DOMContentLoaded", function (event) {
                //alert("asdfasdf");
                    
                    
                    // Perform other work here ...
                    
                    // Set another completion function for the request above
                    var url1= "http://emecubo.extremepromotionsproject.xyz/API/obtener/sensor/sa1";
                    var datos1=jsonParseo(url1);
                    //console.log(datos1);
                   
                   

                   
            });
            function jsonParseo(urlEntrada){
                   var datos=[];
                 $.ajax({
                        
                        json: "callback",
                        
                        dataType: "json",
                        url: urlEntrada,
                        //url: "https://graph.facebook.com/v2.12/Javier.Aliaga.Rodriguez?fields=feed{created_time,message,description,picture,permalink_url,full_picture,comments.limit(10)}&access_token=EAACEdEose0cBAFFhdeBQX0kCyQpRF8u5QD3Y0HZAaWs9pw4PbtQRQkyPN28iamHkFPFPDnbNUu4nH7ZCRIPqRrxcZCwCxP3cKLcyNlF8wZCJj0q5w3izW9dYyZBUOFy36OVNqYFseDZAJ3tCmdlxIEJsAJygXZBn5Gi8eB9QdIJuZCwLXCkWKLmFApmDRWp2UzwZD",
                        
                    })
                    .done(function( data, textStatus, jqXHR ) {
                            var datos = [];
                            var conta =0;
                            //console.log(data);
                            // data.forEach(element => {
                            //     var nombre = element.nombre;
                            //     var fecha_medida = element.fecha_medida;
                            //     // console.log("nombre =>" + element.nombre);
                            //     // console.log("fecha medida =>" + element.fecha_medida);
                            //     //datos[conta]={fecha_medida,nombre};
                            //     datos[conta]=element;
                            //     conta++;
                            // });
                            // console.log(datos);
                            pintarGrafica(data);
                            if ( console && console.log ) {
                                console.log( "La solicitud se ha completado correctamente." );
                            }
                    })
                    .fail(function( jqXHR, textStatus, errorThrown ) {
                            if ( console && console.log ) {
                                console.log( "La solicitud a fallado: " +  textStatus);
                            }
                    });
                    return datos;
            }
            function pintarGrafica(datos){

                    
                    var dataSensor = [];
                    
                    
                        
                    datos.forEach(function(element,index) {
                        
                        var tupla = {"y": element.fecha_medida, "a":parseInt(element.valor), " b": parseInt(90)};
                        dataSensor.push(tupla);
                        
                        
                    });
                   
                    var dataEjemplo = [
                        { y: '2018-05-01 15:00:00', a: 100, b: 90 },
                        { y: '2018-05-01 15:10:00', a: 75,  b: 65 },
                        { y: '2018-05-01 15:20:00', a: 50,  b: 40 },
                        { y: '2018-05-01 15:30:00', a: 75,  b: 65 },
                        { y: '2018-05-01 15:40:00', a: 50,  b: 40 },
                        { y: '2018-05-01 15:50:00', a: 75,  b: 65 },
                        { y: '2018-05-01 16:00:00', a: 100, b: 90 }
                    ];
                    Morris.Area({
                    element: 'area-example',
                    data: dataEjemplo,
                    //data: dataSensor,
                    xkey: 'y',
                    ykeys: ['a', 'b'],
                    labels: ['Sensor A', 'Sensor B']
                    });
                    
              
                    var grafica=new Morris.Line({
                        // ID of the element in which to draw the chart.
                        element: 'myfirstchart',
                        // Chart data records -- each entry in this array corresponds to a point on
                        // the chart.
                        data: [
                            { year: '2018-05-01 15:00:00', value: 20 },
                            { year: '2018-05-01 15:10:00', value: 10 },
                            { year: '2018-05-01 15:20:00', value: 5 },
                            { year: '2018-05-01 15:30:00', value: 28 },
                            { year: '2018-05-01 15:40:00', value: 20 }
                        ],
                        // The name of the data record attribute that contains x-values.
                        xkey: 'year',
                        // A list of names of data record attributes that contain y-values.
                        ykeys: ['value'],
                        // Labels for the ykeys -- will be displayed when you hover over the
                        // chart.
                        labels: ['temperatura']
                        });
                  }            
            </script>

        </div>
    </div>
</div>
<script>

var myObj = { "name":"John", "age":31, "city":"New York" };
var myJSON = JSON.stringify(myObj);
//window.location = "index.php?x=" + myJSON;

</script>
</body>
</html>

