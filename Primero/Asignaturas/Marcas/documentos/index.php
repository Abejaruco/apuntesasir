<?php include("../../../../php/paypal.php");?>
<!DOCTYPE html>
<HTML>
	<!-- ------------------------------------------------ C   A   B   E   C   E   R   A -------------------------------------------------------------- -->
	<HEAD>
		<TITLE>ASIR1: HTML</TITLE> <!-- Establece el título de mi web -->
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
		<?php $ejemplo_numero = 1;?>
</HEAD>
<!----------------------------------------------------------------------
CUERPO
----------------------------------------------------------------------->
<BODY>
<!----------------------------------------------------------------------
MENUS
----------------------------------------------------------------------->
<div class="menus">
	<div class="menu_principal">
		<ul class="menu">
			<li><a href="../../../../">ASIR</a></li>
			<li><a href="../../../">PRIMERO</a></li>
			<li><a href="../../">ASIGNATURAS</a></li>
			<li>LENGUAJE DE MARCAS</li>
			<?=paypal()?>
		</ul>
	</div>
	<div class="menu_asignatura">
		<ul class="menu">
			<li><a href="../">Índice</a></li>
			<li><a href="contacto.html">Contacto</a></li>
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
 <a name="tema1"></a> <div class="tema"> <H1>1. Introducción</H1> 
<p>El lenguaje de marcas es un lenguaje que consiste en meter el 
contenido entre etiquetas o tags que definen el tipo de contenido y 
las características de este. El nombre de las etiquetas debe ir 
entre los símbolos "&#60;" y "&#62;". El contenido de una etiqueta 
se coloca entre la etiqueta de apertura o inicio &#60;nombre_etiqueta
&#62; y la de cierre &#60;/nombre_etiqueta&#62;.</p> <p>Las 
característcas del contenido se definen dentro de la etiqueta de 
inicio mediante atributos. Los atributos se definen mediante su 
nombre seguido de un "=" y el valor del atributo. Dependiendo del 
tipo de atributo el valor del atributo deberá ir o no encerrado 
entre comillas simples o dobles.</p>

</DIV>
<!----------------------------------------------------------------------
FIN TEMA 1
----------------------------------------------------------------------->
<!----------------------------------------------------------------------
TEMA 2
----------------------------------------------------------------------->
<a name="tema2"></a>
<div class="tema">
<H1>2. Páginas Web</H1>
<p>Las páginas web se crean utilizando el lenguaje de marcas, utilizando una serie de etiquetas y atributos predefinidas que se interpretan de una manera determinada. Este lenguaje de marcas con etiquetas y tag predefinidas se llama HTML.</p>
<h2>Estructura</h2>
<div class="documento">
<div class="doctype">
<h3>&#60;!DOCTYPE&#62;</h3>
<p>Para que un explorador entienda bien el código de una página web, esta debe tener al principio del documento la declaración del tipo de documento, que se indica mediante la etiqueta especial &#60;!DOCTYPE&#62;</p>
<p>Esta etiqueta debe tener una serie de atributos que varían en función de la versión de HTML a usar:</p>
<ul>
	<li>HTML 5:<br><textarea rows=1 style="width: 99%"><!DOCTYPE html></textarea></li>
	<li>HTML 4.01:<BR><textarea rows=1 style="width: 99%"><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"></textarea></li>
	<LI>XHTML 1-0<BR><textarea rows=1 style="width: 99%"><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"></textarea></LI>
</ul>
</div>
<div class="html">
<h3>&#60;HTML&#62;</h3>
<p>El contenido de toda página web debe estar entre una etiqueta o tag de inicio de archivo &#60;html&#62; y una etiqueta de fin de archivo &#60;/html&#62;</p>
<div class="head">
<h3>&#60;HEAD&#62;</h3>
<P>La etiqueta head se usa para incluir información de la página web que no se mostrará en ella, como el título de la página (que se muestra en la barra de título), especificar la codificación de caracteres, definir scripts o decir donde se encuentran, etc.</P>
<h3>&#60;/HEAD&#62;</h3>
</div>
<div class="body">
<h3>&#60;BODY&#62;</h3>
<P>Aquí es donde reálmente se va a escribir el contenido de la página web. Es lo que ve el usuario.</P>
<h3>&#60;/BODY&#62;</h3>
</div>
<h3>&#60;/HTML&#62;</h3>
</div>
</div>
</DIV>
<!----------------------------------------------------------------------
FIN TEMA 2
----------------------------------------------------------------------->
<!----------------------------------------------------------------------
TEMA 3
----------------------------------------------------------------------->
<a name="tema3"></a>
<div class="tema">
<h1>3. Cabecera</h1>
<p>La cabecera está definida por las etiquetas <b>&#60;HEAD&#62;&#60;/HEAD&#62;</b>. Puede contener las siguientes etiquetas:</p>
<ul>
	<li class="negrita">&#60;title&#62;&#60;/title&#62;</li>
		<ul>
			<li>Define el título en la barra del título del navegador.</li>
			<li>Proporciona un título para la página cuando esta es añadida a favoritos.</li>
			<li>Muestra el título de la página en resultados de motores de búsqueda.</li>
		</ul>
	<li class="negrita">&#60;base&#62;</li>
		<p>Especifica una dirección por defecto o un objetivo (target) para todos los links de la página.</p>
	<li class="negrita">&#60;link&#62;</li>
		<p>Define la relación entre un documento y un recurso externo.<br>Se usa sobretodo para relaciones con hojas de estilo.</p>
	<li class="negrita">&#60;style&#62;&#60;/style&#62;</li>
		<p>Se usa para definir información de estilo dentro de la página. Es CSS dentro de la página.</p>
	<li class="negrita">&#60;meta&#62;</li>
		<p>Se usa para definir metadatos (información sobre datos). Los metadatos no son visibles pero se pueden usar por la máquina.</p>
		<p>Típicamente se usan para especificar la descripción de la página, las palabras clave, el autor, y otros metadatos.</p>
		<p>Tiene los siguientes atributos:</p>
		<ul>
			<li>name: Define el nombre del metadato.</li>
				<p>Hay ciertos nombres de metadatos que se usan como un estándar por los navegadores y por los motores de búsqueda, como:</p>
				<ul>
					<li>"keywords": Se usa para definir las palabras clave que se usarán por los motores de búsqueda.</li>
					<li>"description": Se usa para da una descripción que saldrá en los resultados de los motoroes de búsqueda.</li>
					<li>"autor": Se usa para definir el autor.</li>
				</ul>
			<li>content: Define el contenido del metadato.</li>
			<li>http-equiv: Se usa en lugar de name y su valor puede ser:</li>
				<ul>
					<li>"refresh": Indica que la página debe actualizarse cada X segundos. Estos segundos vienen indicados en el atributo content.</li>
					<li>"content-type": Indica el tipo de documento que es y, si es texto, indica también la codificación de este.<br>Esto es muy útil para que se vean bien los acentos y otros caracteres. Por ejemplo, linux usa UTF-8 como codificación mientras que los navegadores tienen establecida como codificación estandar la ISO-8859-1, por lo que si hacemos una página web en linux y no queremos cambiar la codificación de nustros ficheros habría que añadir la siguiente línea para que se interpretasen correctamente todos los caracteres.</li>
					<textarea rows=1 style="width: 99%"><meta http-equiv="content-type" content="text/html;charset=utf-8" /></textarea>
				</ul>
		</ul>
	<li class="negrita">&#60;script&#62;&#60;/script&#62;</li>
		<p>Se usa para definir Scripts del lado del cliente, como por ejemplo JavaScript.</p>
