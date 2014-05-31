<?php
ini_set('display_errors', '1');
?>
<?php include("../../../../php/paypal.php");?>
<!DOCTYPE html>
<HTML>
	<!-- ------------------------------------------------ C   A   B   E   C   E   R   A -------------------------------------------------------------- -->
	<HEAD>
		<TITLE>ASIR2: SERVICIOS DE RED E INTERNET</TITLE> <!-- Establece el título de mi web -->
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
			<li>SERVICIOS DE RED E INTERNET</li>
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
<a name="correo"></a>
<div class="tema">
	<h1>Correo</h1>
<p>Primero instalar bind9</p>
<p>Luiego crear la zona en bind9</p>
<p>Creamos un registro MX para el servidor de correo:</p>
<pre>@	IN	MX	10	mail.asir2.com.</pre>
<pre>mail	A	127.0.0.1</pre>
<p>Comprobamos /etc/resolv.conf y reiniciamos bind9</p>
<p>Comprobamos que funciona haciendo:</p>
<pre>nslookup</pre>
<pre>server 127.0.0.1</pre>
<pre>set q=MX</pre>
<pre>asir2.com</pre>
<p>Instalamos apache</p>
<p>Intalamos postfix, protocolo para smtp:</p>
<pre># apt-get install postfix</pre>
<p>Marcamos "Sitio de Internet"</p>
<p>En nombre del servidor ponemos el dominio "asir2.com"</p>
<p>Editamos el archivo de configuración de posftifx "/etc/postfix.main.cf" y cambiamos:</p>
<pre>mydestination = asir2.com</pre>
<pre>home_mailbox = Maildir/</pre>
<p>guardamos y reiniciamos postfix</p>
<pre># service postfix restart</pre>
<p>Ahora instalamos el POP3</p>
<pre>apt-get install courier-pop</pre>
<p>Cuando pregunta "Desea crear los directorios para la administración basado en web?" decimos que NO</p>
<p>Instalamos imap:</p>
<pre># apt-get install courier-imap</pre>
<p>Ahora intalamos mailutils:</p>
<pre>apt-get install mailutils</pre>
<p>Ahora hay que crear el entorno web para utilizar el correo.</p>
<pre>apt-get install squirrelmail</pre>
<p>Nos movemos a /var/www/ y creamos un acceso directo</p>
<pre>ln -s /usr/share/squirrelmail/ webmail</pre>
<p>Creamos un usuario</p>
<pre>useradd webmail</pre>
<pre> passwd webmail</pre>
<p>Ahora creamos el perfil. Para ello nos movemos a /home/</p>
<pre>mkdir webmail</pre>
<pre>cd webmail</pre>
<pre>maildirmake Maildir</pre>
<p>Ahora cambiamos los permisos</p>
<pre>chmod 777 -R Maildir/</pre>
<pre>chown webmail.webmail Maildir/ -R</pre>
<p>Ahora ya podemos entrar en /127.0.0.1/webmail con el nombre de usuario y contraseña que hemos creado. Con esto podemos enviar, pero no recibir. Ahora hay que configurar squirrermail para recibir.</p>
<pre>squirrelmail-configure</pre>
<p>Ahora elejimos la D.  y escribimos courier y pulsamos enter.</p>
<p>Ahora elegimos "2.  Server Settings" y luego "1.  Domain" y escribimos "asir2.com"</p>




</div>
<a name="Zarafa"></a>
<div class="tema">
<H1>Zarafa</H1>
	<p>Zafara es un sofware colaborativo estilo Zimbra que ofrece servicios como gestion de correo y calendarios.</p>
	<a name="Instalación"></a>
	<h2>Instalación</h2>
		<p>Todos los pasos los vamos a ejecutar como super usuario, para eso ejecutamos:</p>
		<pre>$ sudo -s</pre>
		<p>Primero hay que asegurarse de que esté definido el idioma del sistema, para eso hacemos:</p>
		<pre>
