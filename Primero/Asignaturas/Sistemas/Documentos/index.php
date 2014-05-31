<?php include("../../../../php/paypal.php");?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
	<title>ASIR1: SISTEMAS</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.21" />
	<LINK REL=StyleSheet HREF="../../../../estilos/menu_principal.css" TYPE="text/css">
	<LINK REL=StyleSheet HREF="../ajustes/estilos.css" TYPE="text/css">
</head>
<body>
	<div class="menus">
		<div class="menu_principal">
			<ul class="menu">
				<li><a href="../../../../">ASIR</a></li>
				<li><a href="../../../">PRIMERO</a></li>
				<li><a href="../../">ASIGNATURAS</a></li>
				<li>IMPLANTACIÓN DE SISTEMAS OPERATIVOS</li>
				<?=paypal()?>
			</ul>
		</div>
		<div class="menu_asignatura">
			<ul class="menu">
					<li><a href="../">Índice</a></li>
			</ul>
		</div>
	</div>
	<div class="contenido">
		<div class="tema">
			<a name="tema1"></a>
			<H1>Tema 1. Caracterización de los S.I.</H1>
			<h2>Información automática.</h2>
			<p>Entrada -- Proceso -- Salida</p>
			<p>E &rArr; Información codificada.</p>
			<p>P &rArr; Se decodifica la información.</p>
			<p>S &rArr; Información codificada.</p>
			<ul>
				<li>HW</li>
				<li>Componente Lógico:</li>
					<ul>
						<li>SW Base (S.O.): Programas que te ayudan a  poder comunicarte con del Hardware.</li>
						<li>SW de aplicación: Software que va a utilizar el usuario.</li>
					</ul>
				<li>Recursos Humanos.</li>
			</ul>
			<h3>Clasificación de los S.I.</h3>
			<ul>
				<li class="negrita">En función del uso:</li>
					<ul>
						<li>Propósito general (Ordenador Doméstico).</li>
						<li>Uso especifico (ordenadores como para cajeros, etc…).</li>
					</ul>
				<li class="negrita">En función de sus prestaciones:</li>
					<ul>
						<li>Supercomputadoras.</li>
						<li>Mainframes.</li>
						<li>Miniordenadores.</li>
						<li>Estaciones de trabajo (ordenadores normales).</li>
						<li>Microordenadores (portátiles, PDA).</li>
					</ul>
			</ul>
			<h3>S.O.</h3>
			<p><b>Definición</b>: Conjunto de programas que actúan de intermediario entre el usuario y HW, gestionando los recursos del sistema y optimizan su uso.</p>
			<p><b>Funciones:</b></p>
			<ul>
				<li>Control de ejecución de programas (el S.O se encarga de repartir los recursos).</li>
				<li>Administración de periféricos.</li>
				<li>Gestión de permisos.</li>
				<li>Control de concurrencia (Compartir el tiempo del microprocesador).</li>
				<li>Control de errores.</li>
				<li>Administración de memoria.</li>
				<li>Control de seguridad.</li>
			</ul>
			<h3>Elementos y estructura de un S.O.</h3>
			<ul>
				<li><b>Nivel 1(Kernel*)</b>: Gestión del procesador</li>
					<ul>
						<li>Comunicación y gestión de procesos (distpatcher).</li>
						<li>Control de interrupciones.</li>
						<li>Manejo de condiciones de error.</li>
						<li>Semáforos.</li>
					</ul>
				<li><b>Nivel 2</b>: Gestión de Memoria</li>
				<li><b>Nivel 3</b>: Gestión de procesos (creación y destrucción, intercambio de mensajes).</li>
				<li><b>Nivel 4</b>: Gestión de dispositivos.</li>
				<li><b>Nivel 5</b>: Gestión de ficheros (FAT 32, NTFS).</li>
			</ul>
			<h3>Clasificación de los S.O.</h3>
			<ul>
				<li class="negrita">Por los servicios ofrecidos:</li>
					<ul>
						<li>Por el número de usuarios:</li>
							<ul>
								<li>Monousuario.</li>
								<li>Multiusuario.</li>
							</ul>
						<li>Por el numero de tareas:</li>
							<ul>
								<li>Monotarea.</li>
								<li>Multitarea.</li>
							</ul>
						<li>Por el numero de procesadores:</li>
							<ul>
								<li>Monoproceso (Puede ser monoproceso y multitarea).</li>
								<li>Multiproceso:  Simétrico,  asimétrico</li>
							</ul>
					</ul>
				<li class="negrita">Por la forma de ofrecer sus servicios:</li>
					<ul>
						<li>Sistema centralizado.</li>
						<li>Distribuidos (Sistemas que me permiten repartir procesos entre ordenadores o procesadores distintos).</li>
						<li>Operativos en red.</li>
						<li>Operativos en escritorio.</li>
					</ul>
				<li class="negrita">Por su disponibilidad:</li>
					<ul>
						<li>Propietarios.</li>
						<li>Libres.</li>
					</ul>
			</ul>
			<h3>Tipos de aplicaciones.</h3>
			<ul>
				<li>Gratuitas (Freeware) o comerciales (Pagadas pero el uso al 100%)..</li>
				<li>Libres (Gratuitas con libre intercambio e incluso modificables) o propietarias (Gratuitas sin posibilidad de intercambio y no modificables).</li>
				<li>Opensource (Código abierto y de pago) o privativas (De pago y de código cerrado).</li>
			</ul>
			<h3>Tipos de licencia.</h3>
			<ul>
				<li><b>OEM</b>: Para un sistema operativo que viene con un equipo nuevo. Si se avería hay que comprar otra licencia.</li>
				<li><b>Retail</b>: No es de uso exclusivo, se puede poner en varios equipos.</li>
				<li><b>Licencias por volumen</b>: Tienes un número determinado de equipos en los que se puede instalar.</li>
			</ul>
			<h3>Gestores de arranque.</h3>
			<p>Se inicia una vez realizado el proceso de la BIOS y pueden ser:</p>
			<ul>
				<li>NTLDR (WXP, W2000, W2003).</li>
				<li>Bootmgr (W7, Wvista, W2008-W2008RD)</li>
				<li>LILO (GNU-Linux).</li>
				<li>GRUB (GNU-Linux).</li>
			</ul>
			BIOS &rArr; mbr &rArr; Gestor de arranque
			<p><b>MBR</b>: Master Boot Record (registro de arranque maestro) &rArr; Informa a la BIOS como esta dividido el disco duro y donde tiene que ir para arrancar el sistema.</p>
		</div>
		<a name="tema2"></a>
		<div class="tema">
		<h1>Tema 2. Máquinas virtuales.</h1>
		<center><img src="../Imagenes/virtualbox.jpg" alt="Virtual Box"></center>
		<ul>
			<li>VMWARE (Windows, Mac, Linux):</li>
				<ul>
					<li>Workstation.</li>
					<li>Server.</li>
					<li>Player.</li>
				</ul>
			<li>VirtualPC (Windows).</li>
			<li>Pavallels (MacOS).</li>
			<li>VirtualBox (Winsows, Mac, Linux, Solaris).</li>
			<li>Virtual Server (Windows).</li>
			<li>QEMU (Linux).</li>
		</ul>
		<h2>Comandos básicos MS-DOS</h2>
		<ul>
			<li class="negrita">Inicio</li>
			Para iniciar DOS en Windows XP, hay que irse al botón de Inicio, Ejecutar y poner cmd. Se abrirá una ventana de DOS en la que se probarán todas las opciones de los comandos utilizados.
			<li class="negrita">Comodines</li>
				<ul>
					<li><b>?</b>: Sustituye a un sólo carácter. Se puede utilizar más de un signo de interrogación seguido para hacerlos corresponder con un número determinado de caracteres. Así, si ponemos ‘comandobusqueda a???.txt’, el comando ‘comandobusqueda’ nos devolverá el listado de ficheros que tengan extensión .txt, que empiezan por ‘a’ y le siguen tres caracteres.</li>
					<li><b>*</b>: Sustituye cadenas de caracteres. Por ejemplo si queremos buscar los ficheros que tengan extensión txt, deberemos poner ‘comandobusqueda *.txt’.</li>
				</ul>
			<li class="negrita"></li>
			<li class="negrita"></li>
			<li class="negrita"></li>
			<li class="negrita"></li>
			<li class="negrita"></li>
			<li class="negrita"></li>
			<li class="negrita"></li>
			<li class="negrita"></li>
			<li class="negrita"></li>
		
		</ul>
		
		
		
		</div>
