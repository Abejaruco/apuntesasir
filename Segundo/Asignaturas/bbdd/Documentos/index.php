<?php
ini_set('display_errors', '1');
?>
<?php include("../../../../php/paypal.php");?>
<!DOCTYPE html>
<HTML>
	<!-- ------------------------------------------------ C   A   B   E   C   E   R   A -------------------------------------------------------------- -->
	<HEAD>
		<TITLE>ASIR2: ADMINISTRACIÓN DE BASES DE DATOS</TITLE> <!-- Establece el título de mi web -->
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
			<li>ADMINISTRACIÓN DE BASES DE DATOS</li>
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

<a name="MySQL"></a>
<div class="tema">
<H1>MySQL</H1>
<h2>Archivos de MySQL</h2>
<p>MySQL guarda las bases de datos en la ruta /var/lib/mysql/</p>
<p>Dentro de esta carpeta crea una carpeta por cada Base de Datos</p>
<ul>
	<li>Las tablas, formularios... las guarda como *.frm</li>
	<li>Los datos los guarda como *.myd</li>
	<li>Los índices los guarda como *.myi</li>
</ul>
<a name="Conexíon Segura en MySQL"></a>
<H2>Conexíon Segura en MySQL</H1>
<a name="CREAR CERTIFICADOS SSL PARA MySQL"></a>
<h3>CREAR CERTIFICADOS SSL PARA MySQL</h3>
	<a name="Servidor"></a>
	<h4>Servidor</h4>
		<h5>Clave privada general</h5>
			<pre># openssl genrsa 2048 > ca-key.pem</pre>
		<h5>Certificado general</h5>
			<pre># openssl req -new -x509 -nodes -days 1000 -key ca-key.pem > ca-cert.pem</pre>
		<h5>Clave privada Servidor</h5>
			<pre># openssl req -newkey rsa:2048 -days 1000 -nodes -keyout server_key.pem > server-req.pem</pre>
		<h5>Certificado Servidor</h5>
			<pre># openssl x509 -req -in server-req.pem -days 1000 -CA ca-cert.pem -CAkey ca-key.pem -set_serial 01 > server-cert.pem</pre>
	<a name="Clientes"></a>
	<h4>Clientes</h4>
		<h5>Clave privada</h5>
			<pre># openssl req -newkey rsa:2048 -days 1000 -nodes -keyout jaa_key.pem > jaa-req.pem</pre>
		<h5>Certificado</h5>
			<pre># openssl x509 -req -in jaa-req.pem -days 1000 -CA ca-cert.pem -CAkey ca-key.pem -set_serial 01 > jaa-cert.pem</pre>
<a name="Añadir las Claves privadas y los certificados de los clientes al servidor"></a>
<h3>Añadir las Claves privadas y los certificados de los clientes al servidor</h3>
		<p>Hay que tener instalado el servidor y el cliente de mysql:</p>
		<pre># apt-get install mysql-server mysql-client</pre>
		<pre># mysqld --ssl-ca=ca-cert.pem --ssl-cert=server-cert.pem --ssl-key=server_key.pem</pre>
<a name="Crear los usuarios jaa y pepe"></a>
<h3>Crear los usuarios jaa y pepe</h3>
		<pre># adduser jaa</pre>
		<pre># adduser pepe</pre>
<a name="Crear los usuarios en MySQL"></a>
<h3>Crear los usuarios en MySQL</h3>
		<pre># mysql -u root -p</pre>
		<pre>mysql> grant all privileges on *.* to 'jaa'@'%' identified by 'Almi123';</pre>
		<pre>mysql> grant all privileges on *.* to 'pepe'@'%' identified by 'Almi123';</pre>
		<pre>mysql> quit</pre>
