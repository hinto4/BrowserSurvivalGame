<?php
	// Baas.php sisu
	include('info.php');
	include('kirjed.php'); // asuvad defineeritud teksti osad.

	switch($baas_tase) {
		case 0:
			echo($kirjeldus[0] . $kirjeldus[1] . $kirjeldus[2]);
			break;
		case 1:
			echo($baas_level_1[0] . $baas_level_1[1] . $baas_level_1[2]);
			echo($havitanupp);
			break;
		case 2:
			echo($baas_level_2[0] . $baas_level_2[1] . $baas_level_2[2]);
			echo($havitanupp);
			break;
	}
		if(isset($_POST['havitabaas'])) {
		mysqli_query($connect,"UPDATE ehitised SET baas=0, baas_tase=0 WHERE kasutaja='$kasutajanimi'");
		header ('location:baas.php');
		mysqli_close($connect);
	}
?>