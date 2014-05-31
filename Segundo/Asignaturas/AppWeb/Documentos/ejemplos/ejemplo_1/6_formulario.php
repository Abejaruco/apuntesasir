<?php
	if(isset($_POST['nombre'])){
		$nombre = $_POST['nombre'];
		$pass = $_POST['passwd'];
		if (strtoupper($nombre) == 'ROBER' && $pass == 'Almi123' || 
			strtoupper($nombre) == 'ADMIN' && $pass == 'admin'){
			$fechahora = time();
			print "Hoy es ". date("d/M/Y", $fechahora). " y son las ".date("H:i:s",$fechahora)."<br>";
			$hora = date("G",$fechahora);
			if ($hora <= 7 || $hora>21) {
				print "Buenas noches";
			} elseif ($hora < 12){
				print "Buenos dias";
			} else {
				print "Buenas tardes";
			}
			print "Hola $nombre!. Bienvenido al sistema.";
			exit();
		}else{
			print "Nombre de usuario o contraseña incorrecta";
		}
	}
	?>
	<form method="post" action="6_formulario.php">
		<p>Introduce tu nombre de usuario y contraseña para acceder al sitio:</p>
		<p>Usuario: <input type=text name="nombre"></p>
		<p>Contraseña: <input type=password name="passwd"></p>
		<input type=submit>
	</form>