<a name="Conectar a MySQL a través de SSL de Nivel 1"></a>
<h3>Conectar a MySQL a través de SSL de Nivel 1:</h3>
		<p>Se usa un certificado general que está instalado en el propio servidor, por lo que no 
		hacer falta que el cliente tenga el certificado en su equipo.<br>Se puede entrar en MySQL sin usar certificados.</p>
		<pre># mysql --ssl-ca=ca-cert.pem -u jaa -p -h 192.168.1.141</pre>
		<pre>mysql> quit</pre>
		<pre># mysql --ssl-ca=ca-cert.pem -u pepe -p -h 192.168.1.141</pre>
		<pre>mysql> quit</pre>
<a name="Conectar a MySQL a traves de SSL de Nivel 2"></a>
<h3>Conectar a MySQL a traves de SSL de Nivel 2:</h3>
		<p>Obliga al cliente a clumpir una de las siguientes dos condiciones:</p>
		<ul>
			<li>Presentar el certificado CA con el que el cliente valida el servidor.</li>
			<li>Validad un certificado firmado por el CA, es decir, utilizando su clave privada.</li>
		</ul>
		<p>NO se puede entrar en MySQL sin cumplir una de las dos condiciones.</p>
		<pre># mysql -u root -p</pre>
		<pre>mysql> grant all privileges on *.* to 'pepe'@'%' REQUIERE SSL;</pre>
		<pre>mysql> flush privileges;</pre>
<a name="Conectar a MySQL a traves de SSL de Nivel 3"></a>
<h3>Conectar a MySQL a traves de SSL de Nivel 3:</h3>
		<p>Este se aplica del lado del servidor.</p>
		<p>Lo que vamos a hacer es decirle al servidor que sólo acepte al usuario 'jaa' firmado por el certificado CA (ca-cert.pem).</p>
		<p>Consultamos el issuer para el usuario 'jaa':</p>
		<pre># openssl x509 -in jaa-cert.pem -noout -issuer</pre>
		<p>En este caso devuelve:</p>
		<pre>issuer= /C=br/ST=bizkaia/L=deusto/O=atunes julian/OU=juli/CN=Julian/emailAddress=julian@atunes.com</pre>
		<p>Ahora aplicamos la restricción dentro del servidor mysql:</p>
		<pre># mysql -u root -p</pre>
		<pre>mysql> GRANT ALL PRIVILEGES ON *.* TO 'jaa'@'%' identified by 'Almi123' REQUIRE ISSUER '/C=br/ST=bizkaia/L=deusto/O=atunes julian/OU=juli/CN=Julian/emailAddress=julian@atunes.com';</pre>
		<pre>mysql> flush privileges;</pre>
		<p>Para conectarnos usamos:</p>
		<pre># mysql --ssl-ca=ca-cert.pem --ssl-cert=jaa-cert.pem --ssl-key=jaa_key.pem -u jaa -h 192.168.1.141</pre>

<a name="Copias de Seguridad"></a>
<H2>Copias de Seguridad</H1>
<h3>Crear Copias de Seguridad de todas las BBDD</h3>
<p>Par hacer copias de seguridad podemos hacerlo de diferentes formas:</p>
<ul>
	<li>Usando tar:</li>
	<pre># tar -czvf /home/usuario/mysqlBackup.tar.gz /var/lib/mysql/</pre>
	<li>Usando zip:</li>
	<pre># zip -r /home/usuario/mysqlBackup /var/lib/mysql/</pre>
	<li>Usando rsync:</li>
	<pre># rsync -r /var/lib/mysql/ /home/usuario/mysqlBackup</pre>
	<li>Usando cp:</li>
	<pre># cp -r /var/lib/mysql/ /home/usuario/MySQL_BackUp/mysqlBackup</pre>
</ul>
<h3>Restaurar Copias de Seguridad de todas las BBDD</h3>
<p>Primero hay que parar el servicio:</p>
<pre># service mysql stop</pre>
<p>Luego borramos el contenido de la carpeta /var/lib/mysql/</p>
<pre># rm -r /var/lib/mysql/*</pre>
<p>Restauramos:</p>
<ul>
	<li>Usando cp:</li>
	<pre># cp -r /home/usuario/MySQL_BackUp/mysqlBackup/* /var/lib/mysql/</pre>
	<pre># chown -R mysql.mysql /var/lib/mysql</pre>
	<li>Usando tar:</li>
	<pre># tar xCzv / -f /home/usuario/mysqlBackup.tar.gz</pre>
	<li>Usando zip:</li>
	<pre>#  unzip /home/usuario/mysqlBackup.zip -d /</pre>
	<pre># chown -R mysql.mysql /var/lib/mysql</pre>
	<li>Usando rsync:</li>
	<pre># rsync -r /home/usuario/mysqlBackup /var/lib/mysql/</pre>
	<pre># chown -R mysql.mysql /var/lib/mysql</pre>
