<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> Mängu projekt </title>
        <link rel="stylesheet" type="text/css" href="style.css">	
</head>

<body>
	<div id="logo">
		<h1><a href="index.php">Projekt</a></h1>
		<p>Survival v0.0</p>
	</div>
	<div id="peamenu">
		<ul>
			<li><a href="#">Uuendused</a></li>
			<li><a href="#">Foorum</a></li>
			<li><a href="#">Tugiteenus</a></li>
			<li><a href="devblog">Devblog</a><li>
		</ul>
	</div>
<?php
	if(isset($_SESSION['user'])) {	
?>
<!-- Kasutaja on sisse loginud kuvab... -->
	
	<div id="tervitus">
		<?php print ('Sisse logituna:  <b>' . $_SESSION['user'] . '</b></br>')?>
	
	</div>

	<div id="andmed">
		<b>Andmed</b></p>
		<?php 
			include('framework/andmed.php');
		?>
	</div>
	<div id="menu">
		<ul>
			<li><a href="kaart.php">Kaart</a></li>
			<li><a href="kott.php">Kott</a></li>
			<li><a href="ehita.php">Ehita</a></li>
			<li><a href="baas.php">Baas</a></li>
		</ul>		
	</div>
<?php } else { ?>
<!-- Kasutaja on välja loginud kuvab koodi... -->	
	<div id="login"> <!-- Sisse logimis süsteem... -->
		<form action="login.php" method="post">
			<div class="kasutaja"> Kasutaja <input type="text" size="20" name="kasutaja"></div>
			<div class="parool"> Parool <input type="password" size="20" name="parool"></div>
		<input class="button" type="submit" value="Sisene">
		</form>
	</div>
	<div id="sissejuhatus">
		<p>
			"Projekt Survival" brauseri põhiline mäng. Aasta 2025, inimkond on hukas kuna terroristid lasid liikvele viiruse, mis
			muudab inimesed verejanulisteks! Ellujäämiseks tuleb leida ressursse, näiteks elamutest, poodidest, tanklatest ning teistest tööstustest.
			</br>Ehita endale võimas baas ning leia ellujäänuid kellega koos efektiivsemalt hakkama saada!
			Arvestada tuleb ka populatsiooniga, mida rohkem inimesi seda rohkem toitu kulub, inimesi tuleb kontrolli all hoida.
			Zombid on teie suurim oht kes jahivad teid nii öösel kui ka päeval kes on valmis tegema kõik, et inimkond hukka saata.
			Samuti tuleb ette vaadata bandiitide eest, kes teie ressursse endale tahavad!</br>
			</br>
			NB!</br>
			Registreerimist hetkel ei toimu, et uuendustega kursis olla vaadake <b>DevBlogi</b>.</br>
		</p>				
	</div>

<?php } ?>
</body>
</html>