</ul>

</div>
<!----------------------------------------------------------------------
FIN TEMA 3
----------------------------------------------------------------------->
<!----------------------------------------------------------------------
TEMA 4
----------------------------------------------------------------------->
<a name="tema4"></a>
<div class="tema">
<h1>4. Cuerpo</h1>
<p>El cuerpo de la página se incluye entre las etiquetas <b>&#60;BODY&#62;&#60;/BODY&#62;</b>.</p>
<p>Es aquí donde se incluye toda la información que queremos mostrar, en forma de tablas, listas, imágenes, vídeos, música, ...</p>
<p>Existen muchas etiquietas que se pueden usar para definir el contenido de la página y en los siguientes temas veremos algunas de ellas.</p>
</div>
<!----------------------------------------------------------------------
FIN TEMA 4
----------------------------------------------------------------------->




<!----------------------------------------------------------------------
TEMA N
-----------------------------------------------------------------------
<a name="temaN"></a>
<div class="tema">


</div>
<!----------------------------------------------------------------------
FIN TEMA N
----------------------------------------------------------------------->


<!----------------------------------------------------------------------
TEMA 5
----------------------------------------------------------------------->
<a name="tema5"></a>
<div class="tema">
<H1>5. PÁRRAFOS</H1>
		<p>Para crear un párrafo hay que meter el texto entre los tags &#60;P&#62;&#60;/P&#62;</p>
		<p>Este tag admite el atributo "Align" para alinear el texto, y los valores que se 
		le puede dar son: "Left", "Right", "Center" y "Justify"</p><!-- Alineado a la izquierda -->
		<h2>Ejemplos:</h2>
		<!------------------------ALINEADO A LA IZQUIERDA--------------------------------->
		
		<h3>Alineado a la izquierda</h3>
			<?php echo incluir_ejemplo(null);?>
		<h3>Alineado a la derecha</h3>
			<?php echo incluir_ejemplo(null);?>
		<h3>Centrado</h3>
			<?php echo incluir_ejemplo(null);?>
		<h3>Justificado</h3>
			<?php echo incluir_ejemplo(null);?>
	</div>
<!----------------------------------------------------------------------
FIN TEMA 5
----------------------------------------------------------------------->
<!----------------------------------------------------------------------
TEMA 6
----------------------------------------------------------------------->
<a name="tema6"></a>
<div class="tema">
<H1>6. SALTO DE LÍNEA - BR</H1>
	<p>El tag BR hace el efecto de pulsar la tecla ENTER cuando estamos escribiendo por ejemplo en Microsoft WORD</p>
	<?php echo incluir_ejemplo(null);?>

</div>
<!----------------------------------------------------------------------
FIN TEMA 6
----------------------------------------------------------------------->
<!----------------------------------------------------------------------
TEMA 7
----------------------------------------------------------------------->
<a name="tema7"></a>
<div class="tema">
<H1>7. LÍNEAS - HR</H1>
<p>Saca por pantalla líneas divisorias, tiene diferentes atributos.</p>
	<ul>
		<li><b>NOSHADE</b>: Elimina la sombra de la línea.</li>
		<li><b>WIDTH</b>: Define el largo de la línea.</li>
		<li><b>SIZE</b>: Define el ancho de la línea.</li>
	</ul>
	<?php echo incluir_ejemplo(null);?>
</div>
<!----------------------------------------------------------------------
FIN TEMA 7
----------------------------------------------------------------------->
<!----------------------------------------------------------------------
TEMA 8
----------------------------------------------------------------------->
<a name="tema8"></a>
<div class="tema">
<H1>8. CABECERAS - H1...H6</H1>
<p>Estos tags se utilizan prara establecer una jerarquía de encabezados.</p>
	<?php echo incluir_ejemplo(null);?>
</div>
<!----------------------------------------------------------------------
FIN TEMA 8
----------------------------------------------------------------------->
<!----------------------------------------------------------------------
TEMA 9
----------------------------------------------------------------------->
<a name="tema9"></a>
<div class="tema">
<H1>9. FUENTES - FONT</H1>
	<p>Define el tamaño y estilo del texto. Tiene diferentes atributos:</p>
	<ul>
		<li><b>SIZE</b>: Define el tamaño del texto. Puede varirar del 1 al 7, siendo el valor por defecto 3.</li>
		<li><b>COLOR</b>: Define el color del texto. Se pueden poner con el nombre del color en inglés o definiendo el color mediante números en formato hexadecimal con el símbolo # delante. Estos números definen la mezcla RGB (Red, Green, Blue).</li>
	</ul>
<?php echo incluir_ejemplo(null);?>
</div>
<!----------------------------------------------------------------------
FIN TEMA 10
----------------------------------------------------------------------->
<!----------------------------------------------------------------------
TEMA 10
----------------------------------------------------------------------->
<a name="tema10"></a>
<div class="tema">
<H1>10. LINKS - A</H1>
<p>Permiten "navegar" de un documento a otro mediante enlaces. Tiene diferentes atributos:</p>
<ul>
	<li><b>Href</b>: Define el destino del enlace. Si el destino está en internet hay que poner el protocolo http o https.Si el destino es en nuestro servidor, se pone la ruta al archivo. Esta ruta puede ser absoluta o relativa. Es recomendable usar relativas para una mejor portabilidad.</li>
	<li><b>Target</b>: Define donde se cargará el enlace. Se utilizaba con marcos (frames) para cargar un enlace en un marco distinto al que se encuentra el enlace, pero en la misma página. Ahora se utiliza sobre todo para abrir enlaces en páginas o pestañas nuevas.</li>
