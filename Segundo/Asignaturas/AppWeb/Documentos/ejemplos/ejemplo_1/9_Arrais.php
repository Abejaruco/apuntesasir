<?php
$numeros = array();
for ($i =0; $i < 100; $i++){
		$numeros[] = rand(10, 99);
}
$cols = 10;
$count = 0;
for($i = 0; $i < 100; $i++){
	if($numeros[$i] < 50){
		print $numeros[$i]." ";
		$count++;
		if($count%$cols == 0){
			print "<br>\n";
		}
	}
}

?>