</ul>
<h3>Copias de seguridad de una Base de Datos en concreto:</h3>
<h4>Crear</h4>
<pre># mysqlhotcopy nombreBD carpeta/ -u root -p contraseña</pre>
<h4>Restaurar</h4>
<p>Para restaurar usamos el metodo de cp de antes.</p>

<h3>Copias de seguridad usando mysqldump</h3>
<h4>Crear:</h4>
<pre># mysqldump -u root -p basedatos > destino.sql</pre>
<pre># mysqldump -u root -p --xml basedatos > destino.xml</pre>
<pre># mysqldump -u root -p --all-databases > BBDD.sql</pre>
<pre># mysqldump -u root -p --xml --all-databases > BBDD.xml</pre>
<h4>Restaurar:</h4>
<pre># mysqldump -u root -p basedatos < destino.sql</pre>
<pre># mysqldump -u root -p --xml basedatos < destino.xml</pre>
<pre># mysqldump -u root -p --all-databases < BBDD.sql</pre>
<pre># mysqldump -u root -p --xml --all-databases < BBDD.xml</pre>

<h3>Exportar datos</h3>
<h4>De tablas:</h4>
<pre>mysql> select * from alumnos into outfile 'alumnos.txt';</pre>
<pre>mysql> select * into outfile 'alumnos_comas.txt' fields terminated by ',' optionally enclosed by '"' lines terminated by '\r\n' from alumnos;</pre>
<p>El archivo se almacena en la carpeta donde MySQL guarda las bases de datos ("/var/lib/mysql/prueba")</p>
<pre># mysql prueba -u root -p -e "select * from alumnos" > julian.txt</pre>
<pre># mysql prueba -u root -p --html -e "select * from alumnos" > julian.html</pre>
<pre># mysql prueba -u root -p --xml -e "select * from alumnos" > julian.xml</pre>

<h3>Importar datos</h3>
<h4>Hacia tablas:</h4>
<pre>mysql> load data infile 'alumnos.txt' into table alumnos;</pre>
<pre>mysql> load data infile 'alumnos_comas.txt' replace into table alumnos fields terminated by ',' optionally endclosed by '"' lines terminated by '\r\n';</pre>

<h2>Integridad y reparación de tablas</h2>
<p>Si al hacer un select a una tabla nos sale el error "system error 145" o "system error 1016" significa que la tabla está rota.</p>
<p>Para comprobar el error hacemos:</p>
<pre>mysql> check table alumnos extended;</pre>
<p>Y si nos sale algún error hacemos:</p>
<pre>mysql> repair table alumnos;</pre>
<p>Otro método es mediante la utilidad MyIsam. Para esto primero hay que parar el servicio.</p>
<pre># service mysql stop</pre>
<pre># myisamchk --check /var/lib/mysql/*/*.MYI</pre>
<p>Si sale algún fallo hacemos:</p>
<pre># myisamchk --recover /var/lib/mysql/mysql/*.MYI</pre>
<p>Y recupaeramos todas las tablas de la base de datos mysql</p>
<p>Para recuperar una tabla en concreto:</p>
<pre># myisamchk --safe-recover /var/lib/mysql/mysql/host.MYI</pre>
<p>MyIsamChk sólo vale para BBDD mysam.</p>
<p>MySQLCheck funciona con todos los motores de bases de datos, menos con InoDB. Este se utiliza con el servicio iniciado.</p>
<pre># service mysql start</pre>
<pre># mysqlcheck -u root -p --check prueba alumnos</pre>
<pre># mysqlcheck -u root -p --repair prueba alumnos</pre>
<pre># mysqlcheck -u root -p --force prueba alumnos</pre>
<p>Para reparar una BD en InoDB hay que pasarla a MySAM</p>
<a name="optimizacion"></a>
<h2>Optimización de tablas</h2>

	<h3>Mejorar estructura de las tablas</h3>
		<p>Para mejorar la estructura de las tablas hay que crear índices:</p>
		<h4>Crear tablas con índices:</h4>