</ul>
<?php echo incluir_ejemplo(null);?>
</div>
<!----------------------------------------------------------------------
FIN TEMA 10
----------------------------------------------------------------------->
<!----------------------------------------------------------------------
TEMA 11
----------------------------------------------------------------------->
<a name="tema11"></a>
<div class="tema">
<H1>11. Listas</H1>
<a name="tema11.1"></a>
<P>Las listas son una forma de ordenar jerárquicamente la información. Para definir una lista se usan las etiquetas <b>&#60;ol&#62;&#60;/ol&#62;</b> (para listas ordenadas) o <b>&#60;ul&#62;&#60;/ul&#62;</b> (para listas desordenadas).</P>
<p>Para definir elementos de la lista se usan las etiquetas <b>&#60;li&#62;&#60;/li&#62;</b>, independientemente del tipo de lista de que se trate.</p>
	<H2>11.1 Listas Desordenadas - UL</H2>
		<p>Son listas en las que no importa el orden de los elementos.</p>
		<?php echo incluir_ejemplo(null);?>
	<a name="tema11.2"></a>
	<H2>11.2 Listas Ordenadas - OL</H2>
		<p>Son listas en las que el orden de los elementos es importante.</p>
		<?php echo incluir_ejemplo(null);?>	
		
		<H3>EJERCICIO LISTAS MÁS ETIQUETAS DIFERENTES</H3>
		<?php echo incluir_ejemplo(null);?>	
</div>
<!----------------------------------------------------------------------
FIN TEMA 11
----------------------------------------------------------------------->
<!----------------------------------------------------------------------
TEMA 12
----------------------------------------------------------------------->
<div class="tema">
<a name="tema12"></a>
<H1>12. Imágenes</H1>
<p>Las imágenes se insertan mediante la etiqueta <b>&#60;IMG/&#62;</b>. Dentro de esta etiqueta se pueden poner varios atributos, pero como mínimo hay que poner el atributo que indica la imágen que quermos poner (src="valor").</p>
<p class="negrita">Etiquetas:</p>
<ul>
	<li><b>src</b>: Indica el lugar donde se encuentra la imagen que queremos poner. Se pueden usar rutas absolutas y relativas, y también se pueden direcciónes a fotos en internet.</li>
	<li><b>height</b>: Indica la altura de la imagen.</li>
	<li><b>width</b>: Indica el ancho de la imagen.</li>
	<li><b>alt</b>: Indica el texto a mostrar en caso de que la imagen no pueda cargarse.</li>
</ul>
<?php echo incluir_ejemplo(null);?>	
</div>
<!----------------------------------------------------------------------
FIN TEMA 12
----------------------------------------------------------------------->
<!----------------------------------------------------------------------
TEMA 13
----------------------------------------------------------------------->
<div class="tema">
<a name="tema13"></a>
<h1>13. Tablas</h1>
<p>Las tablas se definen con las etiquetas <b>&#60;TABLE&#62;&#60;/TABLE&#62;</b>. Entre estas dos etiquetas se pueden poner varias etiquetas.</p>
<h2>Etiquetas:</h2>
<ul>
	<li><b>&#60;tr&#62;&#60;/tr&#62;</b>: Definen las filas de la tabla.</li>
	<li><b>&#60;th&#62;&#60;/th&#62;</b>: Definen las celdas que son cabeceras de tabla.</li>
	<li><b>&#60;td&#62;&#60;/td&#62;</b>: Definen las celdas de contenido.</li>
</ul>
<h2>Atributos:</h2>
<h3>Atributos comunes a todas las etiquetas de la tabla</h3>
<h4>Hay tres atributos principales:</h4>
		<ul>
			<li>border --> Define el borde de la tabla.</li>
			<li>cellpadding --> Relleno de las celdas</li>
			<li>cellspacing --> Relleno entre celdas (es como si anchase los bordes).</li>
		</ul>
<h4>Otros atributos</h4>
		<ul>
			<li>bordercolor --> Define el color del borde</li>
			<li>whidth y height --> Define el tamaño de la tabla. Podemos usar pixeles o porcentaje de pantalla.</li>
			
		</ul>
<h3>Atributos de las celdas:</h3>
		<ul>
			<li>VALIGN: Alinea el contenido de la tabla de forma vertical. Tiene como valores "top", "middle" y "bottom".</li>
			<li>ALIGN: Alinea el contenido de la tabla de forma horizontal. Tiene como valores "right", "left" y "center".</li>
			<li>COLSPAN: Combina el número de celdas que le indiques hacia la derecha.</li>
			<li>ROWSPAN: Combina el número de celdas que le indiques hacia abajo.</li>
		</ul>
	<?php echo incluir_ejemplo(null);?>
<h4>Tabla de ejercicio con "colspan":</h4>
	<?php echo incluir_ejemplo(null);?>
<h4>Tabla de ejercicio con "rowspan":</h4>
	<?php echo incluir_ejemplo(null);?>		
