<p>Introduce el Nombre y la Contraseña de los usuarios a los que  quieres dar de alta en la Base de Datos.</p>
<form action="aniadirUsuarios.php" method="POST">
<table>
<tr><th></th><th>Usuario</th><th>Contraseña</th></tr>
<?php
$numUsuarios = 10;
for($i=1;$i<=$numUsuarios; $i++){
	$nombre = "Usuario".$i."[]";
	print "<tr><td>$i</td><td><input type='text' name='$nombre'></td><td><input type='password' name='$nombre'></td></tr>";
}
?>
</table>
<p><input type="submit" value="Dar de Alta"></p>
</form>
