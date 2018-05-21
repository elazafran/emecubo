<?php
	include("conexion2.php");//Me conecto a la base de datos
	//set timezone
	date_default_timezone_set("Europe/Madrid");

	$year = date('Y');
	$total=array();
	for ($month = 1; $month <= 12; $month ++){
        //$sql="select *, sum(amount) as total from sales where month(sales_date)='$month' and year(sales_date)='$year'";
		$sql="select *, avg(valor) as ptotal from medidasensor where nombre='V' ";
		$query=$conn->query($sql);
		$row=$query->fetch_array();

		$total[]=$row['total'];
	}

	$tjan = $total[0];
	$tfeb = $total[1];
	$tmar = $total[2];
	$tapr = $total[3];
	$tmay = $total[4];
	$tjun = $total[5];
	$tjul = $total[6];
	$taug = $total[7];
	$tsep = $total[8];
	$toct = $total[9];
	$tnov = $total[10];
	$tdec = $total[11];

	$pyear = $year - 1;
	$pnum=array();

	for ($pmonth = 1; $pmonth <= 12; $pmonth ++){
		//$sql="select *, sum(amount) as ptot/al from purchases where month(purchase_date)='$pmonth' and year(purchase_date)='$year'";
		 $sql="select *, avg(valor) as ptotal from medidasensor where month(fecha_medida)='$pmonth' and year(fecha_medida)='$year' and nombre='T' ";
        //$sql="select *, avg(valor) as ptotal from medidasensor where nombre='T' ";
        echo $sql;
		$pquery=$conn->query($sql);
		$prow=$pquery->fetch_array();

		$ptotal[]=$prow['ptotal'];
	}
	
	$pjan = $ptotal[0];
	$pfeb = $ptotal[1];
	$pmar = $ptotal[2];
	$papr = $ptotal[3];
	$pmay = $ptotal[4];
	$pjun = $ptotal[5];
	$pjul = $ptotal[6];
	$paug = $ptotal[7];
	$psep = $ptotal[8];
	$poct = $ptotal[9];
	$pnov = $ptotal[10];
    $pdec = $ptotal[11];
    
    
?>