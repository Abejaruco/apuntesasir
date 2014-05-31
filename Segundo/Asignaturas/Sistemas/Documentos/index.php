<?php
ini_set('display_errors', '1');
?>
<?php include("../../../../php/paypal.php");?>
<!DOCTYPE html>
<HTML>
	<!-- ------------------------------------------------ C   A   B   E   C   E   R   A -------------------------------------------------------------- -->
	<HEAD>
		<TITLE>ASIR2: ADMINISTRACIÓN DE SISTEMAS OPERATIVOS</TITLE> <!-- Establece el título de mi web -->
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
			<li>ADMINISTRACIÓN DE SISTEMAS OPERATIVOS</li>
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
<div class="tema">

<P>En esta asignatura vamos a seguir los apuntes de la siguiente página web:</P>
<p><a href="http://www.adminso.es/index.php/Administraci%C3%B3n_de_Sistemas_Operativos" target="_blank">http://www.adminso.es/</a></p>
<p>Y apuntes del profesor:</p>
<?php echo crear_lista_enlaces_archivos_directorio("./apuntes/win2008"); ?>
</div>

<a name="raid"></a>
<div class="tema">
<?php echo crear_lista_enlaces_archivos_directorio("./apuntes/linux"); ?>
<h1>Raid en Linux</h1>
<h2>Instalación</h2>
<pre>$ sudo apt-get install mdadm</pre>
<p>Para ver todas las posibilidades de mdadm ejecutamos:</p>
<pre>$ man mdadm</pre>
<h2>Crear diferentes Raid:</h2>
<ul>
	<li>
		<p><b>Raid 5 (3 discos).</b></p>
		<pre>$ sudo mdadm -C /dev/md0 --level=raid5 --raid=3 /dev/sdb /dev/sdc /dev/sdd</pre>
	</li>
	<li>
		<p><b>Raid 1 (espejo, 2 discos).</b></p>
		<pre>$ sudo mdadm -C /dev/md0 -l1 -n2 /dev/sdb /dev/sdc</pre>
	</li>
	<li>
		<p><b>Raid 1 (espejo, 2 discos) bootable.</b></p>
		<pre>$ sudo fdisk /dev/sdd</pre>
		<pre>Orden (m para obtener ayuda): n</pre>
		<p>Enter a todas las preguntas para usar opciones por defecto.</p>
		<pre>Orden (m para obtener ayuda): t</pre>
		<pre>Código hexadecimal (escriba L para ver los códigos): fd</pre>
		<pre>Orden (m para obtener ayuda): w</pre>
		<pre>$ sudo fdisk /dev/sde</pre>
		<pre>Orden (m para obtener ayuda): n</pre>
		<p>Enter a todas las preguntas para usar opciones por defecto.</p>
		<pre>Orden (m para obtener ayuda): t</pre>
		<pre>Código hexadecimal (escriba L para ver los códigos): fd</pre>
		<pre>Orden (m para obtener ayuda): w</pre>
		<p>Nota: Sigue saliendo el aviso de que puede que no sea bootable.</p>
	</li>
</ul>
<p>Para ver la información del Raid creado ejecutamos:</p>
<pre># sudo mdadm --detail /dev/md0</pre>
<p>Formateamos el volumen:</p>
<pre>sudo mkfs.ext4 /dev/md0</pre>
<p>La configuración del Raid se guarda en /etc/mdadm/mdadm.conf. Para que al arrancar siempre nos cree el Raid como /dev/mdo ejecutamos:</p>
<pre>sudo mdadm -Es</pre>
<p>Lo que nos sale hay que añadirlo al final del fichero de configuración de antes. Para esto hacemos:</p>
<pre>$ su</pre>
<pre># mdadm -Es >> /etc/mdadm/mdadm.conf</pre>
<p>El anterior comando no crea bien la línea. Probamos con este otro:</p>
<pre># mdadm --detail --scan >> /etc/mdadm/mdadm.conf</pre>
<h2>Configurar punto de montaje</h2>
<p>Creamos la carpeta donde vamos a montarlo:</p>
<pre># mkdir /mnt/raid5</pre>
<pre># nano /etc/fstab</pre>
<p>Añadimos:</p>
<pre>/dev/md0        /mnt/raid5      ext4    rw,auto,users</pre>
<ul>
	<li><b>/dev/md0</b>: Dispositivo (Raid) a montar.</li>
	<li><b>/mnt/raid5</b>: Carpeta en la que se montará el dispositivo.</li>
	<li><b>ext4</b>: Sistema de archivos del dispositivo.</li>
	<li><b>rw,auto,users</b>: Opciones de montaje:</li>
	<ul>
		<li><b>rw:</b> Montar como lectura y escritura.</li>
		<li><b>auto:</b> Montar automáticamente al arrancar el sistema.</li>
		<li><b>users:</b> Permitir que los usuarios lo monten.</li>
	</ul>