<div class="tema">
<a name="tema7"></a>
<h1>Tema 7. Administración y aseguramiento de la información.</h1>
<h2>1. Las particiones.</h2>
<p>En un disco básico la partición hace que un HD o una parte de él pueda ser utilizado como Unidad de almacenamiento, cada una de las particiones funciona de forma separada (también se puede denominar Volumen aunque no es correcto, ya que este concepto se utiliza para discos dinámicos). Como máximo podemos tener 4 particiones.</p>
<p class="negrita">Dos tipos de particiones:</p>
<ul>
	<li><b>Primaria</b>: Son reconocidas por la BIOS. Por ser capaces de iniciar el S.O. Disponen de sector de arranque (BOOT SECTOR).</li>
	<li><b>Secundaria o extendida</b>: Estas se configuran como unidades lógicas con un número ilimitado.</li>
</ul>
<p>Tener un disco duro particionado tiene ciertas ventajas, como por ejemplo mejorar el rendimiento del disco duro, desfragmentar más rápidamente, no perder documentos en caso de necesitar reinstalar el S.O.</p>
<p>Un volumen es distinto. Un volumen puede estar compuesto por varios discos duros mientras que una partición siempre es un único disco.</p>
<h2>RAID (Redundant Array of Independen Disk)</h2>
<ul>
	<li><B>RAID 0</B>: La información se divide entre todos los discos del sistema (distribuidos, seccionados).</li>
		<ul>
			<li><b>Distribuidos</b>: Se usa para unir varios discos y usarlos como si fueran uno solo. En Windows solo aparece un disco duro. Un fichero se guarda entero en un disco duro.</li>
			<li><b>Seccionados</b>: Se usa para para distribuir el contenido de un fichero en dos discos. Parte del fichero está en un disco y parte en otro. Aumenta la velocidad pq se puede leer de los dos discos a la vez.</li>
		</ul>
	<li><b>RAID 1</b>: Mirror (reflejados). Todo lo que se hace en un disco se hace automáticamente en el otro.</li>
	<li><b>RAID 5</b>: Sistema de discos independientes con inegración de códigos de error (de bandas).<br>Como mínimo necesito tres discos. Se ven los tres discos como uno solo. Se pierde un tercio de la capacidad de almacenamiento, es decir, si tengo tres discos de 500 GB tengo una capacidad de 1 TB.<br>En dos discos se colocan los datos y en el tercero se crea un código de control con el que se puede calcular el contenido de un disco con los datos de sólamente uno de los otros.<br>El código de control no se graba siempre en el mismo disco si no que va rotando entre los tres discos. Con los datos de un disco y el código de control se puede recuperar los datos del otro disco, y con los datos de los dos discos se puede recuperar el código de control. Así si se rompe un disco puedo poner uno nuevo y automáticamente se recupera toda la información, incluso hay equipos en los que se puede recuperar incluso pinchando el disco en caliente.<br>Un sistema casi infalible sería poner tres discos con RAID 5 y otros tres también con RAID 5 y entre esos dos ponerlos en espejo.</li>

