<?php include("../../php/paypal.php");?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">

<head>
	<title>ASIR2: Asignaturas</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.21" />
	<LINK REL=StyleSheet HREF="../../estilos/menu_principal.css" TYPE="text/css">
</head>
<body>
<div class="menus">
	<div class="menu_principal">
		<ul class="menu">
			<li><a href="../../">ASIR</a></li>
			<li><a href="../">SEGUNDO</a></li>
			<li>ASIGNATURAS</li>
			<?=paypal()?>
		</ul>
	</div>
</div>
<div class="contenido">
<div class="tema">
	<h1>Administración de Sistemas Informáticos en Red</h1>
	<h2>Segundo curso</h2>
	<h4>Asignaturas:</h4>
	<ul>
		<!--
		<li class="bien"><a href="Marcas/">Lenguajes de marcas</a></li>
		<li class="bien"><a href="BBDD/">Sistemas de Gestión de Bases de Datos</a></li>
		<li class="bien"><a href="Hardware/">Fundamentos de Hardware</a></li>
		<li class="bien"><a href="Redes/">Planificación y administración de redes</a></li>
		<li class="mal"><a href="Sistemas/">Implantación de sistemas operativos</a></li>
		-->
		<li class="mal"><a href="AppWeb/">Implantación de Aplicaciones Web</a></li>
		<li class="mal"><a href="Seguridad/">Seguridad y Alta Disponibilidad</a></li>
		<li class="mal"><a href="Sistemas/">Administración de Sistemas Operativos</a></li>
		<li class="mal"><a href="bbdd/">Administación de Bases de Datos</a></li>
		<li class="mal"><a href="servicios/">Servicios de Red e Internet</a></li>
	</ul>
</div>
</div>
</body>

</html>
