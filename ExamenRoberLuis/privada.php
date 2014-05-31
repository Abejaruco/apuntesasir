<?php
	session_start();
	if(isset($_SESSION['error']) &&  $_SESSION['error'] != ""){
		$mensaje = $_SESSION['error'];
	}else{
		$mensaje = "";
		$_SESSION['error'] = "";
	}
?>
<p>Introudce el número de la Tarjeta de Crédito:</p>
<form name="credito" method="POST" action="procesar.php">
	<input type="text" name="numTarjeta"> <?php print $mensaje; ?>
	<input type="submit" value="Aceptar">
</form>