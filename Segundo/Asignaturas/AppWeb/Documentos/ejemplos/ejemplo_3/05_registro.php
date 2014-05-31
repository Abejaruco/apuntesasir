
<?php
$dominio = $_SERVER['HTTP_HOST'];
if($dominio == "apuntesasir.tk"){
	$SQL_SERVER = "mysql.hostinger.es";
} else {
	$SQL_SERVER = "localhost";
}
$anio_actual=date("Y");
$min=$anio_actual-75;
$max=$anio_actual-18;
$usuarioMensaje = "";
$usuario = "";
$nombreMensaje = "";
$nombre="";
$apellidosMensaje = "";
$apellidos="";
$pass1Mensaje = "";
$pass1="";
$pass2Mensaje = "";
$pass2="";
$anioMensaje = "";
$anio=$anio_actual-35;
$sexoMensaje = "";
$sexo="";
$masculino="";
$femenino="";
$aficionesMensaje = "";
$cine = "";
$television = "";
$lectura = "";
$juegos = "";
$comentariosMensaje = "";
$comentarios = "";
$errores = false;
$mostrarFormulario = True;
//print_r($_POST);
if(isset($_POST["usuario"])){ 
	$usuario=$_POST["usuario"];
	if(trim($usuario) == ""){
		$usuarioMensaje = "Campo requerido";
		$errores = true;
	}
	$nombre=$_POST["nombre"];
	if(trim($nombre) == ""){
		$nombreMensaje = "Campo requerido";
		$errores = true;
	}
	$apellidos=$_POST["apellidos"];
	$pass1=$_POST["pass1"];
	if(trim($pass1) == ""){
		$pass1Mensaje = "Campo requerido";
		$errores = true;
	}
	$pass2=$_POST["pass2"];
	if(trim($pass2) == ""){
		$pass2Mensaje = "Campo requerido";
		$errores = true;
	}
	if(trim($pass1)!=trim($pass2)){
		$pass1Mensaje = "Las contraseñas no coinciden";
		$errores = true;
	}
	$anio=$_POST["anio"];
	$sexo=$_POST["sexo"];
	if(trim($sexo) == ""){
		$sexoMensaje = "Campo requerido";
		$errores = true;
		$masculino="";
		$femenino="";
	} elseif($sexo == "m"){
		$masculino="checked";
		$femenino="";
	} else {
		$masculino="";
		$femenino="checked";
	}
	$aficiones=$_POST["aficiones"];
	if(isset($_POST['aficiones'])){
		if (in_array("cine", $aficiones)){
			$cine = "checked";
		} else {
			$cine = "";
		}
		if (in_array("television", $aficiones)){
			$television = "checked";
		} else {
			$television = "";
		}
		if (in_array("lectura", $aficiones)){
			$lectura = "checked";
		} else {
			$lectura = "";
		}
		if (in_array("juegos", $aficiones)){
			$juegos = "checked";
		} else {
			$juegos = "";
		}
	} else {
		$aficionesMensaje = "Hay que elegir por lo menos una afición";
		$errores = true;
	}
	$comentarios=$_POST["comentarios"];
	if (!$errores){
		if(!$cn = @mysql_connect($SQL_SERVER, "u468704361_empre", "Almi123")){
			//ERROR	
			print("<p><b><font color='red'>Error al conectar con el servidor</font></b></p>");
		}else{
			//seleccionar la bd
			if(!($bd=mysql_select_db("asir2", $cn))){
				print "<p><b><font color='red'>Error. No se puede acceder a la base de datos</font></b></p>";
			}else{
				$passenc=md5($pass1);
				$consulta = "SELECT * FROM usuarios WHERE usuario='".$usuario."' AND Password='".$passenc."'";
				$resultado = mysql_query($consulta, $cn);
				if(!$resultado){
					print "<p><b><font color='red'>Error al realizar la consulta</font></b></p>";
				}else{
					if(mysql_affected_rows() == 1){
						print "<p><b><font color='red'>Nombre de usuario ya existe en la Base de Datos</font></b></p>";
					} else {
						$pwd = md5($pass1);
						if($cine==""){
							$cine = false;
						}else{
							$cine = true;
						}
						if($television==""){
							$television = false;
						}else{
							$television = true;
						}
						if($lectura==""){
							$lectura = false;
						}else{
							$lectura = true;
						}
						if($juegos==""){
							$juegos = false;
						}else{
							$juegos = true;
						}
						$consulta="INSERT INTO usuarios VALUES('$usuario','$nombre', '$apellidos', '$pwd', '$anio', '$sexo', '$cine', '$television', '$lectura', '$juegos', '$comentarios', 'Usuario')";
						if(!mysql_query($consulta,$cn)){
								print "Error al intentar añadir";
						} else {
							print("Usuario registrado con éxito. Haz click <a href='04_acceso.php'>aquí</a> para acceder.");
							header('Location: 04_acceso.php');
							//header("refresh:5;url=04_acceso.php");
							$mostrarFormulario = False;
						}
					}
				}
			}
			mysql_close($cn);
		}
		
	}
		
}
if($mostrarFormulario){
?>
<h1>Registro de nuevos usuarios</h1>
<form method="post" action="05_registro.php">
	<p>Usuario*: <input type="text" name="usuario" value="<?php print $usuario ?>"><font color="red"><?php print $usuarioMensaje ?></font></p>
	<p>Nombre*: <input type="text" name="nombre" value="<?php print $nombre ?>"><font color="red"><?php print $nombreMensaje ?></font></p>
	<p>Apellidos: <input type="text" name="apellidos" value="<?php print $apellidos ?>"><font color="red"><?php print $apellidosMensaje ?></font></p>
	<p>Contraseña*: <input type="password" name="pass1" value="<?php print $pass1 ?>"><font color="red"><?php print $pass1Mensaje ?></font></p>
	<p>Confirmar Contraseña*: <input type="password" name="pass2" value="<?php print $pass2 ?>"><font color="red"><?php print $pass2Mensaje ?></font></p>
	<p>Año de Nacimiento: <input type="number" name="anio" value="<?php print $anio ?>" min=<?php print $min ?> max=<?php print $max ?> required ><font color="red"><?php print $anioMensaje ?></font></p>
	<p>Sexo*: <font color="red"><?php print $sexoMensaje ?></font></p>
	<p><input type="radio" name="sexo" value="m" <?php print $masculino ?>>Masculino</p>
	<p><input type="radio" name="sexo" value="f" <?php print $femenino ?>>Femenino</p>
	<p>Aficiones*: <font color="red"><?php print $aficionesMensaje ?></font></p>
	<p><input type="checkbox" name="aficiones[]" value="cine" <?php print $cine ?>>Cine</p>
	<p><input type="checkbox" name="aficiones[]" value="television" <?php print $television ?>>Televisión</p>
	<p><input type="checkbox" name="aficiones[]" value="lectura" <?php print $lectura ?>>Lectura</p>
	<p><input type="checkbox" name="aficiones[]" value="juegos" <?php print $juegos ?>>Juegos</p>
	<p>Comentarios: <font color="red"><?php print $comentariosMensaje ?></font></p>
	<p><textarea name="comentarios" cols=70 rows=5><?php print $comentarios ?></textarea></p>
	<p><input type="submit" value="Enviar"></p>
</form>	
<?php
}
?>
