<?php include ("php/scripts.php");?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">

<head>
	<title>Administración de Sistemas Informáticos en Red</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.21" />
	<LINK REL=StyleSheet HREF="estilos/menu_principal.css" TYPE="text/css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="js/jquery.cookieConsent.js"></script>
	<script>
	  $(function () {
	    $.cookieConsent();
	  });
	</script>
</head>
<body>
	<div class="menus">
		<div class="menu_principal">
			<ul class="menu">
				<li>ASIR</li>
				<?=paypal()?>
			</ul>
		</div>
	</div>
	<div class="contenido">
		<div class="tema">
			<h1>Administración de Sistemas Informáticos en Red</h1>
			<ul>
				<li><a href="Primero/">Primer curso</a></li>
				<li><a href="Segundo/">Segundo curso</a></li>
			</ul>
		</div>
	</div>
</body>

</html>
