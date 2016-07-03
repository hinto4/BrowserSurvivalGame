<?php
	$kasutaja = "root";
	$pass = "";
	$db = "game";
	$host = "localhost";
	
	$connect = mysqli_connect($host,$kasutaja,$pass,$db); // mysql ühenduse loomine mysql serveriga
	
	if(mysqli_errno($connect)) { // mysql vea teade.
		echo "Ühendust mysql serveri vahel ei suudatud luua. " . mysqli_connect_error();
	}
?>
