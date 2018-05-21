

<?php
	$db_host="db732013555.db.1and1.com";//Nombre del host
	$db_user="dbo732013555";//Usuario de la base de datos
	$db_pass="Pa56word";//Contraseña de usuario de base de datos
	$db_name="db732013555";//Nombre de la base de datos
	$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
 
	if ($conn->connect_error) {
	    die("Conexión falló: " . $conn->connect_error);
	}
?>