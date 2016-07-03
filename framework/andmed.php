<?php
	include ('info.php'); // info.php tegeleb andmete fetchimisega andmebaasist jne... 	

	print('Personaalne </p>');
	print('Staatus: <b>' . $staatus . '</b></br>');
	print('Elud:' . $elud . '</br>');
	print('Energia:' . $energia . '</br>');
	print('Kaal: ' . $kaal . 'kg' . '</br>');
	print('Kott:' . $kott . '</br>');
	print('<p>');
	print('Ressursid </p>');
	print('Kivi: ' . $kivi . '</br>');
	print('Raud: ' . $raud . '</br>');
	print('Puit: ' . $puit . '</br>');
	print('Toit: ' . $toit . '</br>');
	print('<p>');
	print('<a href="logout.php">Välju</a>');
	
	mysqli_close($connect);
?>
