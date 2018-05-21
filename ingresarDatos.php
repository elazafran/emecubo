<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EMECUBO - Microestación Meterológica Móvil </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.css<svg viewBox="0 0 8 8"><use xlink:href="#account-login"></use></svg>sig" >
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
  <!-- <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.4.4.min.js"></script> -->
    <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    
    <link rel="apple-touch-icon" sizes="57x57" href="/images/icons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/images/icons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/images/icons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/images/icons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/images/icons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/images/icons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/images/icons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/images/icons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/images/icons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/images/icons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/images/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/images/icons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/images/icons/favicon-16x16.png">
	 <!-- <link rel="manifest" href="/images/icons/manifest.json">  -->
	<meta name="msapplication-TileColor" content="#333">
	<meta name="msapplication-TileImage" content="/images/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#333">
    <meta name="msapplication-square70x70logo" content="/images/icons/ms-icon-70x70.png">
    <meta name="msapplication-square150x150logo" content="/images/icons/ms-icon-150x150.png">
    <link rel="shortcut icon" href="/images/icons/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/images/icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles.css"> 
    <link rel="manifest" href="manifest.json"></link>
</head>
<body>
    <?php  
        include 'menu.php';
        
    ?> 
    <header>
		 
		
	</header>
    <div class="signin-form">

        <div class="container mt-5">
            <div class="row">
                <div class="col">
                <h1>prueba</h1>
 
                 <?php
 
                    include("conexion.php");

                        /* comprobamos la conexión */
                        if ($mysqli->connect_errno) {
                            echo '
                            <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>¡Oopsss...!</strong> La conexión no falló.
                            </div>';
                            exit();
                            //<div class='alert alert-success'>conexion ko</div>";
                        }else {
                            echo '
                            <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>¡Enhorabuena!</strong> Todo ha ido genial.
                            </div>';
                            //<div class='alert alert-success'>conexion ok</div>";
                        }
                            //     $consulta = "INSERT INTO `medidasensor` (`fecha_medida`, `nombre`, `fechaconfigsensor`, `idsensor`, `tiposensor`, `marcasensor`, `modelosensor`, `idestacion`, `valor`) VALUES
                            // ('2018-04-30 00:00:00', 'sa1', '2018-04-15 00:00:00', 'AN1', 2, 'ANEMO KMS', 'MODELO - 1 ', 'STC1', '0.000')";
                        // $insertar = "INSERT INTO `db732013555`.`medidasensor` (`fecha_medida`, `nombre`, `fechaconfigsensor`, `idsensor`, `tiposensor`, `marcasensor`, `modelosensor`, `idestacion`, `valor`)
                        // VALUES ('2018-04-30 00:00:00', 'sa1', '2018-04-15 00:00:00', 'AN1', '2', 'ANEMO KMS', 'MODELO - 1 ', 'STC1', '20');";
                        //$consulta = "SELECT id FROM estacion";


                        if (isset($_GET['temperatura']) ){
                            echo "<br>Temperatura Ambiente=> ".$_GET['temperatura'];
                            $temperatura = $_GET['temperatura'];
                            
                            $consulta = "INSERT INTO `db732013555`.`medidasensor` (`fecha_medida`, `nombre`, `fechaconfigsensor`, `idsensor`, `tiposensor`, `marcasensor`, `modelosensor`, `idestacion`, `valor`) 
                            VALUES (NOW(), 'T', '2018-05-20 12:47:00', 'TH1t', '4', 'Aosong', 'DHT22', 'STC1', '$temperatura')";
                            $resultado = mysqli_query($mysqli, $consulta); 

                        }
                        if (isset($_GET['humedad'])) {
                            echo "<br>Humedad Ambiente=> ".$_GET['humedad'];
                            
                            $humedad = $_GET['humedad'];
                            
                            $consulta = "INSERT INTO `db732013555`.`medidasensor` (`fecha_medida`, `nombre`, `fechaconfigsensor`, `idsensor`, `tiposensor`, `marcasensor`, `modelosensor`, `idestacion`, `valor`) 
                            VALUES (NOW(), 'H', '2018-05-20 12:47:00', 'TH1h', '5', 'Aosong', 'DHT22', 'STC1', '$humedad')";
                            $resultado = mysqli_query($mysqli, $consulta); 
                        }
                        if (isset($_GET['agualluvia'])) {
                            echo "<br>Agua de lluvia => ". $_GET['agualluvia'];
                            $agualluvia = $_GET['agualluvia'];
                            
                            $consulta = "INSERT INTO `db732013555`.`medidasensor` (`fecha_medida`, `nombre`, `fechaconfigsensor`, `idsensor`, `tiposensor`, `marcasensor`, `modelosensor`, `idestacion`, `valor`) 
                            VALUES (NOW(), 'P', '2018-05-20 12:44:00', 'PL1', '3', 'Sparkfun', 'SEN-08942', 'STC1', '$agualluvia')";
                            
                            $resultado = mysqli_query($mysqli, $consulta);
                        }
                        if (isset($_GET['velocidadViento'])) {
                            
                            echo "<br>Velocidad del viento => ". $_GET['velocidadViento'];
                            $velocidadViento = $_GET['velocidadViento'];
                            
                            $consulta ="INSERT INTO `db732013555`.`medidasensor` (`fecha_medida`, `nombre`, `fechaconfigsensor`, `idsensor`, `tiposensor`, `marcasensor`, `modelosensor`, `idestacion`, `valor`) 
                            VALUES (NOW(), 'A', '2018-05-20 12:44:00', 'AC1', '2', 'Sparkfun', 'SEN-08942', 'STC1', '$velocidadViento');";

                            $resultado = mysqli_query($mysqli, $consulta);
                        }

                        if (isset($_GET['direccionViento'])) {
                            echo "<br>direccion del viento => ". $_GET['direccionViento'];
                            $direccionViento = $_GET['direccionViento'];
                            
                            $consulta = "INSERT INTO `db732013555`.`medidasensor` (`fecha_medida`, `nombre`, `fechaconfigsensor`, `idsensor`, `tiposensor`, `marcasensor`, `modelosensor`, `idestacion`, `valor`) 
                                VALUES (NOW(), 'V', '2018-05-20 12:44:00', 'VV1', '1', 'Sparkfun', 'SEN-08942', 'STC1', '$direccionViento')";
                            $resultado = mysqli_query($mysqli, $consulta);
                        }
                        //https://final.extremepromotionsproject.xyz/verDatos.php?temperatura=26.20&humedad=44.80&agualluvia=57.41&velocidadViento=0.00&direccionViento=246
                        //https://final.extremepromotionsproject.xyz/verDatos.php?temperatura=16.30&humedad=82.90&agualluvia=12.45&velocidadViento=0.00&direccionViento=285


                        //else primero
                        else {

                            echo "errrooRRR!!!";
                        }
                        //}// cierre si existe sensores

                        //echo json_encode( $todosLasEstaciones );

                        $mysqli->close();
                        

                        ?>


                </div>
            </div>
        </div>
    </div>



</body>
</html>