<pre>CREATE TABLE ALUMNOS (
	DNI int(8) NOT NULL,
	Nombre char(35) NOT NULL,
	Nota int(2) NOT NULL,
	PRIMARY KEY ('DNI'),
	INDEX ('Nombre')
);</pre>
		<h4>Crear un índice en una tabla existente:</h4>
			<h5>Método A</h5>
				<pre>CREATE INDEX indice ON Alumnos(Nombre(10));</pre>
			<h5>Método B</h5>
				<pre>ALTER TABLE Alumnos ADD INDEX (Nombre(10));</pre>
		<h4>Borrar un índice:</h4>
			<h5>Método A</h5>
				<pre>DROP INDEX indice ON Alumnos;</pre>
			<h5>Método B</h5>
				<pre>ALTER TABLE Alumnos DROP INDEX Nombre;</pre>
		<h4>Desfragmentar tablas</h4>
			<p>También se pueden desfragmentar las tablas para ganar espacio.</p>
			<pre>OPTIMIZE TABLE Alumno;</pre>

	<h3>Mejorar consultas</h3>


	<h3>Mejorar la configuración del servidor</h3>

<a name="repliacion de datos"></a>
<h2>Repliación de datos</h2>
	<p>Se basa en una configuración maestro - esclavo en el que el maestro guarda los datos originales y se sincronizan con los esclavos.</p>
	<h3>Maestro</h3>
		<H4>Paso 1. Configurar my.cnf</H4>
		<pre>
[mysqld]
log_bin = /var/log/mysql/mysql-bin.log
server-id = 1
bind-address = 192.168.201.10
binlog_do_db           = include_database_name
		</pre>
<p>Guardamos y reiniciamos mysql</p>

		<h4>Paso 2. Crear usuario para la replicación.</h4>
		<pre>
mysql> GRANT REPLICATION SLAVE, REPLICATION
	CLIENT ON *.* TO
	replicante@esclavo.dominio.com
	IDENTIFIED BY 'password';
	FLUSH TABLES WITH READ LOCK;
	SYSTEM mysqldum -u root -p --opt tabla | mysql -h esclavo -u root -p tabla;
	SHOW MASTER STATUS;
	UNLOCK TABLES;
</pre>

	<h4>Paso 3. Copiar BD a esclavos (Sincronizar)</h4>
	<pre>
		# mysqldump -u root -p --all-databases > BBDD.sql
	</pre>
<H3>Esclavo</H3>

		<H4>Paso 1. Configurar my.cnf</H4>
		<pre>
[mysqld]
log_bin = /var/log/mysql/mysql-bin.log
server-id = 2
bind-address = 192.168.201.127
relay-log = /var/log/mysql/mysql-relay-bin.log
binlog_do_db = include_database_name
		</pre>
<p>Reiniciamos mysql</p>

		<h4>Paso 3. Iniciar replicación</h4>
		<pre>
mysql> CHANGE MASTER TO MASTER HOST = '192.168.201.10',
MASTER_USER = 'replicante',
MASTER_PASSWORD = 'Almi123',
MASTER_LOG_FILE = 'mysql-bin.000002', MASTER_LOG_POS = 107;
mysql> START SLAVE;
		</pre>

</div>













