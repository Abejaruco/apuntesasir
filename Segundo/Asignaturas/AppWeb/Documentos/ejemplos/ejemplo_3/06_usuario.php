<?php
include "funciones.php";
if(!sesionAbierta()){
	header('Location: 04_acceso.php');
	exit();
}
?>
<HTML>
	<HEAD>
		<TITLE>
			proyecto 3
		</TITLE>
		<link rel="stylesheet" type="text/css" href="./02_estilos.css">
	</HEAD>
	<BODY>
		<DIV id="contenedorAdministracion">
			<div id="sesion">
				<ul>
					<li>
						<?php
							print $_SESSION["usuario"];
						?>
					</li>
					<li><a href="cerrarSesion.php">Cerrar Sesión</a></li>
				</ul>
			</div>
			<div id="menuAdministracion">
				<?php
					if(tipoUsuario($_SESSION["usuario"]) == "Administrador"){
						include "menuAdministrador.php";
					} else {
						include "menuUsuario.php";
					}
				?>
			</div>
			<div id="contenidoAdministracion">
				<iframe name="contenidoAdministracion" src="contenidoUsuario.php"></iframe>
			</div>
		</DIV>
	</BODY>
</HTML>
