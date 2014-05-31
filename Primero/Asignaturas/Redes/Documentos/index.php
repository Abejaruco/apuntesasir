<?php include("../../../../php/paypal.php");?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">

<head>
	<title>ASIR: REDES</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.21" />
	<LINK REL=StyleSheet HREF="../../../../estilos/menu_principal.css" TYPE="text/css">
	<LINK REL=StyleSheet HREF="../Ajustes/estilos.css" TYPE="text/css">
	<script type="text/javascript" src="../Ajustes/scripts.js"></script>
	<?php include('../Ajustes/funciones.php');?>
</head>

<body>
	<?php $ejemplo = 1;?>
	<?php $ejercicio = 1;?>
<!----------------------------------------------------------------------
MENU PRINCIPAL
----------------------------------------------------------------------->
<div class="menus">
	<div class="menu_principal">
		<ul class="menu">
			<li><a href="../../../../">ASIR</a></li>
			<li><a href="../../../">PRIMERO</a></li>
			<li><a href="../../">ASIGNATURAS</a></li>
			<li>PLANIFICACIÓN Y ADMINISTRACIÓN DE REDES</li>
			<?=paypal()?>
		</ul>
	</div>
	<!----------------------------------------------------------------------
	FIN MENU PRINCIPAL
	----------------------------------------------------------------------->
	<!----------------------------------------------------------------------
	MENU ASIGNATURA
	----------------------------------------------------------------------->
	<div class="menu_asignatura">
		<ul class="menu">
			<li><a href="../">Índice</a></li>
		</ul>
	</div>
</div>
<!----------------------------------------------------------------------
FIN MENU ASIGNATURA
----------------------------------------------------------------------->
<div class="contenido">
	<a name="introduccion"></a>
<!----------------------------------------------------------------------
INTRODUCCION
----------------------------------------------------------------------->
<div class="tema">
<h1>INTRODUCCIÓN</h1>
<h2>Sistemas de numeración</h2>
<h2>Introducción a la comunicación de datos</h2>
<h4>Elementos necesarios</h4>
<ul>
	<li>Terminales</li>
	<li>Dispositivos de red</li>
		<ul>
			<li>Canal de comunicaciones</li>
			<li>Elementos de interconexión (Hub, switch, router, punto de acceso)</li>
			<li>Adaptadores de red</li>
		</ul>
	<li>Programas de red</li>
		<ul>
			<li>S.O.</li>
				<ul>
					<li>TCP/IP (UDP, TCP...)</li>
					<li>Netbios (SMB)</li>
					<li>NFS (de Unix “Net File System”)</li>
					<li>Novell (IPX)</li>
				</ul>
			<li>Clientes/servidor</li>
		</ul>
</ul>
<h4>Servicios básicos de una red de comunicaciones</h4>
<ul>
	<li>Transmisión de voz</li>
	<li>Transmisión de datos</li>
	<li>Establecimiento de llamada</li>
	<li>Tarificación</li>
</ul>
</div>
<A name="tema1"></A>
<!----------------------------------------------------------------------
TEMA 1
----------------------------------------------------------------------->
<div class="tema">
<h1>Tema 1. Clasificación de redes atendiendo a diferentes criterios</h1>
<h2>Clasificación:</h2>
<ol>
	<li><b>Según la titularidad de la red</b>:</li>
		<ul>
			<li>Redes dedicadas. Líneas privadas Ej: red local</li>
			<li>Redes compartidas. Redes de servicio publico. Ej: red teléfono fijo y móvil ,rdsi, iberpac</li>
		</ul>
	<li><b>Según la topología</b>:</li>
		<ul>
			<li>Malla</li><image src="../Imagenes/malla.jpg" alt="Red en malla"></image>
			<li>Estrella</li><image src="../Imagenes/estrella.jpg" alt="Red en estrella"></image>
			<li>Bus</li><image src="../Imagenes/bus.jpg" alt="Red en Bus"></image>
			<li>Árbol</li><image src="../Imagenes/arbol.jpg" alt="Red en árbol"></image>
			<li>Anillo</li><image src="../Imagenes/anillo.jpg" alt="Red en anillo"></image>
			<li>Intersección de anillo</li><image src="../Imagenes/interseccion_anillo.jpg" alt="Red en intersección de anillo"></image>
			<li>Iregular</li><image src="../Imagenes/irregular.jpg" alt="Red irregular"></image>
			
		</ul>
	<li><b>Según la transferencia de información</b>:</li>
		<ul>
			<li>Redes conmutadas (punto a punto).</li>
				<ul>
					<li>Conmutación de circuitos (telefonía fija)(Se busca 1 vía para llegar hasta el receptor).</li>
					<li>Conmutación de paquetes :</li>
						<ul>
							<li>Datagrama (cada paquete elige su ruta.): ej: ATM.</li>
							<li>Circuito virtual (El primer paquete abre el camino y el resto va por el mismo lugar.): Ej: frame relay.</li>
						</ul>
					<li>Conmutación de mensajes: Ej: telégrafo.</li>
				</ul>
			<li>Redes de difusión (multipunto): Ej: bus, anillo, wifi,...</li>
		</ul>
	<li><b>Según la localización geográfica</b>:</li>
		<ul>
			<li>Subred o segmento de red (comparten el mismo cable ).</li>
			<li>LAN.</li>
			<li>Red de campus.</li>
			<li>Red de área metropolitana(MAN). Recursos publico o privados.</li>
			<li>Red de área extensa (WAN). Los enlaces son ofrecidos por empresas de telecomunicaciones.</li>
		</ul>
</ol>
<h2>Normalización y Organismos.</h2>
<p>Es necesario definir un conjunto común de normas que permiten coordinar a todos los fabricantes.<br>
Las normas se dividen en 2 categorías:</p>
<ul>
	<li>De Facto (PC, UNIX).</li>
	<li>Estándares de Jure(Esta establecido por una organización, tipo ISO)(OSI, ATX).</li>