# locale-gen es_ES es_ES.UTF-8
# dpkg-reconfigure locales</pre>
		<p>Zarafa necesita para funcionar tener instalados los siguietes paquetes:</p>
		<ul>
			<li>mysql-server</li>
			<li>apache2</li>
			<li>postfix</li>
		</ul>
		<p>Podemos instalarlos mediante: </p>
		<pre># apt-get install mysql-server apache2 postfix</pre>
		<p>O, ya que mysql-server y apache2 son parte de lamp, podemos instalar lamp y así tenerlo más completo. Ejecutamos:</p>
		<pre># apt-get install lamp-server^ phpmyadmin postfix</pre>
		<p><a href="http://www.zarafa.com/wiki/index.php/Installing_Zarafa_from_packages" target="_blank">Guía de instalación</a></p>
		
		<p>Se pueden instala diferentes versiones, pero la última la he probado y da errores. La que no da errores es la 7.1.4</p>
		<p>La descargamos para 64 bits mediante:</p>
		<pre># wget http://download.zarafa.com/community/final/7.1/7.1.4-41394/zcp-7.1.4-41394-ubuntu-12.04-x86_64-free.tar.gz</pre>
		<p>Y para 32 bits mediante:</p>
		<pre># wget http://download.zarafa.com/community/final/7.1/7.1.4-41394/zcp-7.1.4-41394-ubuntu-12.04-i386-free.tar.gz</pre>
		<p>Descomprimimos:</p>
		<pre># tar -zxf zcp-7.1.4-41394-ubuntu-12.04-x86_64-free.tar.gz</pre>
		<p>Para la versión de 32 bits cambiar el nombre del archivo.</p>
		<p>Nos movemos a la carpeta extraida:</p>
		<pre># cd zcp-7.1.4-41394-ubuntu-12.04-x86_64</pre>
		<p>Ahora ejecutamos el escript de instalación:</p>
		<pre># ./install.sh</pre>
		<!--
		<p>Ahora instalamos Zarafa siguiendo <a href="http://www.zarafa.es/wiki/index.php/Installing_Zarafa_from_packages" target="_blank">esta guía</a></p>
		<p>Se pueden instala diferentes versiones, pero la última la he probado y da errores. La que no da errores es la 7.1.4</p>
		<p>La descargamos para 64 bits mediante:</p>
		<pre># wget http://download.zarafa.com/community/final/7.1/7.1.4-41394/zcp-7.1.4-41394-ubuntu-12.04-x86_64-free.tar.gz</pre>
		<p>Y para 32 bits mediante:</p>
		<pre># wget http://download.zarafa.com/community/final/7.1/7.1.4-41394/zcp-7.1.4-41394-ubuntu-12.04-i386-free.tar.gz</pre>
		<p>Descomprimimos:</p>
		<pre># tar -zxf zcp-7.1.4-41394-ubuntu-12.04-x86_64-free.tar.gz</pre>
		<p>Para la versión de 32 bits cambiar el nombre del archivo.</p>
		<p>Nos movemos a la carpeta extraida:</p>
		<pre># cd zcp-7.1.4-41394-ubuntu-12.04-x86_64</pre>
		<p>Intalamos las librerias necesarias:</p>
		<pre># dpkg -i lib*</pre>
		<p>Intalamos los paquetes:</p>
		<pre># dpkg -i zarafa*</pre>
		<p>Si nos salen errores de prerequisitos ejecutamos:</p>
		<pre># apt-get install -f</pre>
		-->
		
</div>
<a name="OwnCloud"></a>
<div class="tema">
<H1>OwnCloud</H1>
<p>Tenemos que tener intalado un servidor web. Para ello:</p>
<pre># apt-get install lamp-server^</pre>
<p>Intalamos los prerequisitos:</p>
<pre> # apt-get install php5-json php-xml-rpc zip php5-gd</pre>
<pre> # apt-get install php5-sqlite curl libcurl3 libcurl3-dev php5-curl</pre>
<p>Descargamos los archivos de <a href="www.owncloud.org/install" target="blank"> aquí</a>, elegimos la versión tar para unix.</p>
<p>Creamos una base de datos para owncloud como queramos. Lo más fácil es con phpmyadminin.</p>
<p>Cipamos el archivo descargado a /var/www, lo descomprimimos y cambiamos los permisos:</p>
<pre> # cp owncloud-6.0.0a.tar.bz2 /var/www</pre>
<pre> # tar -xvf /var/www/owncloud-6.0.0a.tar.bz2</pre>
<pre> # chown www-data.www-data /var/www/owncloud -R</pre>
<p>Editamos el archivo /etc/apache/sites-enabled/000-default</p>
<p>En < Directoty /var/www/ > cambiamos la opción "AllowOverride" y ponemos "All" y recargamos:</p>
<pre> # a2enmod rewrite</pre>
<pre> # a2enmod headers</pre>
<p>Creamos una carpeta donde vamos a guardar los datos, por ejemplo en /home/owncloud/datos y cambiamos el propietario:</p>
<pre> # chown www-data.www-data /home/owncloud/datos -R</pre>
<h3>Limitar el tamaño de los archivos a subir</h3>
<p>Editamos el archivo "/etc/php5/apache2/php.ini" y cambiamos el tamaño máximo del archivo que queremos subir. Para esto buscamos y cambiamos las siguientes variables:</p>
<ul>
	<li><b>upload_max_filesize = 100M</b>. Tamaño máximo del archivo a subir.</li>
	<li><b>post_max_size = 200M</b> Tamaño máximo de la variable POST. Para que funcione bien tiene que ser mínimo el doble que el anterior.</li>
</ul>
<h2>OwnCloud en https</h2>
<pre>a2endmod ssl</pre>
<pre>a2ensite default-ssl</pre>
<pre>service apache2 restart</pre>
</div>


<a name="Asterix"></a>
<div class="tema">
<H1>Asterix</H1>



</div>
<a name="edicion"></a>
<font color=red>Editando...</font>
</div>
	</BODY>
</HTML>
