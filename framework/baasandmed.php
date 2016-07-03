<?php
$file = file('info.php');
// -1 for clarity. Array is 0 based, so line 5 is array entry 4
unset($file[5-1], $file[25-1], $file[7-1], $file[11-1]);
file_put_contents('info.php', implode('', $file));
include('info.php');  
	
echo $baas;

?>
