<?php include("../../../../php/paypal.php");?>
<!DOCTYPE HTML>
<HTML>
<HEAD>
	<META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=utf-8">
	<TITLE>ASIR: HARDWARE: TEORÍA</TITLE>
	<LINK REL=StyleSheet HREF="../../../../estilos/menu_principal.css" TYPE="text/css">
	<LINK REL=StyleSheet HREF="../Ajustes/estilos.css" TYPE="text/css">
	<script type="text/javascript" src="../Ajustes/scripts.js"></script>
	<?php include('../Ajustes/funciones.php');?>
	<?php $ejercicio_numero = 10?>
</HEAD>
<BODY>
<!----------------------------------------------------------------------
MENÚ PRINCIPAL
----------------------------------------------------------------------->
<div class="menus">
	<div class="menu_principal">
			<ul class="menu">
				<li><a href="../../../../">ASIR</a></li>
				<li><a href="../../../">PRIMERO</a></li>
				<li><a href="../../">ASIGNATURAS</a></li>
				<li>FUNDAMENTOS DE HARDWARE</li>
				<?=paypal()?>
			</ul>
	</div>
	<div class="menu_asignatura">
		<!----------------------------------------------------------------------
		FIN MENÚ PRINCIPAL
		----------------------------------------------------------------------->
		<!----------------------------------------------------------------------
		MENÚ ASIGNATURA
		----------------------------------------------------------------------->
		<UL CLASS="menu">
			<li><a href="../">Índice</a></li>
		</UL>
	</div>
</div>
<!----------------------------------------------------------------------
FIN MENÚ ASIGNATURA
----------------------------------------------------------------------->
<div class="contenido">
<a name="tema1"></a>
<div class="tema">
<h1>TEMA1: S.I. ESTRUCTURA FUNCIONAL.</h1>
<h2>Definiciones.</h2>
<UL>
	<LI><b>Sistema:</b> Conjunto de elementos que se relacionan entre si para llevar a cavo un determinado objetivo.</LI>
	<LI><b>Sistema	de comunicaciones:</b> Enviar,recibir e interpretar una serie de informaciones.</LI>
	<LI><b>Sistema informático:</b> Dar soporte al procesado, almacenamiento, entrada y salida de datos.</LI>
</UL>
<h2>Elementos.</h2>
	<ul>
		<li><b>Hardware:</b> Todo lo físico</li>
		<li><b>software:</b> Todo lo lógico</li>
		<li><b>Personal</b></li>
	
	</ul>
<h2>Sistema informático. Dos visiones:</h2>
	<ul>
	<li><b>Funcional:</b> Arquitectura.</li>
	<li><b>Física:</b> Componentes.</li>
	</ul>
<h2>Historia.</h2>
<h3>Enlaces de la Wikipedia:</h3>
	<ul>
		<li><a target="_blank" href="http://es.wikipedia.org/wiki/Historia_del_hardware">Historia del hardware</a></li>
		<li><a target="_blank" href="http://es.wikipedia.org/wiki/Sistema_de_informaci%C3%B3n">Sistema de información</a></li>
		<li><a target="_blank" href="http://es.wikipedia.org/wiki/Anexo:Historia_de_la_computaci%C3%B3n">Historia de la computación</a></li>
	</ul>
<h2>Generaciones.</h2>
<ul>
	<li>1ª Generación (1940-1956):</li>
		<ul>
			<li>Tecnología de válvulas de vacío.</li>
			<li>ENIAC, EDVAC.</li>
			<li>IBM.</li>
		</ul>
	<li>2ª Generación (1956-1963):</li>
		<ul>
			<li>Tecnología transistor.</li>
			<li>Aparece  IBM 7090 (comercial).</li>
			<li>Periféricos.</li>
			<li>Sistemas batch (lotes).</li>
		</ul>
	<li>3ª Generación (1964-1971):</li>
		<ul>
			<li>Circuitos integrados (Chip) pequeña y media integración.</li>
			<li>Discos flexibles.</li>
			<li>Lenguajes de programación.</li>
			<li>Miniordenadores.</li>
		</ul>
	<li>4ª Generación (1971-1981):</li>
		<ul>
			<li>Microordenadores (microprocesador).</li>
			<li>PC.</li>
			<li>Alta escala de integración.</li>
			<li>Mas lenguajes.</li>
			<li>Ordenadores domésticos (Commodore, Atari, Amstrad CPC,  ZxSpectrum).</li>
		</ul>
	<li>5ª Generación (1982-1991):</li>
		<ul>
			<li>100.000 transistores de integración.</li>
			<li>Microprocesador de uso especifico.</li>
			<li>Tecnología multimedia.</li>
			<li>Interfaces gráficas.</li>
			<li>Microprocesadores en paralelo.</li>
		</ul>
	<li>6ª Generación (1992-Actual):</li>
		<ul>
			<li>1.000.000 de transistores.</li>
			<li>Empleo de redes.</li>
			<li>Computadoras basadas en varios microprocesadores.</li>
			<li>WAN.</li>
		</ul>
</ul>

<h2>Estructura funcional de un S.I.</h2>
<p>John Von Newmann (1903-1957).</p>
<image src="../Imagenes/john_von_newman.jpg" alt="John Von Newmann"></image>

<p>Maquina de propósito general:</p>
<p>Unidad E/S - UCP(Unidad central de proceso) - Memoria.<br>
- = Buses.</p>
<p><b>Unidad de E/S</b>:</p>
	<ul>
		<li>Ratón.</li>
		<li>Teclado.</li>
		<li>Pantalla.</li>
		<li>Disco duro.</li>
	</UL>
<P><b>CPU</b>: Sus funciones principales son ejecutar instrucciones situadas en memoria, controlar transferencia entre la CPU, memoria y unidades de E/S, responder a la petición de servicios de los periféricos. Solo entiende lenguaje binario.</P>
	<ul>
		<li><b>U.C</b>: es el cerebro del ordenador, se encarga de controlar y gobernar todas las operaciones. Tiene los siguientes elementos:</li>
			<ul>
				<li><b>Contador de programas (PC)</b>: Contiene la dirección de memoria de la siguiente instrucción a ejecutar.</li>
				<li><b>Registro de instrucciones (RI)</b>: Contiene la instrucción que se ejecuta a cada momento.</li>
				<li><b>Decodificador (D)</b>: Se encarga de extraer y analizar el código de la operación.</li>
			</ul>
		<li><b>ALU</b>: encargada de realizar las operaciones elementales de tipo aritmético y lógico. Tiene las siguientes partes:</li>
			<ul>
				<li><b>Registro de trabajo</b>: Almacena datos, operaciones internas, sitúa datos y da intermedios en las operaciones.</li>
				<li><b>Operaciones</b>: Compuesto de uno de varios circuitos que realizan operaciones aritmético-lógico.</li>
				<li><b>Registro de resultado</b>: Se depositan los resultados.</li>
				<li><b>Registro de estado</b>: El estado de la ultima instrucción.</li>
			</ul>
	</ul>
<P><b>Reloj (R)</b>. Proporciona la sucesión de impulsos eléctricos para marcar los pasos.</P>
<P><b>Memoria (M)</b>. Es un conjunto de celdas redireccionable.</P>
<P><b>Buses</b>:</P>
	<ul>
		<li><b>De direcciones</b>. Esta es de una de una sola dirección, de la memoria
		a la CPU.</li>
		<li><b>De datos</b>. Esta es bidireccional ya que la CPU recibe y manda datos.</li>
		<li><b>De control</b>. Esta es bidireccional ya que después del control
		manda una señal para decir que ya está.</li>
	</ul>
<h3>CPU</h3>
<P><B>Características que miden la velocidad de la CPU:</B></P>
	<a href="http://www.google.es/imgres?um=1&hl=es&client=ubuntu&sa=N&channel=fs&biw=1024&bih=649&tbm=isch&tbnid=Qjxj42iGbuEmuM:&imgrefurl=http://www.bloodzone.net/forums/f174/%255Bguia-tecnica%255D-microprocesadores-11283/&docid=3s4N0ZoCrunm9M&imgurl=http://img174.imageshack.us/img174/5799/listadomv3.jpg&w=607&h=556&ei=UU-AUL3zBIzCtAbw0ICgBg&zoom=1&iact=hc&vpx=438&vpy=280&dur=899&hovh=215&hovw=235&tx=93&ty=87&sig=117759564004580121180&page=1&tbnh=133&tbnw=145&start=0&ndsp=15&ved=1t:429,r:7,s:0,i:90" target="_blank">Tabla evolución de los microprocesadores</a><br>
	<a href="http://es.wikipedia.org/wiki/Microprocesador" target="_blank">Microprocesadores (Wikipedia)</a>
	<UL>
		<LI>Frecuencia de reloj.</LI>
		<LI>Longitud de palabra-(32 o 64 bits).</LI>
		<LI>Tipo del micro (Pentium, dual core, quad).(falta algo)</LI>
	</UL>
<P><B>Fases en la ejecución de una instrucción:</B></P>
	<UL>
		<LI>Se accede a la dirección de memoria que nos indica el PC
		 y ese contenido se lleva al R.I. (registro de instrucciones)</LI>
		<LI>Se decodifica el contenido del R.I.</LI>
		<LI>Se van ejecutando en secuencia las microinstrucciones.</LI>
		<LI>Se incrementa el PC.</LI>
	</UL>
<p><b>Formato de la instrucción:</b></p>
<p>C.O.=Código de operación</p>
<p>Si es de longitud variable hay que saber cuanto ocupa la instrucción para
saber donde empieza la siguiente. Se usa una norma:</p>
	<ul>
		<li>1 -> Instrucción de un solo bit. No puede ser 0</li>
		<li>01 -> Instrución de dos bits. No puede empezar por 1 porque no 
		se podría saber si es otra instrucción o la primera que continúa.</li>
		<li>001</li>
		<li>0001</li>
		<li>00001</li>
		<li>...</li>
	</ul>
<p>Generalmente se utiliza la longitud fija. Por ejemplo, si queremos tener 
200 instrucciones con 8 bits sería suficiente.</p>
<image src="../Imagenes/formato_instruccion.jpg" alt="Esquema formato instruccion"></image>
<p>Las instrucciones pueden tener diferente cantidad de operandos:</p>
	<ul>
		<li>0 Operandos.(NOP) Se llaman nmotécnicos poprque son de traducción inmediata. El NOP es el 90.</li>
		<li>1 Operandos.(JMP ET1).</li>
		<li>2 Operandos-Caso mas común-.(ADD x, y --> x=x+y).</li>
		<li>3 Operandos. (No existen en el intel x8086)</li>
	</ul>
<p>MODOS DE DIRECCIONAMIENTO:</p>
	<ul>
		<li>Inmediato.  ADD x, #5 (La instrucción se especifica en el operando).</li>
		<li>Absoluto(directo).  ADD x, y (Solo Accede a un sitio).</li>
		<li>Relativo a registro.  ADD x, bx(registro que contiene numero).</li>
		<li>Indirecto.  ADD x, (y)(Como un puntero).</li>
	</ul>
