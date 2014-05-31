<?php 
	include "funciones.php";
?>
<html>
<head>
	<title>Examen final Implantación de aplicaciones web</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="./estilos.css">
</head>
<body>
	<div id='contenedor'>
		<div id="barra_horizontal">
			<center><h1>Examen final de "Implantación de aplicaciones Web"</h1></center>
		</div>
		<div id='barra_vertical'>
			<div id='titulo'>
				<h3>TEMAS</h3>
			</div>
			<div id='menu'>
				<ul>
					<li><a href="contenido.php?tipo=coches" target='contenido'>Coches</a></li>
					<li><a href="contenido.php?tipo=ciudades" target='contenido'>Ciudades</a></li>
					<li><a href="contenido.php?tipo=deportes" target='contenido'>Deportes</a></li>
					<li><a href="contenido.php?tipo=animales" target='contenido'>Animales</a></li>

				</ul>
			</div>
			<div id='privada'>
				<p><a href="privada.php" target="contenido">Área Privada</a></p>
			</div>
		</div>
		<iframe id='contenido' name='contenido' src="contenido.php"></iframe>
	</div>
</body>
</html>