<?php
function crearCampo($miembro){
	$campo = "<td>$miembro:</td><td><input type='number' name='nota$miembro' min='0' max='10' required></td>";
	return $campo;
}
$miembros = array('Mikel', 'Julen', 'Jon', 'Kevin', 'Luis', 'Andoni', 'Jose', 'Andrea');
print "<form target='index.php' method='POST'><table>";
print "<tr><td>Nota Global:</td><td><input type='number' name='notaGlobal' min='0' max='80' required></td></tr>";
print "<tr><td>Nota Máxima:</td><td><input type='number' name='notaMaxima' min='0' max='10'required></td></tr>";
print "<tr><td> </td></tr>";
print "<tr><td> </td></tr>";
print "<tr><td> </td></tr>";
foreach($miembros as $miembro){
	print "<tr>";
	print crearCampo($miembro);
	print "</tr>";
}
print "<tr><td colspan='2'><input type='submit' value='    Puntuar    '></td></tr>";
print "</table>";
print "</form>";
?>