</ul>


</div>
<a name="tema8"></a>
<div class="tema">
<h1>TEMA 8- La administración de Dominios</h1>
<p><b>Apuntes del profesor</b>:</p>
<ul>
	<li><a href="./apuntes_dominios/administracion_de_dominios_windows.doc">Administración de Dominios Windows</a></li>
	<li><a href="./apuntes_dominios/Administración_de_Directivas_de_Grupo.doc">Administración de Directivas de Grupos.</a></li>
	<li><a href="./apuntes_dominios/perfiles_de_usuario.odt">Perfiles de usuario</a></li>
	<li><a href="./apuntes_dominios/w2k3-avanzado.pdf">Windows 2003 Avanzado</a></li>
	<li><a href="./apuntes_dominios/w2k8-avanzado.pdf">Windows 2008 Avanzado</a></li>
	<li><a href="./apuntes_dominios/Linux-basico.pdf">Linux Básico</a></li>
	<li><a href="./apuntes_dominios/LinuxAvanzado.pdf">Linux Avanzado</a></li>
	<li><a href="./apuntes_dominios/linwin.pdf">Integración Linux - Windows</a></li>
</ul>
<p>En Windows hay dos formas de trabajar:</p>
<ul>
	<li><b>Trabajo en Grupo</b>: Cada equipo trabaja de forma inidividual.</li>
	<li><b>Cliente - Servidor ("Active Directory" &rArr; Dominios)</b>: Un Dominio es un grupo de equipos que comparten una política. Conjunto de equipos que se administran de una forma común.</li>
	<p>En el servidor hay una base de datos con información de como administrar los equipos.</p>
