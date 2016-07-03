<?php
	$pildilink = "/projekt/pildid/"; // Et hiljem kui kataloog muutub oleks kergem muuta.

	$baas_tase_v = sprintf("%d", $baas_tase); // Baasi taseme väljund andmebaasist, et stringina kasutada arrays.
	
	$kirjeldus = array("Teil pole ehitatud baasi.","<p>","TIP: Mida suurem on teie baasi tase seda paremini olete kaitstud ohtude eest. Baasis saate kasvatada toitu,
	valmistada relvi, tööriistu, lõkse, hoiustada oma varustust jne.");	
	
	$baas_level_1 = array("<img src='$pildilink/baas/baas_level_1.png' />","<div class='baasehitised'><b>Ehitised</b></br><b>Baas</b></br>Tase: $baas_tase_v </br>
	Kaitse: 1</br> Ruum:0/10</br>Farm: Puudub</br> Aed: Puudub</br></div> <p>TIP: Tegu on level 1 baasiga millel kaitse on peaaegu olematu, 
	uuendage baasi või ehitage ümber aed, et kaitset suurendada.</p>","<div class='baasvarustus'><b>Varustus</b></br> Voodi: Puudub </br></div>");
	
	$baas_level_2 = array("<img src='$pildilink/baas/baas_level_2.png' />","<div class='baasehitised'><b>Ehitised</b></br><b>Baas</b></br>Tase: $baas_tase_v </br>
	Kaitse: 1</br> Ruum: 0/10</br>Farm: Puudub</br> Aed: Puudub</br></div>","<div class='baasvarustus'><b>Varustus</b></br> Voodi: Puudub </br></div>");

	$havitanupp = "<form method='post'><input class='button' type='submit' value='Hävita' name='havitabaas'></form>";	
?>