<a name="PHPMyAdmin"></a>
<div class="tema">
<h1>PHPMyAdmin</h1>
<a name="Configurar PHPMyAdmin para que solo muestre las bases de datos del usuario que inicia sesión"></a>
<h2>Configurar PHPMyAdmin para que solo muestre las bases de datos del usuario que inicia sesión</h2>
	<p>La información para la configuración la he encontrado en la <a href="http://wiki.phpmyadmin.net/pma/controluser" target="_blank">página oficial de PHPMyAdmin</a> y en diferentes foros.</p>
	
	<font color='red'><p><b>Lo que está en rojo parece que no hace falta para las últimas versiones de PhpMyadmi. Yo he probado sin hacerlo y me ha funcionado bien.</b></p>
	<a name="Creación de un usuario especial de control"></a>
	<h3>Creación de un usuario especial de control</h3>
		<p>Esto está sacado íntegramente del link de arriba.</p>
		<p>Lo primero que hay que saber es la versión de MySQL que tenemos. Para eso entramos en PHPMyAdmin como root y en la pantalla principal, a la derecha nos aparece la versión que tenemos instalada, en mi caso la 5.5.32</p>
		<center><a href="imagenes/phpmyadmin1.png" target="_blank"><image src="imagenes/phpmyadmin1.png" width="800px"></image></a></center>
		<p>Ahora pinchamos en SQL y escribimos en el área de texto las siguientes secuencias de SQL, según la versión del servidor que tengamos.</p>
		<p>El usuario y la contraseña usados son los que salen en las instrucciones del enlace de arriba pero se puede cambiar a lo que queramos<!--, pero tendremos que acordarnos porque luego lo vamos a necesitar en un archivo que hay que editar-->. Yo lo he hecho tal cual pongo aquí y me ha funcionado.</p>
		<ul>
			<li><p>Para las versiones superiores o iguales a 4.0.2:</p>
				<textarea cols="100" rows="13">
GRANT USAGE ON mysql.* TO 'pma'@'localhost' IDENTIFIED BY 'pmapass';
GRANT SELECT (
    Host, User, Select_priv, Insert_priv, Update_priv, Delete_priv,
    Create_priv, Drop_priv, Reload_priv, Shutdown_priv, Process_priv,
    File_priv, Grant_priv, References_priv, Index_priv, Alter_priv,
    Show_db_priv, Super_priv, Create_tmp_table_priv, Lock_tables_priv,
    Execute_priv, Repl_slave_priv, Repl_client_priv
    ) ON mysql.user TO 'pma'@'localhost';
GRANT SELECT ON mysql.db TO 'pma'@'localhost';
GRANT SELECT ON mysql.host TO 'pma'@'localhost';
GRANT SELECT (Host, Db, User, Table_name, Table_priv, Column_priv)
    ON mysql.tables_priv TO 'pma'@'localhost';
				</textarea>
			</li>
			<li><p>Para las versiones inferiores a 4.0.2:</p>
				<textarea cols="100" rows="17">
GRANT SELECT (
    Host, User, Select_priv, Insert_priv, Update_priv, Delete_priv,
    Create_priv, Drop_priv, Reload_priv, Shutdown_priv, Process_priv,
    File_priv, Grant_priv, References_priv, Index_priv, Alter_priv
    ) ON mysql.user TO 'pma'@'localhost';
GRANT SELECT (
    Host, User, Select_priv, Insert_priv, Update_priv, Delete_priv,
    Create_priv, Drop_priv, Reload_priv, Shutdown_priv, Process_priv,
    File_priv, Grant_priv, References_priv, Index_priv, Alter_priv,
    Show_db_priv, Super_priv, Create_tmp_table_priv, Lock_tables_priv,
    Execute_priv, Repl_slave_priv, Repl_client_priv
    ) ON mysql.user TO 'pma'@'localhost';