</ul>
<p><b>Servidor</b></p>
	<ul>
		<li>Servicios:</li>
			<ul>
				<li>Web</li>
				<li>FTP</li>
				<li>Servidor de ficheros (DFS, NFS, NetBios...)</li>
				<li>DHCP</li>
				<li>DNS</li>
				<li>Correo</li>
				<li>Proxy</li>
				<li>Telnet</li>
			</ul>
	</ul>
<p><b>Controlador de dominio</b></p>
<p>Lo que nos sirve es una base de datos. En esta lo que hay son contenedores y hojas. Un grupo puede ser un contenedor y un usuario puede ser una hoja. Una carpeta puede ser un contenedor y un archivo puede ser una hoja.</p>
<p>Cuando un equipo inicia sesión en un dominio lo que hace es preguntar al controlador de dominios si el usuario puede usar sesión o no.</p>
<p>A los administradores les interesa tener dominios para trabajar menos, para poder tener una base de datos común donde tener la política y propagarla.</p>

<p><b>Protocolo LDAP</b>:</p>
<p>Protocolo ligero de acceso a directorios.</p>
<p><b>Dominio</b>:</p>
<p>Conjunto de equipos y recursos que comparten políticas y facilita la administración.</p>
<p><b>Active Directoyr</b>:</p>
<p>Servicio de directorios incorporado en Windows 2003 y 2008. Almacena información acerca de objetos de la red, facilita labúsqueda y utilización de esa información por parte del usuario.<br>Características:</p>
<ul>
	<li>Incorpora un directorio que es un almacén de datos.</li>
	<li>su estructura se vasa en los siguientes objetos:</li>
		<ul>
			<li>Dominio: Permite agrupar los objetos y contenedores de forma organizada.</li>
			<li>Unidad organizativa: puede estar compuesto de otras unidades organizativas u otros objetos. Es muy similar a un dominio en cuanto a administración. Se puede crear un administrador para administrar una unidad organizativa.</li>
			<li>Grupos: Conjunto de objetos del mismo tipo.</li>
			<li>Objetos: Representan los recusos de red (Usuarios, impresoras, ordenadores).</li>
		</ul>
	<li>Árbol de dominios: conjunto de dominios que comparten un espacio de nomenclatura contiguo, un esquema y catálogo global común.</li>
	<li>Bosque: Conjunto de árboles con relaciones de confianza.</li>
	<li>Servidores:</li>
		<ul>
			<li>Controlador de dominio.</li>
			<li>Miembros del dominio (http).</li>
			<li>Independientes (DHCP).</li>
		</ul>
	<li>Replicación de directorio activo.</li>
	<li>Servicio DNS, uno por cada bosque como mínimo (mejor uno por árbol), lo utiliza el directorio activo.</li>