</div>
<!----------------------------------------------------------------------
FIN TEMA 13
----------------------------------------------------------------------->
<!----------------------------------------------------------------------
TEMA 14
----------------------------------------------------------------------->
<div class="tema">
<a name="tema14"></a>
	<h1>14. Formularios</h1>
	<P>Para crear un formulario hay que usar la etiqueta &#60;FORM&#62;&#60;/FORM&#62; Que tiene diferentes atributos:</P>
	<ul>
		<li>autocomplete: puede tener los valores de "on" u "off".</li>
	</ul>
	<P>Entre estas dos etiquetas se pueden poner diferentes campos que veremos a continuación:</P>
	<ul>
		<li>Input: Con esta etiqueta se pueden poner los campos de texto, radios, checkboxes
		 y submit. Para decir que tipo de campo quieres poner hay que usar el atributo
		 "type" que admite los siguientes valores:
			<ul>
				<li>text. Es un campo donde se mete un texto corto. Atributos:</li><ul>
					<li>Size: Indica el tamaño de la caja.</li>
					<li>MaxLength: Indica el número máximo de caracteres que se pueden escribir.</li>
					<li>PlaceHolder: Es para poner un valor por defecto dentro y que desaparezca cuando pinchemos dentro. Es un atributo de HTML5</li>
					</ul>
				<li>radio. Son unos círculos que se pueden seleccionar. Si se les pone el mismo nombre solo se puede seleccionar uno de ellos. Atributos:</li><ul>
					<li>Checked: Indica que tiene que estar seleccionado por defecto cuando se carga la página.</li>
				</ul>
				<li>checkbox. Son unos cuadrados que se pueden seleccionar. Se pueden seleccionar más de uno a la vez.</li>
				<li>Reset. Es un boton que limpia el formulario.</li>
				<li>submit</li>
				<li>email: Es un imput de HTML5. Tiene la ventaja de que comprueba automáticamente que se ha introducido un e-mail sin necesidad de javascript.</li>
				<li>date: Es un imput de HTML5. Abre un calendario para elegir la fecha. Se puede restringir el rango de fechas a meter mediante min="año-mes-dia" y max="año-mes-dia".</li>
				<li>number: Es un imput HTML5. Limita la entrada a números. Se puede limitar el rango de números a introducir mediante min="mínimo" y max="máximo"</li>
				<li>range: Es un imput HTML5. Crea una barra de desplazamiento con un rango de valores.</li>
			</ul>
		</li>
		<li>Select: Se utiliza para crear listas deplegables. Dentro hay que meter otros tags:
			<ul>
				<li>Option. Hay dos tipos de listas, las listas en las que solo se puede seleccionar un elemento y las listas e las que se puede seleccionar más de 
			un elemento. Las segundas se crean igual, pero hay que ponerle el atributo size (hace que no sea desplegable) y el atributo multiple para 
			decirle que se pueden elejir más de uno.</li>
				<li>OptGroup. Sirve para agrupar diferentes options.</li>
			</ul>

		</li>
			Los campos tienen que identificarse para que cuando posteriormente sean
			procesados o validados se sepa a que campo corresponde cada valor. Para 
			eso se utilizan los atributos "name" y "value".
	</ul>
<h4>Ejemplo</h4>
	<?php echo incluir_ejemplo(null);?>	
<p>Para que quede bién organizado el formulario es mejor meterlo dentro
de una tabla:</p>
<p><a href="./ejercicios/Ejercicio_11_-_Formularios_2.html" target="_blank">Ejercicio hecho por el profesor</p></a>
<p><a href="./ejercicios/Ejercicio_11_-_Formularios_2.html" target="_blank">Ejercicio hecho por el profesor</p></a>
<p>Ejercicio propuesto por el profesor: Hacer un formulario como el que sale en la foto.<br>
Para ver el resultado pincha en la foto.</p>
<a href="./ejercicios/EjercicioFormulario.html" target="_blank"><image src="../imagenes/EjercicioFormulario2.png" width=100% title="Pincha en la foto para ver el resultado"></image></a>
<p>Ejercicio mio:</p>
	<?php echo incluir_ejemplo(null);?>	
</div>
<!----------------------------------------------------------------------
FIN TEMA 14
----------------------------------------------------------------------->
<!----------------------------------------------------------------------
TEMA 15
----------------------------------------------------------------------->
<div class="tema">
<a name="tema15"></a>
<H1>15. Cajas</H1>
<p>Las cajas o div son contenedores en los que se pueden meter cualquier cosa y se
suelen usar para tener todo bien organizado, ya que a esa caja se le puede dar
atributos de muchos tipos (posición, color, etc) que afecta a todo lo que hay dentro</p>
<p>Para usarlo hay que usar la etiqueta &#60;DIV&#62;...&#60;/DIV&#62;</p>
<p>Los atributos que se suelen usar para personalizar la caja generlamente se usan con CSS.
El codigo CSS se suele poner en un archivo a parte y se hace referencia a én en la cabecera
de la página, o directamente se pone el código en la cabecera de la página, pero para no
liarnos por ahora, ya que todavía no hemos visto CSS, vamos a ver unas pocas características
cd CSS pero puestas directamente en la etiqueta &#60;DIV&#62;</p>
<p>Esto se hace escribiendo &#60;DIV style="atributo1CSS: valor1CSS; atributo2CSS: valor2CSS"&#62;</p>
<p>Algunos atributos CSS:</p>

	<ul>
		<li>Position: Define el tipo de posición (absolute o relative)</li>
		<li>Height: Define el alto. Puede ser en cm, %, px, o em.</li>
		<li>Width: Define el ancho. Puede ser en cm, %, px, o em.</li>
		<li>Background-color: Define el color de fondo. Se puede usar el nombre del color en 
		inglés o el número del color RGB en hexadecimal con el símbolo # delante.</li>
		<li>Color: Define el color del contenido. Se puede usar el nombre del color en 
		inglés o el número del color RGB en hexadecimal con el símbolo # delante.</li>
	</ul>
<a href="ejercicio1.html" target="_blank">Ejemplo del profesor hecho por nosotros</a>

</div>
<!----------------------------------------------------------------------
FIN TEMA 15
----------------------------------------------------------------------->
<!----------------------------------------------------------------------
TEMA 16
----------------------------------------------------------------------->
<div class="tema">
<a name="tema16"></a>
<h1>16. Multimedia: Audio y Vídeo</h1>
<h2>HTML 4</h2>
<p>Para insertart tanto audio como vídeo se usa la etiqueta &#60;EMBED SRC="archivo"&#62;</p>
<p>Cada explorador reproduce un tipo de archivos distinto y no sabemos con que explorador va a reproducir el usuario el archivo, por lo que puede ser un problema.</p>
<p>Atributos:</p>
<ul>
	<li>width</li>
	<li>height</li>
	<li>Autoestart:</li>
		<ul>
			<li>True</li>
			<li>False (por defecto)</li>
		</ul>
	<li>Hidden:</li>
		<ul>
			<li>True</li>
			<li>False</li>
		</ul>
</ul>
<p>Ejemplo:</p>
	<?php echo incluir_ejemplo(null);?>
<h2>HTML 5</h2>
<p>Para insertar audio se usa la etiqueta &#60;audio&#62;:</p>
<p>Para evitar el problema del formato de archivo y de los exploradores, se usa el tag &#60;source&#62; y así, el explorador elige el formato que puede reproducir de la lista.</p>
<p>Si el explorador no lee HTML5 habría que meter dentro de la etiqueta &#60;audio&#62; la etiqueta &#60;EMBED&#62;.</p>
<a href="./ejercicios/ejercicioMultimedia.html" target="_blank">Ejemplo</a>
<p>Ejemplo:</p>
	<?php echo incluir_ejemplo(null);?>