GRANT SELECT ON mysql.db TO 'pma'@'localhost';
GRANT SELECT ON mysql.host TO 'pma'@'localhost';
GRANT SELECT (Host, Db, User, Table_name, Table_priv, Column_priv)
    ON mysql.tables_priv TO 'pma'@'localhost';
				</textarea>
			</li>
		</ul>
		<p>Una véz hecho esto ya funciona, más o menos. </font>Para probarlo creamos un usuario nuevo, en mi caso le voy a llamar sergio.</p>
		<p>Para hacer esto pinchamos en Privilegios y luego en agregar un nuevo usuario.</p>
		<center><a href="imagenes/phpmyadmin2.png" target="_blank"><image src="imagenes/phpmyadmin2.png" width="800px"></image></a></center>
		<p>En la ventana que se abre, en la sección "Información de la cuenta", escribimos el nombre de usuario, la contraseña, en servidor elegimos del menú desplegable la opción "Local" (en nuestro caso), y en la sección "Base de datos para el usuario" nos aseguramos de marcar la casilla " Otorgar todos los privilegios al nombre que contiene comodín (username\_%)" (esto es muy importante).<br>Y pinchamos en "Crear usuario"</p>
		<center><a href="imagenes/phpmyadmin3.png" target="_blank"><image src="imagenes/phpmyadmin3.png" width="800px"></image></a></center>
		<p>Cerramos sesión en PHPMyAdmin y entramos con el usuario que hemos creado.</p>
		<p>Podemos ver que ya no salen la mayoría de las bases de datos, pero todavía salen las BBDD "information_schema" y "test".<br> Según he leido no es un problema de seguridad porque en "information_schema" solo salen las tablas y campos que necesita el usuario que ha iniciado sesión, pero no he comprobado que sea verdad.</p>
		<center><a href="imagenes/phpmyadmin4.png" target="_blank"><image src="imagenes/phpmyadmin4.png" width="800px"></image></a></center>
		<p>Esto lo arreglaremos en el siguiente paso, pero primero vamos a comprobar que el usuario puede crear BBDD, pero solo va a poder crear BBDD que empiezen con su nombre de usuario seguido de "_" y del el nombre que quiera darle a la base de datos (en mi caso sería "sergio_wordpress", por ejemplo).</p>
		<p>Para esto pinchamos en "Bases de datos", y vemos que nos sale una opción para crear BBDD y que en el campo del nombre de la base de datos ya nos sale escrito "sergio_...".</p>
		<center><a href="imagenes/phpmyadmin5.png" target="_blank"><image src="imagenes/phpmyadmin5.png" width="800px"></image></a></center>
		<p>Tendremos que quitar los tres puntos del final y completar con el nombre de la base de datos que queremos crear. Si borramos todo y ponemos un nombre que no empieze conel nombre del usuario nos dará un error.</p>
		<center><a href="imagenes/phpmyadmin6.png" target="_blank"><image src="imagenes/phpmyadmin6.png" width="800px"></image></a></center>
		<center><a href="imagenes/phpmyadmin7.png" target="_blank"><image src="imagenes/phpmyadmin7.png" width="800px"></image></a></center>
	<a name="Configurar PHPMyAdmin"></a>
	<h3>Configurar PHPMyAdmin</h3>
		<p>Ahora vamos a esconder las BBDD "information_schema" y "test". Para eso hay que editar el archivo "config.inc.php".</p>
		<p>Según los manuales que he mirado ese archivo está en "/usr/share/phpmyadmin/", pero en mi caso ahí no estaba. Lo que si habia era una plantilla llamada "config.sample.inc.php" así que la copié a "config.inc.php" e hice los cambios necesarios, pero no funcionaba. Parece que ese archivo lo ignora, así que hice una búsquda desde la carpeta raíz con el comando "find -name config.inc.php" y vi que había otro archivo en la ruta <b>"/var/lib/phpmyadmin/"</b>. Hice los cambios ahí y funcionó. No se si será cuestión de la versión de ubuntu, de la versión de PHPMyAdmin o de qué, pero tendreis que probar las dos formas ver cual funciona.</p>
		<p>Supongo que si existe un archivo config.inc.php en la ruta /var/lib/phpmyadmin/ no hará falta probar con la otra ruta, ya que si está ahí será por algo.</p>
		<ul>
			<li>
				<p>Si el archivo está vacío, con escribir lo siguiente sería suficiente:</p>
				<textarea cols="150" rows="15">
<?php
	print "
