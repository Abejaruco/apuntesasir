<?php
include "funciones.php";
if(sesionAbierta() && isset($_SESSION["usuario"])){
	header('Location: tienda.php');
}
	$mostrarFormulario = true;
	if(isset($_POST['usuario'])){
		if(!$cn = @mysql_connect($SQL_SERVER, "u468704361_empre", "Almi123")){
			//ERROR	
			print("<p><b><font color='red'>Error al conectar con el servidor: ".mysql_error()."</font></b></p>");
		}else{
			//seleccionar la bd
			if(!($bd=mysql_select_db("u468704361_empre", $cn))){
				print "<p><b><font color='red'>Error. No se puede acceder a la base de datos</font></b></p>";
			}else{
				$usuario = $_POST["usuario"];
				$password = $_POST["passwd"];
				$passenc=md5($password);
				$consulta = "SELECT * FROM usuarios WHERE usuario='".$usuario."' AND Password='".$passenc."'";
				$resultado = mysql_query($consulta, $cn);
				#print_r($consulta);
				if(!$resultado){
					print "<p><b><font color='red'>Error al realizar la consulta</font></b></p>";
				}else{
					if(mysql_affected_rows() == 0){
						print "<p><b><font color='red'>Nombre de usuario o contraseña incorrecta</font></b></p>";
					} else {
						$mostrarFormulario = false;
						$datos = mysql_fetch_assoc($resultado);
						//print_r($datos);
						$nombre = $datos["Nombre"];
						$apellidos = $datos["Apellidos"];
						$_SESSION["usuario"] = $usuario;
						#$_SESSION["Carrito"] = array();
						header('Location: tienda.php');
					}
				}
			}
			mysql_close($cn);
		}
	}
	if ($mostrarFormulario){
?>
<form method="post" action="inicio_sesion.php">
	<p>Introduce tu nombre de usuario y contraseña para acceder al sitio:</p>
	<p>Usuario: <input type=text name="usuario" required></p>
	<p>Contraseña: <input type=password name="passwd" required></p>
	<input type=submit value="Entrar">
</form>
<a href="05_registro.php">Registrarme</a>
<?php
}
?>