<h5>Insertar video de YouTube.</h5>
Youtube permite copiar el código que necesitamos pegar en la página web al ver el vídeo en su página.
<p>Ejemplo</p>
	<?php echo incluir_ejemplo(null);?>
<a href="ejercicios/ejercicio1_multimedia.html" target="_blank">Ejercicio.</a>
</div>
<!----------------------------------------------------------------------
FIN TEMA 16
----------------------------------------------------------------------->
<!----------------------------------------------------------------------
TEMA 17
----------------------------------------------------------------------->
<a name="tema17"></a>
<div class="tema">
<h1>17. Creación de páginas web</h1>
<h2>Figuras en la creación de una Página Web</h2>
<ul>
	<li><b>Director del proyecto:</b></li>
		<ul>
			<li>Hace que todas las figuras trabajen coordinadas y hacia el mismo objetivo.</li>
		</ul>
	<li><b>Frontend</b>: Expertos en lenguajes de marcas.</li>
		<ul>
			<li>Expertos en HTML5 y CSS3.</li>
			<li>Maquetadores de páginas web.</li>
			<li>Vídeos/Imágenes, listas, tablas, estilos (CSS)...</li>
		</ul>
	<li><b>Backend</b>: Expertos en lenguaje de programación.</li>
		<ul>
			<li>Expertos en programación.</li>
				<ul>
					<li>Acceso a BBDD (MySQL, SQL Server, Postgres).</li>
					<li>Lenguajes de programación (JS, Java, C++, .Net, VisualBasic, PHP).</li>
				</ul>
			<li>Gestión de la información.</li>
		</ul>
	<li><b>Diseñador</b>: Expertos en diseño.</li>
		<ul>
			<li>Experto en interactividad con el usuario.</li>
			<li>Imagina las animaciones y/o transiciones de la web.</li>
			<li>Dice al "Frontend" como maquetar la web.</li>
		</ul>
	<li><b>SEO</b>: Experto en contenidos.</li>
		<ul>
			<li>Arquitecto de la información.</li>
			<li>Es el que dice qué información va a haber en cada ventana.</li>
			<li>Estructura la información.</li>
		</ul>
</ul>
<h2>Pasos a seguir a la hora de crear una página web.</h2>
<ol>
	<li>Tener claro cuales son los objetivos de la página web y a quien está dirigida.</li>
	<li>Definir los contenidos..</li>
	<li>Definir el diseño.</li>
	<li>Hacer a mano un sketch.</li>
	<li>Wireframing.</li>
		<p>Te permite hacer un plano de tu web.</p>
	<li>Diseñar en Photoshop, Gimp, ... todas las ventanas de mi web.</li>
	<li>Meter el código HTML.</li>
	<li>Dar estilo con CSS.</li>
	<li>Compatibilidad entre navegadores.</li>
		<p>Esto lleva mucho trabajo.</p>
	<li>Subir la web.</li>
		<p>Necesitamos un host donde alojar la web y un dominio para la página.</p>
</ol>


</div>
<!----------------------------------------------------------------------
FIN TEMA 17
----------------------------------------------------------------------->
<!----------------------------------------------------------------------
TEMA 18
----------------------------------------------------------------------->
<a name="tema18"></a>
<div class="tema">
<h1>18. CSS</h1>
<a href="ejercicios/ejercicio_css_1/html/bienvenida.html" target="_BLANK">Ejercicio CSS.</a>
<H2>Pseudo clases</H2>
<p>Una etiqueta, como puede ser la de un enlace puede tener varios estados, como "no visitado", "visitado", "puntero encima", "presionado"..</p>
<?php echo incluir_ejemplo_css(null);?>
<?php echo incluir_ejemplo_html_css(null);?>
<?php echo incluir_ejemplo_html_css(null);?>

<h2>Clases</h2>
<p>Las clases se usan para agrupar elementos para luego aplicarles un diseñco común en CSS. Las clases en HTML se designan añadiendo el atributo "class='nombre_clase'" y se identifican en CSS con el ".nombre_clase"</p>

<?php echo incluir_ejemplo_html_css(null);?>
<h2>IDs</h2>
<p>Los IDs se usan para identificar elementos concretos de un documento. En un documento solo puede haber un elemento con un mismo ID. El ID se indica en HTML con la etiqueta "id='nombre_id' y en CSS se indica con el caracter "#'</p>
<?php echo incluir_ejemplo_html_css(null);?>
<h2>Agrupar mediante las etiquetas DIV y SPAN</h2>
<p>La etiqueta DIV ya hemos visto como se usa.</p>
<p>La etiqueta SPAN es una etiqueta neutra, es decir, no aporta nada pos si sola, pero combinado con los atributos class e id dan mucho juego con CSS.</p>
<p>La etiqueta span es un elemento neutro que no añade nada al documento, pero en CSS se puede usar para añadir características visuales distintivas a partes específicas de texto en los documentos.</p>
<?php echo incluir_ejemplo_html_css(null);?>
<p><a href="apuntes/span_div.docx" target="_blank">Apuntes SPAN y DIV profesor</a></p>
<?php echo incluir_ejemplo_html_css(null);?>
<h3>El modelo de Caja</h3>
	<div id="margen">
		<p>margin</p>
		<div id="borde">
			<p>border</p>
			<div id="padding">
				<p>padding</p>
				<div id="contenido">
					<p>contenido</p>
				</div>
			</div>
		</div>
	</div>
<a href="ejercicios/ejercicio_css_2/html/index.html" target="_BLANK">Ejercicio CSS 2.</a>
<h2>Unidades de medida</h2>
<h3>Unidades absolutas</h3>
<p>una medida inicada mediante unidades absolutas está completramente definida, ya que su valor no depende de otro valor de referencia.</p>
<p></p>
<ul>
	<li>in, pulgadas.</li>
	<li>cm, centímetros</li>
	<li>mm, milímitros</li>
	<li>pt, puntos. Un punto equivale a 1 pulgada/72, es decir unos 0.35 milímetros.</li>
	<li>pc, picas</li>
