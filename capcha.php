<?php 

$array = array("0","1","2","3","4","5","6","7","8","9","Q","W","R","Y","U","I","S","D","F","G","J","L","Z","V","N");

shuffle($array);

$result = array_rand($array, 6);

for($i = 0; $i < 6; $i++){
	echo $array[$i];
}

?>