</ul>
<p>Y ahora lo montamos:</p>
<pre># mount	/mnt/raid5</pre>
<p>Ahora ya podemos trabajar con el normalmente.</p>
<p>Actualizamos el initramfs</p>
<pre># update-initramfs -u</pre>
<h3>Parar Raid</h3>
<pre># mdadm --stop /dev/md0</pre>
<pre># mdadm --misc --zero-superblock /dev/sdb /dev/sdc /dev/sdd</pre>
<h3>Ininciar Raid</h3>
<pre>mdadm --assemble /dev/md1</pre>
<h3>Meter discos en espera a un raid</h3>
<p>Si añadimos un disco a un Raid y este Raid ya tiene todos los discos que necesita, automáticamente los mete como disco en espera (Spare Device)</p>
<pre>$ sudo mdadm --add /dev/md0 /dev/sdf</pre>
<p>Si hay algún problema con algún disco al arrancar no va a coger automáticamente el disco que está en espera, sino que tenemos que parar el Raid e iniciarlo mediante la opción --assemble</p>
<h3>Meter discos en espera, disponibles para todos los Raid existentes, y que lo coja automáticamente cuando falle algún disco.</h3>
<p>Añadimos un disco en espera</p>
<pre># mdadm --add /dev/md0 /dev/sdd</pre>
<p>Modificamos el archivo de configuración /etc/mdadm/mdadm.conf y añadimos spare-group=database a cada uno de los ARRAYs</p>
<pre>ARRAY /dev/md0 metadata=1.2 level=raid1 num-device=2 name=luisseguridad-Ubuntu:0 spare-group=database UUID=7c0e2085:7fe95a45:78891242:6ebfb900
ARRAY /dev/md1 metadata=1.2 level=raid1 num-device=2 name=luisseguridad-Ubuntu:1 spare-group=database UUID=1e544b90:7172dd7f:5677a91c:7ebbe6b1</pre>
<p>Lanzamos el monitor de Raid</p>
<pre># mdadm --monitor /dev/md0 /dev/md1 &</pre>
<p>Y actualizamos el initramfs</p>
<pre># update-initramfs -u</pre>
</div>

<a name="cuotas"></a>
<div class="tema">
<h1>Cuotas en Linux</h1>
<p>Se puede limitar en cuanto a número de ficheros o en cuanto espacio.</p>
<p>Las cuotas se pueden aplicar a grupos o a usuarioas.</p>
<p>Lo primero que hay que hacer es instalar cuotas:</p>
<pre> # apt-get install quota</pre>
<p>Una vez instalado, lo primero es desmontar la partición a la que queremos aplicar las cuotas.</p>
<p>Editamos el fichero /etc/fstab y añadimos a las opciones del punto de montaje la opción "usrquota", la opción "grpquota" o ambas, en función de si queremos aplicar las cuotas a los usuarios, a los grupos, o a ambos.</p>
<p>Volvemos a montar la partición.</p>
<p>Si no hemos desmontado la partición antes de editar el fstab, remontamos la partición mediante el comando:</p>
<pre> # mount -o remount /mnt/raid5</pre>
<p>Creamos el fichero de configuración de cuotas mediante el comando:</p>
<pre> # quotacheck -cug /mnt/raid5</pre>
<p>Explicación de las opciones:</p>
<ul>
	<li><b>c</b> Con esta opción decimos que cree el fichero de configuración.</li>
	<li><b>u</b> Con esta opción crea la configuración para cuotas de usuarios.</li>
	<li><b>g</b> Con esta opción crea la configuración para cuotas de grupos.</li>
</ul>
<p>Editar la cuotas:</p>
<ul>
	<li>Cuotas de usuario:
	<pre> # edquota usuario</pre>
	</li>
	<li>Cuotas de grupo:
	<pre> # edquota -g grupo</pre>
	</li>
