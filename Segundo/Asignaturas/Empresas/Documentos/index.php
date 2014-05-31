<?php include("../../../../php/paypal.php");?>
<!DOCTYPE html>
<HTML>
	<!-- ------------------------------------------------ C   A   B   E   C   E   R   A -------------------------------------------------------------- -->
	<HEAD>
		<TITLE>ASIR2: EMPRESAS</TITLE> <!-- Establece el título de mi web -->
		<!-- Diferentes opciones del tag META <META HTTP-EQUIV= 
		"Refresh" CONTENT="10"> --><!-- Establece que mi web se 
		actualice cada 10 segundos -->
		<META NAME="keywords" CONTENT="HTML, internet "> <!-- Palabras clave para que los grandes 
		buscadores como Google, puedan identificar mi web --> 
		<META NAME="description" CONTENT="Manual para escribir HTML.">
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<!-- Una breve descripción que los buscadores mostrarán -->
		<LINK REL=StyleSheet HREF="../../../../estilos/menu_principal.css" TYPE="text/css">
		<LINK REL=StyleSheet HREF="../Ajustes/estilos.css" TYPE="text/css">
		<script type="text/javascript" src="../Ajustes/scripts.js"></script>
		<script type="text/javascript" src="../../../../estilos/scripts.js"></script>
		<?php include('../Ajustes/funciones.php');?>
		<?php #$ejemplo_html_numero = 1;?>
		<?php #$ejemplo_php_numero = 1;?>
		<?php $ejemplo_numero = 1;?>
</HEAD>
<!----------------------------------------------------------------------
CUERPO
----------------------------------------------------------------------->
<BODY onload="resolucion();">
<!----------------------------------------------------------------------
MENUS
----------------------------------------------------------------------->
<div class="menus">
	<div class="menu_principal">
		<ul class="menu">
			<li><a href="../../../../">ASIR</a></li>
			<li><a href="../../../">SEGUNDO</a></li>
			<li><a href="../../">ASIGNATURAS</a></li>
			<li>EMPRESAS</li>
			<?=paypal()?>
		</ul>
	</div>
	<div class="menu_asignatura">
		<ul class="menu">
			<li><a href="../index.html">Índice</a></li>
		</ul>
	</div>
</div>
<!----------------------------------------------------------------------
FIN MENUS
----------------------------------------------------------------------->
<div class="contenido">
<!----------------------------------------------------------------------
TEMA N
-----------------------------------------------------------------------
<a name="teman"></a>
<div class="tema">
<H1>N. Título</H1>

</DIV>
----------------------------------------------------------------------
FIN TEMA N
----------------------------------------------------------------------->

<!----------------------------------------------------------------------
TEMA 1 
----------------------------------------------------------------------->
<!------ INSERTAR EJEMPLOS------------------------------------------
	<?php #echo incluir_ejemplo_html(null);?>
	<?php #echo incluir_ejemplo_php(null);?>
---------------------------------------------------------------------->

<a name="tema1"></a>
<?php print_r($_POST); ?>
<div class="tema">
	<H1>CALCULAR NOTAS</H1> 
