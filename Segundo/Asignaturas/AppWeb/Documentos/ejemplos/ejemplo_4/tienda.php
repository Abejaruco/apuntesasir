<?php
include "funciones.php";
if(!sesionAbierta()){
	header('Location: 04_acceso.php');
	exit();
}
?>
<?php
	$usuario__ = str_replace("@", "_", $_SESSION["usuario"]);
	$usuario__ = str_replace(".", "_", $usuario__);
	$nombre_Cookie = "visita$usuario__";
	if (isset($_COOKIE[$nombre_Cookie])){
		$n_vista = $_COOKIE[$nombre_Cookie]+1;
		setcookie($nombre_Cookie, $n_vista, time()+365*24*60*60);
	} else {
		$n_vista = 1;
		setcookie($nombre_Cookie, $n_vista, time()+365*24*60*60);
	}
?>
<HTML>
	<HEAD>
		<TITLE>
			proyecto 3
		</TITLE>
		<link rel="stylesheet" type="text/css" href="./estilos.css">
	</HEAD>
	<BODY>
		<DIV id="contenedorAdministracion">
			<div id="sesion">
				<ul>
					<li>
						<?php
							print $usuario__;
						?>
					</li>
					<li><b>Visita número <?php  print $n_vista;?><b></li>
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
				<iframe name="contenidoTienda" src="lista_articulos.php"></iframe>
			</div>
		</DIV>
	</BODY>
</HTML>