</ul>
<p>Organizaciones de normalización y estandarización:</p>
<ul>
	<li>ITU (Unión internacional de comunicaciones).</li>
	<li>ISO (Organización internacional de estándares).</li>
	<li>ANSI (Instituto americano de normas nacionales).</li>
	<li>IEEE (Instituto de ingenieros electrónicos y eléctricos).</li>
	<li>IETF (Grupo de trabajo en ingeniería de internet(se encargan de establecer protocolos como TCPIP).</li>
	<li>ISC (Consorcio de sistemas de internet) (Define como va a ser DMCP (Reparte IP).</li>
	<li>ICANN (IANA) (Corporación de internet Para la asignación de nombres y números).</li>
	<li>W3C (Define como tiene que ser el www (World wide web) HTML, CSS, PHP, XMR, etc)).</li>
	<li>Open Group(Se encarga de estándares abiertos).</li>
</ul>
</div>
<a name="tema2"></a>
<!----------------------------------------------------------------------
TEMA 2
----------------------------------------------------------------------->
<div class="tema">
<h1>TEMA 2. Arquitectura de una red</h1>
<P>La arquitectura de una red  depende de la tecnología utilizada en su construcción, definida en tres aspectos relacionados entre si:</P>
<ul>
	<li>Topología.</li>
	<li>Método de acceso a la red (medio compartido o no).</li>
	<li>Protocolos de comunicación.</li>
		<ul>
			<li>Protocolos de alto nivel: definen como se comunican las aplicaciones.</li>
			<li>Protocolos de bajo nivel: definen como se transmiten las señales por el medio de transmisión.</li>
			<li>Protocolos intermedios: controlar la transmisiones, detectar errores, establecer y mantener sesiones.</li>
		</ul>
</ul>
<p>Problemas en el diseño de una arquitectura de red:</p>
<ul>
	<li>Encaminamiento (Es la búsqueda de el destino).</li>
	<li>Direccionamiento (Es la identificación (numero) del destino).</li>
	<li>Control de errores.</li>
	<li>Acceso al medio.</li>
	<li>Congestión.</li>
	<li>Mantenimiento del orden.</li>
	<li>Multiplexación (compartir el medio) (Llega mucha información a un mismo lugar y posiblemente a la vez).</li>
</ul>
<h2>Características de las arquitecturas por niveles.</h2>
<p>Los protocolos se dividen en capas o niveles para reducir la complejidad de su diseño. Cada una de las capas se construye sobre su predecesor, y cada nivel es responsable de ofrecer servicios a niveles inferiores.</p>
<p>En una jerarquía de protocolos se siguen las siguientes reglas:</p>
<ul>
	<li>Cada nivel dispone de un conjunto de servicios</li>
	<li>Los servicios están definidos mediante protocolos estándares</li>
	<li>Cada nivel se comunica con su inmediato superior e inferior</li>
	<li>Cada nivel ofrece servicios a su inmediato superior.</li>
</ul>
<P><b>Protocolo</b>: conjunto de normas que regular la comunicación entre dos niveles iguales.</P>
<P><b>	Interfaz</b>: conjunto de normas y servicios que permite la interconexión entre niveles adyacentes.</P>
<p>Ejemplo:</p>
<pre>
		Protocolo
Nivel A <-----------------> Nivel A
	^
	|
	| Interfaz
	|
	v
Nivel B
</pre>
<p>Los protocolos o arquitecturas mas utilizados son:</p>
	<ul>
		<li>Modelo OSI</li>
		<li>TCP/IP</li>
		<li>ATM (xDSLo cable)</li>
		<li>Red de Microsoft (netbios, smb,netbeui)</li>
		<li>IPX</li>
	</ul>
<h2>Modelo de referencia OSI de la ISO.</h2>
<image src="../Imagenes/modeloOSI.png" alt="Modelo OSI"></image>
<p>Las capas tienen características propias y cada una de ellas esta destinada a hacer una cosa.</p>
<ul>
	<li>Sesión: pedir pagina web, direccionamiento y diferenciación de aplicaciones.</li>
	<li>Aplicación: Pide por ejemplo el saldo (Banco), Solicitud de envío de imagen JPG, envío de comando para ejecución.</li>
	<li>Transporte: División de mensajes para envío en trozos, envío de información de recepción con petición de recibo, solicitud de reenvío de información en caso de perdida.</li>
	<li>Físico: Encargado de la distribución de la intensidad por las patillas.</li>	
</ul>
<p>Solicitud de envío de imagen JPG.<br>
Esta constituida por varias capas o niveles, afronta el problema de las comunicaciones
 de datos  y las redes informáticas dividiendo.</p>
<p>Esta estrategia establece dos importantes beneficios:</p>
<ul>
	<li>Mayor comprensión del problema.</li>
	<li>La solución de cada problema especifico puede ser optimizada individualmente.</li>
</ul>
<p>CCIT y ISO forman la torre OSI.</p>
<p>Pretendía ser un modelo básico de referencias, no tuvo la repercusión que se esperaba entre las que destacaban las siguientes:</p>
<ul>
	<li>La complejidad del modelo.</li>
	<li>La complejidad de las normas.</li>
	<li>El impulso del modelo internet y su simplicidad.</li>
</ul>
<p>Se comunican en 2 direcciones:</p>
<ul>
	<li>Horizontal: Niveles Homónimos.</li>
	<li>Vertical: Entre niveles adyacentes de un mismo sistema.</li>
</ul>
<p>Los siete niveles/capas:</p>
<ul>
	<li>Nivel físico: Se encarga de las conexiones físicas, tanto del medio físico como la forma. Señal y transmisión binaria.</li>
	<ul>
		<li>Envío de bits.</li>
		<li>Garantizar la conexión.</li>
		<li>Manejar las señales eléctricas.</li>
		<li>Definir la señales eléctricas.</li>
		<li>Definir el medio por el que va la comunicación.</li>
		<li>Características materiales y eléctricas.</li>
	</ul>
	<li>Nivel enlace de datos: Direccionamiento físico, topología de red, acceso al medio, detección de errores, control de flujo, distribución de la trama.</li>
	<li>Nivel de red: Se encarga de identificar el enrutamiento, las unidades de información (Paquetes).<br>Los datos llegan del origen al destino, dirección de ruta.</li>
	<li>Nivel de transporte: El transporte de datos. Conexión de extremo a extremo y fiabilidad de los datos (Libre de errores).</li>
	<li>Nivel de sesión: Comunicación entre dispositivos de la red. Controla el enlace establecido entre dos ordenadores que están transmitiendo datos.</li>
	<li>Nivel de presentación: representación de los datos, de manera que aunque distintos equipos puedan tener diferentes representaciones internas de caracteres los datos lleguen de manera reconocible.</li>
	<li>Nivel de aplicación: Servicios de red a las aplicaciones acceder a los servicios de las demás capas y define los protocolos que utilizan las aplicaciones para intercambiar datos. Suele interactuar con programas.</li>
</ul>
<p>Nivel de enlace y nivel físico los mas importantes ya están dentro de Ethernet (implementado físicamente).</p>
<h2>TCP/IP</h2>
<p>Es mas simple que el modelo OSI. Algunas capas se agrupan o por no usar algunas capas.</p>
<p>Son abiertos y gratuitos, su desarrollo y modificaciones se hacen por consenso.</p>
<p>Independencia del nivel del software y hardware. Lo que permite distintos equipos interconectarse y formar redes de equipos locales.</p>
<p>Un esquema común de direccionamiento (Permite localizar a otro).</p>
<p>Niveles TCP/IP:</p>
<ul>
	<li>Nivel de enlace: Acceso al medio(nivel 1 y nivel 2 OSI).</li>
	<li>Nivel de red: internet (Nivel 3 -- OSI).</li>
	<li>Nivel de transporte: Transporte (Nivel 4 -- OSI).</li>
	<li>Nivel de aplicación.: Nivel 5,6,7 -- OSI).</li>
</ul>
<h2>ATM</h2>
<P>Envío de celdas, sin enrutamiento, va por alta velocidad. Las celdas son configurables.</P>
<p>No tiene IP, son circuitos virtuales con mucha velocidad tasa de errores muy baja (ADSL -- ATM).</p>

</div>
<A NAME="tema3"></A>
<!----------------------------------------------------------------------
TEMA 3
----------------------------------------------------------------------->
<div class="tema">
<h1>TEMA 3. Medios Físicos en la Transmisión</h1>
<h2>Características de las señales</h2>
<p>Una señal viene definida por 3 características:</p>
	<ul>
		<li>Amplitud (a): voltaje máximo de la señal.</li>
		<li>Frecuencia (f): Nº de ciclos por segundo (número de veces que se repite la señal).</li>
		<li>Fase: Valor que tiene la señal en un momento dado. F=1/t.</li>
		<li>Periodo (t): Tiempo que tarda la señal en realizar un ciclo. 1/f=t.</li>
	</ul>
<p>El ancho de banda de un medio de transmisión es el rango de frecuencias soportadas.</p>
	<ul>
		<li>Banda Base: Utiliza todo el ancho de banda para una única transmisión (Ethernet).</li>
		<li>Banda Ancha: permite dividir el ancho de banda del canal de transmisión en varios canales (Coaxial del TV).</li>
	</ul>
<h2>Tipos de transmisión</h2>
	 <ul>
		 <li>Analógica a analógica (La televisión.).</li>
		 <li>Analógico a digital.</li>
		 <li>Digital a analógico.</li>
	 </ul>
<h4>Modulación: Transporte de señales digitales con transporte analógico (Modem)</h4>
<p><b>Componentes:</b></p>
	<ul>
		<li>Señal portadora: Está modulada por la moduladora, es la que envía.</li>
		<li>Señal moduladora: Controla algún parámetro de la portadora, es la que tiene la señal para enviar.</li>
	</ul>
<p><b>Tipos:</b></p>
	<ul>
		<li>Modulación en amplitud.<br>
		Se modifica la amplitud. Cuando mando un 1 mando con una amplitud de A y cuando mando un 0 mando con una amplitud de a.<br>
		1 = A<br>
		0 = a<br>
		<image src="../Imagenes/modulacion_amplitud.jpg" alt="Modulación en amplitud"></image>
		</li>
		<li>Modulación en frecuencia.<br>
		Se modifica la frecuencia para mandar los datos. Cuando mandamos un 1 mandamos a más frecuencia y cuando mandamos un 0 mandamos a menos frecuencia. Así con un uno hay más ondas que con un 0 en un segundo.<br>
		<image src="../Imagenes/modulacion_frecuencia.jpg" alt="Modulación en frecuencia"></image></li>
		<li>Modulación en fase.<br>
		Se cambia la fase para saber que es, si un 0 o un 1. Lo que se hace es cambiar como empieza la onda. Este método se ha mejorado con el diferencial de fase.<br>
		<image src="../Imagenes/modulacion_fase.jpg" alt="Modulación en fase"></image>
		</li>
		<li>QAM (Modulación amplitud cuadrática).<br>
		Se usan dos amplitudes y dos fases.<br>
		Amplitud a en fase 0, → 00<br>
		Amplitud a en fase pi, → 01<br>
		Amplitud A en fase 0, → 10<br>
		Amplitud A en fase pi, → 11<br>
		En cada señal que se manda se transportan dos bits. Se aumenta la velocidad.<br>
		<image src="../Imagenes/modulacion_cuadratica.jpg" alt="Modulación en amplitud cuadrática"></image>
		</li>
	</ul>



<h2>Tipos de cableados</h2>

