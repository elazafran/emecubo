<?php
	include("conexion2.php");//Me conecto a la base de datos

	$amount=floatval($_POST['amount']);
	$date=$_POST['sales_date'];
	$type=intval($_POST['type']);
	if ($type==1){
		$sql="insert into sales (amount, sales_date) values ('$amount', '$date')";
	} else if ($type==2){
		$sql="insert into purchases (amount, purchase_date) values ('$amount', '$date')";
	}
	$conn->query($sql);
	

	header('location:graficas.php');
?>