<?php include "funciones.php"; 
	$opciones = obtenerItems("menu");
?>
<HTML>
	<HEAD>
		<TITLE>
			proyecto 3
		</TITLE>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="./estilos.css">
	</HEAD>
	<BODY>
		<DIV id="contenedor">
			<div id="menu">
				<ul>
					<li><a href="inicio_sesion.php" target="contenido">Tienda</a></li>
					<?php
						foreach ($opciones as $menu) {
							$texto = $menu["texto"];
							print "<li>$texto</li>";
						}
					?>
				</ul>
			</div>
			<div id="contenido" align=center> 
				<iframe name="contenido" src="contenido.php"></iframe>
			</div>
		</DIV>
	</BODY>
</HTML>