</ul>
<center><img src="imagenes/editquotas.png"></center>
<p>Explicación editor de cuotas:</p>
<ul>
	<li><b>bloques</b> Indica el número de bloques usados por el usuario.</li>
	<li><b>blando</b> Indica el límite blando que le asignamos. A partir de ese límite se avisa al usuarios. Aquí se limita por tamaño.</li>
	<li><b>duro</b> Indica el límite duro que le asignamos. A partir de ese límite se impide la creación de ficheros. Aquí se limita por tamaño.</li>
	<li><b>inodos</b> Indica el núero de inodos usados por el usuario.</li>
	<li><b>blando</b> Indica el límite blando que le asignamos. A partir de ese límite se avisa al usuarios. Aquí se limita por número de archivos.</li>
	<li><b>duro</b> Indica el límite duro que le asignamos. A partir de ese límite se impide la creación de ficheros. Aquí se limita por número de archivos.</li>
</ul>
<p>Verificar cuotas de usuario:</p>
<pre>quota usuario</pre>
<p>Generar informes de cuota:</p>
<pre>repquota /mnt/raid5</pre>
<p>Para activar y desactivar cuotas:</p>
<pre> # quotaoff -aug</pre>
<pre> # quotaon -aug</pre>

</div>

<a name="niveles de ejecucion"></a>
<div class="tema">
<h1>Niveles de ejecución en Linux</h1>
<p>Los niveles de ejecución varían en función de la distribución. Nosotros nos centraremos en Ubuntu.</p>
<p>Haciendo una búsqueda en internet encontramos mucha información.</p>
<ul>
	<li><a href="http://aprendiendoausarlinux.wordpress.com/2012/06/16/los-niveles-de-ejecucion-en-linux/" target="_blank">http://aprendiendoausarlinux.wordpress.com/2012/06/16/los-niveles-de-ejecucion-en-linux/</a></li>
	<li><a href="http://www.debianadmin.com/debian-and-ubuntu-linux-run-levels.html" target="_blank">http://www.debianadmin.com/debian-and-ubuntu-linux-run-levels.html</a></li>
</ul>

<h2>Herramientas de administración de niveles de ejecución</h2>
<p><b>bum</b>, herramienta gráfica gestión de servicios.</p>
<pre> # apt-get install bum</pre>
<p><b>sysv-rc-conf</b>, herramienta modo texto</p>
<pre> # apt-get install sysv-rc-conf</pre>
<p>Esta herramienta también se puede usar en modo comando. Ejm.:</p>
<pre> # sysv-rc-conf -level 1 httpd on</pre>
<p><b>Job-admin</b>, herramienta gráfica más completa</p>
<pre> # apt-get install jobs-admin</pre>
</div>

<a name="ldap"></a>
<div class="tema">
<h1>LDAP en Linux</h1>
<p>Para crear el controlador de dominio partimos de un ubuntu limpio.</p>
<p>Primero ponemos una ip fija (ya sabemos como se hace) y luego actualizamos la lista de aplicacioens y actualizamos el sistema.</p>
<pre> # apt-get update && apt-get upgrade -y</pre>
<p>Instalamos...</p>
<pre> # apt-get install slapd ldap-utils migrationtools</pre>
<pre> # apt-get install -y libnss-ldap libpam-ldap nscd</pre>
<pre> # dpkg-reconfigure slapd</pre>

<p>Rellenamos los campos que nos pidan...</p>

<p>Editamos el archivo /etc/migrationtools/migrate_common.ph</p>
<pre> # nano /etc/migrationtools/migrate_common.ph</pre>
<p>Y cambiamos las siguietes líneas por nustro dominio:</p>
<pre>
#$DEFAULT_MAIL_DOMAIN = “almi4.com”;
#$DEFAULT_BASE = “dc=almi4,dc=com”;
</pre>

<!--
<p>Editamos el archivo /etc/ldap/ldap.conf dejamos así:</p>
<pre>

</pre>
-->
<p>Iniciamos el servicio.</p>
<pre> # service slapd start</pre>
<p>Ahora exportaremos los valores.</p>
<pre>
cd /usr/share/migrationtools/ 
./migrate_group.pl /etc/group ~/group.ldif 
./migrate_passwd.pl /etc/passwd ~/passwd.ldif
</pre>
<p>Creamos el archivo people_group.ldif</p>
<pre>
cat >  ~/people_group.ldif &lt;&lt;EOF
dn: ou=People,dc=luis,dc=com 
objectclass: organizationalUnit
ou: People 

dn: ou=Group,dc=luis,dc=com 
objectclass: organizationalUnit
ou: Group 
EOF
</pre>
<p>Creamos el archivo usuarios.ldif</p>
<pre>
cat > ~/usuarios.ldif &lt;&lt;EOF
dn: cn=asir1,ou=Group,dc=luis,dc=com 
objectClass: top
objectClass: posixGroup
cn: asir1
gidNumber: 20001

