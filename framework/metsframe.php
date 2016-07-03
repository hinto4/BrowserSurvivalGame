<?php
	// mets näitab kasutajale kas tal on kirves või ei, kui on kirves saab puid kergemini, kirve puudumisel peab oksi otsima.
	// Uus tabel andmebaasi luua nimega kott ning sinna koti sisu teha.
	// kirveid saab craftida tööruumis

	include('info.php');

	echo ('
		<form class="metspuu" method="post">
		<input type="submit" value="" name="raiupuu" />
		</form>
	');

	if(isset($_POST['raiupuu'])) { // Kui on kirves saad rohkem puitu.
		if($energia > 1) {
			$puu = rand(2,4);
			$puitsum = $puit + $puu;
		
			$energiamaha = rand(1,3);
			$energiasum = $energia - $energiamaha;
				
			echo ('<div class="puusum">+ ' . $puu . ' puud' . '</br></div>');
			echo ('<div class="energia">- ' . $energiamaha . ' energiat</div>');
		
			mysqli_query($connect, "UPDATE andmed SET puit=$puitsum WHERE kasutaja='$kasutajanimi'");
			mysqli_query($connect, "UPDATE andmed SET energia=$energiasum WHERE kasutaja='$kasutajanimi'");
			mysqli_close($connect);
		} else {
			echo ('<div class="energia">Energia otsas, palun puhake.</br></div>');
		}
	}	
?>