<?php
/*
 * Servers configuration
 */
\$i = 0;

/*
 * First server
 */
\$i++;
\$cfg['Servers'][\$i]['hide_db'] = '(information_schema|test)';
?>
";
?>

				</textarea>
				<p>Podría ponerse simplemente...</p>
				<textarea cols="150" rows="5">
	<?php
	print "
<?php
\$cfg['Servers'][1]['hide_db'] = '(information_schema|test)';
?>
";
?>
				</textarea>
				<p>... donde 1 es el número del servidor de MySQL, pero ya que PHPMyAdmin se puede configurar para que controle más de un servidor MySQL es mejor hacerlo de la primero forma, así para configurar un segundo servidor bastaría con copiar y pegar la configuración del primer servidor y cambiar los valores de los parámetros que queramos, ya que al haber un "$i++" PHPMyAdmin ya sabe a que servido corresponde la configuración.</p>
			</li>
			<li>
				<p>Si el archivo no está vacío hay que busar donde empieza la configuración de nuestro servidor...</p>
				<textarea cols="150" rows="5">
/*
 * First server
 */
$i++;
				</textarea>
				<p>... suponiendo que nuestro servidor es el primero o el único, y añadir despues de $i++:</p>
				<textarea cols="150" rows="2">
$cfg['Servers'][$i]['hide_db'] = '(information_schema|test)';
				</textarea>
			</li>
		</ul>
		<p>Una vez hecho esto cerramos sesión en PHPMyAdmin y volvemos a iniciar sesión con el usuario anterior.</p>
		<p>Vemos ahora que no sale nada en el lado izquierdo. Esto no es un fallo. PHPMyAdmin, cuando el usuario sólo tiene una Base de Datos, la selecciona automáticamente, por eso lo que sale a la izquierda es para crear tablas en esa Base de Datos.</p>
		<center><a href="imagenes/phpmyadmin8.png" target="_blank"><image src="imagenes/phpmyadmin8.png" width="800px"></image></a></center>
		<p>Si creamos otra Base de Datos ya nos aparecen las dos Bases de Datos del usuario en el lado izquierdo.</p>
		<center><a href="imagenes/phpmyadmin9.png" target="_blank"><image src="imagenes/phpmyadmin9.png" width="800px"></image></a></center>
		<p>Hay que tener en cuenta que los usuarios no puende hacer "DROP DATABASE", por lo que el usuario puede crear las BBDD que quiera pero no eliminarlas. Para eliminarlas hay que entrar como root.</p>
		<p>Si queremos permitir que el usuario pueda eliminar sus propias BBDD debemos añadir la siguiente linea al archivo que editamos anteriormente:</p>
		<textarea cols="150" rows="2">
$cfg['AllowUserDropDatabase'] = true;
		</textarea>
		<p>Una vez añadido esto, cerramos sesion n PHPMyAdmin y volvemos a entrar con el usuario anterior.</p>
		<p>Si pinchamos en BBDD vemos ahora que sí podemos eliminar las BBDD.</p>
		<center><a href="imagenes/phpmyadmin10.png" target="_blank"><image src="imagenes/phpmyadmin10.png" width="800px"></image></a></center>
		<p>En resumen, mi archivo <b>/var/lib/phpmyadmin/config.inc.php</b> quedaría así:</p>
		<textarea cols="150" rows="16">
<?php
	print "
<?php
/*
 * Servers configuration
 */
\$i = 0;

/*
 * First server
 */
\$i++;
\$cfg['Servers'][\$i]['hide_db'] = '(information_schema|test)';
\$cfg['AllowUserDropDatabase'] = true;
?>
";
?>
		</textarea>		


</div>