dn: uid=asir1,ou=People,dc=luis,dc=com 
objectClass: top
objectClass: person
objectClass: posixAccount
objectClass: shadowAccount
uid: asir1
uidNumber: 20001
gidNumber: 20001
cn: asir1
sn: asir1
loginShell: /bin/bash
homeDirectory: /home/asir1
EOF"
</pre>

<pre>
ldapadd -x -W -D "cn=admin,dc=luis,dc=com" -f ~/people_group.ldif
ldapadd -x -W -D "cn=admin,dc=almi4,dc=com" -f ~/group.ldif 
ldapadd -x -W -D "cn=admin,dc=almi4,dc=com" -f ~/passwd.ldif
</pre>




<p>Agregamos el usuario creado en usuarios.ldif</p>
<pre>ldapadd -c -x -D cn=admin,dc=almi4,dc=com -W -f usuarios.ldif</pre>
<p>Ponemos la contraseña al usuario.</p>
<pre>ldappasswd -x -D cn=admin,dc=almi4,dc=com -W -S uid=asir,ou=People,dc=almi4,dc=com</pre>
<p>Editamos el archivo /etc/nsswitch.conf y lo dejamos así:</p>
<pre>
...
passwd:         compat ldap
group:          compat ldap
shadow:         compat ldap
...
</pre>
<p>Reiniciamos.</p>
<p>Unimos el servidor LDAP al dominio.</p>
<pre> # apt-get install -y ldap-auth-config</pre>
<p>Cuando pregunta por "LDAP server Uniform Resource Identifier:" ponemos </p>
<pre>ldap://127.0.0.1</pre>
<p>"Distinguished name of the search base:"</p>
<pre>dc=almi,dc=com</pre>
<p>"LDAP version to use:"</p>
<pre>3</pre>
<p>"Make local root Database admin:"</p>
<pre>Sí</pre>
<p>Does the LDAP database require login?</p>
<pre>No</pre>
<p>"LDAP account for root:"</p>
<pre>cn=admin,dc=luis,dc=com</pre>
<p>"LDAP root account password:"</p>
<pre>ContraseñaAdministradorLDAP</pre>

<p>Editamos /etc/pam.d/common-account y añadimos debajo de "account required                        pam_permit.so":</p>
<pre>
session required pam_mkhomedir.so umask=0022 skel=/etc/skel/ silent
account sufficient pam_ldap.so nullok_secure
</pre>

<p>Editamos /etc/pam.d/common-password y añadimos debajo de "password required                        pam_permit.so":</p>
<pre>
password sufficient pam_ldap.so
password	optional			pam_smbpass.so nullok use_authtok use_first_pass
password	optional	pam_gnome_keyring.so 
</pre>

<p>Editamos /etc/pam.d/common-auth y añadimos debajo de "auth required                        pam_permit.so":</p>
<pre>
auth	optional			pam_smbpass.so migrate
auth	optional			pam_cap.so 
</pre>

<p>Editamos /etc/pam.d/common-session y añadimos debajo de "session required                        pam_permit.so":</p>
<pre>
session optional                        pam_ldap.so
session optional                        pam_xdg_support.so
session optional                        pam_ck_connector.so nox11

</pre>



<p>Instalamos el LDAP en el cliente</p>
<pre> # apt-get install ldap-auth-config</pre>


<p>Editamos el archivo /etc/nsswitch.conf y lo dejamos así:</p>
<pre>
...
passwd:         compat ldap
group:          compat ldap
shadow:         compat ldap
...
</pre>

<p>Y hacemos las mismas modificaciones que hicimos en los ficheros de /etc/pam.d/</p>


<p>Gestionar el servidor LDAP mediante phpldapadmin</p>
<p>Instalamos en el servidor:</p>

<pre> # apt-get install phpldapadmin</pre>
<p>Editamos /etc/phpldapadmin/config.php y cambiamos las siguientes líneas y ponemos nuestro dominio:</p>
<pre>
$servers->setValue('server','base',array('dc=almi,dc=com'));
$servers->setValue('login','bind_id','cn=admin,dc=almi,dc=com');
</pre>
<p>Y reiniciamos apache</p>
<pre> # service apache2 restart</pre>

</div>

<a name="edicion"></a>
<font color=red>Editando...</font>


</div>

	</BODY>
</HTML>
