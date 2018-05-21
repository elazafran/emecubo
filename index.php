<?php
    include 'head.php';
?>
<body>
    <?php 

        include 'menu.php';
        
    ?> 
    <header class="mt-lg">
		 
		
	</header>
    
    
       
    <div class="container mt-5"> 
        <div class="row">
        <div class="col">
            <h3>Gráfica Datos BBDD Emecubo</h3>
            
            <h4>Sensor de Humedad</h4>
            <div id="humedadChart" style="height: 250px;"></div>
            <h4>Sensor de Temperatura</h4>
            <div id="temperaturaChart" style="height: 250px;"></div>
            <h4>Sensor Anemometro</h4>
            <div id="anemometroChart" style="height: 250px;"></div>
            <h4>Sensor Pluviometro</h4>
            <div id="pluviometroChart" style="height: 250px;"></div>
            <h4>Sensor Dirección del viento</h4>
            <div id="veletaChart" style="height: 250px;"></div>
            
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
            <script>

            
                window.onload = function() {

                    var dataPointsHumedad = [];

                    function addData(data) {
                        for (var i = 0; i < data.length; i++) {
                            dataPointsHumedad.push({
                                year: data[i].fecha_medida,
                                value: data[i].valor
                            });
                        }
                        console.log(dataPointsHumedad);
                        var grafica=new Morris.Area({
                        // ID of the element in which to draw the chart.
                        element: 'humedadChart',
                        // Chart data records -- each entry in this array corresponds to a point on
                        // the chart.
                        // data: [
                        //     { year: '2018-05-01 15:00:00', value: 20 },
                        //     { year: '2018-05-01 15:10:00', value: 10 },
                        //     { year: '2018-05-01 15:20:00', value: 5 },
                        //     { year: '2018-05-01 15:30:00', value: 28 },
                        //     { year: '2018-05-01 15:40:00', value: 20 }
                        // ],
                        data:dataPointsHumedad,
                        // The name of the data record attribute that contains x-values.
                        xkey: 'year',
                        // A list of names of data record attributes that contain y-values.
                        ykeys: ['value'],
                        // Labels for the ykeys -- will be displayed when you hover over the
                        // chart.
                        labels: ['humedad'],
                        resize: true,
                        fillOpacity: 0.6,
                        hideHover: 'auto',
                        behaveLikeLine: true,
                        pointFillColors:['#ffffff'],
                        pointStrokeColors: ['black'],
                        lineColors:['red','gray']
                        });

                    }

                    $.getJSON("https://final.extremepromotionsproject.xyz/API/obtener/sensor/H", addData);


                    /**********************Temeperaruta *********** */

                    var dataPointsTemperatura = [];

                    function addDataTemperatura(data) {
                        for (var i = 0; i < data.length; i++) {
                            dataPointsTemperatura.push({
                                year: data[i].fecha_medida,
                                value: data[i].valor
                            });
                        }
                        console.log(dataPointsTemperatura);
                        var grafica=new Morris.Area({
                        // ID of the element in which to draw the chart.
                        element: 'temperaturaChart',
                        // Chart data records -- each entry in this array corresponds to a point on
                        // the chart.
                        // data: [
                        //     { year: '2018-05-01 15:00:00', value: 20 },
                        //     { year: '2018-05-01 15:10:00', value: 10 },
                        //     { year: '2018-05-01 15:20:00', value: 5 },
                        //     { year: '2018-05-01 15:30:00', value: 28 },
                        //     { year: '2018-05-01 15:40:00', value: 20 }
                        // ],
                        data:dataPointsTemperatura,
                        // The name of the data record attribute that contains x-values.
                        xkey: 'year',
                        // A list of names of data record attributes that contain y-values.
                        ykeys: ['value'],
                        // Labels for the ykeys -- will be displayed when you hover over the
                        // chart.
                        labels: ['Temperatura'],
                        resize: true,
                        fillOpacity: 0.6,
                        hideHover: 'auto',
                        behaveLikeLine: true,
                        pointFillColors:['#ffffff'],
                        pointStrokeColors: ['black'],
                        lineColors:['red','gray']
                        });

                    }

                    $.getJSON("https://final.extremepromotionsproject.xyz/API/obtener/sensor/T", addDataTemperatura);
                    /**
                        Anemometro
                    **/
                    var dataPointsAnemometro = [];

                    function addDataAnemometro(data) {
                        for (var i = 0; i < data.length; i++) {
                            dataPointsAnemometro.push({
                                year: data[i].fecha_medida,
                                value: data[i].valor
                            });
                        }
                        console.log(dataPointsAnemometro);
                        var grafica=new Morris.Area({
                        // ID of the element in which to draw the chart.
                        element: 'anemometroChart',
                        // Chart data records -- each entry in this array corresponds to a point on
                        // the chart.
                        // data: [
                        //     { year: '2018-05-01 15:00:00', value: 20 },
                        //     { year: '2018-05-01 15:10:00', value: 10 },
                        //     { year: '2018-05-01 15:20:00', value: 5 },
                        //     { year: '2018-05-01 15:30:00', value: 28 },
                        //     { year: '2018-05-01 15:40:00', value: 20 }
                        // ],
                        data:dataPointsAnemometro,
                        // The name of the data record attribute that contains x-values.
                        xkey: 'year',
                        // A list of names of data record attributes that contain y-values.
                        ykeys: ['value'],
                        // Labels for the ykeys -- will be displayed when you hover over the
                        // chart.
                        labels: ['Temperatura'],
                        resize: true,
                        fillOpacity: 0.6,
                        hideHover: 'auto',
                        behaveLikeLine: true,
                        pointFillColors:['#ffffff'],
                        pointStrokeColors: ['black'],
                        lineColors:['red','gray']
                        });

                    }

                    $.getJSON("https://final.extremepromotionsproject.xyz/API/obtener/sensor/A", addDataAnemometro);

                    /**
                        Pluviometro
                    **/
                    var dataPointsPluviometro = [];

                    function addDataPluviometro(data) {
                        for (var i = 0; i < data.length; i++) {
                            dataPointsPluviometro.push({
                                year: data[i].fecha_medida,
                                value: data[i].valor
                            });
                        }
                        console.log(dataPointsPluviometro);
                        var grafica=new Morris.Area({
                        // ID of the element in which to draw the chart.
                        element: 'pluviometroChart',
                        // Chart data records -- each entry in this array corresponds to a point on
                        // the chart.
                        // data: [
                        //     { year: '2018-05-01 15:00:00', value: 20 },
                        //     { year: '2018-05-01 15:10:00', value: 10 },
                        //     { year: '2018-05-01 15:20:00', value: 5 },
                        //     { year: '2018-05-01 15:30:00', value: 28 },
                        //     { year: '2018-05-01 15:40:00', value: 20 }
                        // ],
                        data:dataPointsPluviometro,
                        // The name of the data record attribute that contains x-values.
                        xkey: 'year',
                        // A list of names of data record attributes that contain y-values.
                        ykeys: ['value'],
                        // Labels for the ykeys -- will be displayed when you hover over the
                        // chart.
                        labels: ['Agua de Lluvia'],
                        resize: true,
                        fillOpacity: 0.6,
                        hideHover: 'auto',
                        behaveLikeLine: true,
                        pointFillColors:['#ffffff'],
                        pointStrokeColors: ['black'],
                        lineColors:['red','gray']
                        });

                    }

                    $.getJSON("https://final.extremepromotionsproject.xyz/API/obtener/sensor/P", addDataPluviometro);

                     /**
                        Dirección Veleta
                    **/
                    var dataPointsVeleta = [];

                    function addDataVeleta(data) {
                        for (var i = 0; i < data.length; i++) {
                            dataPointsVeleta.push({
                                year: data[i].fecha_medida,
                                value: data[i].valor
                            });
                        }
                        console.log(dataPointsVeleta);
                        var grafica=new Morris.Donut({
                        // ID of the element in which to draw the chart.
                        element: 'veletaChart',
                        // Chart data records -- each entry in this array corresponds to a point on
                        // the chart.
                        // data: [
                        //     { year: '2018-05-01 15:00:00', value: 20 },
                        //     { year: '2018-05-01 15:10:00', value: 10 },
                        //     { year: '2018-05-01 15:20:00', value: 5 },
                        //     { year: '2018-05-01 15:30:00', value: 28 },
                        //     { year: '2018-05-01 15:40:00', value: 20 }
                        // ],
                        data:dataPointsVeleta,
                        // The name of the data record attribute that contains x-values.
                        xkey: 'year',
                        // A list of names of data record attributes that contain y-values.
                        ykeys: ['value'],
                        // Labels for the ykeys -- will be displayed when you hover over the
                        // chart.
                        labels: ['Direccion del viento'],
                        resize: true,
                        fillOpacity: 0.6,
                        hideHover: 'auto',
                        behaveLikeLine: true,
                        pointFillColors:['#ffffff'],
                        pointStrokeColors: ['black'],
                        lineColors:['red','gray']
                        });

                    }

                    $.getJSON("https://final.extremepromotionsproject.xyz/API/obtener/sensor/V", addDataVeleta);

                }

          
           

            </script>

            </div>
        </div>
    </div>

</div>
<script src="app.js"></script>

</body>
</html>