<ul>
	<li>Nuevas tecnologías</li>
		<ul>
			<li><a href="http://es.wikipedia.org/wiki/GPON" target="_blank">GPON</a>: Una tecnología nueva que quiere implantar telefónica.</li>
			<li><a href="http://es.wikipedia.org/wiki/DOCSIS" target="_blank">DOCSIS</a>: Una tecnología que utiliza Ono.</li>
		</ul>
	<li>Guiado</li>
		<ul>
			<li>Par de cables (Rj-11(cable de teléfono)).</li>
			<li>Par trenzado (conjunto de cables trenzados y evita la diafonía).</li>
				<ul>
					<li>UTP (Par trenzado sin apantalla).</li>
					<li>STP (Par trenzado apantallado individualmente).</li>
					<li>S/STP (Par trenzado apantallado individualmente y malla global).</li>
					<li>FTP (Pantalla conductora global).</li>
				</ul>
			<p>Dependiendo del numero de par de cables que tenga un cable, el numero de vueltas por metro que posee su trenzado y los materiales utilizados, tendremos categorías: cat1, cat2……cat5= rj45, cat5e, cat6, cat7=rj-48</p>
			<p><a href="http://es.wikipedia.org/wiki/TIA-568B" target="_blank">Normativa</a></p>
			<li>Coaxial</li>
				<ul>
					<li>Fino</li>
					<li>Grueso</li>
				</ul>
			<h5>Características</h5>
				<ul>
					<li>Mejor blindaje que el par trenzado</li>
					<li>Los tramos entre repetidores mayores, alcanzan mayores distancias y velocidades</li>
					<li>En 1Km podemos trasmitir a 1 o 2Gbps</li>
					<li>Utilizadas en instalaciones telefónicas por su alta capacidad de transmisión, largo recorrido y multitud de comunicaciones simultaneas</li>
					<li>Hoy en día reemplazado por la fibra óptica</li>
					<li>Utilizada en TV por cable</li>
					<li>Se puede utilizar en:</li>
						<ul>
							<li>Banda base (transmisión digital): en distancias de 1Km => 10Mbps</li>
							<li>Banda ancha (transmisión analógica): TV y datos a 150Mbps</li>
						</ul>
				</ul>
			<li>Fibra óptica</li>
			<h5>Características</h5>
				<ul>
					<li>Transmite ondas de luz</li>
					<li>Esta compuesto de 3 componentes</li>
						<ul>
							<li>Emisor de luz</li>
								<ul>
									<li>Led</li>
									<li>Láser</li>
								</ul>
							<li>Medio de transmisión: fibra de vidrio</li>
							<li>Detector: fotodiodo</li>
						</ul>
					<li>3 formas de transmitir la luz</li>
						<ul>
							<li>Mono modo: La luz se transmite en linea recta (láser)</li>
							<li>Multimodo: Se modifica la longitud de onda (Led)</li>
							<li>Multimodo índice gradual: Refracción gradual (Led)</li>
						</ul>
					<li>Longitud de hasta 30Km</li>
					<li>Velocidad en laboratorio 50000Gbps. Redes 1 o 2Gbps</li>
					<li>Ventajas frente al coaxial</li>
						<ul>
							<li>Maneja ancho de banda mayores</li>
							<li>Baja atenuación => distancias mayores</li>
							<li>No es interferida por ondas electromagnéticas</li>
							<li>Es delgada y ligera</li>
							<li>No  tiene fugas y es difícil intervenirlas	</li>
						</ul>
				</ul>
			
		</ul>
	<li>No guiado</li>
		<ul>
			<li>Ondas de radio:</li>
				<ul>
					<li>Radio enlaces terrestres.</li>
					<li>Radio enlaces satélites.</li>
				</ul>
			<li>Microondas (2,5 Ghz)(son microondas entre 1-10ghz)Son las mas utilizadas por WIFI, tienen 12 canales y hay que diferenciarlas para que no haya interferencias.</li>
			<li>Infrarrojas:Distancias muy pequeñas, no suele superar los 10 m (mandos TV). Suelen ir encriptadas y son bastante seguras.</li>
			<li>Ondas luminosas.</li>
			
		</ul>
	
</ul>

<table border=1 width=100%>
<tr><th>Medio</th><th>Volumen máximo de transmisión.</th><th>Distancias máximas</th></tr>
<tr><td>Par trenzado</td><td>1 Gbps</td><td>100 m</td></tr>
<tr><td>Coaxial</td><td>2 Gbps</td><td>500 m</td></tr>
<tr><td>Fibra óptica</td><td>>10 Gbps</td><td>2 - 5 km</td></tr>
<tr><td>Ondas de radio</td><td>1 Mbps</td><td>50 - 100 km</td></tr>
<tr><td>Microondas</td><td>100 Mbps</td><td>3 - 5 km</td></tr>
<tr><td>Infrarrojo</td><td>10 Mbps</td><td>20 m</td></tr>
<tr><td>Ondas de luz</td><td>1 Mbps</td><td>1 km</td></tr>
</table>

<h2>Ruido y capacidad de transmisión de un medio.</h2>
<p><b>Ruido:</b> Efectos que interfieren sobre la señal transmitida y la modifican.</p>
	<ul>
		<li><b>Atenuación:</b> Perdida progresiva del nivel de la señal. 
		Solución: mediante repetidores. Generalmente no se usan repetidores ya que los
		switchs y los hubs hacen de repetidores y es eso lo que se suele poner si hay que
		hacer una instalación muy larga. Si no tenemos donde enchufar el switch, hay algunos 
		que usan la tecnología <a href="http://es.wikipedia.org/wiki/Power_over_Ethernet" target="_blank">POE</a>, que es capaz de alimentar el switch a través del rj45.</li>
		<li><b>Diafonía:</b> Influencia de otros cables próximos. Solución: apantallar el cable.</li>
		<li><b>Ruido impulsivo:</b> Intervención externa de poca duración. Solución: Filtrar la señal.</li>
		<li><b>Ruido Térmico:</b> Es el calor producido por los electrones al moverse.</li>
	</ul>
<p><b>Capacidad:</b></p>	
	<ul>
		<li>Velocidad de modulación (Baudios= ciclos/seg=hz): capacidad del medio de cambiar de estado por segundos.</li>
		<li>Velocidad de transmisión (Bps).</li>
	</ul>
<h3>Ejercicios</h3>
<?php echo ejercicio();?>
<?php echo ejercicio();?>
<?php echo ejercicio();?>

<h2>Comprobación del cableado</h2>
<h4>Comprobadores de red</h4>
	<ul>
		<li>Comprobadores de continuidad (Voltímetros).</li>
		<li>Comprobadores de cableado: Comprueban: diafonía, atenuación, ruido y realizan estadísticas del trafico de red.</li>
		<li>Reflector de dominio de tiempo: Los más avanzados, son capaces de medir, empalmes, nudos, radios de curvatura, longitud de los cables, detectan anomalías e indican en qué punto se producen (Pruebas de reflectometría (tdr)), muy utilizados con la fibra óptica.</li>
	</ul>
<h4>Parámetros a medir en la certificación del cableado:</h4>
	<ul>
		<li>Continuidad.</li>
		<li>Mapeado de hilos.</li>
		<li>Resistencia.</li>
		<li>Longitud.</li>
		<li>Atenuación.</li>
		<li>Diafonía</li>
		<li>Perdida por retorno.</li>
	</ul>