<p><b>Tipo de instrucciones:</b></p>
	<ul>
		<li>Transferencia de información:</li>
			<ul>
				<li>Mov(mover) AX(A registro), memoria:<br>
				Mov AX, 5 | MOV X, 5 | MOV BX, AX | MOV BX, X | <strike>MOV X, Y</strike>
				</li>
				<li>IN: indica que es una dirección de un periférico, no una dirección de memoria.</li>
				<li>OUT: indica que es una dirección de un periférico, no una dirección de memoria.</li>
			</ul>
		<li>Instrucciones aritmético-lógicas: (ADD(sumar) X, BX), SUB (restar), MUL(multiplicar), DIV(dividir).</li>
			<ul>
				<li>Instrucciones de rotación y desplazamiento (SAL(Desplazamiento a 
				la izquierda. Es lo mismo que dividir entre 2.), SAR(desplazamiento a la
				 derecha. Es lo mismo que multiplicar por 2.), RAR(rotación a la
				  derecha(división entre 2), RAL(rotación a la izquierda(multiplicación de 2))).</li>
			</ul>
		 <li>Transferencia de control (Call(llamada), ret(retorno)).</li>
		 <li>Saltos:</li>
			<ul>
				<li>Incondicionales (jmp et)</li>
				<li>Condicionales: je et (jump equal: salta si es igual),
				 jne (jump not equal: salta ni no es igual), jz, jnz, jg, jng, ...</li>
			</ul>
		
	</ul>

<p><b>Arquitecturas RISC y CISC.</b></p>
<p><b>RISC</b>: Conjunto de instrucciones reducido. Se decodifica muy rápidamente y su ciclo de ejecución es muy corto. Para realizar algo más complejo se queda un poco corto. Las CISC se pueden emular con muchas RISC.</p>
<p><b>CISC</b>: Conjunto de instrucciones completo. Son más complejas. Requieren de microprogramación.</p>
<p>Los desarrolladores de microprocesadores tienden a hacer algo intermedio entre RICS Y CISC.</p>
<p>Las tarjetas gráficas llevan un microprocesador, y en este caso usan sobre todo CISC, por eso son tan caras.</p>
<H3>MEMORIA: Funciones y tipos.</H3>
<p><b>Memoria</b>: almacena instrucciones y datos mediante el agrupamiento de estos dispositivos en distintas variantes tecnológicas que determinan las características de las memorias se establece una jerarquía de memorias.</p>
<p>Hay un cuello de botella en la memoria ya que el procesador va más rápido de lo que la memoria puede dar datos.</p>
<p>Agrupando este conjunto de memorias vamos a conseguir una gran capacidad a una alta velocidad.</p>
<h4>Clasificación:</h4>
<h5>En cuanto a su capacidad y su velocidad. A más capacidad menos velocidad y viceversa.</h5>
<table><tr>
	<td>
<ol>
	<li><b>Registros &rArr; En la CPU 32 - 64 bits</b><br>La CPU tiene registros que se pueden usar para almacenar los datos y trabajar desde ahí en vez de desde la memoría. La capacidad de los registros de la memoria es pequeña (64 bits) pero puede ser muy útil.</li>
	<li><b>Cache nivel 1. &rArr; L1: 256Kb-1Mb</b><br> Integradas en el microprocesador. De acceso muy rápido.</li>
	<li><b>Cache nivel 2. &rArr; L2: 1Mb-4Mb</b><br> Integradas en la placa base y ahora también en el microprocesador. De acceso muy rápido pero algo más lento.</li>
	<li><b>M. Principal. &rArr; RAM 4gb</b></li>
	<li><b>M. Secundaria. &rArr; HD 1tb</b> <br>Es un trozo del disco duro que se usa como si fuera memoria ram. En Windows se llama "Archivo de paginación" y se encuentra en C:\pagefile.sys.<br>En linux se llama "Swap" y puede ser un archivo o una partción separada.</li>
</ol>
	</td>
	<td><image src="../Imagenes/jerarquia_memorias.png" alt="Jerarquia de las memorias" height=300px></image></td>
</tr></table>
<p>La memoria está paginada (dividida en secciones). Se utiliza el sistema gerárquico:</p>
<p>El procesador no accede directamente a la memoria ram, si no que lee de la L1, a la que accede muy rápidamente. Si en la L1 no está la página que se necesita se la pide a la L2 y si está ahi intercambian las páginas entre L1 y L2 y lee desde L1 otra vez, y si no está tampoco el L2 se pide a la ram, se intercambian las páginas entre ram y L2 y luego entre L2 y L1.</p>
<p>Con este sistema se consigue que se leea de la memoria casi tan rápidamente como el procesador, sin demasiados tiempos de espera.</p>
<h5>En cuanto a su localización.</h5>
<ul>
	<li>Memoria interna (memoria principal).</li>
	<li>Memoria externa (discos secundarios (hard disk (HD)).</li>
</ul>
<h5>En cuanto a las posibilidades de lectura o escritura.</h5>
<ul>
	<li>Memorias de solo lectura o programable (ROM (Read Only Memmory), PROM (Programable Read Only Memmory), Eprom (Ejm. BIOS), Eeprom), entienden la información.</li>
	<li>Memorias de lectura/escritura (RAM), SRAM, DRAM (Las que se utilizan hoy en día).</li>
	<li>Memoria externa(disco secundario, hd).</li>
</ul>
<h5>En cuanto a la tecnología empleada.</h5>
<ul>
	<li>Magnética</li>
	<li>Óptica.</li>
	<li>Magneto-óptica.</li>
	<li>Flash-USB. Usa la tecnología de puerta flotante o NAND.</li>
</ul>
<h5>Según el tipo de operaciones a realizar.</h5>
<ul>
	<li>Reutilizables: HD, cd rw</li>
	<li>No reutilizables: CD, dvd</li>
</ul>
<h5>En cuanto a la forma de acceder.</h5>
<ul>
	<li>Acceso directo.</li>
	<li>Secuenciales (Cintas).</li>
</ul>
<p>Las memorias tienen una vida limitada. Se puede grabar en ellas un número limitado de veces, pero ese número de veces es tan grande que se supone que cuando llegue al final de su vida ya no lo usamos.</p>
<h3>BUSES</h3>
<p>Realizar las interconexiones entre las U.F.</p>
<p>Ancho de bus: Nº de hilos conductores que dispone el bus.</p>
<ul>
	<li>Bus de datos: Transporte de datos.</li>
	<li>Bus de direcciones: Transporte de direcciones.</li>
	<li>Bus de control: Transporta señales de control.</li>
</ul>
<h3>SUBSISTEMA DE CONTROLADORES Y PERIFÉRICOS</h3>
<p>La parte del ordenador que se encarga de la comunicación con los periféricos se denomina unidad de entrada/salida entendiendo en arquitecturas reales a un conjunto de módulos o canales de E/S, encargados de gobernar uno o más periféricos. Estos módulos están formados por:</p>
<ul>
	<li>Controladores de periféricos (circuitos de interfaz).</li>
	<li>Puertos de entrada salida: registros conectados directamente a los buses y son direccinables (datos, control y estado).</li>
</ul>
<h3>DIRECCIONAMIENTO A LOS PERIFÉRICOS</h3>
<ul>
	<li>Entrada/salida mapeada en memoria. Para manejarlo se usa el comando MOV.</li>
	<li>E/S no mapeada en memoria. Para manejarlo se usan los comandos IN y OUT.</li>
</ul>
<h3>Control de tránsito de datos</h3>
<ul>
	<li>E/S controlada por programa</li>
	<li>E/S por acceso directo a memoria (DMA o PIO)</li>
</ul>
<h3>Sincronización de la CPU con el periférico:</h3>
<ul>
	<li>Por Sondeo: Es una operación de consulta constante del periférico.</li>
	<li>Por interrupción: Conexión directa entre CPU y periférico y este avisa cuando requiere atención.</li>
</ul>
<a href="http://es.wikipedia.org/wiki/Representaci%C3%B3n_de_n%C3%BAmeros_con_signo" target="_blank">Representación de números binarios con signo.</a>
<!----------------------------------------------------------------------
EJERCICIOS
----------------------------------------------------------------------->
<h2><button onclick="mostrar_ocultar('ejercicio_<?php echo $ejercicio_numero?>','botonenunciado<?php echo $ejercicio_numero;?>',1)" id="botonenunciado<?php echo $ejercicio_numero;?>">
		+
</button>Ejercicios:</h2>
<pre id='ejercicio_<?php echo $ejercicio_numero?>' style="display: none">
<?php include('./ejercicios.txt'); $ejercicio_numero++;?>
</pre>
<!----------------------------------------------------------------------
FIN EJERCICIOS
----------------------------------------------------------------------->
</div>
<A name="tema2"></A>
<div class="tema">
<h1>TEMA 2: Estructura física.</h1>
	<h2>Componentes del Ordenador.</h2>
		<table border=1>
			<tr>
				<th rowspan=2>Dispositivos Internos</th><th colspan=5>Dispositivos externos</th>
			</tr>
			<tr>
				<th>Puerto de entrada</th><th>Puerto de Entrada</th><th>Puerto de Salida</th><th>Puerto Entrada/Salida</th><th>Soportes de almacenamiento secundario</th>
			</tr>
			<tr>
				<td>Placa base.</td>
				<td>CPU, M.Ram, M.Cache, Circuitos ROM, chipset, puertos de comunicación, buses, ranuras de expansión</td>
				<td>Teclado, ratón, joystick, scanner, sensores, tableta, micrófono.</td>
				<td>Pantalla protector impresora, plotter, altavoz.</td>
				<td>P.Tactil, modem, sw, router, Impresoras multifunción.</td>
				<td>HD externas, Pendrives, M.Flah(SD, USB).</td>
			</tr>
			<tr>
				<td>Unidades de almacenamiento.</td>
				<td>HD, Diskete, Lector, grabador,DVD-CD, lector de tarjetas, blue-ray, etc…</td>
			</tr>
			<tr>
				<td>Tarjeta controladores.</td>
				<td>T. Gráfica, T.Red, controlador SCSI, T. Sonido, Capturadora de viseo, Sintonizadora.</td>
			</tr>
			<tr>
				<td>Otros componentes auxiliares.</td>
				<td>Fuente de Alimentación, sistema de refrigeración, tunning, chasis (Carcasa).</td>
			</tr>
		</table>
		<h3>Chasis</h3>
			<p>Características a tener en cuenta:</p>
			<ul>
				<li>Estructura: Buen aislante, solido, buenas fijaciones para la placa base.</li>
				<li>Ventilador.</li>
				<li>Distribución física y posibilidades de expansión (Bahías).</li>
				<li>Estética: NNoding (Tunning).</li>
			</ul>
			<p>Formatos:</p>
			<ul>
				<li>Torre &rArr; ATX, EATX.</li>
				<li>Semitorre &rArr; ATX.</li>
				<li>Barebone &rArr; shuttle, micro y mini (Todos los equipos pequeños)(Llevan Mini y Micro ATX).</li>
			</ul>
		<h3>Fuente de alimentación</h3>
			<p>Transforma CA en CC: 12V, 5V, 3,3V.</p>
			<p>Funciones:</p>
			<ul>
				<li>Estabiliza el sistema.</li>
				<li>Determina posibilidades de expansión.</li>
				<li>Ventilación.</li>
				<li>Consumo energético: Hoy en día inteligente con energy star.</li>
			</ul>
			<!----------------------------------------------------------------------
			EJERCICIOS
			----------------------------------------------------------------------->
			<p>Total Ejercicios: </p>
			<?php echo (ejercicios("./Ejercicios/","enunciado_*.txt")); ?>

			<p><button onclick="mostrar_ocultar('ejercicio_<?php echo $ejercicio_numero?>','botonenunciado<?php echo $ejercicio_numero;?>',1)" id="botonenunciado<?php echo $ejercicio_numero;?>">
					+
			</button><b>Ejercicios:</b></p>
			<pre id='ejercicio_<?php echo $ejercicio_numero?>' style="display: none">
			<?php include('./ejercicios_2_1.txt');?>
			</pre>
			<!----------------------------------------------------------------------
			FIN EJERCICIOS
			----------------------------------------------------------------------->
		<h3>Refrigeración</h3>
			<p>Determina la durabilidad del equipo.</p>
			<p>Dos formas:</p>
			<ul>
				<li>Refrigeración por aire: Disipador y ventilador.</li>
				<li>Refrigeración liquida: Liquido refrigerante.</li>
			</ul>
		<h3>Placa Base</h3>
			<p>En  ella se conectan o integran todos  los componentes.</p>
			<h4>Características a tener en cuenta en función del modelo:</h4>
			<ul>
				<li>Rendimiento: tipo de micro, Memoria, Buses, Interfaz con los discos duros, canales de comunicación, chipset, BIOS...</li>
				<li>Organización</li>
				<li>Actualización y expansión.</li>
			</ul>
			<h4>Formatos:</h4>
				<ul>
					<li>EATX.</li>
					<li>Standard-atx.</li>
					<li>Mini ITX.</li>
					<li>Micro ATX.</li>
					<li>Nano ITX.</li>
					<li>Pico ITX.</li>
				</ul>
				<image src="../Imagenes/placas_base.png" width=100% alt="Placas base"></image>
			<h4>Elementos:</h4>
				<ul>
					<li>Circuito Impreso.</li>
					<li>Zócalo del procesador o socket:</li>
						<ul>
							<li>PGA.</li>
							<li>ZII.</li>
							<li>LGA.</li>
						</ul>
					<li>Zócalos de memoria.</li>
					<li>Memoria cache(L2): A partir de la sexta generación L2 se integra en el micro.</li>
					<li>Slot de buses: ISA, EISA, MCA, PCI, AGP, PCI-e.</li>
					<li>Chipset: Conjunto de circuitos integrados que permiten comunicar la placa base donde reside y los componentes que a esta se conectan. 2Chips:</li>
						<ul>
							<li>Northbridge: Une los componentes del bus primario (Los de mayor velocidad de transferencia(Micro, memoria, adaptador de vídeo)) suele ser de 64 bits.</li>
							<li>Southbridge: es un puente para acceder a otros buses mas lentos como PCI, IDE, SATA, USB, y el LPC (low Pin Count) al que se conecta el ratón, teclado, bios, puerto serie y paralelo.</li>
							<p>El N y el S se unen mediante su propio bus (HUB Link).</p>
							<p>Los principales fabricantes de chipset son VIA, INTEL, NVIDIA y SIS.</p>
						</ul>
					<li>BIOS (ROM &rarr; Datos en CMOS): Fabricado por AMI, Award.</li>
					<li>Batería: Alimenta la CMOS, reloj.</li>
					<li>Reloj Tiempo-real.</li>
					<li>Conector alimentación.</li>
					<li>Regulador de tensión y condensadores: Cada vez se utilizan menos debido a su corta vida.</li>
					<li>Jumpers.</li>
					<li>Conectores de pin.</li>
					<li>Controladores.</li>
				</ul>
		<h3>Microprocesador.</h3>
			<p>Una CPU puede estar soportada por varios micros, así como un micro puede estar soportado por varias CPU´s.</p>
			<p>En este sentido surge el concepto de Core o Núcleo para referirse a  una porción del procesador que lleva a cabo todas las actividades de una CPU real.</p>
			<p>Parámetros para medir el rendimiento de un microprocesador:</p>
			<ul>
				<li>Frecuencia de reloj.</li>
				<li>Velocidad del bus:</li>
					<ul>
						<li>Front side bus (FSB) (INTEL) → Bus que comunica el micro con el northbridge.</li>
						<li>Front side bus hipertransport (AMD).</li>
						<li>Ancho de BUS (64 bits).</li>
						<li>Buses de memoria, pci-e, pci,...</li>
					</ul>
				<li>Memoria cache: L1, L2, L3.</li>
				<li>Disipación del calor: Ventiladores + disipador + pasta térmica, refrigerador liquido o propulsión de aire electrostático (Viento iónico).</li>
				<li>Tecnología de fabricación.</li>
			</ul>
		<h3>Memorias internas.</h3>
			<h4>Memoria RAM.</h4>
				<p>Es volátil, y según el número de conectores se clasifican en:</p>
				<ul>
					<li>SIMM (NO SE UTILIZA YA): Single in-line memory (30 o 72). Solo hay chips en un lado de la memoria.</li>
					<li>DIMM: Dual in-line memory (168,184 o 240 pines). Son las que se utilizan hoy en día</li>
					<li>RIMM: rambus in-line memory (184 pines).</li>
				</ul>
				<p>Parámetros:</p>
				<ul>
					<li>Velocidad de acceso: ej: DDR3 1600 &rArr; 5nsg.</li>
					<li>Velocidad de reloj.</li>
					<li>Voltaje: DDR(2,5V), DDR2(1,8V), DDR3(1,5V).</li>
					<li>Tecnologías soportadas:</li>
						<ul>
							<li>Single Memory channel</li>
							<li>Dual Memory channel (2 canales simultáneos diferenciados de intercambio).</li>
							<p>La CPU funciona con 2 canales independientes simultáneos, con lo que las cifras de ancho de banda se disipan.</p>
						</ul>
				</ul>
				<p>DRAM (Dinámica), SRAM (Síncrona), SDRAM (Dinámica síncrona, la más utilizada).</p>

				<p>Tipos de SDRAM:</p>
				<ul>
					<li>SDR SDRAM: 10 a 15 nsg DIMM de 168 Pentium II/III y AMD K6 y AMD K7/Duron.</li>
					<li>DDR SDRAM (Double Data Rete): Pentium IV, AMD Athlon, transferencia de 8 bytes poir cada ciclo de relog, 200 o 400 MHz (Pc1600 a PC4800)</li>
					<p>Ejemplo: PC-1600: 100MHz x 2 datos por ciclo x8 bytes= 1600 MB/sg.</p>
					<li>DDR2 SDRAM: 4 Transferencias por ciclo de reloj (10 a 3,75 nsg) frecuencia de 533 a 1200 MHz. DIMM de 240.</li>
					<p>Ejemplo: 1200 x 8bytes x 2ratio x 4transferencias= 76800MB/s</p>
					<li>DDR3 SDRAM: 8 transferencias por ciclo, tiempos de acceso similares a DDR2, módulos de 512 a 15 GB.</li>
					<p>Frecuencias de 800-2600MHz. DIMM de 240 dual y quad core.</p>
					<li>RDRAM:Hay que pagar canon por su uso, basada en protocolo propietario de RAMBUS. Son de gama alta RIMM de 184.</li>
				</ul>
			<h4>Memorias Videograficas:</h4>
				<p>GDDR3, GDDR4, GDDR5. 75 GB/s Graphic double data rate.</p>
		<H3>Conectores integrados en la placa</H3>
			<ul>
				<li>Serie.</li>
				<li>Paralelos.</li>
				<li>USB.</li>
				<li>RJ45.</li>
				<li>Gráficos VGA, HDMI, DVI, SVídeo, Vídeo.</li>
				<li>IDE, Serial ATA I, ATA II, SATA I, SATA II.</li>
				<li>Conectores audio.</li>
				<li>Puertos PS/2 (Antiguo conector de ratón), Combo(Ratón y teclado en un mismo conector).</li>
				<li>Ranuras de expansión: PCI( Peripheral Component Interconnect), PCI-E, AGP.</li>
				<li>Firewire (IEE1394).</li>
				<li>AUDIO: SPDIF.</li>
			</ul>
		<H3>Unidades de almacenamiento secundario</H3>
			<table class="comparativa">
				<tr>
					<th>Unidades De Almacenamiento</th><th>Soporte De Almacenamiento</th>
				</tr>
				<tr>
					<td>Disquetera</td><td>Discos/Flexibles</td>
				</tr>
				<tr>
					<td>R/W CD-DVD</td><td>CD-Rom DVD</td>
				</tr>
				<tr>
					<td>Tapa Drivers</td><td>Streamers (cintas magnéticas)</td>
				</tr>
				<tr>
					<td>Lector de Tarjetas</td><td>Memorias Flash</td>
				</tr>
				<tr>
					<td>Unidades de disco rígido</td><td>Disco Duro</td>
				</tr>
			</table>
			<h4>Disco Duro (HD)</h4>
				<p>Emplea un sistema de grabación digital con tecnología magnética</p>
				<table class="grafico">
					<tr>
						<th>
							<image src="../Imagenes/hd.png" alt="Esquema de un disco duro" style="width: 100%;"></image>
						</th>
						<td>				
							<ul>
								<li>Rojo &rArr; Pista</li>
								<li>Azul &rArr; Sector geométrico</li>
								<li>Amarillo &rArr; Sector: 512bytes</li>
								<li>Verde &rArr; Cluster: conjunto de sectores contiguos que componen la unidad más pequeña de almacenamiento, depende de la unidad de asignación del sistema de archivos.</li>
							</ul>
						</td>
					</tr>
				</table>
				<h5>Partes de un HD</h5>
					<ul>
						<li>Plato</li>
						<li>Cara</li>
						<li>Cabeza</li>
						<li>Pista</li>
						<li>Cilindro</li>
						<li>Sector</li>
						<li>Cluster</li>
					</ul>
				<h5>Conexiones</h5>
					<ul>
						<li>IDE o ATA</li>
						<li>SCSI</li>
						<li>SATA</li>
							<ul>
								<li>I: 150 MB/seg</li>
								<li>II: 300 MB/seg</li>
								<li>III: 600 MB/seg</li>
							</ul>
					</ul>
				<h5>Estructura lógica de un HD</h5>
					<ul>
						<li>MBR (Master Boot Record): Es el primer sector (sector cero) y suele emplearse por albergar el arranque del S.O. con bootstrap o para almacenar la tabla de particiones.</li>
						<li>Tabla de particiones: diferentes divisiones llevadas a cabo en la unidad física.</li>
							<ul>
								<li>Particiones primarias ( máximo 4)</li>
								<li>Partición extendida (solo 1)</li>
								<li>Partición lógica (máximo 23)</li>
							</ul>
					</ul>
			<h4>Lector-grabador de discos ópticos y soportes ópticos</h4>
				<ul>
					<li>CD &rArr; 2,1	µm &rArr; 700 MB</li>
					<li>DVD &rArr; 1,3	µm &rArr; 4,5 GB</li>
					<li>Blu-Ray &rArr; 0,5	µm &rArr; 25 GB</li>
				</ul>
			<h4>Tarjetas de Memoria Flash</h4>
				<ul>
					<li>Compact flash (pen-drive)</li>
					<li>Memory Stick</li>
					<li>Smart Media</li>
					<li>SD, Mini SD, Micro SD</li>
					<li>SSD (solid state disk)</li>
				</ul>
		<h3>Tarjetas de expansión</h3>
			<p>Son dispositivos que se insertan en las ranuras de expansión para ampliar la capacidad y funcionalidad del ordenador, emplea puertos: ISA, PCI, PCI-E, AGP, PCMCIA, Express card, ..., otras veces estas tarjetas vienen integradas en placa (audio, Ethernet, vídeo, ...) y otras veces debido a la gran velocidad del USB con este tipo de conector.</p>
			<p>Tarjetas de expansión utilizadas:</p>
			<ul>
				<li>Capturadoras o sintonizadoras</li>
				<li>PCI-IDE</li>
				<li>PCI-SCSI</li>
				<li>PCI-SATA</li>
				<li>Tarjetas gráficas</li>
				<li>Tarjetas de expansión USB</li>
				<li>Tarjetas de expansión Firewire</li>
				<li>Tarjetas de sonido</li>
				<li>Tarjetas de red (cableadas o wifi)</li>
				<li>...</li>
			</ul>
		<h3>Tarjetas gráficas</h3>
			<p>Encargada de procesar datos que provienen de la CPU y transformarlos en información comprensible y representable en un dispositivo de salida como un monitor o vídeo proyector.</p>
			<p>Dada la exigencia gráfica de videojuego y aplicaciones 3D se hace necesario un procesador que aligere la carga que tiene el procesador central. La GPU (Graphics Processing Unit) se encarga de gran parte de las tareas gráficas.</p>
			<p>Una GPU esta especializada en procesamiento gráfico y operaciones en coma flotante y vectoriales propios de gráficos 3D.</p>
			<p>Existen técnicas empleadas por los gráficos en la mejora de imagen como el antialising (suavizado de bordes).</p>
			<p>Características a tener en cuenta:</p>
			<ul>
				<li>Velocidad de núcleo</li>
				<li>Ancho del bus</li>
				<li>Velocidad de relleno de textura</li>
				<li>Píxeles procesados por ciclo de reloj</li>
				<li>Sistema de ventilación</li>
				<li>Compatibilidad con DirctX y OpenGL</li>
				<li>Conexiones DVI, HDMI</li>
				<li>Resolución</li>
			</ul>
			<p><a href="http://www.nvidia.es/object/graphics_cards_buy_now_es.html" target="_blank">Comparativa de tarjetas gráficas NVidia</a></p>
		<h3>Dispositivos externos de E/S</h3>
			<p>Casi todo periférico tiene 2 partes:</p>
			<ul>
				<li>Parte mecánica.</li>
				<li>Parte electrónica.</li>
			</ul>
			<p>Algunos periféricos requieren controladores hardware que se presentan en forma de tarjeta y suelen incluir una potente electrónica para descargar de tareas a la CPU.</p>
			<p>PSI, USB, IDE, SATA, SERIE, PARALELO,…</p>
			<p>También necesitan de un driver o “controlador de dispositivo” (módulos en Linux), que facilita la comunicación entre el S.O. y el periférico, abasteciendo a la CPU de instrucciones por poder comunicarse con el dispositivo.</p>
			<div style="width: 70%; margin: auto;"><image src="../Imagenes/perifericos.png" alt="Periféricos" width=100%></image></div>
			<ul>
				<li class="negrita">Periféricos de entrada:</li>
					<ul>
						<li class="negrita">Teclado</li>
						<p>En cuanto pulsamos una tecla en el teclado, hay un cambio en el registro de estado (un bit cambia) un código scan es lo que se envía al registro de estado.</p>
						<li class="negrita">Ratón</li>
							<ul>
								<li>Cable</li>
								<li>Sin cable</li>
									<ul>
										<li>Infrarrojos, WIFI, FM, Bluetooth</li>
									</ul>
							</ul>
						<li class="negrita">Escáner</li>
							<ul>
								<li>Resolución</li>
								<li>Profundidad de color</li>
								<li>Tipo de conexión (USB,RED)</li>
								<li>OCR</li>
							</ul>
						<li class="negrita">WebCam</li>
							<ul>
								<li>Resolución</li>
								<li>Frames por segundo (fps)</li>
								<li>Visión nocturna</li>
								<li>RCA, IP, SVCD, WIFI</li>
								<li>PoE</li>
					</ul>
				<li class="negrita">Periféricos de salida:</li>
					<ul>
						<li class="negrita">Monitor</li>
							<ul>
								<li><span class="tachado">CRT</span>, LCD, TFT, OLED</li>
								<li>Tamaño &rArr; 1 pulgada = 2,54 cm</li>
								<li>Dotpitch, tamaño de punto &rArr; 0,29 mm, 0,20 mm, 0,19 mm</li>
							</ul>
						<li class="negrita">Proyector</li>
							<ul>
								<li>Resolución</li>
								<li>Lumens: Intensidad de la luz. Cuanto más lumens mejor se ve con la luz encendida (800, 1000).</li>
							</ul>
						<li class="negrita">Impresoras</li>
							<ul>
								<li>USB (mas económico)</li>
								<li>Red</li>
								<li>Láser (impresoras de página)</li>
								<li>Inyección (mas económico, más lento)</li>
								<li>Plotter (son capaces de imprimir hojas muy grandes</li>
							</ul>
						<li class="negrita">Sistemas de audio</li>
							<ul>
								<li>Altavoces, Auriculares</li>
							</ul>
						<li class="negrita">Realidad virtual</li>
							<ul>
								<li>Gafas 3D</li>
								<li>Tracking (Track IR)</li>
								<li>Chalecos tácticos</li>
								<li>Guantes</li>
								<li>Kinect</li>
								<li>Casco</li>
								<li>CAVE</li>
							</ul>
					</ul>
				<li class="negrita">Periféricos de comunicaciones</li>
					<ul>
						<li>Módems</li>
						<li>Tarjetas de red</li>
						<li>Switch</li>
						<li>Hub</li>
						<li>Routers</li>
						<li>Bluetooth</li>
						<li>Teléfonos IP</li>
					</ul>
			</ul>
			</ul>
</div>
<a name="tema3"></a>
<div class="tema">
<h1>TEMA3: ENSAMBLAJE Y PUESTA EN MARCHA DE UN SISTEMA INFORMATICO</h1>
<h2>PRECAUCIONES Y ADVERTENCIAS DE SEGURIDAD</h2>
	<ul>
		<li>Lugar de trabajo</li>
			<ul>
				<li>Iluminación</li>
				<li>Espacio</li>
			</ul>
		<li>Precauciones sobre la energía eléctrica</li>
			<ul>
				<li>Nunca manipular los componentes con el ordenador encendido</li>
				<li>Dejar enfriar</li>
				<li>Si es un portátil quitar batería</li>
			</ul>
		<li>Precauciones sobre la energía estática</li>
			<p>Puede hacer que se estropeen los componentes y pueden producir descargas de hasta 4000 voltios.</p>
			<ul>
				<li>Acciones que evitan problemas con energía estática</li>
				<li>Tocar un grifo</li>
				<li>Tocar continuamente la carcasa para descargarse</li>
				<li>Utiliza una pulsera de toma de tierra</li>
				<li>Utilizar sprays antiestáticos. Rociar un trapo y pasarlo por el monitor y CPU</li>
			</ul>
		<li>Acciones a <b>evitar</b> para no tener problemas con la energía estática</li>
			<ul>
				<li>Trabajar en moquetas que no sean antiestáticas</li>
				<li>Utilizar zapatos con suela de goma</li>
				<li>Utilizar pulseras conductoras</li>
				<li>Coger los componentes por zonas que no sean los cantos</li>
				<li>No descargarse estáticamente</li>
			</ul>
		<li>Precauciones sobre componentes.</li>
			<ul>
				<li>Microprocesador:</li>
					<ul>
						<li>No encender el equipo sin el disipador ni el ventilador.</li>
						<li>Aplicar pasta térmica al cambiar el Microprocesador</li>
						<li>No manipular el Microprocesador por los pines.</li>
					</ul>
				<li>Fuente de alimentación:</li>
					<ul>
						<li>No desenchufar cuando el equipo este funcionando (un equipo en stanby esta funcionando).</li>
						<li>No ubicar los equipos en sitios húmedos.</li>
						<li>Cuidado en manipular las fuentes de alimentación (Puede estar cargado &rArr; Bobinas, condensadores, etc…).</li>
					</ul>
			</ul>
			
	</ul>

</div>
<a name="tema4"></a>
<div class="tema">
	<h1>TEMA4: IMPLANTACION DE UN S.I. (SOLUCIONES EMPRESARIALES)</h1>
		<h2>Introducción</h2>
			<ol>
				<li>Toda empresa es un S.I. formado por un conjunto de recursos técnicos, humanos y económicos, organizados e interconectados.</li>
				<li>El objeto de un S.I. es dar respuesta a un tratamiento automatizado de la información.</li>
				<li>Históricamente la implantación de un S.I. ha sido objeto de rechazo por:</li>
					<ul>
						<li>La primera estructura y organización de la empresa puede ser desestabilizada.</li>
						<li>Se ve como un gasto cuyos beneficios se ven a largo plazo.</li>
						<li>Adaptación a la misma forma de trabajo.</li>
					</ul>
				<li>A mediados del S. XX se empiezan a aplicar tecnologías de información a:</li>
					<ul>
						<li>1. Procesado de datos.</li>
						<li>2. Toma de decisiones.</li>
						<li>3. Comunicaciones.</li>
					</ul>
				<li>Se incorporan los CPD como unidades especializadas de cálculo que comienzan a automatizar. Procesados => aparece una nueva área funcional, el departamento de informática.</li>
				<li>Aparecen otros sistemas relacionados como los sistemas de gestión y búsqueda de información. Y por último los sistemas integrados que integran la información con la estrategia corporativa. Consiguen concebir nuevas formas de diseño, fabricación y venta de producto.</li>
				<li>Métodos manuales => Sistemas Informáticos => Sistemas Informáticos en Red => Aplicaciones móviles que permiten controlar los sistemas actuales.</li>
			</ol>
			
			<h3>Objetivos Básicos que debe cumplir un S.I.:</h3>
				<ul>
					<li>Facilitar el desarrollo de estrategias de empresa.</li>
					<li>Automatizar tareas.</li>
					<li>Estar disponible y adaptarse a cambios.</li>
					<li>Satisfacer necesidades de información (estructurando)</li>
					<li>Ayudara tomar decisiones (+ conocimientos)</li>
					<li>Incorporar medidas de seguridad (confidencialidad, integridad y disponibilidad de la información).</li>
				</ul>
			<h3>El S.I necesita para ser aceptada:</h3>
				<p>Ser económicamente viable, fácil, inteligible, abierto, fiable, rápido, eficiente, controlado, seguro y fácil de mantener.</p>
		<h2>Formas de clasificar un S.I:</h2>
			<ul>
				<li>Según la estructura organizativa (forma de trabajo).</li>
					<ul>
						<li>Departamentales.</li>
						<li>Corporativos.</li>
						<li>Mono usuario.</li>
					</ul>
				<li>Según la magnitud del sistema.</li>
					<ul>
						<li>Microordenadores</li>
						<li>Miniordenadores</li>
						<li>Mainframes</li>
						<li>Redes.</li>
					</ul>
				<li>Según el tipo de procesamiento.</li>
					<ul>
						<li>Por lotes.</li>
						<li>Online.</li>
						<li>Tiempo Real.</li>
					</ul>
				<li>Según su uso.</li>
					<ul>
						<li>Propósito general.</li>
						<li>Equipos especializados.</li>
					</ul>
			</ul>
	<h2>Plataformas Informáticas: Del entorno personal al empresarial.</h2>
		<p>Según las aplicaciones que deben dar soporte y el tipo de usuarios podemos hablar de:</p>
		<ul>
			<li>Ordenadores personales.</li>
				<ul>
					<li>PC para ofimática. (aplicaciones genéricas) (SOHO)</li>
					<li>Estaciones de soporte especializados. (gráficos, calculo,…)</li>
					<li>Hogar</li>
					<li>Portátiles.</li>
					<li>PDA, telefonía móvil, tablet,…</li>
						<ul>
							<li>Importante para estos objetos:</li>
								<ul>
									<li>Batería.</li>
									<li>Peso.</li>
									<li>Tamaño.</li>
									<li>Cámara.</li>
									<li>GPS-Wifi.</li>
									<li>Slots expansión (SD, USB).</li>
									<li>Tipo pantalla:</li>
										<ul>
											<li>Capacitiva (piel).</li>
											<li>Resistiva (objeto).</li>
										</ul>
									<li>S.O:</li>
										<ul>
											<li>Plane OS.</li>
											<li>Symbian.</li>
											<li>WindowsCE.</li>
											<li>iOS</li>
											<li>Android.</li>
											<li>Linux.</li>
											<li>Palm OS.</li>
										</ul>
								</ul>
						</ul>
				</ul>
			<li>Sistemas de servidores.</li>
				<ul>
					<li>Servidores de ficheros, web, correo, etc.</li>
					<li>Servidores de almacenamiento masivo:</li>
						<ul>
							<li>RAID</li>
							<li>DAS</li>
							<li>NAS</li>
							<li>SAN</li>
						</ul>
					<li>Servidores aplicaciones y calculo. (Mainframes, Clúster)</li>
				</ul>
			<li>Equipos empotrados:</li>
				<ul>
					<li>Equipos industriales.</li>
					<li>Equipos especializados (GPS, navegadores, multimedia,…).</li>
				</ul>
		</ul>
	<h2>Nuevas tendencias en informática móvil</h2>
		<p>Tablets, telefonía y S.O.</p>
	
	<h2>Nuevas tendencias en refigeración</h2>
		<ul>
			<li>Refrigeración líquida.</li>
			<li>Refrigeración termoeléctrica.</li>
			<li>Refrigeración a base de microcompresión.</li>
			<li>Viento iónico.</li>
		</ul>
	<h2>Nuevas tendencias en almacenamiento</h2>
		<ul>
			<li>Memorias ddr4, gddr5</li>
			<li>Discos ssd, hvd</li>
			<li>Flash SDXC (2TB)</li>
		</ul>
	<h2>Nuevas tendencias en procesamiento.</h2>
		<ul>
			<li>Bits cuánticos:</li>
				<ul>
					<li>00</li>
					<li>01</li>
					<li>10</li>
					<li>11</li>
				</ul>
			<li>Bit:</li>
				<ul>
					<li>0</li>
					<li>1</li>
				</ul>
			<li>Futuro de los micros:</li>
				<ul>
					<li>Bajo consumo.</li>
					<li>Reducción de espacio.</li>
					<li>Reducción de refrigeración.</li>
					<li>Arquitectura Multinúcleo (240 núcleos CUDA).</li>
					<li>Nanotecnología (Hoy  32nm11nm).</li>
				</ul>
			<li>Material grafeno.</li>
		</ul>
	<h2>Nuevas tendencias multimedia</h2>
		<ul>
			<li>Tecnología OLED.</li>
			<li>Pantallas flexibles y enrollables.</li>
			<li>Teclados virtuales.</li>
			<li>Realidad virtual.</li>
		</ul>
	<h2>Nuevas tendencias en conectividad.</h2>
		<ul>
			<li>USB2.0 &rArr; 480 Mbps.</li>
			<li>Firewire IEE &rArr; 800 Mbps.</li>
			<li>USB 3.0 &rArr; 4,8 Gbps &rArr; 4800 Mbps.</li>
			<li>Tecnologia WIMSX (Worldwide introperatibility for microware Access) acceso por microondas para la interoperatividad mundial. Pretende ser la 4ª generación de tecnología inhalambrica, sustituyendo wifi, 3g y 4g, dando cobertura de banda ancha y alta velocidad a internet en movimiento.</li>
				<ul>
					<li>Cobertura de 3 a 10 km.</li>
					<li>No pierde conectividad en movimiento.</li>
					<li>Coste bajo por bit transmitido.</li>
					<li>Convive con wifi (interior) y WIMAX (exterior).</li>
				</ul>
			<li>Bluetooth y wireless &rArr; UWB(ultra.wideband(1000 veces mas rápido que wifi).</li>
			<li>LIFI (Transmisión inalámbrica de datos con una bombilla led)</li>
			<li><a href="http://www.guifi.net">Guifi (proyecto de creación de red libre e independiente.</a></li>
		</ul>
	<h2>Centro de procesamiento de datos (CPD)</h2>
		<p>ubicación donde se concentran los recursos físicos, lógicos y humanos necesarios para el procesamiento de datos. Su principal objetivo es garantizar la continuidad del servicio.</p>
		<p>El CPD debe cumplir una serie de normas indicadas en la LOPD, dependiendo de los niveles de seguridad por los que se riga (básico, medio o alto).</p>
	
		<p>La instalación de un CPD debe tener en cuenta los siguientes elementos:</p>
			<ul>
				<li>Local físico (acceso de equipos y personal autorizado, acondicionamiento térmico y elementos de seguridad disponibles, intalaciones de suministro eléctrico)</li>
				<li>Espacio y movilidad (altura y anchura, suelo técnico que permita movilidad)</li>
				<li>Tratamiento acústico (equipos ruidosos, como impresoras o aire acondicionado se ubicarán en zonas donde se atenuará el ruido y la vibración)</li>
				<li>Seguridad física del local (sistemas contra incendio e inundaciones)</li>
				<li>Suministro eléctrico</li>
				<li>Suelo técnico (altura 40 cm, material ignífugo, baldosas de 40x40x4 cm, con detectores de humedad, de incendios, desnivel para desagües y limpieza regular).</li>
				<li>Falso techo de 40 cm mínimo, totalmente estanco al agua, libre de conducciones y tuberías, material ignífugo, con detectores de humedad y de incendios).</li>
			</ul>
		<p>En el diseño de un CPD es necesario considerar 4 parámetros :</p>
			<ul>
				<li><b>Espacio técnico:</b></li>
					<ul>
						<li>la ubicación debe cumplir una serie de requisitos, estar lejos de radares, antenas repetidoras, lugares donde se produzcan vibraciones, como el ferrocarril, no poseer identificación alguna desde el exterior.</li>
						<li> A partir de una ubicación idónea, se establecerán parámetros constructivos del edificio, de construcción no inflamable, altura mínima entresuelo y techo de 2,5m. Suelo técnico con baldosas ignífugas de 60x60 , con detectores de humedad, de incendios , desnivel para desagües, y limpieza regular. Falso techo de 40cm totalmente estanco, para prevenir daños por el agua condensada. Iluminación entre 500 y 1000 lux. Control de acceso y al menos una de las puertas será de dimensiones suficientes para la entrada de equipos grandes. Protección contra ruidos, max. 70 dB. Los muebles no deben ser combustibles y las salas deberán ser accesibles a las escaleras del servicio de bomberos.</li>
					</ul>
				<li><b>Condiciones ambientales.</b>Climatización.  Es necesario que el CPD se adecue ala norma en función del tipo de climatización. Compartido, común para todo el edificio (no recomendado) o dedicado con su propio sistema independiente y redundado. Es importante considerar los niveles de los servicios en cuanto a temperatura , humedad relativa y limpieza de aire:</li>
					<ul>
						<li>Temperatura a un metro del suelo entre 18 y 22</li>
						<li>Nivel de humedad relativa a un metro del suelo entre 40% y 60%</li>
						<li>Nivel de limpieza del aire. Se exige el filtrado de aire para realizar cualquier obra en las salas.</li>
					</ul>
				<li><b>Infraestructura y suministro eléctrico.</b> El CPD deberá incorporar un conjunto de soluciones de redundancia en cuanto al suministro eléctrico mediante distintas conexiones de las acometidas con sistemas paralelos. Son importantes los siguientes aspectos</li>
					<ul>
						<li>Cableado y tomas de tierra. La instalación delos cuadros y toma eléctrica y de tierra irán dentro de la sala y se ajustaran a la normativa. Holgura en el cableado de 3 m en horizontal y 2m en vertical. Los conductos irán sobre el suelo técnico.</li>
						<li>Sistemas de contingencia. Tendrán   una autonomía garantizada de al menos 15 minutos a plena potencia</li>
						<li>Deberán permitirse oscilaciones máximas de la tensión nominal de 1-10%, con entrada automática de los sistemas de contingencia (baterías y o generadores ) y filtrado de picos de tensión.</li>
					</ul>
				<li><b>Servicios de seguridad y control de acceso.</b> El CPD deberá disponer de medidas de seguridad que protejan de posibles daños debido a vandalismos y de accidentes y catástrofes naturales</li>
					<ul>
						<li>Se deberá llevar un registro de entrada de todo operario que permita controlar numero de accesos y motivo</li>
						<li>Se deberá utilizar un control de acceso mediante barreras alrededor del edificio de acceso controlado, identificación de distintos niveles de seguridad, con sistemas de identificación mediante tarjetas o biométricos.</li>
						<li>Se dispondrá de sistemas dedicados para la prevención, detección y supresión de incendios, así como el establecimiento de vías de evacuación</li>
						<li>La infraestructura estará preparada para que no ocurran inundaciones y en caso de que ocurran tener medios para tratarlas</li>
						<li>Sistemas contra terremotos, el edificio estará diseñado contra movimientos sísmicos.</li>
						<li>La seguridad física de la instalación incluirá elementos como: cerraduras electromagnéticas, torniquetes, cámaras de seguridad, detectores de movimiento, tarjetas de identificación,..</li>
					</ul>
			</ul>
		
		<h3>Estructura física y organizativa de un CPD</h3>
			<p>	Actualmente a nivel físico los CPD se han empezado a convertir en un conjuntos de espacios con funciones y necesidades distintos:</p>
				<ul>
					<li>Núcleo de procesamiento principal</li>
					<li>Equipos de conmutacion de red</li>
					<li>Área de impresión</li>
					<li>Área de cintas/CDs/DVDs de <a href="https://www.google.es/search?q=robot+backup&hl=es&client=ubuntu&hs=q4F&channel=cs&source=lnms&tbm=isch&sa=X&ei=fRI2Uc-TLMOw0QXr-YCIDw&ved=0CAoQ_AUoAQ&biw=1024&bih=656#hl=es&client=ubuntu&channel=cs&tbm=isch&sa=1&q=backup+system+robot&oq=backup+system+robot&gs_l=img.3...55503.65022.4.65226.36.30.6.0.0.0.127.2958.20j10.30.0...0.0...1c.1.5.img.AyQXYQssi9U&fp=1&biw=1024&bih=656&bav=on.2,or.r_gc.r_pw.r_cp.r_qf.&cad=b&sei=QhQ2UeOFDIjA0QXJmIHYDA&imgrc=az7JcYuFSAJgyM%3A%3BBGL-2Qn5ZnyUPM%3Bhttp%253A%252F%252Fwww.oucs.ox.ac.uk%252Fhfs%252Fhelp%252Fimages%252Frobot.jpg%3Bhttp%253A%252F%252Fwww.oucs.ox.ac.uk%252Fhfs%252Fhelp%252Ffurtherinfo.xml%3B833%3B625" target="blank">backup</a></li>
					<li>Área de operadoras o exterior</li>
					<li>Área de servidores</li>
					<li>Área de aplicaciones</li>
				</ul>
			<p>La separación en áreas presenta beneficios en términos de control de acceso.</p>
			
		<h3>Componentes específicos en soluciones empresariales</h3>
			<p>	Existen un conjunto de componentes básicos a emplear en solucione empresariales como son: </p>
			<ul>
				<li><b>Bastidores o racks:</b> alojan servidores, sw y enrutadores, paneles de conexiones, cortafuegos, sistemas de audio y vídeo, estos dispositivos llevan carcasas adaptables al bastidor ,las medias están estandarizadas 19 pulgas de ancho y alto y fondo variable,  la altura se mide en U , 1U,2U,.., En la actualidad existen los <b>servidores blade</b> que permiten recoger en 4U mas de 20 servidores compartiendo alimentación y conexiones. Suelen tener una altura max. De 2 m con 42-46 U.</li>
				<li><b>Sistemas de almacenamiento (DAS,NAS,SAN):</b> Son fundamentales en los SI ya que serán encargados de dar soporte a toda la información con la que trabajan, NAS permite compartir la información con la quie trabaja un servidor con un conjunto de maquinas  a través de la red (TCP/IP), haciendo uso de protocolos d compartición de ficheros como (CIFS;NFS;FTP;TFTP) estos sistemas cuentan con uno o mas dispositivos de almacenamiento configurados en RAID, permite balanceo de carga, tolerancia a fallos, y servidor web para proveer servicios de almacenamiento.</li>
				<li><b>Servidores de archivos:</b> se encarga de almacenar archivos en una ubicación centralizada permitiendo el acceso mediante un control de permisos, y auditorías, facilita la estrategia de  copias de respaldo , la implementación de la seguridad, y la recuperación ante fallos con sistemas journaling.</li>
				<li><b>SAIs (sistemas de alimentación ininterrumpida) o UPS (uninterruptible power supply)</b>, solucionan los problemas de:</li>
					<ul>
						<li>corte de energía :se considera corte si dura mas de 2 ciclos(40ms)</li>
						<li>caída de tensión: estado continuo de baja tensión con valores inferiores al 80-85%</li>
						<li>sobre tensión: tiene lugar cuando la tensión supera el 110% del valor nominal</li>
						<li>picos de tensión: incrementos de tensión de pocos microsegundos</li>
						<li>ruido eléctrico: interferencias de radio frecuencia o electromagnéticas (un motor, un interruptor..)</li>
					</ul>
				<li><b>Dispositivos de control remoto</b>. Existen tres elementos diferenciales de un buen sw de control remoto:</li>
					<ul>
						<li>que ofrezca alta velocidad de transferencia</li>
						<li>máxima flexibilidad soportando múltiples plataformas</li>
						<li>ofrecer niveles de seguridad inigualables en el mercado según estándares de seguridad como la LOPD</li>
					</ul>
			</ul>
		<h3>La seguridad física y lógica en un CPD</h3>
		<p>La supervivencia de una empresa esta sujeta a multitud de factores económicos, demográficos, de mercado, y otros que son propios de su negocio, pero también  a otros muchos que son ajenos a este.</p>
		<p>	Es responsabilidad de la empresa disponer de medidas que le permitan desarrollar su actividad en condiciones normales ante situaciones adversas.</p>
		<h4>PLAN DE CONTINUIDAD DE NEGOCIO</h4>
			<p>	Este plan refleja las capacidades, recursos y procedimientos de la empresa de cara prevenir los efectos negativos sobre su negocio de riesgos o situaciones externas no controlables:</p>
			<ul>
				<li>causas de desastres en los CPD:</li>
					<ul>
						<li>fallo equipamiento 5%</li>
						<li>fallo comunicaciones 10%</li>
						<li>fuego 5%</li>
						<li>desastres naturales 10%</li>
						<li>fallo de suministro 10%</li>
						<li>daños por agua 5%</li>
						<li>factor humano 55%</li>
					</ul>
				<li>dicho plan se debe apoyar en tres estrategias principales</li>
					<ul>
						<li>estrategias de prevención:</li>
							<ul>
								<li>redundancia en : sistemas ,plataformas ,configuraciones e infraestructuras</li>
								<li>seguridad en ubicaciones para la resistencia a incidentes</li>
							</ul>
						<li>estrategias de mitigación</li>
							<ul>
								<li>sistemas de detección temprana</li>
								<li>replicación de datos y documentos</li>
								<li>plan detallado de migración de datos</li>
							</ul>
						<li>estrategias de recuperación</li>
							<ul>
								<li>plan de recuperación</li>
								<li>backup remoto de datos o imágenes</li>
								<li>existencia de ubicaciones alternativas</li>
								<li>inmediatez en la restauración</li>
							</ul>
					</ul>
			</ul>
			<p>Para garantizar esa continuidad de negocio hay que minimizar lo que se llama el tiempo de recuperación y el punto de recuperación. Esto se consigue mediante determinadas estrategias como copias de datos en centros diferentes, el uso de conexiones de alta velocidad entre ellos o el empleo de una infraestructura paralela capaz de absorber la actividad del sistema de incidencias.</p>
			<p>En este plan existen diferentes elementos a contemplar aunque se pueden agrupar en:</p>
			<ul>
				<li>control de acceso a la sal</li>
				<li>precauciones anti-incendio</li>
				<li>sistemas de control de inundaciones</li>
				<li>protección del sistema de cableado</li>
			</ul>
		<h4>SEGURIDAD FISICA</h4>
		<p>Los riesgos se pueden dividir en:</p>
		<ul>
			<li>Riesgos naturales (hundimiento,viento,nieve, hielo ,tormentas,..).</li>
			<li>Riesgos de vecindad (procedentes del entorno creado por el hombre, espías , atentados, vándalos, motores, ferrocarril,…</li>
		</ul>
		<p>Estos riesgos se pueden minimizar eligiendo una buena ubicación, cerraduras, sistemas de vigilancia, controles,..</p>
		<h4>SEGURIDAD LOGICA</h4>
		<p>Consiste en la aplicación de barreras y procedimientos que resguarden el acceso a los datos y solo se permita acceder a ellos a las personas autorizadas para hacerlo.</p>
	<h3>Arquitecturas de alta disponibilidad.</h3>
		<p>Una solución de alta disponibilidad será aquella que disponga de los equipos 7 días a la semana 24 horas al día.</p>
		<p>La alta disponibilidad esta sujeta a 2 términos:</p>
		<ul>
			<li>Fiabilidad.</li>
			<li>Disponibilidad.</li>
		</ul>
		<h4>Fiabilidad</h4>
		<p>Un sistema de alta disponibilidad debe ser fiable para que los usuarios puedan utilizarlo en condiciones óptimas.</p>
		<p>El termino fiabilidad se refiere a la probabilidad de que un sistema funcione normalmente durante un periodo de tiempo dado (Continuidad de servicio).</p>
		<h4>-Disponibilidad</h4>
		<p>La alta disponibilidad debe garantizar la disponibilidad del servicio de forma fiable. Disponibilidad la probabilidad de que el servicio funcione adecuadamente en cualquier momento.</p>
		<table class="comparativa">
			<tr class="comparativa"><th class="comparativa" colspan="2">Niveles de disponibilidad TIER(I, II, III, IV)</th></tr>
			<tr class="comparativa"><th class="comparativa">Índices de Disponibilidad.</th><th class="comparativa">Duración del tiempo de inactividad.</th></tr>
			<tr class="comparativa"><td class="comparativa">97%</td><td class="comparativa">11 días.</td></tr>
			<tr class="comparativa"><td class="comparativa">98%</td><td class="comparativa">7 días.</td></tr>
			<tr class="comparativa"><td class="comparativa">99%</td><td class="comparativa">3 días y 15 horas.</td></tr>
			<tr class="comparativa"><td class="comparativa">99.9%</td><td class="comparativa">8 horas y 48 minutos.</td></tr>
			<tr class="comparativa"><td class="comparativa">99.99%</td><td class="comparativa">53 minutos.</td></tr>
			<tr class="comparativa"><td class="comparativa">II-99.999%</td><td class="comparativa">5 minutos.</td></tr>
			<tr class="comparativa"><td class="comparativa">I-99.9999%</td><td class="comparativa">32 segundos.</td></tr>
		</table>
			
</div>

<a name="tema3"></a>


<div class="tema">
	<h1>TEMA 5: SW EN S.I</h1>
		<h2>Introduccion al SW</h2>
			<p><b>SW:</b> conjunto de programas de cómputo, procedimiento, reglas, documentación y datos asociados que forman parte de las operaciones de un sistema de computación:</p>
			<ul>
				<li>Es lógico, no físico.</li>
				<li>Se desarrolla, no se fabrica.</li>
				<li>No se estropea.</li>
				<li>Se puede construir a medida.</li>
			</ul>
			<p>Todo SW en su creación y desarrollo pasa por una serie de etapas (fases del ciclo de la vida del SW) dentro de la disciplina Ingeniería del SW. El objetivo de la Ingeniería del SW es proporcionar un marco de trabajo para construir software de calidad.</p>
			<p class="negrita">Etapas en el ciclo de vida de calidad.</p>
			<ul>
				<li>Definición de objetivos</li>
				<li>Análisis de requisitos y su viabilidad</li>
				<li>Diseño general (análisis funcional)</li>
				<li>Diseño en detalle (análisis orgánico)</li>
				<li>Programación (implementación)</li>
				<li>Prueba de unidad</li>
				<li>Integración</li>
				<li>Prueba beta o de validación</li>
				<li>Documentación (formación)</li>
				<li>Implantación</li>
				<li>Mantenimiento:</li>
					<ul>
						<li>Correctivo</li>
						<li>Perfectivo</li>
						<li>Adaptativo</li>
					</ul>
			</ul>
			<p class="negrita">Distribución del coste del ciclo de vida:</p>
			<ul>
				<li>Desde la Definición de objetivos hasta la implantanción suponen un 30% del coste.</li>
				<li>El mantenimineto supone un 70% del coste.</li>
			</ul>
			<p class="negrita">Clasificaciones del SW:</p>
			<ul>
				<li>SW de sistema: S.O., Utilidades, drivers, entornos de escritorio.</li>
				<li>SW de aplicación: Suite office, programas de gestión.</li>
				<li>SW de programación: IDE, Borland C, visual studio, eclipse!</li>
					<ul>
						<li>Ensambladores</li>
						<li>Compiladores</li>
						<li>Interpretes</li>
					</ul>
			</ul>
		<h2>Entornos operativos</h2>
			<p>Con el término entorno operativo se engloba al S.O a su interfaz de usuario y algunas aplicaciones que vienen con el (explorador de archivos, programas de optimización, programas de configuración, etc.…)</p>
			<p class="negrita">Funciones:</p>
			<ul>
				<li>gestión de recursos</li>
				<li>Control y manejo de dispositivos de E/S</li>
				<li>Ejecución y secuenciación de tareas (Distpatcher)</li>
				<li>Capa de abstracción de HW (HAL), ofrece un conjunto de instrucciones básicas y comunes que a través del driver o módulo indican como interactuar con el HW.</li>
				<li>Gestión de los file system</li>
				<li>Interfaz (gráfica o consola)</li>
				<li>Detectar e informa al usuario de errores</li>
			</ul>
			<p class="negrita">Componentes de un S.O:</p>
			<ul>
				<li>Gestión de procesos</li>
				<li>Gestión de la memoria</li>
				<li>Gestión de E/S</li>
				<li>Gestión de Ficheros</li>
				<li>Gestión de comunicaciones</li>
				<li>Gestión de interrupciones</li>
				<li>Gestión de semáforos</li>
				<li>Gestión de protección</li>
				<li>Utilidades de sistema</li>
			</ul>
			<p>Dispatcher &rArr; g. procesos &rArr; g. memoria &rArr; g. E/S</p>
			<h3>Entornos operativos en la actualidad</h3>
				<p>Características básicas comunes:</p>
				<ul>
					<li>Cargan el S.O después de cargar la BIOS.</li>
					<li>Interfaz gráfica</li>
					<li>Son multiusuario y multitarea</li>
					<li>Forma parte de una familia de plataforma, con aplicaciones y herramientas compatibles.</li>
					<li>Soportan varios sistemas de archivos: FAT, FAT32, NTFS, HFS, EXT2, EXT3, EXT4.</li>
					<li>Ofrecen herramientas similares con distintos nombres.</li>
				</ul>
				<p>Existen 4 plataformas que abarquen todo el mercado:</p>
				<ul>
					<li>Windows</li>
					<li>GNU-Linux</li>
					<li>MAC OS</li>
					<li>Android</li>
				</ul>
				<p>Existen otras ofertas abriéndose camino:</p>
				<ul>
					<li>Google Chrome, Craythur, EyeOs…</li>
					<li>S.O concebidos para dispositivos móviles, PDA y tablets: Android, Symbian OS, palmos, IOS, Windows 7 Mobile, Windows 8.</li>
				</ul>
				<p>Virtualización de entornos operativos:</p>
				<ul>
					<li>VMWARE</li>
					<li>VIRTUAL PC</li>
					<li>XEN</li>
					<li>VIRTUALBOX</li>
					<li>OPENVZ</li>
					<li>PARALLELS</li>
				</ul>
	<h2>Tipos de aplicaciones</h2>
		<ul>
			<li>Aplicaciones de productividad empresarial (ofimática, gráficas, gest. proyec)</li>
			<li>Aplicaciones de ámbito domestica (entretenimiento, formación, juegos,…)</li>
			<li>Aplicaciones profesionales horizontales (contabilidad profesional, gestión de recursos, diseño web,…)</li>
			<li>Aplicaciones verticales (SW para un sector determinado a medida)</li>
			<li>Aplicaciones utilitarias (diagnostico, rendimiento, antivirus, compresores)</li>
		</ul>
	<h2>Tipos de licencias</h2>
		<h3>Licencias de uso:</h3>
		<ul>
			<li>Licencia propietaria: uso en una o varias maquinas pagando un precio.</li>
			<li>Shareware: Uso limitado en tiempo o capacidad.</li>
			<li>Freeware: Uso y copia ilimitada a precio 0.</li>
			<li>Software libre: Permite el uso, copia, modificación y distribución libre con acceso a código fuente.</li>
		</ul>
			<p>Según los derechos que cada autor se reserva sobre su obra podemos tener las siguientes licencias:</p>
		<ul>
			<li>Licencia de software de código abierto con permisos, permite crear una aplicación derivada sin que requiera protección alguna. Ej:PHP Licence 30, Perl licence.</li>
			<li>Licencia de software de código abierto ROBUSTAS (Con restricciones).</li>
				<ul>
					<li>a. Robustas o con restricciones fuertes Copyleft fuertes (GPL), licencia publica general: Obliga a todas las obras derivadas bajo los mismos términos.</li>
					<li>b. Débiles o con restricciones débiles Copyleft débil (licencia LGPL) Las obras derivadas deben licenciarse bajo los mismos términos aunque las modificaciones potenciales pueden ser licenciadas bajo otrs terminos  y condiciones distintas. Los desarroladores pueden usar su SW GPloLGPL sin estar obligados a someter al programa final bajo dichas licencias. Ej: mozilla public license, opensource license.</li>
					<li>c. Licencias de SW de código cerrado (SW propietario o privativo), los propietarios establecen derechos de uso y distribución, copia, modificación.</li>
					<li>d. SW de dominio público (sin licencia): se permite el uso, distribución, copia, etc…con o sin licencia, ej: licencia BSD (distribución de S de Berkeley)(no obliga a que sea BSD)</li>
				</ul>
		</ul>
		<image class="ancho" src="../Imagenes/licencias.png"></image>
		<image class="ancho" src="../Imagenes/licencias.jpg"></image> 
		
		
	<h2>Componentes de aplicaciones. Arquitecturas de SW</h2>
		<p>Básicamente existen dos diseños de programación de aplicaciones: <b>ascendente</b> y  <b>descendente</b>.</p>
		<p>En programación web se usa el modelo de 3 capas:</p>
			<ul>
				<li>Presentacion</li>
				<li>Acceso</li>
				<li>BBDD</li>
			</ul>
	<h2>Instalación, configuración y eliminación de aplicaciones</h2>
		<p><b>Formas de instalar:</b></p>
			<ul>
				<li>Por copia directa (MAC OS, Portables).</li>
				<li>Mediante instalador (MSI, SYS).</li>
				<li>Mediante un gestor de paquetes (apt-get, aptitude, sinaptic, rpm, deb, apk).</li>
			</ul>
		<p><b>Formas de desinstalar:</b></p>
			<ul>
				<li>Mediante eliminación directa (MAC OS, Portables).</li>
				<li>Mediante desinstalador (MSI, SYS).</li>
				<li>Mediante gestor de paquetes.</li>
			</ul>
	<h2>Pruebas o Testing de aplicaciones</h2>
	
	<p>Los proyectos de desarrollo de SW sufren problemas de calidad, tanto en el proceso de desarrollo como en los productos que entregan.</p>
	<p>Las pruebas de SW o testing son aquel conjunto de procesos que permiten verificar y validar la calidad de un producto de SW identificando errores de diseño e implementación.</p>
	<p>Razones por las que se producen estos fallos o bugs:</p>
	<ul>
		<li>Poca falta de comunicación</li>
		<li>Complejidad de SW</li>
		<li>Errores de programación</li>
		<li>Cambios continuos</li>
		<li>Presiones de tiempo</li>
		<li>Pobre documentación del código</li>
	</ul>
	<p>“El testing puede probar la presencia de errores, pero no la ausencia de ellos” (Edsger Dijkstra).</p>
	<p>Tipos de pruebas:</p>
	<ul>
		<li>Verificación: demuestra que un programa cuenta con sus especificaciones, ¿está el producto correctamente construido?</li>
		<li>Validación: se encarga de comprobar que el programa de la respuesta que espera el usuario, ¿el producto construido es correcto?</li>
	</ul>
			
	<h2>Evaluación y Rendimiento de aplicaciones. Comparativas.</h2>
		<p>4 categorías de pruebas de comparación:</p>
		<ul>
			<li>Pruebas de aplicación base: cronometrar tiempo</li>
			<li>Pruebas playback: uso de las llamadas al sistema (acceso a disco, llamadas a rutinas de gráficos).</li>
			<li>Pruebas sintéticas: enlazan actividades de la aplicación en subsistemas específicos.</li>
			<li>Pruebas de inspección: las ejecutan directamente en su entorno productivo.</li>
		</ul>
	<h2>SW de proposito general</h2>
		<ul>
			<li>Ofimática y documentación electrónica.</li>
				<ul>
					<li>Gestores de bases de datos.</li>
					<li>Agendas.</li>
					<li>Visualizadores de documentos.</li>
					<li>Etc.</li>
				</ul>
			<li>Imagen, sonido y video.</li>
			<li>Programación.</li>
				<ul>
					<li>Visual C.</li>
					<li class="tachado">Visual JAVA.</li>
					<li>Python.</li>
					<li>Etc.</li>
				</ul>
			<li>Educación.</li>
				<ul>
					<li>Diccionarios.</li>
					<li>Enciclopedias.</li>
					<li>Etc.</li>
				</ul>
			<li>Hogar, ocio y entretenimiento.</li>
			<li>Productividad y negocios.</li>
				<ul>
					<li>Contaplus.</li>
					<li>Contahogar.</li>
					<li>Microsoft Project.</li>
					<li>TPV.</li>
					<li>Outlook express.</li>
					<li>Etc.</li>
				</ul>
			<li>Clientes por servicios de internet.</li>
				<ul>
					<li>Clientes de mensajería.</li>
					<li>Etc.</li>
				</ul>
			<li>SW a medida y enlatarlo.</li>
				<ul>
					<li>A medida: SW que se hace a medida para la empresa.</li>
					<li>Enlatado: la empresa de amolda al SW.</li>
				</ul>
			<li>SW de tiempo real.</li>
				<ul>
					<li>SW que necesita requerimientos de tiempo: Parkings…</li>
				</ul>
			<li>SW científico y de ingeniería.</li>
			<li>SW empotrado.</li>
				<ul>
					<li>SW metido en memoria(ROM, Flash).</li>
				</ul>
			<li>SW de I.A.</li>
				<ul>
					<li>SW deductorio (medicina).</li>
					<li>Redes neuronales.</li>
					<li>Lenguaje artificial.</li>
				</ul>
		</ul>
</div>

<div class="tema">
<h1>TEMA 6   SW IMPRESCINDIBLE. UTILIDADES BÁSICAS DE UN S.I</h1>
<!--
		<ul>
			<li></li>
		</ul>
-->
	<h2>UTILIDADES DE COMPRESIÓN Y DESCOMPRESIÓN</h2>
		<p>Dos tipos de algoritmos de compresión:</p>
		<ul>
			<li>Con perdida de información.</li>
				<ul>
					<li>DVD --> divX</li>
					<li>etc..</li>
				</ul>
			<li>Sin perdida de información.</li>
				<ul>
					<li>Xarchiver (GPL).</li>
					<li>7zip</li>
					<li>Gzip gunzip bzip2, bunzip2</li>
				</ul>
		</ul>
	<h2>MONITORIZACIÓN DEL SISTEMA</h2>
		<ul>
			<li>xosview</li>
			<li>hardinfo</li>
			<li>lshw</li>
			<li></li>
		</ul>
	<h2>UTILIDADES DE GRABACIÓN</h2>
		<p>En WINDOWS:</p>
		<ul>
			<li>Nero</li>
			<li>Roxio</li>
			<li>Alcohol</li>
			<li>imgburng</li>
		</ul>
		<p>En LINUX:</p>
		<ul>
			<li>Brasero</li>
			<li>Gnomebraker</li>
			<li>K3B</li>
			<li>comprobación de isos: <b>md5sum</b></li>
		</ul>
	<h2>UTILIDADES DE MANTENIMIENTO DE SISTEMA</h2>
		<ul>
			<li>GShutdown (Linux)</li>
			<li>Ccleaner portable (Windows)</li>
			<li>System explorer portable (Windows)</li>
		</ul>
	<h2>HERRAMIENTAS DE GESTIÓN DE FICHEROS Y RECUPERACIÓN DE DATOS</h2>
		<ul>
			<li>Recuva portable (windows)</li>
			<li>Ontrack easy recovery</li>
		</ul>
	<h2>GESTIÓN DE DISCOS</h2>
		<ul>
			<li>DEFLAGGER PORTABLE (Windows)</li>
			<li>Smartmontools (linux):</li>
				<ul>
					<li><b>Smartctl –i /dev/sda </b>(soporta o no)</li>
					<li><b>Smartctl –s on </b>( habilita smart)</li>
					<li><b>Smartctl –long</b> ó <b>short </b>(testea)</li>
					<li><b>Smartctl –l selftest</b> (estadisticas)</li>
					<li><b>Smartctl –a ó –a –d ata</b> (información detallada)</li>
					<li><b>Gsmartcontrol</b></li>
				</ul>
		</ul>	
	<h2>UTILIDADES DE SEGURIDAD DEL SISTEMA</h2>
		<ul>
			<li>Elegir bien las contraseñas.</li>
			<li>Abrir puertos necesarios.</li>
			<li>Uso firewall, antivirus y antiespias.</li>
			<li>Encriptación de información (encfs - linux) (cryptsetup).</li>
		</ul>
	<h2>ANTIVIRUS, ANTIESPIAS Y CORTAFUEGOS</h2>
		<p>Antivirus:</p>
		<ul>
			<li>CLAMWIN (portable).</li>
		</ul>
		<p>Anti espías/spyware:</p>
		<ul>
			<li>Your free antispyware.</li>
		</ul>
		<p>Cortafuegos:</p>
			<ul>
				<li>Firestarter (LINUX).</li>
			</ul>
	<h2>CODIFICADORES Y CONVERSORES MULTIMEDIA</h2>
		<p>Codec:</p>
		<ul>
			<li>Video:</li>
				<ul>
					<li>Xvid</li>
					<li>Divx</li>
					<li>Mpeg:</li>
						<ul>
							<li>Vcd (Mpeg-1)</li>
							<li>Svdc (Mpeg-2)</li>
							<li>Dvd (Mpeg-2)</li>
						</ul>
				</ul>
			<li>>Audio:</li>
				<ul>
					<li>Mp3</li>
					<li>OGG</li>
					<li>Wma</li>
					<li>Ac3</li>
				</ul>
		</ul>
		<p>Reproductores:</p>
		<ul>
			<li>Tótem</li>
			<li>Mplayer</li>
			<li>VLC</li>
			<li>Para Linux es necesario instalar ciertas dependencias, en este caso son:</li>
				<ul>
					<li>GSTREAMER</li>
					<li>LIBXINE-EXTRACODECS</li>
				</ul>
			<li>Winlame (portable conversor audio opensource).</li>
			<li>XMEDIARECODE (postabe; para convertir videos…).</li>
		</ul>
		<p>Conversor y capturador de pantalla:</p>
			<ul>
				<li>ffmpeg -f x11grab -s svga -r 25 -i :0.0 ./escritorio.mpg</li>
				<li>avconv -f x11grab -s 1280x978 -r 25 -i :0.0 -vcodec libxvid -aspect 4:3 -b 3000k -t 30 ~/Escritorio/escritorio_2000k_avconv.avi</li>
			</ul>
			<p>En ubuntu los codecs están el paquete ubuntu-restricted-extras</p>
	<h2>OTRAS UTILIDADES</h2>
		<p>Glary utilities portable:</p>
		<ul>
			<li>Es un compendio de utilidades.</li>
		</ul>

</div>

<div class="tema">
<h1>TEMA 7. MANTENIMIENTO PREVENTIVO DE UN S.I</h1>

<h2>CREACIÓN Y RESTAURACIÓN DE IMÁGENES DE DISCOS Y PARTICIONES</h2>
	<ul>
		<li>gparted (livecd)</li>
			<ul>
				<li>G4l (clonación de discos)</li>
				<li>Gparted (crear partición)</li>
				<li>Partition image(clonar particiones)</li>
				<li>Make parted magic USB (para que funciones parted magic desde un USB)</li>
				<li>Hardinfo (Everest para linux)</li>
				<li>Gsmart control (información HARD)</li>
				<li>Xarchived (realiza copias de seguridad)</li>
				<li>Mount-gtk (mota y desmonta dispositivos de sistema)</li>
			</ul>
		<li>MBR (master boot record): 512 bytes</li>
			<ul>
				<li>446 bytes (gestor de arranque)</li>
				<li>64 bytes para la tabla de particiones</li>
				<li>2 bytes para el identificador de la partición de arranque (activa)</li>
			</ul>
	</ul>
<h2>RESPALDO DE SISTEMA</h2>
	<ul>
		<li>Totales o completas &rArr; copia todo lo dicho</li>
		<li>Incrementales &rArr; hace copia solo de los ficheros modificados cada día</li>
		<li>Diferenciales &rArr; hace copia de los ficheros modificados desde la última copia total.</li>
	</ul>
	<p>Utilidad para hacer copias de seguridad:</p>
		<ul>
			<li>tar</li>
			<li>Sbackup</li>
		</ul>
<h2>OPCIONES DE ARRANQUE</h2>
<p>Linux:</p>
	<ul>
		<li>LILO</li>
		<li>GRUB &rArr; está en /boot/grub</li>
		<li>GRUB2 &rArr; está en /boot/grub2</li>
	</ul>
<p>Windows:</p>
	<ul>
		<li>Boot.ini</li>
	</ul>

</div>

<div class="tema">
<h1>TEMA 8. SEGURIDAD Y PROTECCIÓN AMBIENTAL EN S.I</h1>
<h2>EVALUACIÓN DE RIESGOS</h2>
<p>Se hace teniendo en cuenta la ley de prevención de riesgos laborales (ley 31/1995 de 8 de Noviembre) y el reglamento de servicios de prevención (Real decreto 39/1997 de 17 de enero) además de otras legislaciones relativas al sector o la actividad.</p>
<p>Es función de los empresarios realizar la evaluación de riesgos para la seguridad de los trabajadores (se realiza puesto a puesto y se evalúan si afectara a terceras personas)</p>
<p>Los riesgos tienen un nivel de peligrosidad diferente dependiendo la actividad, también hay que tener en cuenta la “probabilidad” de que ocurra.</p>
<h2>PREVENCIÓN DE RIESGOS LABORALES</h2>
	<ul>
		<li>Equipos de protección individual</li>
	</ul>
	<p>Normas y consejos en entornos informáticos:</p>
	<ul>
		<li>Los cables lo más recogido posible</li>
		<li>Cables de datos separados de los de tensión</li>
		<li>Instalaciones electivas revisadas</li>
		<li>Evitar sobrecargas</li>
		<li>Apagar los equipos si no se utilizan</li>
		<li>Separar los equipos de la pared (evita sobrecalentamiento)</li>
		<li>Uso de tomas de tierra</li>
		<li>Disponer de un sistema contra incendios</li>
		<li>Climatización en la oficina (22º en invierno 24º en verano)</li>
		<li>Entornos sin ruidos (<55db)</li>
		<li>Procedimientos de trabajo claros y organización adecuada (factor psicosocial)</li>
		<li>Seguir las instrucciones del fabricante en el montaje de equipos.</li>
		<li>Usar luz natural siempre que se pueda</li>
		<li>Techos blancos y paredes de tonos medio</li>
		<li>Eliminar vibraciones de aparatos (aire acondicionado, equipos…)</li>
		<li>Reducir electrostática</li>
	</ul>
	<p>Consejos para usuarios de equipos</p>
	<ul>
		<li>Cuando se está mucho tiempo delante de un ordenador se pueden producir:</li>
			<ul>
				<li>Trastornos musculo esqueléticos</li>
				<li>Problemas visuales</li>
				<li>Fatiga mental</li>
			</ul>
		<li>Consejos para minimizar estos problemas:</li>
			<ul>
				<li>La distancia entre pantalla y ojo mayor a 40cm</li>
				<li>El ángulo entre la línea de visión y la horizontal debe ser menor a 60º</li>
				<li>No utilizar pantallas pequeñas</li>
				<li>Ajustar el contraste y la luminosidad</li>
				<li>No trabajar en penumbra</li>
				<li>Evitar monitores CRT</li>
				<li>La posición, inclinación y altura del teclado debe ser la suficiente para que las manos queden relajadas</li>
				<li>Elegir un ratón cómodo</li>
				<li>Usar sillas ergonómicas y ajustables</li>
				<li>Mobiliario cómodo</li>
				<li>Postura recta</li>
				
			</ul>
	</ul>
<h2>PROTECCION AMBIENTAL</h2>
	<p>La directiva RoHS de la unión Europea restringe el uso de sustancias peligrosas en equipos electrónicos y eléctricos como opueden ser el plomo, cadmio,mercurio, cromo hexavalente y los retardantes de la llama bifenil polibrominado (PBB) y éter difenil polibrominado (PBDE).</p>
	<p>Los fabricantes cada vez están mas preocupados por los contaminantes, como ejemplo los nuevos micros de 45 nsg están libres de plomo, y cada vez se utilizan menos los alógenos , etc..</p>
	<p>Nokia lidera el ranking verde , mientras que nintendo es el que peor nota ha sacado, según Greenpeace.</p>
	<p>Entre los elementos que pueden contener productos contaminantes tenemos:</p>
	<ul>
		<li>Móviles (mercurio; en las pilas,plomo,berilio, ,PVC…)</li>
		<li>El PVC si se quema genera dioxinas que son sumamente contaminantes.</li>
		<li>Pantallas planas: contienen mercurio, que puede  provocar daños en el sistema nervioso, y el cerebro</li>
		<li>Pantallas CRT: contienen  plomo daña el sistema nervioso, sanguíneo y reproductor.</li>
		<li>Baterías de portátiles: contienen cadmio, afecta a riñones y huesos</li>
	</ul>
</div>

<a name="edicion"></a>
fin
</div>
</BODY>
</HTML>
