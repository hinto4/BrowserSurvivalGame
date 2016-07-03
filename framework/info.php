<?php
	include ('connect.php');

	$kasutajanimi = $_SESSION['user']; // kasutajanimi variable saab sisselogija sessiooni väärtuse.

	$query_andmed = mysqli_query($connect,"SELECT * FROM andmed WHERE kasutaja='$kasutajanimi'"); // andmebaasist andmed otsib kasutajanime järgi vastavad andmed.
	
	$query_ehitis = mysqli_query($connect,"SELECT * FROM ehitised WHERE kasutaja='$kasutajanimi'");
	
	$query_kott = mysqli_query($connect,"SELECT * FROM kott WHERE kasutaja='$kasutajanimi'");
	
	// tühjad väärtused, asendatakse andmebaasist saadud väärtustega, fetchinguga.
	// Andmed
	$elud = "";
	$staatus = "";
	$energia = "";
	$kaal = "";
	$kott = "";
	$puit = "";
	$kivi = "";
	$raud = "";
	$toit = "";
	
	// Ehitised
	$baas = "";
	$baas_tase = "";    
	// kott
	/*if($i = 0; $i <= 5; $i++) {
		$koht[$i]
	}/*
	$koht0 = "";
	$koht1 = "";
	$koht2 = "";
	$koht3 = "";
	$koht4 = "";
	$koht5 = "";*/
	
	// Andmete fetch
	while($row = mysqli_fetch_array($query_andmed)) { //fetchib väärtused andmebaasist ning asendab tühjad variabled üleval uute väärtustega.
    	$elud = $row['elud'];
    	$staatus = $row['staatus'];
    	$energia = $row['energia'];
    	$kaal = $row['kaal'];
    	//$kott = $row['kott'];
		$puit = $row['puit'];
		$kivi = $row['kivi'];
		$raud = $row['raud'];
		$toit = $row['toit'];
        }
	// Ehitiste fetch
	while($row = mysqli_fetch_array($query_ehitis)) {
		$baas = $row['baas'];
		$baas_tase = $row['baas_tase'];
	}
	// Kott fetch
	/*while($row = mysqli_fetch_array($resultkott)) {
		$koht0 = $row['koht0'];
		$koht1 = $row['koht1'];
		$koht2 = $row['koht2'];
		$koht3 = $row['koht3'];
		$koht4 = $row['koht4'];
		$koht5 = $row['koht5'];
	
	}*/
?>