<h3>Ejercicio</h3>
<?php echo ejercicio("atenuacion_1");?>
</div>
<A NAME="tema4"></A>
<!----------------------------------------------------------------------
TEMA 4
----------------------------------------------------------------------->
<div class="tema">
<h1>TEMA 4. Interconexión de redes</h1>
<h2>Elementos básicos de interconexión</h2>
<p>Adaptador -- medio de transmisión -- otro dispositivo de interconexión</p>
	<ul>
		<li><b>Adaptador</b>: Convierten la señal digital del ordenador a otra adecuada para ser transmitida por la red. Estos adaptadores se pueden conectar a los distintos puertos del ordenador.</li>
			<ul>
				<li>Puerto serie.</li>
				<li>Puerto paralelo.</li>
				<li>Puerto USB 1.0 = 1,5 Mbps 2.0 = 480 Mbps 3.0 = 6 Gbps</li>
				<li>Puerto Firewire. 800 Mbps. <A href="http://es.wikipedia.org/wiki/IEEE_1394" target="_blank">Evolución (Wiki)</A>.</li>
				<li>Ranuras de expansión <strike>ISA</strike>, PCI(32 -> 133 MB / 64 bits -> 266 MB).</li>
			</ul>
		Tipos de adaptadores:
			<ol>
				<li><b>Módem</b> (winmodem --> interno)</li>
					<ul>
						<li>Serie V</li>
						<li>Módem (dial-Up) 56 Kbps</li>
						<li>Módem RDSI 2x64 Kbps</li>
						<li>Módem XDLS</li>
						<li>Cable Módem</li>
					</ul>
				Las comunicaciones de los módems se realizan utilizando los siguientes 
				protocolos:
					<ul>
						<li>PPP (point to point protocol)</li>
						<li>PPPoE (point to point protocol over Ethernet)</li>
						<li>PPPoA (point to point protocol over ATM)</li>
						<li>PPPoEoA (point to point protocol over Ethernet and ATM)</li>
					</ul>
				Estas conexiones casi siempre se realizarán sobre un encaminador, para 
				conectarnos con una red de área extensa (WAN).
				<li><b>Tarjetas de red</b>: (NIC)</li>
				En ellas se encuentran grabados los protocolos físicos y de enlace, la comunicación se realiza a través de las ranuras de expansión (USB, PCI, PCMCIA, …) o se encuentran integradas en la placa.
				<p>Pasos a realizar a la hora de transmitir información:</p>
					<ul>
						<li>Determinar velocidad de transmisión, longitud del bloque de información (MTU), tamaño de la memoria intermedia (buffer).</li>
						<li>Convertir flujo de datos en paralelo a serie.</li>
						<li>Codificar la secuencia de bits en señal eléctrica.</li>
					</ul>
			</ol>
		<li><b>Otros dispositivos de interconexión</b>:</li>
			<ul>
				<li><b>Repetidores y amplificadores</b>:</li>
				Cuando las distancias entre equipos son elevadas y los efectos de la atenuación son intolerables, es necesario. Hoy en día no se utilizan ya que los HUB también amplifican.
				<li><b>Concentradores de cableado (HUB)</b>:</li>
				También llamados repetidores multipuerto, centraliza las conexiones en un único punto.<p>Dos tipos:</p>
					<ul>
						<li>Pasivos: Solo concentran.</li>
						<li>Activos: Concentran y regeneran la señal.</li>
					</ul>
				<b>Topología física</b>: La forma en la que se distribuye el cableado. Generalmente todos
				los cables de todos los ordenadores de una empresa va a parar a un rack donde se diseña la
				lógica de la red, lo que hace que parezca que es en estrella.<br>
				<b>Topología lógica</b>: La forma en la que se distribuye la red. En .<br>
					<ul>
						<li>Lógica en bus.</li>
						<li>Lógica en anillo.</li>
					</ul>
				<li><b>Puntos de acceso inalámbricos.</b></li>
				En una red inalámbrica tendremos 2 dispositivos:
					<ul>
						<li>T. red inalámbrica.</li>
						<li>Punto de acceso.</li>
					</ul>
				Dos formas de conectarnos a la wi-fi:
					<ul>
						<li>Infraestructura (AccessPoint).</li>
						<li>Ad-hoc (Conexión compartida a internet).</li>
					</ul>
				Ampliar coberturas:
					<ul>
						<li>Aumentar RxTx (rx recibir, tx transmitir).</li>
						<li>Usar antenas de amplificación:</li>
							<ul>
								<li>Omnidireccionables.</li>
								<li>Unidireccionables.</li>
							</ul>
						<li>Protocolo WDS.</li>
					</ul>
			</ul>
		<li><b>Interconexión de redes distintas</b>:</li>
					<ul>
						<li><b>Puentes</b>: Se usan para segmentar la red. (802.x (Ethernet - segmento - SW) - 802.11 - WDS).<br>
						Hay un proyecto libre que funciona como WDS y que se puede añadir al firmware
						de algunos routers. <a href="http://www.dd-wrt.com/site/index" target="_blank">DD-WRT</a></li>
						<li><b>Puentes transparentes</b> (Reenvío de paquetes - Promiscuo (tarjeta modo promiscuo).</li>
						<li><b>Puentes remotos</b> (Unir dos LAN a largas distancias a través de RTC).</li>
						<li><b>Encaminadores, enrutadores, routers</b>: Trabajan a nivel 3. Se utilizan para interconectar redes que operan con una cepa de red igual, los protocolos de comunicación en ambos lados del encaminador deben ser iguales y compatibles con los niveles superiores al de la red, los niveles inferiores pueden diferir si afectar al encaminamiento.</li>
						Un router cuando recibe un paquete, extrae la dirección del destinatario y decide cual es la mejor ruta a elegir a partir de un algoritmo y una tabla de encaminamiento. Para elegir el mejor camino un router tiene  en cuenta, el nº de saltos, velocidad de transmisión, distancia y condiciones de tráfico.<br>
						<p><b>Un encaminador se utiliza para</b>:</p>
							<ul>
								<li>Proporcionar seguridad a través de filtros de paquetes (Firewall).</li>
								<li>Integrar diferentes tecnologías de enlace de datos (Ethernet, FDDI, Token Ring, ATM, ...).</li>
								<li>Permite la existencia de diferentes alternativas contra congestiones y fallos de comunicación, para ello dispone de un mapa donde figure la topología de la red.</li>
							</ul>
						<p><b>Puertos de un router</b>:</p>
							<ul>
								<li>Serie.</li>
								<li>RJ45.</li>
								<li>FDDI.</li>
								<li>RDSI.</li>
								<li>XADSL.</li>
								<li>Cable.</li>
								<li>Consola.</li>
							</ul>
						<p><b>Estructura interna</b>:</p>
						<p>Al manejar algoritmos y tablas de enrutamiento funcionan como una CPU,
						 tendrán: UCP, Memoria Principal, sistema básico de entrada/salida (BIOS), 
						 sistema operativo (IOS). La memoria principal suele estar dividida en varios 
						 tipos, ya que almacenan diferentes tipos de información.</p>
						 <ul>
							<li>Memoria Volátil: Se borra al apagar el equipo, almacena tablas de 
							encaminamiento, resoluciones ARP y mensajes recibidos.</li>
							<li>Memoria No Volátil: Almacena configuraciones, que se pueden modificar, 
							no se borra al apagar.</li>
							<li>Memoria Flash: No se borra y contiene el S.O.</li>
							<li>Memoria de Solo Lectura: No se puede borrar ni modificar, e incluye los 
							programas de autodiagnóstico y arranque (BIOS).</li>
						 </ul>
						 <li><b>Pasarelas</b>: Se encarga del encadenamiento y la interconexión de redes 
						 diferentes(arquitecturas diferentes(TCP/IP, X.25, IPX, ATM, OSI, ...), por tanto 
						 son capaces de transformar paquetes de un protocolo a otro..<BR>Ya no tienen mucho sentido porque ya se han hecho compatibles</li>
						 <li><B>Conmutadores(Switch)</B>: Segmentan la red para aumentar su rendimiento, cada boca del Switch es un segmento =&gt; conmuta, trabaja a nivel de enlace. Utilizan	las MAC para comunicarse, por lo tanto tiene que tener una caché con la lista de MACs que están conectadas a un puerto.</li>
						 <ul>
							<li><b>Dominio de colisión</b>: Área donde 2 o más paquetes pueden colisionar. Cada una de las bocas es un dominio de colisión. Un switch tiene tantos dominios de colisión como bocas tenga.</li>
							<li><b>Domino de broadcast</b>: Zonas donde se propagan paquetes tipos broadcast (dentro de la red). Cuando hacemos broadcast mandamos paquetes a toda la red (Ejemplo: ARP). La IP de destino al hacer broadcast termina en .255 (Ejemplo: 192.168.1.255).<BR>El broadcas solo trabaja a nivel de LAN, no	pasan por los routers. </li>
						 </ul>
						 <li><b>Redes troncales (backbone)</b>: Red que se encarga de unir otras redes. Suelen ser de alta capacidad (FDDI).</li>
						 <li><b>armarios de distribución (Racks)</b>: Se utilizan para realizar la conexión de las distintas redes. Concentran todos los dispositivos de comunicación SW y Routers, paneles de interconexión, e incluso servidores enracables.</li>
					</ul>
	</ul>
</div>
<A NAME="tema5"></A>
<!----------------------------------------------------------------------
TEMA 5
----------------------------------------------------------------------->
<div class="tema">
<h1>5. Protocolos de red y esquemas de direccionamiento.</h1>

<p>En una red son necesarios mecanismos que permitan identificar unas estaciones de otras.</p>
<p>Los protocolos de nivel físico y de enlace, son muy dependientes de las características de la red física.</p>
<p>La capa de red debe conocer la topología física y seleccionar las mejores rutas a través de ella, deberá tener encuentra rutas alternativas a modo de evitar congestiones y fallos en la línea.</p>
<p>La capa de red utiliza algún método para guardar toda la información concerniente a la topología física de la red, y comunicar esa información a otros dispositivos (protocolo de enrutamiento: RIP, IGRP, OSPF, EIGRP…..).</p>
<p>Existen diferentes versiones del protocolo TCP/IP (Protocolo enrutado), pero todos ellos deben cumplir con las especificaciones de los documentos RFC (Request for comment).</p>
<p>La forma más sencilla de decidir que equipos es el destinatario de la información es a través de direccionamiento (Asignar identificador Único).</p>
<p>El direccionamiento también se puede utilizar para localizar un equipo y así calcular la mejor ruta.</p>

<h2>Direccionamiento a nivel de enlace.</h2>
<p>Dirección física, MAC(48 bits) 24 (fabricante) + 24 (número consecutivo). Son únicas.</p>
<h2>Direccionamiento a nivel de red (IP).</h2>
<p>Para encaminar información, identificar donde están las redes. (Buscar, Localizar,…).</p>
<p>Otra de las funciones del direccionamiento es localizar al destinatario buscando un camino óptimo.</p>
<p>En los años 80 se diseñaron varios protocolos a nivel de red que permitieron que los paquetes fueran enviados correctamente a través de una gran cantidad de redes, heterogéneas, el mas importante fue IP (Internet Protocol) definido en la rfc791.</p>
<p>El protocolo de IP es no orientado a conexiones y no fiable, de forma que el establecimiento de la conexión y control de errores lo llevara a cabo el nivel superior (Transporte) TCP, UDP o ICMP:</p>
<ul>
	<li><B>UDP</B>: Más veloz. (Juegos On line) mas inseguro.<li>
	<li><B>TCP</B>: Más seguro pero mas lento.</li>
	<li><B>ICMP</B>: Es el que utilizan los enrutadores para controlar los paquetes perdidos, eliminarlos y avisar a la IP de origen (mandándole un paquete) de que se ha perdido el paquete. Este protocolo es también el que se usa al hacer PING y devolvernos el PONG</li>
</ul>
<p>Existen otros protocolos a nivel de red que se encargan de seleccionar las mejores rutas para el envío de mensajes por ello maneja de tablas de enrutamiento (RIP, OSPF, IGRP, EIGRP-4,...)</p>

<h3>Direccionamiento</h3>
<ul>
	<li><B>Identifica</B>. (NAC) &rArr; Nivel 2 &rArr; enlace.</li>
	<li><B>Localiza</B>. (IP) &rArr; Nivel 3 &rArr; Nivel red &rArr; Enrutamiento.</li>
	<li><B>Identificar el servicio a través de un puerto</B>. (Aplicación)</li>
	<li><B>Servicio de nombres (URL)</B> &rArr; DNS. (Aplicación)</li>
</ul>

<h4>Modelo de Clases:</h4>
<p>32 Bits (4 octetos).</p>
<p>El primer esquema de direccionamiento que se usó iba por clases y no utiliza la máscara sub red. Había:</p>
<p></p>
<ul>
	<li><b>Clase A</b>:</li>
		<p>Utiliza el primer octeto para identificar la red: Tendríamos solo 255 redes y 2^24 Hosts.<br>Para saber cual es la subred el primer bit es 0, por lo que solo nos quedan 7 bits para ips, nos quedan 128, por lo que cualquier IP menor de 127 es de clase A.</p>
		<table>
		
		</table>
	<li><b>Clase B</b>:</li>
	<p>Utiliza los dos primeros octetos para identificar la red.<br>Para saber cual es la subred el primer bit es 1 y el segudo es 0, por lo que las redes que empiecen desde 128 hasta 191 son de clase B.</p>
	<li><b>Clase C</b>:</li>
	<p>Utiliza los tres primeros octetos para identicar la red.<br>Para saber cual es la subred el primer bit es 1 y el segundo es 1, por lo que las redes que empiecen desde 192 hasta 255 son de clase C.</p>
</ul>
<h4>Modelo CIDR:</h4>
<p>Este modelo tiene unas <a href="http://www.rfc-es.org/rfc/rfc1918-es.txt" target="_blank">IPs de uso privado</a>.</p>
<p>Este método permite usar redes que no usen octetos enteros.</p>
<p><b>Ejemplo</b>:</p>
<div class="ejemplo">
<p>10.0.0.0/8 &rArr; La red usa 8 bits.</p>
<p>17.16.0.0/12 &rArr; La red usa 12 bits.</p>
<p>192.168.0.0/16 &rArr; La red usa 16 bits.</p>
</div>
<p>El organismo que gestiona las IPs es <a href="http://www.iana.org" target="_blank">"iana"</a></p>
<p>Además de estas IPs hay otras que también están reservadas, como la 127.0.0.0. Todo esto hace que las IPs sean un recurso limitado.</p>
<h3>Encaminamiento</h3>
<p>Dividir la dirección en partes permite llegar al destinatario de una forma mas fácil y rápida (las direcciones guardan información sobre su localización).</p>
<p>Este método permite reducir el tamaño de las tablas de enrutamiento.</p>
<p>Los encaminadores disponen de una tabla con los posibles destinos en forma de direcciones IP. En cada fila de esta tabla se especifica la dirección de las redes a las que se puede llegar, la puerta de enlace a utilizar y el numero de encaminadores a atravesar (métrica).</p>
<p>Estas tablas las utilizan los protocolos de enrutamiento y se actualizan de forma manual o dinámica.</p>
<p>Las tablas de encaminamiento pueden incluir la siguiente información:</p>
<ul>
	<p>Protocolo de encaminamiento.</p>
	<p>Red de destino.</p>
	<p>Mascara de red.</p>
	<p>Siguiente (GW).</p>
	<p>Métrica.</p>
	<p>Interfaz.</p>
</ul>
<p>Los protocolos de encaminamiento utilizados son:</p>
<ul>
	<li>RIP</li>
	<li>RIP V2</li>
	<li>IGRP</li>
	<li>EIGRP</li>
	<li>OSPF</li>
	<li>IS</li>
	<li>BGP</li>
	<li>BGP-4</li>
</ul>
<img src="../Imagenes/Ejemplo_encaminamiento_1.png" width=100% alt="Ejemplo de tablas de encaminamiento">
<img src="../Imagenes/Ejemplo_encaminamiento_2.png" width=100% alt="Ejemplo de tablas de encaminamiento">

<p>Las direcciones IPv6 se pueden representar de 3 formas diferentes (16 bytes):</p>
<ul>
	<li>8 números en hexadecimal de 16 bits separados por 2 puntos</li>
	<p>2001:ODB8:0000:0001:0000:0000:1428:0E13</p>
	<li>Igual que el anterior, pero eliminando los ceros a la izquierda y todos los ceros consecutivos</li>
	<p>2001:DB8:0:1::1428:E13</p>
	<li>Utilizando una notación mixta IPv6 (6 nº hexadecimal de 16 bits)+IPv4 (4 nº decimales de 8 bits)</li>
	<p>::FFFF:192.168.1.86</p>
	<p>::192.168.1.86 sería igual que ::C0A8:0156</p>
	<p>Pasarlo a binario:</p>
	<pre>
		::C0A8:00000001.01010110
		
		C0A8 --> 1100 0000 1010 1000
		11000000 --> 192
		10101000 --> 168
	</pre>
</ul>


<p>Hay 270.000 billones de IPv6 por mm<sup>2</sup></p>
<p>En IPv6 también existe la máscara de red y su función es equivalente a IPv4-</p>
<p>Existe una <a href="http://www.6sos.org" target="_blank">página de información sobre IPv6</a>.</p>
<p>Las RFCs de IPv6 son:</p>
<ul>
	<li>1752 (Recomendaciones).</li>
	<li>2373 (Direccionamiento).</li>
	<li>2460 (Especificaciones).</li>
</ul>
<p>IPv6 utiliza RIPing en lugar de RIP.</p>
<p>La ip "default" es la ::/128 y la "loopback" es la ::1/128</p>
<p>Para utilizar IPv4 en enrutamientos IPv6 hay que utilizar la máscara ::FFFF:0:0/96.</p>

<h2>Direccionamiento a nivel de transporte.</h2>
<p>Consiste en utilizar una conexión por varias comunicaciones (multiplexación).</p>

<table>
	<tr>
		<th>IP Origen</th><th>&rarr;</th><th>IP Destino</th>
	</tr>
	<tr>
		<td>Firefox</td><td>(puerto origen) &rarr; (80)</td><td>www.google.com</td>
	</tr>
	<tr>
		<td>IE</td><td>(puerto origen) &rarr; (80)</td><td>www.google.com</td>
	</tr>
	<tr>
		<td>Firefox</td><td>(puerto origen) &rarr; (80)</td><td>www.google.com</td>
	</tr>
</table>
<p>Hay una serie de puertos bien conocidos, que van desde el 1 hasta el 256 (http &rarr; 80, ftp &rarr; 21, telnet &rarr; 23, POP3 &rarr; 110, SMTP &rarr; 25, ...</p>
<p>Hay otra serie de puertos que se denominan "registrados", que son conocidos pero no son registrados oficialmente, como el 8080, que se utiliza de forma bastante estandar para http alternativo. Puertos de este estilo son 666 de Emule, el del ThigVNC...</p>
<p>Hay otra última serie de puertos que son privados y son a partir del puerto 1024.</p>
<p><A href="http://es.wikipedia.org/wiki/Anexo:N%C3%BAmeros_de_puerto">Tablas de puertos TCP Y UDP</A>. En esta página podemos ver que el servicio DNS utiliza los protocolos TCP y UDP en el puerto 53.</p>

<p><b>Ejercicios:</b></p>
<?php echo ejercicio("AND_1");?>
<?php echo ejercicio("Informacion_IP");?>
<?php echo ejercicio();?>
<?php echo ejercicio();?>
<?php echo ejercicio();?>
<?php echo ejercicio();?>
<?php echo ejercicio();?>
<?php echo ejercicio();?>
<?php echo ejercicio();?>
<?php echo ejercicio();?>
<?php echo ejercicio();?>
<?php echo ejercicio();?>
<h4><b>Ejercicio de Sniffer en un switch</b></h4>
<div class="ejercicio">
<p>Hacer sniff en un switch no es tan fácil como hacerlo en hub,  por eso es necesario hacer una seríe de pasos.</p>
<p><b>Requisitos para hacer el ejercicio</b>:</p>
<ul>
	<li><b>Ubuntu</b>: El sistema operativo que vamos a utilizar para este ejercicio es Ubuntu.</li>
	<li><b>dsniff</b>: Para realizar el envenenamiento de ARPs necesitamos instalar el paquete dsniff. Para ello ejecutamos en un terminal:</li>
	<pre>sudo apt-get install dsniff</pre>
	<li><b>telnetd</b>: Para poder comprobar que funciona tendrán que conectarse las dos víctimas mendiante telnet, por lo que las víctimas tienen que tener instalado el servicor telnet. Para ello en una terminal ejecutamos:</li>
	<pre>sudo apt-get install telnetd</pre>
	<li><b>WireShark</b>: Los paquetes los podemos capturar directamente en terminal con el comando dsniff ejecutado como root, pero si queremos utilizar algo más avanzado necesitamos el programa Wireshark. Para ello ejecutamos en un terminal:</li>
	<pre>sudo apt-get install wireshark</pre>
</ul>
<p><b>Pasos a seguir</b>:</p>
<ul>
	<li><b>Envenenamiento de ARP</b></li><p>Un switch crea una conexión directa entre dos ordenadores para que se comuniquen entre ellos, y esa conexión se hace mediante las direcciones MAC. Un ordenador pregunta qué ordenador tiene IP a la que quiere conectarse mediante ARP y le devuelve la MAC de ese ordenador.<br>El envenenamiento consite en mandarle paquetes a los ordenadores vícticas diciendo que tu MAC es la que corresponde a la IP de los dos ordenadores víctimas, así, cuando un ordenador víctima quiere conectarse con la otra víctima realmente se conecta a tu ordenador. Para hacer esto utilizamos el comando arpspoof  que se instala con el paquete dsniff y usamos el parametro -t para decirle que no pare. Ejecutamos en un terminal:</p>
	<pre title="Terminal">sudo arpspoof -t ip_victima1 ip_victima2</pre>
	<p>Y en otro terminal ejecutamos:</p>
	<pre title="Terminal">sudo arpspoof -t ip_victima2 ip_victima1</pre>
	<li><b>Redireccionamiento de IP (IPForward)</b></li><p>Para que los datos que la víctima 1 quiere mandar a la víctima 2 le lleguen, mi ordenador tiene que ser capaz de mandar todo lo que recibe. Para esto basta con cambiar el parámetro del archivo ip_forward. Ejecutamos en otro terminal:</p>
	<pre>echo 1 > /proc/sys/net/ipv4/ip_forward</pre>
	<li><b>Obersar los resultados</b>: Los paquetes recibidos los podemos observar de dos maneras diferentes:</li>
	<ul>
		<li><b>Utilizando el comando dsniff</b>: Este comando permite observar los paquetes recibidos directamente en un terminal. Podríamos redireccionar estos datos a un archivo.</li>
		<pre>sudo dsniff</pre>
		<p>O si queremos redireccionarlo a un archivo:</p>
		<pre>sudo dsniff > capturado.txt</pre>
		<li><b>Utilizando el programa WireShark</b>: Este programa es mucho más avanzado y completo. Para poder utilizarlo hay que ejecutarlo como root:</li>
		<pre>sudo wireshark</pre>
	</ul>
	<li><b>Resetear el IPForward</b>: Una vez que hemos terminado hay que volver a poner el parámetro del IPforward a 0. Para ello ejecutamos en un terminal:</li>
	<pre>echo 0 > /proc/sys/net/ipv4/ip_forward</pre>
</ul>
</div>
<h4><b>Ejercicio de falsificación de certificados</b></h4>
<div class="ejercicio">
<p><b>Objetivo</b>: Intentar capturar datos entre un usuario y un servidor seguro de internet.</p>
<p>Para hacer esto tenemos que meternos en medio entre la víctima y el servidor, pero a un servidor no podemos hacerle ARP, por lo que habrá que hacerselo al router para hacerle creer que yo soy la víctima y a la víctima para hacerle creer que yo soy el router.</p>
<p>Necesitamos saber los dominios a los que se conecta la víctima al acceder al servidor. Para esto símplemente nos conectamos nosotros a ese servidor y nos fijamos en los dominios. En el caso del correo de Google el dominio es google.com</p>
<p><b>Pasos a seguir</b>:</p>
<ul>
	<li>Hacer ARP Spoof a la víctima y al router.</li>
	<li>Crear un archivo con los datos"ip_hacker *.dominio.com" y guardarlo.</li>
	<li>Crear un certificado con información parecida a la del servidor al que se va a conectar la victima. Para ello utilizamos el comando 'webmitm -d' y seguir los pasos.</li>
	<li>Hacemos un DNS spoof con el comando 'dnsspoof -f fichero_anterior.txt</li>
	<li>Hacer IPForward.</li>
	<li>Ver lo capturado con Wireshark.</li>
</ul>
</div>
<p>Todo esto lo hemos podido hacer porque hemos usado ARP spoof, porque los ARP son dinámicos. Para evitar esto habría que poner todas las MACs de todos los ordenadores en un fichero con las correspondientes IP y mandar replicar ese ficher mediante el dominio para que todos los ordenadores utilicen esos datos.</p>
<h2>Configuración de adaptadores</h2>
<p>Analizar las siguientes configuraciones IPs a ver si están bien hechas.</p>
<pre>IP: 192.168.3.1
MASCARA: 255.255.0.0
PE: 192.168.4.1
Está bien configurado pq el equipo y la puerta de enlace están en la misma red.</pre>
<pre>IP:10.120.129.3
MASCARA: 255.255.128.0
PE: 10.120.126.1
DNS: 3.3.3.3
Está mal configurado porque el equipo y la puerta de enlace están en redes distintas.</pre>
<pre>IP: 80.28.3.4
MASCARA: 255.0.0.0
PE: 80.30.4.1
DNS: 8.8.8.8
Es una IP pública, si es un equipo público estaría bien.</pre>
<pre>IP: 192.168.4.3
MASK: 255.255.255.0
PE: 192.168.4.1
DNS: 127.0.0.1
Estaría bién si el equipo es un servidor DNS y si no, si no queremos usar nombres también</pre>
<pre>IP: 192.168.4.2
MASCARA: 255.255.255.0
PE: 127.0.0.1
DNS: 8.8.8.8
Está mal confiurado porque no se puede ser uno mismo la puerta de enlace.</pre>

<h3>Configuración en Ubuntu</h3>
<ul>
	<li>Nivel bajo (comandos)</li>
		<ul>
			<li>ifconfig &rArr; Establece la IP.</li>
			<li>route &rArr; Establece la puerta de enlace.</li>
			<li>ip &rArr; Comando más avanzado. Permite configurar todos los parámetros.</li>
		</ul>
	<li>Nivel alto (editando ficheros).</li>
		<ul>
			<li>/etc/resolf.conf</li>
			<li>/etc/network/interfaces. Esta es la que hay que editar normalmente. Aquí se especifican todas las opciones.</li>
			<p>Configuraciones típicas:</p>
			<pre>
auto lo
iface lo inet loopback

auto eth0
iface eth0 inet dhcp
			</pre>
			<pre>
auto lo
iface lo inet loopback

auto eth0
iface eth0 inet static
        address 192.168.4.105
        netmask 255.255.255.0
        gateway 192.168.4.1
        dns-nameservers 192.168.4.1
</pre>
	<p>Cada vez que se modifique el archivo hay que reiniciar los servicios de red para que se vuelva a leer el archivo. Para ello hacermos:</p>
	<pre>sudo /etc/init.d/networking restart</pre>
	<p>También se pueden dar nombres de hardwar virtuales y luego asociar una tarjeta física a un nombre virutal según estemos en sitios distintos.</p>
	<p>Un ejemplo de esa configuración sería:</p>
			<pre>
auto lo
iface lo inet loopback

iface casa inet static
        address 192.168.4.105
        netmask 255.255.255.0
        gateway 192.168.4.1
        dns-nameservers 192.168.4.1

iface curro inet static
        address 192.168.5.105
        netmask 255.255.255.0
        gateway 192.168.5.1
        dns-nameservers 192.168.5.1</pre>
        <p>Para asignar a la tarjeta eth0 los ajustes de "casa" habría que hacer:</p>
        <pre>sudo ifup eth0=casa</pre>
        <p>Para cambiar al "curro" primero hay que desasignar la tarjeta:</p>
        <pre>sudo ifdown eth0</pre>
        <p>Si no funciona hay otro comando que funciona fijo.</p>
        <pre>sudo ifconfig eth0 down</pre>
        <p>Y cargamos la nueva configuración:</p>
        <pre>sudo ifup eth0=curro</pre>
		<li>/etc/services: solo para ver:</li>
		<pre>less /etc/services</pre>
		<li>/etc/protocols: solo para ver:</li>
		<pre>less /etc/protocols</pre>
		<li>/etc/hostname: Especifica el nombre de la máquina</li>
		<li>/etc/hosts.allow: Especifica los hosts a los que se les permite el acceso a la máquina.</li>
		<li>/etc/hosts.deny: Especifica los hosts a los que se les deniega el acceso el acceso a la máquina.</li>
		<li>/proc/net/wireless: solo para ver (usando less).</li>
		<li></li>
	</ul>
</ul>
</div>
<!----------------------------------------------------------------------
TEMA 6
----------------------------------------------------------------------->
<a name="tema6"></a>
<div class="tema">
<h1>6. Emuladores de redes</h1>


	<ul>
		<li><a href="http://www.cisco.com/web/learning/netacad/course_catalog/PacketTracer.html" target="_blank">Cisco Packet Tracer</a></li>
		<li><a href="http://www.boson.com/network-simulator/ccna-640-802-cisco-network-simulator?EID=DBCA3C46-DCE2-4A93-8241-1C5F2E6FCBA3&gclid=CPKnlbbi6rQCFW3KtAod6wsAUw" target="_blank">Boson netsim</a></li>
		<li><a href="http://www.aurova.ua.es/kiva/" target="_blank">Kiva NS</a></li>
		<li><a href="http://www.gns3.net/" target="_blank">GNS3</a></li>
			<span>Este emulador permite utilizar máquitas virtuales de VMWare.</span>
	</ul>
</div>
<div class="tema">
<a name="swichs"></a>
	
<p class="negrita">Apuntes del profesor</p>
<?php echo crear_lista_enlaces_archivos_directorio("./ROUT"); ?>
	
<h1>7. Swichs</h1>
<a href="Cambiar_passwords_router_y_swich_cisco.doc">Cambiar la contraseña y el password a router y swich cisco.</a>
<p>Para poder acceder por primera vez a un swich hay que hacerlo por cable serie porque todavía no está configurada la ip para acceso por telnet.</p>
<p>La primera vez que entramos por consola no pide contraseña, pero luego lo configuramos para que las siguientes veces que nos conectemos por consola nos pida contraseña. También es ahora cuando ponemos la ip y la contraseña para telnet.</p>
<p>Para acceder al modo privilegiado para poder modificar la configuración tenemos que poner el comando <b>enable</b>. No nos pide contraseña, y eso también hay que cambiarlo.</p>
<p>Para empezar a configurar hay que introducir el comando <b>configure terminal</b> o <b>conf ter</b> y tabular. Aquí es donde configuramos el swich (o router). Una vez esté configurado hay que salir del configure mediante el comando <b>exit</b>, <b>disable</b>, <b>end</b>, o pulsando Ctr-Z y guardar los cambios mediante el comando <b>Write</b>.</p>
<p class="negrita">Poner contraseña al serial:</p>
<ul>
	<li><b>enable</b> (entramos en modo privilegiado)</li>
		<ul>
			<li><b>configure terminal</b> (entramos en la configuración del terminal)</li>
				<ul>
					<li><b>line console 0</b> (configuramos la linea 0 de la consola)</li>
						<ul>
							<li><b>password contraseña</b> (establecemos la contraseña)</li>
							<li><b>login</b> (activo el login)</li>
							<li><b>exit</b> (salismos de la linea 0)</li>
							</ul>
						<li><b>Ctrl-Z</b> (salimos de la configuración)</li>
				</ul>
			<li><b>write</b> (escribimos los cambios)</li>
		</ul>
</ul>
<p>La configuración se mantiene sólamente mientras el swich no se apague. Cuando se apaga y se vuelve a encender se ha perdido los cambios. Para guardar los cambios hay hacer los siguiente.</p>
<ul>
	<ul>
		<li><b>copy running-config startup-config</b> (copiamos el archivo de configuración activa a la de inicio)</li>
		<li><b>Enter</b></li>
	</ul>
</ul>
<P class="negrita">Configuramos la ip para poder acceder al swich desde la red y establecemos la contraseña:</P>
<ul>
	<li><b>enable</b> (entramos en modo privilegiado)</li>
		<ul>
			<li><b>configure terminal</b> (entramos en la configuración del terminal)</li>
				<ul>
					<li><b>interface vlan 1</b> (entramos en la configuración del la interface vlan 1)</li>
						<ul>
							<li><b>ip address 192.168.1.2 255.255.255.0</b> (ponemos la ip y la máscara)</li>
							<li><b>no shutdown</b> (levantamos la interface)</li>
							<li><b>exit</b> (retrocedemos un paso)</li>
						</ul>
					<li><b>line vty 0 4</b> (entramos en la configuración de telnet para los terminales del 0 al 4)</li>
						<ul>
							<li><b>password contraseña</b> (ponemos la constraseña)</li>
							<li><b>login</b> (le decimos que nos pida la contraseña al hacer login)</li>
							<li><b>exit</b> (retrocedemos un paso)</li>
						</ul>
					<li><b>exit</b> (retrocedemos otro paso)</li>
				</ul>
			<li><b>write</b> (escribimos la configuración que queda guradada mientras no se apage el swich)</li>
			<li><b>copy running-config startup-config</b> (copiamos la configuración para que se cargue al arrancar el swich)</li>
			<li><b>Enter</b> (confirmamos)</li>
		</ul>
</ul>
<p>Ya podemos acceder mediante telnet, pero no podemos usar <b>enable</b> hasta que no le pongamos la contraseña.</p>
<p class="negrita">Establecemos la contraseña a la hora de acceder al modo privilegiado mediante enable (hay que hacerlo mediante consola porque desde telnet no deja:</p>
<ul>
	<li><b>enable</b> (entramos en modo privilegiado)</li>
		<ul>
			<li><b>configure terminal</b> (entramos en la configuración del terminal)</li>
				<ul>
					<li><b>enable secret cisco</b> (hay que poner secret para que encripte la contraseña, si no se guarda sin encriptar y cualquier usuario no privilegiado prodría verla).</li>
					<li><b>exit</b></li>
				</ul>
			<li><b>write</b> (escribimos la configuración que queda guradada mientras no se apage el swich)</li>
			<li><b>copy running-config startup-config</b> (copiamos la configuración para que se cargue al arrancar el swich)</li>
			<li><b>Enter</b> (confirmamos)</li>
		</ul>
</ul>
<p>Ya podemos acceder mediante teltnet y usar enable.</p>

<a href="SW/comandos_sw_catalist_cisco.doc">Comandos para configuración de un Swich Catalist de Cisco</a>

<p class="negrita">Comandos de configuración básica de los Switch Catalyst 1900 Series y Catalyst 2800 Series. En los ejemplos utilicé un switch 1900, pero también sirve para configurar los switch 2800.</p>
<h3>Todos los pasos:</h3>
<ul>
	<li><b>enable</b> (entramos en modo privilegiado)</li>
		<ul>
			<li><b>configure terminal</b> (entramos en la configuración del terminal)</li>
				<ul>
					<li><b>hostname nombreSwich</b></li>
					<li><b>line console 0</b> (configuramos la linea 0 de la consola)</li>
						<ul>
							<li><b>password contraseña</b> (establecemos la contraseña)</li>
							<li><b>login</b> (activo el login)</li>
							<li><b>exit</b> (salismos de la linea 0)</li>
							</ul>
					<li><b>interface vlan 1</b> (entramos en la configuración del la interface vlan 1)</li>
						<ul>
							<li><b>ip address 192.168.1.2 255.255.255.0</b> (ponemos la ip y la máscara)</li>
							<li><b>no shutdown</b> (levantamos la interface)</li>
							<li><b>exit</b> (retrocedemos un paso)</li>
						</ul>
					<li><b>line vty 0 4</b> (entramos en la configuración de telnet para los terminales del 0 al 4)</li>
						<ul>
							<li><b>password contraseña</b> (ponemos la constraseña)</li>
							<li><b>login</b> (le decimos que nos pida la contraseña al hacer login)</li>
							<li><b>exit</b> (retrocedemos un paso)</li>
						</ul>
					<li><b>enable secret cisco</b> (hay que poner secret para que encripte la contraseña, si no se guarda sin encriptar y cualquier usuario no privilegiado prodría verla).</li>
					<li><b>exit</b></li>
				</ul>
			<li><b>write</b> (escribimos la configuración que queda guradada mientras no se apage el swich)</li>
			<li><b>copy running-config startup-config</b> (copiamos la configuración para que se cargue al arrancar el swich)</li>
			<li><b>Enter</b> (confirmamos)</li>
			<li><b>exit</b></li>
		</ul>
</ul>
<h2>VLAN</h2>
<a href="http://wiki.aprendeweb.org/index.php?title=Configuraci%C3%B3n_de_redes_virtuales">Información Vlans y enlaces troncales</a>
<p>Configuración:</p>
<ul>
	<li><b>enable</b></li>
		<ul>
			<li><b>show vlan</b> (vemos las vlans que hay)</li>
			<li><b>configure terminal</b></li>
				<ul>
					<li><b>vlan nº1</b></li>
						<ul>
							<li><b>name nombre_1</b></li>
							<li><b>exit</b></li>
						</ul>
					<li><b>vlan nº2</b></li>
						<ul>
							<li><b>name nombre_2</b></li>
							<li><b>exit</b></li>
						</ul>
					<li><b>vlan nºn</b></li>
						<ul>
							<li><b>name nombre_n</b></li>
							<li><b>exit</b></li>
						</ul>
					<li><b>...</b></li>
					<li><b>interface fastEthernet 0/1</b></li>
						<ul>
							<li><b>switchport mode access</b></li>
							<li><b>switchport access vlan nº1</b></li>
							<li><b>exit</b></li>
						</ul>
					<li><b>interface fastEthernet 0/2</b></li>
						<ul>
							<li><b>switchport mode access</b></li>
							<li><b>switchport access vlan nº2</b></li>
							<li><b>exit</b></li>
						</ul>
					<li><b>interface fastEthernet 0/n</b></li>
						<ul>
							<li><b>switchport mode access</b></li>
							<li><b>switchport access vlan nºn</b></li>
							<li><b>exit</b></li>
						</ul>
					<li><b>...</b></li>
					<li><b>exit</b></li>
				</ul>
			<li><b>write</b> (escribimos la configuración que queda guradada mientras no se apage el swich)</li>
			<li><b>copy running-config startup-config</b> (copiamos la configuración para que se cargue al arrancar el swich)</li>
			<li><b>Enter</b> (confirmamos)</li>
			<li><b>exit</b></li>
		</ul>
</ul>
<h2>Enlaces troncales</h2>
<P>Se usan para tranportar todos los datos de todas las Vlans a través de un solo cable.</P>
<p>Pasos para configurar enlaces troncales:</p>
<ul>
	<li><b>enable</b></li>
		<ul>
			<li><b>configure ternminal</b></li>
				<ul>
					<li><b>interface fastEthernet 0/n</b> (aquí ponemos el número de la interface)</li>
						<ul>
							<li><b>switchport mode trunk</b></li>
							<li><b>switchport trunk allowed vlan n</b> (aquí va el id de las vlans que permitiremos que pasen por el trunk.</li>
							<li>Si queremos permitir todas las vlans el comando sería <b>switchport trunk allowed vlan all</b></li>
							<li><b>switchport trunk native vlan n</b></li>
							<li><b>no shutdown</b></li>
							<li><b>exit</b></li>
						</ul>
					<li><b>exit</b></li>
				</ul>
			<li><b>write</b></li>
			<li><b>copy running-config startup-config</b></li>
			<li><b>Enter</b></li>
			<li><b>exit</b></li>
		</ul>
	<li><b>exit</b></li>
</ul>
<h2>Protocolo VTP</h2>
<p>Es un protocolo de Cisco que nos permite tener un switch donde creamos las Vlans y éste se encarga de propagarlas a los demás shitch que están bajo su dominio. Es importante remarcar que éste protocolo solamente puede ser configurado en equipos Cisco</p>
<p>Tre modos de configuración posibles:</p>
<ul>
	<li>Switch Servidor: En él tendremos que configurar las Vlans para que se propagen en el resto del dominio.</li>
	<li>Switch Cliente: este tipo de switch serán los que reciban las Vlans y las podrán utilizar.</li>
	<li>Switch Transparante: Este tipo de switch no adopta las Vlans que le manda el servidor. En él podremos crear Vlans y usarlas localmente (solamente en este switch).</li>
</ul>
<p>Pasos</p>
<ul>
	<li><b>enable</b></li>
		<ul>
			<li><b>configure ternminal</b></li>
				<ul>
					<li><b>vtp domain nombre_dominio</b></li>
					<li><b>vtp mode modo</b> (server - client - transparent)</li>
					<li><b>vtp version 2</b></li>
					<li><b>vtp password contraseña</b></li>
					<li><b>end</b></li>
				</ul>
			<li><b>write</b></li>
			<li><b>copy running-config startup-config</b></li>
			<li><b>Enter</b></li>
			<li><b>exit</b></li>
		</ul>
	
</ul>
<h2>Canutos (EtherChannel)</h2>
<ul>
	<li><b>enable</b></li>
		<ul>
			<li><b>configure terminal</b></li>
				<ul>
					<li><b>interface port-channel nº</b></li>
						<ul>
							<li><b>exit</b></li>
						</ul>
					<li><b>interface range fastEthernet 0/17-18</b></li>
						<ul>
							<li><b>channel-group 1 mode  desirable</b></li>
							<li><b>exit</b></li>
						</ul>
					<li><b>interface port-channel 1</b></li>
						<ul>
							<li><b>switchport mode trunk</b></li>
							<li><b>switchport native vlan 100</b></li>
							<li><b>exit</b></li>
						</ul>
				</ul>
			<li><b>exit</b></li>
		</ul>
	<li><b>write</b></li>
	<li><b>copy running-config startup-config</b></li>
	<li><b>Enter</b></li>
	<li><b>exit</b></li>
</ul>
</div>
<div class="tema">
<a name="routers"></a>
<p class="negrita">Apuntes del profesor</p>
<?php echo crear_lista_enlaces_archivos_directorio("./ROUT"); ?>

<h1>8. Routers</h1>

<p>Para unir diferentes vlans o diferentes redes.</p>
<h2>Subinterfaces</h2>
<p>Consiste en dar varias IPs a una misma boca.</p>
<ul>
	<li><b>enable</b></li>
		<ul>
			<li><b>configure terminal</b></li>
				<ul>
					<li><b>interface fastEthernet 0/0.1</b></li>
						<ul>
							<li><b>encapsulation dot1Q 10</b> (el 10 es el número de la vlan)</li>
							<li><b>ip address 192.168.10.1 255.255.255.0</b></li>
							<li><b>exit</b></li>
						</ul>
					<li><b>interface fastEthernet 0/0.2</b></li>
						<ul>
							<li><b>encapsulation dot1Q 20</b> (el 20 es el número de la vlan)</li>
							<li><b>ip address 192.168.20.1 255.255.255.0</b></li>
							<li><b>exit</b></li>
						</ul>
					<li><b>interface fastEthernet 0/0</b></li>
						<ul>
							<li><b>no shutdown</b></li>
							<li><b>exit</b></li>
						</ul>
					<li><b>exit</b></li>
				</ul>
			<li><b>write</b></li>
			<li><b>copy running-config startup-config</b></li>
			<li><b>Enter</b></li>
			<li><b>exit</b></li>
		</ul>
</ul>

<h2>Resetear contraseña router</h2>
	<ul>
		<li>Antes de que arranque hay que hacer <b>Ctr-C</b> mediante consola para abortar la carga de configuración.</li>
		<li><b>confreg 0x2142</b> (mucho cuidado aquí. Mirar bien en los manuales del router el valor que hay que meter pq si no ya no funciona).</li>
		<li><b>reset</b></li>
		<li><b>enable</b></li>
		<li><b>copy startup-config running-config</b></li>
		<li><b>cambiamos las contraseñas como siempre</b></li>
		<li><b>config-register 0×2102</b> (dentro de configure terminal)</li>
		<li><b>guadamos como siempre</b></li>
	</ul>
<h2>Tipo de enrutamiento</h2>
<h4>Pasos para la configuración común:</h4>
		<ul>
			<li><b>enable</b></li>
				<ul>
					<li><b>configure terminal</b></li>
						<ul>
							<li><b>interface fastEthernet 0/0</b></li>
								<ul>
									<li><b>ip address 192.168.0.1 255.255.255.0</b></li>
									<li><b>no shutdown </b></li>
									<li><b>exit</b></li>
								</ul>
							<li><b>interface serial 0/0/0</b></li>
								<ul>
									<li><b>ip address 10.120.120.254 255.255.255.128</b></li>
									<li><b>clock rate 56000 </b>(solo en el lado del reloj)</li>
									<li><b>no shutdown </b></li>
									<li><b>exit</b></li>
								</ul>
							
						</ul>
					<li><b>ip dhcp pool red2 </b>(si queremos que el router de las ips a los equipos.)</li>
						<ul>
							<li><b>network 192.168.2.0 255.255.255.0</b></li>
							<li><b>default-router 192.168.2.1</b></li>
							<li><b>exit</b></li>
						</ul>
					<li><b>exit</b></li>
				</ul>
			<li><b>write</b></li>
			<li><b>copy running-config startup-config</b></li>
			<li><b>Enter</b></li>
			<li><b>exit</b></li>
		</ul>

<h3>Enrutamiento estático</h3>
<p><a href="./ROUT/RUTAS_ESTATICAS_Y_POR_DEFECTO.doc">Apuntes del profesor 1: "RUTAS ESTATICAS Y POR DEFECTO"</a></p>
<p><a href="./ROUT/Los_routers_tienen_varios_Modos_y_Submodos_de_configuración.docx">Apuntes del profesor 2: "Los routers tienen varios Modos y Submodos de configuración"</a></p>
<p>En este tipo de enrutamiento tenemos que indicarle al router por donde se va a cada red. Cada vez que se modifiquen las redes hay que actualizar los datos manualmente.</p>
<h4>Pasos para definir las rutas:</h4>
<ul>
	<li><b>enable</b></li>
		<ul>
			<li><b>configure terminal</b></li>
				<ul>
					<li><b>ip route 192.168.1.0 255.255.255.0 s0/0/0</b>(si queremos indicar por que puerto salir para llegar a la red)</li>
					<li><b>ip route 192.168.2.0 255.255.255.0 10.120.120.129 </b>(si queremos indicar a qué IP mandar los paquetes para llegar a la red)</li>
					<li><b>ip route 0.0.0.0 0.0.0.0 10.120.120.1 </b>Con esto configuramos la ruta por defecto</li>
				</ul>
			<li><b>write</b></li>
			<li><b>copy running-config startup-config</b></li>
			<li><b>Enter</b></li>
			<li><b>exit</b></li>
		</ul>
</ul>


<h3>Enrutamiento dinámico</h3>
<p>Los routers aprenden de los routers vecinos. Manda los datos de sus redes a los routers vecinos y coge los datos de estos.</p>
<h4>RIP v2</h4>	
		<ul>
			<li><b>enable</b></li>
				<ul>
					<li><b>configure terminal</b></li>
						<ul>
							<li><b>router rip</b> Habilita el enrutamiento RIP</li> <!--  -->
								<ul>
									<li><b>version 2</b> Permite cambiar entre versiones RIP</li><!--  -->
									<li><b>no auto-summary</b></li>
									<li><b>network dir_ip_red</b> Habilita la interface para enviar y recibir actualizaciones rip y publica esa red para actualizaciones hacia otros routers</li> <!--  -->
									<li><b>default-information originate</b> Propaga ruta predeterminada</li> <!--  -->
								</ul>
							<li><b>ip route 0.0.0.0 0.0.0.0 10.120.120.1</b> La puerta por defecto hay que hacerla de forma estática.</li>
						</ul>
				</ul>
		</ul>
<h4>OSPF</h4>
		<ul>
			<li><b>enable</b></li>
				<ul>
					<li><b>configure terminal</b></li>
						<ul>
							<li><b>router ospf [ID DE PROCESO](1)</b> </li> <!--  -->
								<ul>
									<li><b>network [IP DE RED][MASCARA INVERSA DE LA RED] area[ID DE AREA](2)</b> </li><!--  -->
									<li><b>default-information originate</b></li>
									<li><b>exit</b></li>
								</ul>
							<li>
								<b>interface Serial0/1/0</b> (Si se usa Frame Relay)</li>
								<ul>
									<li><b>encapsulation frame-relay</b></li>
									<li><b>ip ospf network point-to-point | broadcast</b> Con esto los enlaces frame relay transmitiran sus tablas de enrutamiento. Ponerlo en todos los interfaces frame relay</li>
								</ul>
						</ul>
				</ul>
		</ul>
	
</div>
</body>

</html>
