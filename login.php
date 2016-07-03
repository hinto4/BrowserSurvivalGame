<?php
	// sprintf, mysql_real_escape_string
	session_start();
	include('connect.php');
	
	$kasutajanimi = $_POST['kasutaja'];
	$parool = $_POST['parool'];

	$result2 = sprintf("SELECT * FROM kasutajad WHERE kasutaja='%s' AND parool='%s'" ,
		mysql_real_escape_string($kasutajanimi),
		mysql_real_escape_string($parool));
	
	$result = mysqli_query($connect,$result2);
	
	if($row = mysqli_fetch_array($result)) {
		$_SESSION['user'] = $kasutajanimi; // kasutaja leidmisel alustab sessiooniga.
		header('location: index.php');
	} else {
		echo "Vale kasutaja nimi või parool </br>";
	}
	mysqli_close($connect);
?>
