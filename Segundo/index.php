<?php include("../php/paypal.php");?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
	<title>ASIR: SEGUNDO</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.21" />
	<LINK REL=StyleSheet HREF="../estilos/menu_principal.css" TYPE="text/css">
</head>

<body>
	<div class="menus">
		<div class="menu_principal">
			<ul class="menu">
				<li><a href="../">ASIR</a></li>
				<li>SEGUNDO</li>
				<?=paypal()?>
			</ul>
		</div>
	</div>
	<div class="contenido">
		<div class="tema">
			<h1>Administración de Sistemas Informáticos en Red</h1>
			<h2>Segundo curso</h2>
			<h4>Contenido</h4>
			<ul>
				<!--
				<li><a href="Documentos/informacion.pdf">Información del curso</a></li>
				<li><a href="Documentos/calendario_examenes.html">Calendario de exámenes</a></li>
				-->
				<li><a href="Documentos/ASIR_2_2013-14.pdf" target="_blank">Horario</a></li>
				<li><a href="Asignaturas/">Asignaturas</a></li>
			</ul>
		</div>
	</div>
</body>

</html>
