<h2>Mi Galería de Fotos:</h2>
<?php
if ($gestor = opendir('./imagenes')) {
	$cols = 4;
	$count = 0;
	$nombres = array();
	print "<table border=1>\n";
    while (($archivo = readdir($gestor)) != false ) {
		if ($archivo != "." && $archivo != ".."){
			if ($count % $cols == 0){
				print "\t<tr>\n";
			}
			print "\t\t<td><a href='./imagenes/$archivo' target='_blank'><img src='./imagenes/$archivo' width=170></a></td>\n";
			$nombres[] = $archivo;
			$count ++;
			if ($count%$cols == 0){
				print "\t</tr>\n";
				print "\t<tr>\n";
				$inicio = $count - $cols;
				for ($i= $inicio; $i < $count; $i ++){
					$nombre_ = $nombres[$i];
					print "\t\t<td align=center><a href='./imagenes/$nombre_' target='_blank'>$nombre_</a></td>\n";
				}
				print "\t</tr>\n";
				
			}
		}
	}
	if ($count%$cols != 0){
		print "\t</tr>\n";
		print "\t<tr>\n";
		$inicio = $count - $count%$cols;
		for ($i= $inicio; $i < $count; $i ++){
			$nombre_ = $nombres[$i];
			print "\t\t<td align=center><a href='./imagenes/$nombre_' target='_blank'>$nombre_</a></td>\n";
		}
		print "\t</tr>\n";
	}
	
    print "</table>\n";
    closedir($gestor);
}
?>