<a name="PostgreSQL"></a>
<div class="tema">
	<h1>PostgreSQL</h1>
		<h2>Instalación</h2>
			<pre># apt-get install aptitude</pre>
			<pre># aptitude install postgresql-8.2</pre>
			<strike><pre># aptitude isntall postgresql-client-8.2</pre></strike>
			<p>Importante desintalar cualquier versión de PostgreSQL anterior para no afectar el rendimiento.</p>
		<h3>Establecer contraseña de seguridad</h3>
			<pre># passwd postgres</pre>
			<p>Editar el archivo passwd:</p>
			<pre># vipw</pre>
			<p>o</p>
			<pre># nano /etc/passwd</pre>
			<p>El usuario tiene que tener como terminal /bin/bash. Si no lo tiene hay que cambiarlo.</p>
			<p>Para verificar una correcta instalación:</p>
			<pre># su postgres -c "psql template1"</pre>
			<p>Si no queda claro este comando se puede hacer en dos pasos, ya que su cambia de usuario al indicado y la opción -c hace que se ejecute el comando que va entre comillas y una vez que termina el comando vuelve al usuario original:</p>
			<pre># su postgres</pre>
			<pre>#psql template1</pre>
			<p>Si el acceso es correcto:</p>
			<pre>template1=# ALTER USER postgres WITH PASSWORD 'Almi123';</pre>
			<pre>template1=# \q</pre>
		<h2>Configuración</h2>
			<h3>Permitir conexiones remotas</h3>
				<p>Editamos el archivo de configuración del PostgreSQL</p>
				<pre># nano /etc/postgresql/8.4/main/postgresql.conf</pre>
				<p>Buscamos la siguiente línea:</p>
				<pre>#listen_addresses = 'localhost'</pre>
				<p>y la descomentamos y cambiamos por:</p>
				<pre>listen_addresses = '*'</pre>
				<p>para poder acceder desde cualquier equipo.</p>
			<h3>Habilitar encriptado</h3>
				<p>Seguimos editando el archivo de configuración de PostgreSQL:</p>
				<pre># nano /etc/postgresql/8.4/main/postgresql.conf</pre>
				<p>Buscamos la siguiente línea:</p>
				<pre>#password_encryption = on</pre>
				<p>y la descomentamos.</p>
				<p>Guardamos, cerramos y reiniciamos el servicio.</p>
				<pre>service postgresql restart</pre>
			<h3>Configurar lista de accesos</h3>
				<p>La cnofiguración de la lista de acceso permite decirle a PostgreSQL que método de autentificación usar y establecer relaciones de confianza para ciertas máquinas y redes.</p>
				<p>Editamos el fichero /etc/postgresql/8.4/main/pg-hba.conf</p>
				<pre>nano /etc/postgresql/8.4/main/pg-hba.conf</pre>
				<p>y añadimos al final del archivo una de las siguientes líneas:</p>
				<ul>
					<li>
						<pre>host all all 192.168.1.4 255.255.255.0 md5</pre>
						<p>Esto permite el acceso a cualquier usuario siempre que sea desde esa ip y la contraseña se valida mendiante md5.</p>
					</li>
					<li>
						<pre>host all all 192.168.1.4 255.255.255.0 md5</pre>
						<p>La máscara de red se puede poner en formato abreviado.</p>
					</li>
					<li>
						<pre>host all all 192.168.1.4/24 trust</pre>
						<p>Esto permite el acceso a cualquier usuario que se conecte desde esa ip sin que pida la contraseña.</p>
					</li>
					<li>
						<pre>host all all 0.0.0.0 0.0.0.0 md5</pre>
						<p>Esto permite el acceso a cualquier usuario desde cualquier equipo validando la contraseña mediante md5.</p>
					</li>
					<li>
						<pre>host MiBaseDeDatos MiUsuario 192.168.1.4/24 md5</pre>
						<p>Esto permite el acceso únicamente al usuario MiUsuario y únicamente a la base de datos MiBaseDeDatos y sólamente desde esa ip y validando la contraseña mediante md5</p>
					</li>
				</ul>
				<p>Hay que añadir tantas líneas como hagan falta para cubrir nuestras necesidades.</p>
				<p>Guardar, cerrar y reiniciar el servicio.</p>
				<pre>service postgresql restart</pre>

<a name="edicion"></a>
<font color=red>Editando...</font>
</div>
	</BODY>
</HTML>
