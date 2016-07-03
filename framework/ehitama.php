<?php
	include ('info.php');
	
	$pildilink = "/projekt/pildid/"; // Et hiljem kui kataloog muutub oleks kergem muuta.
	// Kustutamisele varsti kui objekt valmis.
	function ehita_baas_nupp($baas_level,$baas_hind,$baas_nupp) { // Ehitamis nupp baasi funktsioon
		echo ("Level " . $baas_level . " baas <img src='/projekt/pildid/andmed/puit.png'/> " . $baas_hind . 
		"<form method='post'><input class='button' type='submit' name='" . $baas_nupp ."' value='Ehita' /></form>");
	}
	// -------------------------------------------------------------------------------------------------------------------------------
	// Kustutamisele varsti kui objekt valmis.
	function ehita_ehitis_nupp($ehitis_level,$ehitis_nimetus,$ehitis_hind,$ehitis_nupp) { // ehitise funktsioon
		echo ("Level " . $ehitis_level .  " " . $ehitis_nimetus . " <img src='/projekt/pildid/andmed/puit.png'/> " . $ehitis_hind . 
		"<form method='post'><input class='button' type='submit' name='" . $ehitis_nupp ."' value='Ehita' /></form>");
	}
	// -------------------------------------------------------------------------------------------------------------------------------
	class ehita { // Ehitamise objekt, ikka veel tegemisel. vaja lisada samuti ehita ehitis peale baasi.
		public $level;
		public $hind;
		public $nupp;
		public $nimetus;
		
		public function __construct($level, $hind, $nupp, $nimetus) {	
			$this -> level = $level;
			$this -> hind = $hind;
			$this -> nupp = $nupp;
			$this -> nimetus = $nimetus;
		}
		
		public function ehita_baas () {
			echo ("Level " . $this->level . " baas <img src='/projekt/pildid/andmed/puit.png'/> " . $this->hind . 
			"<form method='post'><input class='button' type='submit' name='" . $this->nupp ."' value='Ehita' /></form>");
		}
		
		public function ehita_ehitis() {
			echo ("Level " . $this->level .  " " . $this->nimetus . " <img src='/projekt/pildid/andmed/puit.png'/> " . $this->hind . 
			"<form method='post'><input class='button' type='submit' name='" . $this->nupp ."' value='Ehita' /></form>");
		}
	}
	
	

	switch($baas) {
		case 0: // kui baasi pole ehitatud
			//ehita_baas_nupp(1,112,"baas1");
			$baas_1 = new ehita(1,112,"baas1");
			echo $baas_1->ehita_baas();
			break;
		case 1: // kui baas on level 1 ning aeda pole ehitatud.
			//$baas_2 = new ehita(2,1100,"baas_tase_2");
			//echo $baas_2->ehita_baas();
			//ehita_baas_nupp(2,1100,"baas_tase_2");
			ehita_ehitis_nupp(1,"aed",550,"aed1");
			break;
	}
		if(isset($_POST['baas1'])) { // level 1 baasi ehitamine / puidu maha arvestamine / andmete uuendamine.
			$puitmaha = $puit - 112;
			if($puit < 112) {
				print('Teil puuduvad materjalid. </br>');
				print('TIP: Metsast saate puitu! </br>');
			} else {
				mysqli_query($connect,"UPDATE andmed SET puit=$puitmaha WHERE kasutaja='$kasutajanimi'"); 
				mysqli_query($connect,"UPDATE ehitised SET baas=1, baas_tase=1 WHERE kasutaja='$kasutajanimi'");
				mysqli_close($connect);
				header('location: ehita.php');
			}
		}
		if(isset($_POST['baas_tase_2'])) {
			if($baas == 1) {
				if($puit < 1100) {
					print('Pole piisavalt puitu!</br>');
				} else {
					$puitmaha = $puit - 1100;
					mysqli_query($connect,"UPDATE ehitised SET baas=1, baas_tase=2 WHERE kasutaja='$kasutajanimi'");
					mysqli_query($connect,"UPDATE andmed SET puit=$puitmaha WHERE kasutaja='$kasutajanimi'");
					echo('Uuendasite baasi tase 2!');
					header('locaton: ehita.php');
				}
			}

		}
?>