</ul>
<h2>Promover un equipo Windows 2003 a controlador de dominio</h2>
<ul>
<li>Inicio &rArr; Ejecutar: dcpromo</li>
<li>Siguiente &rArr; Siguiente  &rArr; </li>
<li>Podemos elegir entre un controlador de dominio para un diminio nuevo o un controlador de dominio adicional para un dominio existente. La elección dependerá del caso. Nosotros elegimos la primera opción.</li>
<li>Siguiente &rArr; </li>
<li>dominio en un nuevo bosque, dominio secundario en un árbol de dominio existente (para crear subdominios), o árbol de dominios en un bosque existente (para crear relaciones de confianza). Nosotros elegimos la primera opción.</li>
<li>Siguiente &rArr; </li>
<li>Ponemos el nombre de dominio que queramos.</li>
<li>Siguiente &rArr; </li>
<li>Nombre Netbios: la que usa Windows. Dejar como está.</li>
<li>Siguiente &rArr; </li>
<li>Carpetas de las bases de datos. Dejar como está.</li>
<li>Siguiente &rArr; </li>
<li>Volumen del sistema compartido. Dejar como está.</li>
<li>Siguiente &rArr; </li>
<li>Diagnósticos de registro de DNS. Es un error que sale porque no está instalado el servidor DNS. Es mejor así. Tiene que dar este error para elegir "Instalar y configurar el equipo....", y así instala todo lo que necesita.</li>
<li>Antes de continuar hay que configurar la red para que tenga IP fija y que el servidor DNS es el mismo equipo (127.0.0.1).</li>
<li>Siguiente &rArr; </li>
<li>Permisos. Es mejor usar la segunda opción, pero si hay equipos viejos habrá que usar la primera opción.</li>
<li>Siguiente &rArr; </li>
<li>Contraseña de modo remoto. Ponemos una contraseña que nos pedirá cuando iniciemos el servidor en el modo de restauración de servicios de directorio.</li>
<li>Siguiente &rArr; </li>
<li>Resumen.</li>
<li>Siguiente &rArr; </li>
<li>Finalización</li>
<li>Finalizar </li>
</ul>
<p>Ahora los usuarios y grupos se gestionan desde "Usuarios y equipos de Active Directory".</p>

		
<h2>Unir un Ubuntu a un dominio</h2>
<ul>
	<li>Primero hay que instalar el paquete likewise. Para eso lo buscamos:</li>
	<pre>apt-cache search "likewise"</pre>
	<p>Encontramos varios paquetes. De momento vamos a probar a instalar el likewise-open-gui que instala también el likewise-open ya que lo necesita para funcionar.</p>
	<p>Existe un otro paquete llamado likewise-open5-gui que suponemos que es una actualización. Luego la probamos.</p>
	<li>Ahora hay que unir el equipo al dominio. Para ello:</li>
	<pre>sudo domaninjoin-cli join 'dominio' 'usuario con priviliegios'</pre>

</ul>

<h2>Perfiles de Usuarios</h2>
	<p><a href="./apuntes_dominios/perfiles_de_usuario.odt">Perfiles de usuario</a></p>
	<h3>Creación de un perfil móvil</h3>
		<p>Pasos a seguir:</p>
		<ul>
			<li>Primero hay que crear una carpeta compartida en el servidor, donde se almacenarán los perfiles.</li>
				<ul>
					<li>Propiedades --> Compartir (compartir la carpeta) --> Permisos --> Todos --> Control Total</li>
					<li>Desheredar los permisos quitando todos.</li>
					<li>Añadir los permisos adecuados.</li>
						<ul>
							<li>Creator Owner --> Control total.</li>
							<li>System --> Control total.</li>
							<li>Usuarios --> Lectura y ejecución; Mostrar el contenido; Leer (los pone por defecto). Luego en opciones avanzadas modificamos los permisos de los usuarios quitando el permiso "Recorrer carpeta / Ejecutar Archivo" y añadiendo el permiso de "Crear carpetas / Anexar datos"</li>
						</ul>
				</ul>
			<li>Configurar a los usuarios con Usuarios y Grupos de Active Directory.</li>
				<ul>
					<li>Click derecho en el usuario --> Propiedades --> Perfil: Ruta a la carpeta.</li>
				</ul>
		</ul>


</div>
<div class="tema">
<h1>Políticas de grupo</h1>
<p>Tres tipos:</p>
<ul>
	<li><b>Local</b> (gpedit.msc)</li>
	<li><b>Dominio</b></li>
	<li><b>Unidades Organizativas</b>:</li>
		<ul>
			<li>Unidad Organizativa</li>
			<li>Domain Controler</li>
		</ul>
</ul>
<p>Primero se aplican las locales, luego las de dominio y luego las de las unidades organizativas.</p>



</div>
<div class="tema">
<h1>Linux</h1>
<a href="./apuntes_linux/gnu-linux_asir.pdf">Apuntes profesor</a>
</div>



<a name="edicion"></a>
FIN
	</div>
</body>

</html>