<?php
function FormularioRegistro(){
	global $grupo, $grupoMensaje, $miembro, $miembroMensaje, $pass1, $pass1Mensaje, $pass2, $pass2Mensaje, $global, $globalMensaje, $max, $maxMensaje, $crearGrupo, $iniciarSesion, $crearUsuario, $verPass2,$verGlobal ,$verMax, $tipoMiembro;
	$formulario = "
	<center><form name='registro' action='./' method='POST'>
		<table>
			<tr><th  align='right'>Grupo: </th><td><input type='text' name='grupo' id='grupo' value='$grupo' onfocus='getEnter()'> <font id='grupoMensaje' color='red'>$grupoMensaje</font></td></tr>
		<tr><th  align='right' id='miembroTH'>$tipoMiembro: </th><td><input type='text' name='miembro' id='miembro' value='$miembro' onfocus='getEnter()'> <font id='miembroMensaje' color='red'>$miembroMensaje</font></td></tr>
		<tr><th  align='right'>Contraseña: </th><td><input type='password' name='pass1' id='pass1' onfocus='getEnter()'> <font id='pass1Mensaje' color='red'>$pass1Mensaje</font></td></tr>
		<tr id='filapass2' $verPass2><th  align='right'>Confirmar Contraseña:</th><td><input type='password' name='pass2' id='pass2' onfocus='getEnter()'> <font id='pass2Mensaje' color='red'>$pass2Mensaje</font></td></tr>
		<tr id='filaglobal' $verGlobal><th  align='right'>Nota Global:</th><td><input type='number' step='0.01' min='0' name='global' id='global' value='$global' onfocus='getEnter()'> <font id='globalMensaje' color='red'>$globalMensaje</font></td></tr>
		<tr id='filamax' $verMax><th  align='right'>Nota Máxima:</th><td><input type='number' name='max' step='0.01' min='0' id='max' value='$max' onfocus='getEnter()'> <font id='maxMensaje' color='red'>$maxMensaje</font></td></tr>
		<tr><td colspan='2' align='center'><p>Iniciar Sesión <input type='radio' name='accion' id='iniciarSesion' value='iniciarSesion' $iniciarSesion onclick='ocultarpass2();' onfocus='getEnter()'></p><p> Crear Grupo <input type='radio' name='accion' id='crearGrupo' value='crearGrupo' $crearGrupo onclick='mostrarpass2();'></p> <!--Crear Miembro <input type='radio' name='accion' id='crearUsuario' value='crearUsuario' $crearUsuario onclick='mostrarpass2();'>--></td></tr>
		<tr><td colspan='2' align='center'><input type='button' value='Iniciar Sesión' id='boton' onclick='comprobar();'></td>
		</table>
	</form></center>
	";
	return $formulario;
}
$grupo="";
$grupoMensaje="";
$miembro="";
$miembroMensaje="";
$pass1="";
$pass1Mensaje="";
$pass2="";
$pass2Mensaje="";
$global = "";
$globalMensaje ="";
$max = "";
$maxMensaje = "";
$crearGrupo="";
$crearUsuario="";
$iniciarSesion="checked";
$crearGrupo = "";
$tipoMiembro = "Miembro";
$verPass2 = "style='display: none;'";
$verGlobal = "style='display: none;'";
$verMax= "style='display: none;'";
$admin = false;
if(!isset($_POST['accion'])){ //Si es la primera vez que entramos mostramos el formulario directamente
	//print "Entra en No POST";
	print FormularioRegistro();
} else { //Si ya hemos metido datos...
	//print "Entra en POST";
	$accion=$_POST['accion'];
	$error = false;
	if ( $accion == "iniciarSesion"){ //Iniciamos session
		$grupo=$_POST['grupo'];
		$miembro=$_POST['miembro'];
		$pass1=$_POST['pass1'];
		$global = $_POST['global'];
		$max = $_POST['max'];
		$passenc=md5($pass1);
		//print "Entra en iniciar Sesion";
		$iniciarSesion = "checked";
		$crearGrupo = "";
		$verPass2 = "style='display: none;'";
		$tipoMiembro = "Miembro";
		$Consulta = "SELECT grupo FROM grupos WHERE grupo = '$grupo'";
		//print "<p>$Consulta</p>";
		$resultado = consultarBD($Consulta, false);
		//print_r($resultado);
		if($resultado[0] == ""){ //Si el grupo no existe
			$error = true;
			$grupoMensaje = "No existe el grupo";
		}else{ //Si el grupo existe
			$Consulta = "SELECT	usuarios.nombre, grupos.grupo FROM grupos JOIN usuarios ON (grupos.id = usuarios.grupo) WHERE (grupos.grupo = '$grupo' AND usuarios.nombre = '$miembro')";
			//print "<p>$Consulta</p>";
			$resultado = consultarBD($Consulta, false);
			//print_r($resultado);
			if($resultado[0] == ""){//Si no existe el usuario en el grupo
				$error = true;
				$miembroMensaje = "No existe ese usuario en ese grupo";
			}else{//si existe el usuario en el grupo
				$Consulta = "SELECT	usuarios.nombre, usuarios.admin, grupos.grupo, grupos.id FROM grupos JOIN usuarios ON (grupos.id = usuarios.grupo) WHERE (grupos.grupo = '$grupo' AND usuarios.nombre = '$miembro' AND usuarios.pass = '$passenc')";
				//print "<p>$Consulta</p>";
				$resultado = consultarBD($Consulta, false);
				//print_r($resultado);
				if($resultado[0] == ""){//si la contraseña no es correcta
					$error = true;
					$pass1Mensaje = "Contraseña incorrecta";
				} else { //si la contraseña es correcta
					$id_grupo = $resultado[0]['id'];
					if($resultado[0]['admin'] == 1){
						$admin = true;
						print "<p>Eres administrador</p>";
					} else {
						$admin = false;
						print "<p>No eres administrador</p>";
					}
				}
			}
		}
		if ($error){
			print FormularioRegistro();
		} else {
			print(puntuar($id_grupo, $admin));
		}
	} elseif ($accion == "crearGrupo"){ //Creamos grupo
		//print "Entra en CrearGrupo";
		$grupo=$_POST['grupo'];
		$miembro=$_POST['miembro'];
		$pass1=$_POST['pass1'];
		$global = $_POST['global'];
		$max = $_POST['max'];
		$passenc=md5($pass1);
		$iniciarSesion = "";
		$crearGrupo = "checked";
		$verPass2 = "";
		$tipoMiembro = "Administrador";
		$Consulta = "SELECT grupo FROM grupos WHERE grupo = '$grupo'";
		$resultado = consultarBD($Consulta, false);
		if($resultado[0] != ""){
			$error = true;
			$grupoMensaje = "El grupo ya existe";
		} else {
			$Consulta = "INSERT INTO grupos(grupo,global,max) VALUES('$grupo', $global, $max)";
			print "<p>$Consulta</p>";
			$resultado = consultarBD($Consulta, true);
			$Consulta = "SELECT id from grupos WHERE grupo = '$grupo'";
			$resultado = consultarBD($Consulta, false);
			$id_grupo = $resultado[0]['id'];
			$Consulta = "INSERT INTO usuarios(nombre,grupo,pass,admin) VALUES('$miembro', $id_grupo, '$passenc', 1)";
			$resultado = consultarBD($Consulta, true);
			$admin = true;
		}
		if ($error){
			print FormularioRegistro();
		} else {
			print(puntuar($id_grupo, $admin));
		}
	} elseif ($accion == "Puntuar"){ //Puntuamos 
		print "Puntuaremos";
	} elseif ($accion == "Mostrar Resultados"){ //Resultados 
		print "Mostraremos Resultados"; 
	} elseif ($accion == "Nuevo Miembro"){ //Creamos Usuario 
		print "Crearemos un usuario"; 
	} else { // Creamos Usuario
		print "No controlado";
	}
}


?>


</div>
</div>
	</BODY>
</HTML>
