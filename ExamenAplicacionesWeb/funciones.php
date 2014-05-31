<?php
	$SQL_SERVER = "localhost";
	function imprimirArray($array){
		print "<pre>";
		print_r($array);
		print "</pre>";
	}
	function getListaFotos($tipo){
		if(!$cn = @mysql_connect($SQL_SERVER, "root", "")){
					//ERROR	
					print "Error servidor: 	".mysql_error();
					return false;
		}else{
			//seleccionar la bd
			mysql_set_charset('utf8');
			if(!(mysql_select_db("examen", $cn))){
				print "Error base de datos";
				return false;
			}else{
				$consulta="SELECT  nombre FROM fotos where tipo='$tipo'";
				$resultado = mysql_query($consulta, $cn);
				while($fila = mysql_fetch_assoc($resultado)){
					$listaFotos[] = $fila;
				}
				mysql_close($cn);
				return $listaFotos;
			}
		}
	}
	function getFotos($listaFotos){
		$fotos = "";
		foreach ($listaFotos as $foto) {
			$archivo = $foto['nombre'];
			$fotos .= "<div style='float: left; margin: 5px;'>\n";
			#$fotos .= 	"\t<table><tr>\n";
			#$fotos .= 		"\t\t<td>";
			$fotos .=			"\t\t\t<image src='Imagenes/$archivo' height=200px> $archivo\n";
			#$fotos .= 	"\t</table>\n";
			$fotos .= "</div>\n";
		}
		return $fotos;
	}
?>