</ul>
<h3>Unidades relativas</h3>
<p>Las unidades relativas, a diferencia de las absolutas, no están completamente definidas, ya que su valor siempre etá referenciado respecto a otro valor. A pesar de su aparente dificultad, son las más utilizadas en el diseño web por la flexibilidad con la que se adaptan a los diferentes medios.</p>
<ul>
	<li>em, (no confundir con la etiqueta em de HTML) relativa respecto del tamaño de letra del elemento.</li>
	<li>ex, relativa respecto de la altura de la letra x ("equis minúscula") del tipo y tamaño de letra de elemento.</li>
	<li>px, (pixel) relativa respecto de la resolución de la pantalla del dispositivo en el que se visualiza la página HTML.</li>
</ul>
<a href="ejercicios/ejercicio_css_3/html/index.html" target="_BLANK">Ejercicio CSS 3.</a>
<h3>Estilos de bordes</h3>
	<ul>
		<li>dotted</li>
		<li>dashed</li>
		<li>solid</li>
		<li>double</li>
		<li>groove</li>
		<li>ridge</li>
		<li>inset</li>
		<li>outset</li>
	</ul>
<?php echo incluir_ejemplo_html_css(null);?>
<a href="ejercicios/ejercicio_css_4/html/index.html" target="_BLANK">Ejercicio CSS 4.</a>
<h3>Propiedades Width y Height</h3>
	<h4>Width</h5>
		<p>Define la anchura de un elemento o caja.</p>
	<h4>Height</h5>
		<p>Define la altura de un elemento o caja.</p>
<h3>Propiedad Float</h3>
	<p>Se puede hacer que las capas floten a la derecha o a la izquierda con la propiedad "FLOAT".</p>
	<p>Cuando una capa flota, el resto del contenido, si encuentra espacio libre, intenta ocuparlo.</p>
<?php echo incluir_ejemplo_html_css(null);?>
<?php echo incluir_ejemplo_html_css(null);?>
<h3>Propiedad Clear</h3>
	<p>Hace que la etiqueta a la que se aplica no se reparta por el espacio libre que queda a la derecha o la izquierda de un elemento flotante. Esta etiqueta se situará por debajo de la capa flotante e impedirá que capas siguientes se reparta también por el espacio disponible.</p>
<?php echo incluir_ejemplo_html_css(null);?>
	
<h3>Posicionamiento en CSS</h3>
	<p><b>Sistema de coordenadas.</b></p>
	<p>El origen de coordenadas se encuentra situado en la esquina superior izquierda.</p>
	<p>El punto de referencia del objeto a colucar es también la esquina superior izquierda.</p>
<?php echo incluir_ejemplo_html_css(null);?>
<h4>Posicionameinto Absoluto</h4>
<p>El elemento que se posiciona de forma absoluta no ocupa espacio alguno en el documento, esto significa que no deja un espacio vacío despues de ser posicionado.</p>
<p>Para posicionar un elemento de forma absoluta la propiedad "position" se establece como "absolute". Posteriormente puedes usar las propiedades "left", "right", "top" y "bottom" para colocar la caja.</p>
<?php echo incluir_ejemplo_html_css(null);?>
<h4>Posicionamiento relativo</h4>
<p>Para posicionar un elemento de forma relativa la propiedad "position" se establece como "relative".</p><p>La diferencia entre posicionamiento absoluto y relativo consiste en como se calcula la posición. La posición de un elemento que se posiciona de forma relativa se calcula desde la posición original en el documento esto significa que se mueve el elemento a la derecha, izquierda, arriba, abajo. De este modo el elemento sigue ocupando espacio en el documento una vez posicionado.</p>
<?php echo incluir_ejemplo_html_css(null);?>
<p><a href="ejercicios/ejercicio_css_5/html/index.html" target="_BLANK">Ejercicio CSS 5.</a></p>
<p><a href="ejercicios/ejercicio_css_6/html/index.html" target="_BLANK">Ejercicio CSS 6.</a></p>
<h3>Profundidad en CSS</h3>
<p>El manejo de la profundidad en CSS hace referencia al orden en que los elementos se superponen unos a otros.</p>
<p>Para ello se utiliza la propiedad "z-index", que tiene como valores números enteros.</p>
<p>A cada elemento se le puede asignar un número por medio de z-index.</p>
<p>El sistema consiste en que el elemento con un número mayor se superpone al elemento con un número menor.</p>
<p><a href="ejercicios/ejercicio_css_7/html/index.html" target="_BLANK">Ejercicio CSS 7.</a></p>
<p><a href="ejercicios/ejercicio_css_8/html/index.html" target="_BLANK">Ejercicio CSS 8.</a></p>
<p><a href="ejercicios/ejercicio_css_9/html/index.html" target="_BLANK">Ejercicio CSS 9.</a></p>
<p><a href="ejercicios/ejercicio_css_10/html/index.html" target="_BLANK">Ejercicio CSS 10.</a></p>
<p><a href="ejercicios/ejercicio_css_11/html/index.html" target="_BLANK">Ejercicio CSS 11.</a></p>
<p><a href="ejercicios/ejercicio_css_12/html/index.html" target="_1">Ejercicio CSS 12: Menús desplegables 1.</a></p>
<p><a href="ejercicios/ejercicio_css_13/html/index.html" target="_2">Ejercicio CSS 13: Menús desplegables 2.</a></p>


</div>
<div class="tema">
<a name="xml"></a>
<h1>XML</h1>
<p>XML es un metalenguaje que nos permite definir lenguajes de marcado adecuado a usos determinados.</p>
<p>Los elementos que lo componen pueden dar información sobre lo que contienen, no necesariamente sobre su extructura física o su presentación como ocurría en HTML.</p>
<p>XML no ha nacido solo para su aplicación en internet. Se propone para intercambio de información estructurada entre diferentes plataformas. Se puede usar en bases de datos, editores de texot, hojas de cálculo y casi cualquier cosa que podamos pensar.</p>
<p>Un documento XML tiene dos estructura, una lógica y una física.</p>
<ul>
	<li>En la física el documento está compuesto por unidades llamdas entidades.</li>
	<p>Cada documento comienza con una entidad documento también llamda raíz.</p>
	<li>En la lógica el documento está compuesto de declaraciones, elementos, comentarios, referencias a carácteres e instrucciones de procesamiento.</li>
</ul>
<p>Los documentos XML se dividen en dos grupos:</p>
<ul>
	<li>Documentos bien formados.</li>
	<li>Documentos válidos.</li>
