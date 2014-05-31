<?php
	echo "<h2><center>TABLAS DE MULTIPLICAR</center></h2>";
	echo "<table border=1><tr><th>*</th>";
	for($tabla=1; $tabla<=10; $tabla++){
			echo "<th>$tabla</th>";
	}
	echo "</tr>";
	for($fila=1; $fila <= 10; $fila++){
			echo "<tr><th>$fila</th>";
			for($columna=1; $columna<=10; $columna++){
					echo "<td>".$fila*$columna."</td>";
					/*
					$valor = $fila*$columna;
					echo $valor;
					echo "</td>";
					*/
			}
			echo "</tr>";
	}
	echo "</table>";
?>