</ul>
<h2>Documentos bien formados</h2>
<p>Son aquellos que cumplen las especificaciones del lenguaje respecto a las reglas sintáctivas sin estar sujetos a unos elementos fijados en un DTD (Document Type Definitio).</p>
<p>De hecho, los documentos XML deben tener una estructura jerárquica muy estricta y los documentos bien formados deben cumplirla.</p>
<h2>Documentos válidos</h2>
<p>Además de estar bien formados siguen una estructura y una semántica determinada por un DTD: sus elementos y sobre todo la estructura jerárquica que define el DTD, además de los atributos, deben ajustarse a lo que el DTD dicte.</p>
<p><b>Ejemplo:</b></p>
<?php echo incluir_ejemplo_XML(null);?>

<ul>
	<li><b>version</b>: Indica la versión de XML utilizada en el documento, no es obligatorio a no ser que sea un documento externo a otro que ya lo incluía.</li>
	<li><b>encodig</b>: La forma en la que se ha dodificado el documento, no es obligatorio a no ser que sea un documento externo a otro que ya lo incluía.</li>
	<li><b>standalone</b>: Indica si el documento va acompañado de un DTD, en cuyo caso su valor sería "no", o que no lo necesita, y en ese caso su valor sería "yes".</li>
</ul>
<p>La declaración de tipo de documento define que tipo de documento estámos creando. Es decir, definimos que declaración de tipo de documento (DTD) valida y define los datos que contiene nuestro documento XML.</p>
<h2>Documentos bien formados</h2>
<p>Un documento XML se dice que está bien formado si encaja con las especificaciones XML de producción. Lo que implica:</p>
<ul>
	<li><b>Estructura jerárquica de elementos</b>. Una etiqueta debe estár correctamente incluída en otra. Así mismo los elementos con contenido deben estár correctamente cerrados.</li>
	<li><b>Etiquetas vacías</b>. XML permite al igual que HTML elementos sin contenido, pero la etiqueta debe ser de la siguiente forma:<textarea><etiqueta/></textarea></li>
	<li><b>Un solo elemento raíz</b>. La jerarquia de elemento de un documento XML bien formado solo puede tener un elemento inicial.</li>
	<li><b>Valores de atributos</b>. Los valores de atributos en XML siempre deben estár encerrados entre comillas simples o dobles.</li>
	<li><b>Tipos de letra, espacios en blanco</b>. XML es sensible al tipo de letra que se utiliza, es decir, maneja las mayúsculas y minúsculas como caractéres diferentes. Existe un conjunto de carácteres denominados "espacios en blanco" que los procesadroes XML manejan de forma diferente en el marcado. Estos caracteres son: "espacio", "tabulador", "retorno de carro" y "salto de línea".</li>
	<li><b>Nombrando cosas</b>. Al utilizar XML es necesario asignar nombres a las estructuras, tipos de elementos, entidades, elementos particulares, etc. No se puede empezar a nombrar utilizando los siguientes carácteres: "XML" (mayúsculas o minúsculas), las letras y barras bajas se pueden usar en cualquier parte del nombre, pero no se puede empezar por números, guiones o carácteres de punto.</li>
	<li><b>Marcado y datos</b>. Las construcciones con etiquetas, referencias de entidad y declaraciones se denominan marcas. Éstas son las partes del documento que XML espera entender. El resto del documento, que se encuentra entre las marcas son los datos que resultan entendibles por las personas. Es sencillo reconocer las márcas en un documento XML, son aquelas que empiezan con el símbolo de menor que y terminan por mayor que, o bien, en el caso de las referencias de entidad que empiezan por "&" y terminan por ";"</li>
</ul>
<p>Ejemplo profesora</p>
<?php echo incluir_ejemplo_XML(null);?>
<p>Ejercicio profesora</p>
<?php echo incluir_ejemplo_XML(null);?>
<p>Ejemplo: Crear fichas de libros que puedan usarse en diferentes aplicaciones:</p>
<?php echo incluir_ejemplo_XML(null);?>
<p>Ejemplo: Crear fichas de una tienda de muebles:</p>
<?php echo incluir_ejemplo_XML(null);?>
<p>Normas para la creación de elementos:</p>
<ol>
	<li>Las etiquetas siempre hay que cerrarlas</li>
	<li>Todos los elementos deben tener nombres. No pueden estar vacíos.</li>
	<li>Se distingue entre mayúsculas y minúsculas (Case Sensitive) y no puede contener tíldes ni espacios, pero sí puede contener "-","_",":".</li>
	<li>La recomendación es escribir los nombres siempre en minúsculas.</li>
	<li>un documento XML debe contener obligatoriamente un único elemento raíz, es decir, un único elemento que contenga a todos los demás. Por ejemplo, en el ejemplo de los muebles habría que ponerle una etiqueta que contenga a todo eso con nombre "catalogo", por ejemplo.</li>
	<li>Los comentarios se hacen igual que en HTML</li>
</ol>
<h2>Atributos</h2>
<p>Los elementos pueden tener atributos para definir sus propiedades.</p>
<p>Su sintaxis es: <b>nombreAtributo="valor"</b>.</p>
<p>Ejemplo: Fichas de una tienda de muebles:</p>
<?php echo incluir_ejemplo_XML(null);?>
<p>Los atributos pueden ponerse como elementos también, por lo que, ¿cómo saber si una propiedad es mejor indicarla como elemento o como atributo?</p>
<p>Siempre que podamos debemos utilizar elementos, dejando los atributos para casos especiales.</p>
<h2>Carácter de escape</h2>
<p>Para poder escribir ciertos carácteres dentro de un elemento utilizaremos la sección CDATA:</p>
<textarea cols="100"><?php print('<![CDATA[contenido]]>')?></textarea>
<p>Ejercicios:</p>
<?php echo incluir_ejemplo_XML(null);?>
<?php echo incluir_ejemplo_XML(null);?>
<?php echo incluir_ejemplo_XML(null);?>

<h2>Como crear un DTD</h2>
<p>Hay que especificar el elemento y los elementos que contiene y en el orden que los contiene.</p>
<p>Es muy importante tener en cuenta que en el DTD estamos definiendo exáctamente el nombre de los elementos y el orden en el que deben aparecer en el documento XML</p>
<P>Para especificar aquellos elementos que ya no contienen más elementos, si no que contienen datos o valores los definiremos como #PCDATA</P>
<p>Para indicar que algunos elementos pueden aparecer varias veces se hace mediante el operador +. Este operador permite definir que en el documento XML, dentro del elemento al que pertenece (si pertenece a alguno), puede aparecer una o más veces un elemento, debiendo existir siempre al menos uno.</p>
<h3>Operador *</h3>
<p>Si por agluna circunstancia consideramos que un elemento puede aparecer 0 o más veces utilizaremos el operado * de igual forma que el anterior.</p>
<p>El carácter ? se usa para indicar que un elemento es opcional, por lo que puede aparecer una vez o ninguna.</p>
<p>El carácter | (pipe) permite definir que en el documento XML puede aparecer solo uno de varios elementos separados por elementos de este operador.</p>
<p>Si un elemento va a estar vacío se sustituye "#PCDATA" por "EMPTY".</p>
<P>Los elementos vacíos pueden resultar útiles cuando lo único que nos interesa de ellos son sus atributos.</P>
<?php echo incluir_ejemplo_XML(null);?>
<?php echo incluir_ejemplo_XML(null);?>
<?php echo incluir_ejemplo_XML(null);?>
<h3>Atributos</h3>
<p>Los atributos también tienen que especificarse en el DTD. Así, el elemento siguiente:</p>
<textarea><tipo estado="nuevo"/></textarea>
<p>Se indicaría así:</p>
<textarea>< !ATTLIST tipo estado(nuevo|usado)></textarea>
<?php echo incluir_ejemplo_xml_dtd(null,"Ejemplo");?>
<h2>Como incluir el DTD</h2>
<p>El DTD puede ir dentro del archivo XML o en un archivo a parte.</p>
<ul>
	<li>Incrustado en el XML:</li>
	<textarea  cols="100" rows="5">< ?xml version="1.0" encoding="utf-8" standalone="yes"?>
		< !DOCTYPE catalogo [
			<!--contenido del DTD -->
		]>
	</textarea>
	<li>En un archivo a parte en tu sistema de archivos:</li>
		<textarea  cols="100" rows="3">< ?xml version="1.0" encoding="utf-8"?>
		< !DOCTYPE catalogo SYSTEM "xxxx.dtd">
	</textarea>
		<li>En un archivo a parte en un sitio público:</li>
		<textarea  cols="100" rows="3">< ?xml version="1.0" encoding="utf-8"?>
		< !DOCTYPE catalogo PUBLIC "micatalogo" "http://dominio.com/xxxx.dtd">
	</textarea>
</ul>
<?php echo incluir_ejemplo_xml_dtd(null,"Ejercicio");?>
<?php echo incluir_ejemplo_xml_dtd(null,"Ejercicio");?>
<?php echo incluir_ejemplo_xml_dtd(null,"Ejercicio");?>
<h2>Espacios de nombres</h2>
<p>Para evitar confusiones al escribir las etiquetas en diferentes lenguajes dentro del mismo documento se utiliza el espacio de nombres.</p>
<p>Ejemplo:</p>
<textarea>< ?xml version="1.0" ....?>
<rss xmlns:g = "http://base.google.com/ns/1.0" version="20">
	<channel>
		<title>Tienda online ASIR</title>
		<link>http://www.asir.com</link>
		<descripcion>tienda de clase asir Almi</descripcion>
		<item>
			<g:id>20123</g:id>
			<g:title>star</g:title>
			<g:description>mesa estrella</g:description>
			<g:price>20.50</g:price>
		</item>
	</channel>
</rss></textarea>
<p>Así se distingue perfectamente entre las etiquetas de google y las del resto.</p>

<!--
<form method="post" action="http://www.xmlvalidation.com/index.php?id=1&amp;L=0" enctype="multipart/form-data" target="_Blank">
	<textarea name="file[]" rows="10" cols="80"></textarea>
	<textarea name="file[]" rows="10" cols="80"></textarea>
	<input type="hidden" name="filename[]" value="xml">
	<input type="hidden" name="filename[]" value="ejemplo.dtd">
	<input type="hidden" name="target" value="/xmlvalidation/validate;">
    <input type="hidden" name="counter" value="9">
	<input name="fileUpload" size="48" type="file">
	<input id="extS" type="checkbox" name="externalSchema" value="1">&nbsp;
 	<input type="submit" value="validate">
</form>
-->
<?php echo incluir_ejemplo_xml_dtd(null,"Ejercicio");?>
<?php echo incluir_ejemplo_xml_dtd(null,"Ejercicio");?>

</div>
<a name="xhtml"></a>
<div class="tema">
	<h1>XHTML</h1>
		<h2>¿Que es?</h2>
		<p>Es básicamente HTML con las restricciones de XML.</p>
		<p>XHTML hay que validarlo y para esto se usa la página <a href="http://validator.w3.org" target="_blank">http://validator.w3.org</a></p>
		<h2>Sintaxis</h2>
		<textarea cols="100" rows="13"><!DOCTYPE html PUBLIC"-//w3c........ XHTML 1.1//EN"
		"http://www.w3.org/TR....... xhtml11.dtd">
		<html xmlns="http://www ......... xhtml"
			xml:lang:"es">
				<head>
					<title>.....</title>
					<meta http-equiv = "........." charset=utf-8"/>
				</head>
				<body>
				....
				</body>
		</html>
		</textarea>
	<p><a href="ejemplos/ejemplo_60/sintaxisXHTML.xhtml" target="_blank">VideoCulb</a></p>
	<p><a href="ejemplos/ejemplo_61/sintaxisXHTML.xhtml" target="_blank">Ejercicio Anboto</a></p>
<hr/>
<p><a href="ejemplos/ejemplo_sergio/ejemplo_completo/ejemplo_completo.html" target="_blank">Ejemplo completo</a></p>
<p><a href="ejemplos/ejemplo_sergio/completo/completo.html" target="_blank">Completo</a></p>
<p><a href="ejemplos/ejemplo_sergio/jquery/" target="_blank">Jquery</a></p>
<p><a href="ejemplos/ejemplo_sergio/jquery/index2.html" target="_blank">Jquery2</a></p>
<p><a href="ejemplos/ejemplo_sergio/ejercicio/" target="_blank">Ejercicio 1</a></p>
</div>
<div class="tema">
<a href="examen/" target="_blanck"><h1>Página Web de exmane</h1></a>
</div>
<a name="edicion"></a>
<font color=red>Editando...</font>
</div>
	</BODY>
</HTML>
