<!DOCTYPE html>
<html>
<head>
	<title>ASIR1: BBDD: Teoría</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.21" />
	<LINK REL=StyleSheet HREF="../../../../estilos/menu_principal.css" TYPE="text/css">
	<LINK REL=StyleSheet HREF="../Ajustes/estilos.css" TYPE="text/css">
	<script type="text/javascript" src="../Ajustes/scripts.js"></script>
	<?php
	include("../Ajustes/funciones.php");
	include("../../../../php/scripts.php");
	//$numero_ejercicios = contar_archivos("./Ejercicios/er/enunciados/");
	//$numero_ejemplos = contar_archivos("./Ejemplos/");
	//$numero_ejercicios_sql = contar_archivos("./Ejercicios/sql/enunciados/");
	//$numero_ejercicios_func = contar_archivos("./Ejercicios/func/enunciados/");
	//$ejemplo = 1;
	//$total=0;
	?>
</head>

<body>
<!----------------------------------------------------------------------
MENÚ PRINCIPAL
----------------------------------------------------------------------->
<div class="menus">
<div class="menu_principal">
	<ul class="menu">
		<li><a href="../../../../">ASIR</a></li>
		<li><a href="../../../">PRIMERO</a></li>
		<li><a href="../../">ASIGNATURAS</a></li>
		<li>SISTEMAS DE GESTIÓN DE BASES DE DATOS</li>
		<?=paypal()?>
	</ul>
</div>
<!----------------------------------------------------------------------
MENÚ ASIGNATURA
----------------------------------------------------------------------->
<div class="menu_asignatura">
	<ul class="menu">
		<li><a href="../">Índice</a></li>
		<li><button onclick="mostrar_ocultar_todo()" id="mostrar_todo">Expandir todo</button></li>
	</ul>
</div>
</div>
<div class="contenido" id="contenido">
<a name="tema1"></a>
<!----------------------------------------------------------------------
TEMA 1: MODELO ENTIDAD/RELACIÓN Y MODELO RELACIONAL
----------------------------------------------------------------------->	
<div name="Tema_1" class="tema">
	<h1>Modelo Entidad &#47; Relación y Modelo Relacional</h1>
	<h2>Ejercicios</h2>
<a name="Tema11"></a>

<?php echo ejercicios("er");?>

</div>
<a name="tema2"></a>
<!----------------------------------------------------------------------
TEMA 2: ORACLE
----------------------------------------------------------------------->
<div name="tema_2" class="tema">
<h1>ORACLE</h1>
<a name="tema21"></a>
<h2>Sintaxis ORACLE</h2>
<a name="tema211"></a>
<h3>CREATE TABLE (crea tablas)</h3>
<pre>CREATE TABLE nombre_tabla(nombre_columna1 tipo_dato(valor) [NOT NULL] [UNIQUE][PRIMARY KEY][DEFAULT],
			nombre_columna2 tipo_dato(valor) [NOT NULL] [UNIQUE][PRIMARY KEY][DEFAULT],...
			[CONSTRAINT nombre_restricción TIPO_RESTRICCIÓN (Valor/es restrcicción)]);</pre>
<pre>CREATE TABLE EMP_CLON AS SELECT * FROM SCOTT.EMP;
CREATE TABLE EMP_CLON2 AS SELECT ENAME,JOB FROM SCOTT.EMP;</pre>
<a name="tema2111"></a>
<h4>CONSTRAINT (restricciones)</h4>
<p>Lista de restricciones:</p>
	<ul>
		<li>PRIMARY KEY (col1, col2, ...) [NOVALIDATE][DISABLE]</li>
			<ul>
				<li>NOVALIDATE: hace que no compruebe las relaciones.</li>
				<li>DISABLE: hace que no se use la primary key aunque esté puesta.</li>
			</ul>
		<li>FOREIGN KEY (col1, col2, ...) REFERENCES (nombre_tabla)</li>
		<li>UNIQUE (col1, col2, ...)</li>
		<li>CHECK (campo condición_de_búsqueda):</li>
			<ul>
				<li>IN(lista de valores)</li>
				<li>BETWEEN(rango de valores)</li>
			</ul>
	</ul>
<p>Hay dos formas de poner restricciónes:</p>
<ul>
	<li>Poniendo las restricciones al definir la columna.<br>
	<pre>CREATE TABLE nombre_tabla(nombre_columna1 tipo_dato(valor) 
				[RESTRICCIÓN_1 (col1, col2, ...) [OPCION1][OPCION2][...]] 
				[RESTRICCIÓN_2 (col1, col2, ...) [OPCION1][OPCION2][...]] [...],
				nombre_columna2...);</pre>
	<pre>CREATE TABLE nombre_tabla(nombre_columna1 tipo_dato(valor) 
				[CONSTRAINT nombre_restricción1 RESTRICCIÓN_1 (col1, col2, ...) [OPCION1][OPCION2][...]] 
				[CONSTRAINT nombre_restricción2 RESTRICCIÓN_2 (col1, col2, ...) [OPCION1][OPCION2][...]] [...],
				nombre_columna2...);</pre>
	</li>
	<li>Poniendo las restricciones después de definir las columnas:
	<pre>CREATE TABLE nombre_tabla(nombre_columna1 tipo_dato(valor),nombre_columna2 tipo_dato(valor),...,
			[RESTRICCIÓN_1 (col1, col2, ...) [OPCION1][OPCION2][...]],
			[RESTRICCIÓN_2 (col1, col2, ...) [OPCION1][OPCION2][...]],..);</pre>
	<pre>CREATE TABLE nombre_tabla(nombre_columna1 tipo_dato(valor),nombre_columna2 tipo_dato(valor),...,
			[CONSTRAINT nombre_restricción RESTRICCIÓN_1 (col1, col2, ...) [OPCION1][OPCION2][...]]);</pre>
	</li>
</ul>
<a name="tema2112"></a>
<h4>Sinónimos</h4>
<p>Vale para darle un nombre más reconocible a las tablas</p>
<ul>
	<li>Crear:<pre>CREATE SYNONYM nombre_sinonimo FOR nombre_tabla;</pre></li>
	<li>Borrar:<pre>DROP SYNONYM nombre_sinonimo;</pre></li>
</ul>
<a name="tema212"></a>
<h3>ALTER TABLE</h3>
<ul>
	<li>Cambiar el nombre de la tabla:</li>
	<pre>ALTER TABLE nombre_tabla RENAME TO nuevo_nombre_tabla;</pre>
	<li>Añadir un campo a la tabla:</li>
	<pre>ALTER TABLE nombre_tabla ADD nombre_campo tipo_campo(valor-campo) [restricciones];</pre>
	<li>Añadir más de un campo a la tabla:</li>
	<pre>ALTER TABLE nombre_tabla ADD (nombre_campo tipo_campo(valor-campo) [restricciones],
								nombre_campo2 tipo_campo2(valor-campo2) [restricciones]);</pre>
	<li>Modificar un campo:</li>
	<pre>ALTER TABLE nombre_tabla MODIFY nombre_campo tipo_campo(valor-campo);</pre>
	<li>Modificar más de un campo:</li>
	<pre>ALTER TABLE nombre_tabla MODIFY (nombre_campo tipo_campo(valor-campo) [restricciones],
								nombre_campo2 tipo_campo2(valor-campo2) [restricciones];</pre>
	<li>Eliminar una columna:</li>
	<pre>ALTER TABLE nombre_tabla DROP COLUMN nombre_campo;</pre>
	<li>Cambiar el nombre de una columna:</li>
	<pre>ALTER TABLE nombre_tabla RENAME COLUMM nombre_campo_viejo TO nombre_campo_nuevo;</pre>
	<li>Añadir restricciones:</li>
	<pre>ALTER TABLE nombre_tabla ADD CONSTRAINT nombre_restriccion TIPO_RESTRICCION(nombre_campo);</pre>
	<li>Modificar una restricción:</li>
	<pre>ALTER TABLE nombre_tabla MODIFY CONSTRAINT nombre_restriccion TIPO_RESTRICCION(campo1,campo2);</pre>
	<li>Deshabilitar una restricción:</li>
	<pre>ALTER TABLE nombre_tabla DISABLE CONSTRAINT nombre_restriccion;</pre>
	<li>Habilitar una restricción:</li>
	<pre>ALTER TABLE nombre_tabla ENABLE CONSTRAINT nombre_restriccion;</pre>
	<li>Habilitar una restricción aún cuando hay errores referenciales. No valida los datos
	que hay hasta ese momento, pero la restricción está activa para futuras insercionesS:</li>
	<pre>ALTER TABLE nombre_tabla ENABLE NOVALIDATE CONSTRAINT nombre_restriccion;</pre>
	
</ul>
<a name="tema2121"></a>
<h4>SECUENCIAS</h4>
<p>Se usan para no tener que meter un dato y que la tabla lo cree automáticamente incrementando
su valor y sin necesidad de saber cual es el último valor que se ha insertado.</p>
<UL>
	<LI>Crear la secuencia:
	<pre>
CREATE SEQUENCE nombre_secuencia
	START WITH numero_entero
	INCREMENT BY numero_entero
	[MAXVALUE numero_entero]
	[MINVALUE numero_entero]
	[CYCLE | NOCYLE]
</pre>
	</LI>
	<LI>Cambiar la secuencia:
<pre>
ALTER SEQUENCE nombre_secuencia
	START WITH numero_entero
	INCREMENT BY numero_entero
	[MAXVALUE numero_entero]
	[MINVALUE numero_entero]
	[CYCLE | NOCYLE]
</pre>	
	</LI>
	<LI>Consultar las secuencias creadas:</LI>
	<pre>SELECT * FROM ALL_SEQUENCES;</pre>
	<LI>Ver último valor insertado por la secuencia:</LI>
	<pre>SELECT nombre_secuencia.CURRVAL FROM DUAL;</pre>
	<li>Eliminar secuencias:</li>
	<pre>DROP SEQUENCE nombre_secuencia;</pre>
</UL>


<a name="tema213"></a>
<h3>DML - LENGUAJE DE MANIPULACIÓN DE DATOS</h3>
<a name="tema2131"></a>
<h4>INSERT INTO</h4>
	<pre>INSERT INTO nombre_tabla [(nombre_campo1, nombre_campo2, ...)] VALUES (valor_campo1, valor_campo2, ..);</pre>
	<ul>
		<li>Insertar valores sin especificar en que columnas. En este caso hay que meter
		los datos para todas las columnas:<pre>INSERT INTO tabla VALUES(valor1, valor2, valor3);</pre></li>
		<li>Si solo queremos meter los datos de algunas de las columnas hay que especificarlo. Hay
		que tener en cuenta que los campos NOT NULL hay que meterlos obligatoriamente, a no ser que 
		tenga asignado un valor default:<pre>INSTER INTO tabla(col1, col2) VALUES(valor1, valor2);</pre></li>
	</ul>
<a name="update"></a>
<a name="tema2132"></a>
	<h4>UPDATE</h4>
	<pre>UPDATE nombre_tabla SET nombre_campo='valor_campo', nombre_campo2='valor_campo2' [WHERE condicion/es]</pre>
	<P>La condición suele ser decirle que fila quieres cambiar mediante la clave. Ejmeplo:</P>
	<pre>UPDATE nombre_tabla SET nombre_campo='valor_campo', nombre_campo2='valor_campo2' WHERE campo1=6</pre>
	<a name="condiciones"></a>
	<p><b>Condiciones</b>:</p>
	<ul>
		<li>= Igual que.</li>
		<li>> Mayor que.</li>
		<li>< Menor que.</li>
		<li>>= Mayor o igual que</li>
		<li><= Menor o igual que</li>
		<li><> Distinto de</li>
		<li>BETWEEN valor1 AND valor2 Que esté entre el valor 1 y el 2.</li>
		<li>IN (valor1,valor2,valor3) Que esté en la lista que damos.</li>
		<li>LIKE 'condicion'. Se usa para haver búsquedas de texto. Se usan 
		caracteres comodín:</li>
			<ul>
				<li>% Una serie cualquiera de caracteres.</li>
				<li>_ Un carácter cualquiera.</li>
			</ul>
		<LI>IS NULL Que el campo sea nulo.</LI>
		<LI>IS NOT NULL Que el campo NO sea nulo.</LI>
	</ul>
	<p>Se pueden hacer convinaciones de condiciones usando:</p>
	<ul>
		<li>AND: tienen que cumplir las dos condiciones.</li>
		<li>OR: vale con que cumpla una de las dos condiciones.</li>
		<li>NOT: se cumple lo contrario de la condición.</li>
	</ul>
	<pre>UPDATE NINO SET nombre='xxx' WHERE codigo>12 and fnac<'02/01/2012';</pre>
<a name="tema2133"></a>
	<h4>DELETE</h4>
	<pre>DELETE [FROM] nombre_tabla [WHERE condiciones]</pre>
	<p>"DELETE nombre_tabla" borra toda la tabla.</p>
	<p>"DELETE nombre_tabla WHERE condicion" borra las filas que cumplan la condición.</p>
	
	
	
	<p>Hata que no le damos la instrucción "commit;" no graba nada realmente
		en la base de datos, lo manteiene en un fichero temporal.</p>
<a name="tema2134"></a>
	<h4>TRUNCATE</h4>
	<pre>TRUNCATE TABLE nombre_tabla</pre>
	<P>Es una orden más rápida que DELETE, pero tiene el inconveniente de que se ejecuta 
	inmediatamente sin necesidad de hacer commit, por lo que el rollback no funcionaría</P>
<a name="tema2135"></a>
<h4>Integridad referencial</h4>	
<pre>
CREATE TABLE ...
.
.
.
CONSTRAINT FK_clave_externa FOREING KEY (campo) REFERENCES tabla(campo),
ON DELETE CASCADE
ON DELETE SET NULL
ON UPDATE CASCADE
</pre>
<ul>
	<li>ON DELETE:</li>
		<ul>
			<li>CASCADE: Borrado en cascada.</li>
			<li>SET NULL: Pone a nulo el campo borrado.</li>
		</ul>
	<li>ON UPDATE:</li>
		<UL>
			<LI>CASCADE: Modifica la clave externa.</LI>
		</UL>
</ul>
<a name="tema214"></a>
<h3>Ejecutar un archivo sql con todos los comandos dentro.</h3>
<pre>
@"ruta a archivo"
@c:\archivo.sql
</pre>
<A name="tema215"></A>
<h3>SELECT</h3>
<pre>SELECT * | [DISTINCT] columna [expresion AS alias], ...
		FROM tabla;</pre>
<ul>
	<li>Ver todos los registros de la tabla:</li>
	<pre>SELECT * FROM nombre_tabla;</pre>
	<li>Ver algunos campos de la tabla:</li>
	<pre>SELECT nombre_comlumna1, nombre_columna2, ...
			FROM tabla;</pre>
	<LI>Ver valores únicos:</LI>
	<pre>SELECT DISTINCT nombre_columna FROM tabla;</pre>
	<li>Ver los valores con el nombre de columna personalizado:</li>
	<pre>SELECT nombre_columna AS nuevo_nombre_columna, nombre_columna2 AS nuevo_nombre_columna2 FROM tabla;</pre>
	<li>Para ver registros de tablas de otros esquemas:</li>
	<pre>SELECT * FROM esquema.tabla;</pre>
	<li>Para hacer operaciones con las columnas y que devuelva el resultado de esa
	operación en otra columna sin alterar la tabla:</li>
	<pre>SELECT col1,col2 as col22, col2*0.5 as col23 FROM tabla</pre>
<!----------------------------------------------------------------------
Ejemplo
----------------------------------------------------------------------->
<?php echo ejemplo();?>
<!----------------------------------------------------------------------
FIN EJEMPLO
----------------------------------------------------------------------->
	<li>Para que nos devuelva una columna de texto con convinaciones de varias columnas
	de texto se usa la concatenación, con el símbolo ||.</li>
	<pre>SELECT columna1 || columna2 || columna3 AS columnas123 FROM tabla;</pre>
<!----------------------------------------------------------------------
Ejemplo
----------------------------------------------------------------------->
<?php echo ejemplo();?>
<!----------------------------------------------------------------------
FIN EJEMPLO
----------------------------------------------------------------------->
	<li><b>Filtrado de resultados</b>. Para que nos devuelva sólamente las filas que 
	cumplan cierto requisito. Se usa el comando <b>WHERE</b> segudo de la condición.</li>
	<pre> SELECT columna1,columna2,columna3 FROM tabla WHERE columna1 condicion;</pre>
	<p>Las <a href="index.php#condiciones">condiciones</a> son las mismas que hemos visto en el <a href="index.php#update">UPDATE</a></p>
<!----------------------------------------------------------------------
Ejemplo
----------------------------------------------------------------------->
<?php echo ejemplo();?>
<!----------------------------------------------------------------------
FIN EJEMPLO
----------------------------------------------------------------------->
<!----------------------------------------------------------------------
Ejemplo
----------------------------------------------------------------------->
<?php echo ejemplo();?>
<!----------------------------------------------------------------------
FIN EJEMPLO
----------------------------------------------------------------------->
<!----------------------------------------------------------------------
Ejemplo
----------------------------------------------------------------------->
<?php echo ejemplo();?>
<!----------------------------------------------------------------------
FIN EJEMPLO
----------------------------------------------------------------------->
<!----------------------------------------------------------------------
Ejemplo
----------------------------------------------------------------------->
<?php echo ejemplo();?>
<!----------------------------------------------------------------------
FIN EJEMPLO
----------------------------------------------------------------------->
<!----------------------------------------------------------------------
Ejemplo
----------------------------------------------------------------------->
<?php echo ejemplo();?>
<!----------------------------------------------------------------------
FIN EJEMPLO
----------------------------------------------------------------------->
<!----------------------------------------------------------------------
Ejemplo
----------------------------------------------------------------------->
<?php echo ejemplo();?>
<!----------------------------------------------------------------------
FIN EJEMPLO
----------------------------------------------------------------------->
<!----------------------------------------------------------------------
Ejemplo
----------------------------------------------------------------------->
<?php echo ejemplo();?>
<!----------------------------------------------------------------------
FIN EJEMPLO
----------------------------------------------------------------------->
<!----------------------------------------------------------------------
Ejemplo
----------------------------------------------------------------------->
<?php echo ejemplo();?>
<!----------------------------------------------------------------------
FIN EJEMPLO
----------------------------------------------------------------------->
<!----------------------------------------------------------------------
Ejemplo
----------------------------------------------------------------------->
<?php echo ejemplo();?>
<!----------------------------------------------------------------------
FIN EJEMPLO
----------------------------------------------------------------------->
<!----------------------------------------------------------------------
Ejemplo
----------------------------------------------------------------------->
<?php echo ejemplo();?>
<!----------------------------------------------------------------------
FIN EJEMPLO
----------------------------------------------------------------------->
<!----------------------------------------------------------------------
Ejemplo
----------------------------------------------------------------------->
<?php echo ejemplo();?>
<!----------------------------------------------------------------------
FIN EJEMPLO
----------------------------------------------------------------------->
<!----------------------------------------------------------------------
Ejemplo
----------------------------------------------------------------------->
<?php echo ejemplo();?>
<!----------------------------------------------------------------------
FIN EJEMPLO
----------------------------------------------------------------------->
<!----------------------------------------------------------------------
Ejemplo
----------------------------------------------------------------------->
<?php echo ejemplo();?>
<!----------------------------------------------------------------------
FIN EJEMPLO
----------------------------------------------------------------------->
<!----------------------------------------------------------------------
Ejemplo
----------------------------------------------------------------------->
<?php echo ejemplo();?>
<!----------------------------------------------------------------------
FIN EJEMPLO
----------------------------------------------------------------------->
<LI><b>Ordenar los resultados</b>:<br>
<pre> SELECT columna1,columna2,columna3 FROM tabla WHERE columna1 condicion 
		ORDER BY columna1 [ASC | DESC],columna2 [ASC | DESC],columna3 [ASC | DESC];</pre>
<pre> SELECT columna1,columna2,columna3 FROM tabla WHERE columna1 condicion 
		ORDER BY num_columna1 [ASC | DESC],num_columna2 [ASC | DESC],num_columna3  [ASC | DESC];</pre>
</LI>
<!----------------------------------------------------------------------
Ejemplo
----------------------------------------------------------------------->
<?php echo ejemplo();?>
<!----------------------------------------------------------------------
FIN EJEMPLO
----------------------------------------------------------------------->
<!----------------------------------------------------------------------
Ejemplo
----------------------------------------------------------------------->
<?php echo ejemplo();?>
<!----------------------------------------------------------------------
FIN EJEMPLO
----------------------------------------------------------------------->
</ul>

<a name="tema22"></a>
<h2>Ejercicios</h2>
<?php echo ejercicios("sql");?>

</div>
<div class="tema">
	<a name="funciones"></a>
<h1>FUNCIONES</h1>
<p>Nos permite meter dentro de un select una orden.</p>
<pre>
	SELECT nombreFunción[(parámetro1[, parámetro2,...])]
</pre>
<p>Ejemplos:</p>
<?php echo ejemplo();?>
<?php echo ejemplo();?>
<?php echo ejemplo();?>
<?php echo ejemplo();?>
<?php echo ejemplo();?>
<?php echo ejemplo();?>
<?php echo ejemplo();?>
<?php echo ejemplo();?>

<h2>Funciones numéricas.</h2>
<ul>
	<li><b>Round</b>:</li>
	<pre>
		ROUND(n,decimales)</pre>
	<li><b>Trunc</b>:</li>
	<pre>
	TRUNC(n,decimales)</pre>

</ul>
<p>Hay muchas funciones numéricas que no vamos a explicar. Si se necesitan se consultan en los apuntes del profesor.</p>
<p>Las más importantes son:</p>
<ul>
	<li><b>COUNT</b>: Devuleve una cuenta.</li>
	<pre>
	SELECT COUNT(*) FROM tabla;</pre>
	<li><b>MAX</b>: Devuelve el valor máximo.</li>
	<pre>
	SELECT MAX(*) FROM tabla;</pre>
	<li><b>MIN</b>: Devuelve el valor mínimo.</li>
	<pre>
	SELECT MIN(*) FROM tabla;</pre>
	<li><b>SUM</b>: Devuelve la suma.</li>
	<pre>
	SELECT SUM(columna) FROM tabla.</pre>
	<li><b>AVG</b>: Devuelve la media.</li>
	<pre>
	SELECT AVG(columna) FROM tabla.</pre>	
</ul>
<H2>Funciones de caracteres.</H2>
<ul>
	<LI><b>LOWER</b>: Transforma el texto a todo minúsculas.</LI>
	<PRE>
	SELECT LOWER(columna) FROM tabla;</PRE>
	<LI><b>INITCAP</b>: Transforma el texto a la primera en mayúsculas y el resto en minúsculas.</LI>
	<PRE>
	SELECT INITCAP(columna) FROM tabla;</PRE>
	<LI><b>UPPER</b>: Transforma el texto a todo mayúsculas.</LI>
	<PRE>
	SELECT UPPER(columna) FROM tabla;</PRE>
	<?php echo ejemplo();?>
	<LI><b>RTRIM</b>: Elimina los espacios en blanco de la derecha.</LI>
	<pre>
	SELECT RTRIM(columna) FROM tabla;</pre>
	<LI><b>LTRIM</b>: Elimina los espacios en blanco de la izquierda.</LI>
	<pre>
	SELECT LTRIM(columna) FROM tabla;</pre>
	<li><b>TRIM</b>: Elimina los espacios en blanco de la derecha y de la izquierda del texto. Si se especifica se puede eliminar un carácter en concreto del principio y del final.</li>
	<pre>
	SELECT TRIM(columna) FROM tabla;</pre>
	<pre>
	SELECT TRIM('caracter' FROM columna);</pre>
	<li><b>SUBSTR</b>: Extrae una cadena de testo desde una posición de la cadena y con una longitud determinada</li>
	<pre>
	SELECT SUBSTR(columna,posicion_inicial,tamaño) FROM tabla;</pre>
	<LI><b>LENGTH</b>: Devuelve la longitud de una cadena de texto.</LI>
	<pre>
	SELECT LENGTH(columna) FROM tabla;</pre>
	<LI><b>INSTR</b>: Obtiene la posición en la que se encuentra el texto buscado en la cadena de texto.</LI>
	<pre>
	SELECT INSTR(columna,'texto',posicion_inicio,n_aparicion) FROM tabla;</pre>
	<li><b>REPLACE</b>: Busca un texto y lo reemplaza con otro texto.</li>
	<pre>
	SELECT REPLACE(columna, 'texto_a_buscar','texto_con_el_que_reemplazar') FROM tabla;</pre>
	<li><b>LPAD</b>: Rellena un texto con un caracter hasta una anchura máxima por la izquierda.</li>
	<pre>
	SELECT LPAD(columna, anchura_máxima,[caracter_de_relleno]) FROM tabla;</pre>
	<li><b>RPAD</b>: Rellena un texto con un caracter hasta una anchura máxima por la derecha.</li>
	<pre>
	SELECT RPAD(columna, anchura_máxima,[caracter_de_relleno]) FROM tabla;</pre>
	<?php echo ejemplo();?>
</ul>
<P>Estas funciones se usan mucho en las clausulas WHERE para asegurarnos que la condicion que escribimos está en la misma capitalización que en la base de datos.</P>
<H2>Funciones de trabajo con nulos.</H2>
<ul>
	<li><b>NVL</b>: Si el valor es NULL, devuelve el valor sustituto.</li>
	<pre>NVL(valor,sustituto)</pre>
	<li><b>NVL2</b>: Variante de la anterior, devuelve el valor sustituto1 si valor no es nulo. Si valor es nulo devuelve el sustituto2.</li>
	<pre>NVL2(valor,sustituto1,sustituto2)</pre>
	<?php echo ejemplo();?>
	<li><b>COALESCE</b>: Devuelve la primera de las expresiones que no es nula.</li>
	<pre>COALESCE(listaExpresiones)</pre>
	<?php echo ejemplo();?>
	<li><b>NULLIF</b>: Devuelve nulo si valor1 es igual a valor2. De otro modo devuelve valor1</li>
	<pre>NULLIF(valor1,valor2)</pre>
	<?php echo ejemplo();?>
</ul>
<h2>Funciones de Fechas</h2>
<ul>
	<li><b>SYSDATE</b>: Obtiene la fecha y hora actuales.</li>
	<li><b>SYSTIMESTAMP</b>: Obtiene la fecha y hora actuales en formato.</li>
</ul>
<H2>Función DECODE</H2>
<pre>DECODE(expresion, valor1, resultado1, valor2, resultado2,....
			...valorn, resultadon, valor por defecto.</pre>
<pre>SELECT ename,deptno, DECODE(deptno,10, 'Bilbao', 20, 'Donosti', 30, 'Gasteiz', 'Desconocido')
		FROM scott.emp;
</pre>
<h2>Ejercicios</h2>
<?php echo ejercicios("func"); ?>

</div>
<a name="multiples"></a>
<div class="tema">
<h1>Obtener datos de múltiples tablas</h1>
<P>Ejemplos:</P>
<pre>
SELECT ENAME,DNAME,LOC FROM SCOTT.EMP,SCOTT.DEPT WHERE SCOTT.EMP.DEPTNO=SCOTT.DEPT.DEPTNO;

SELECT SCOTT.EMP.ENAME,SCOTT.DEPT.DNAME,SCOTT.DEPT.LOC FROM SCOTT.EMP,SCOTT.DEPT WHERE SCOTT.EMP.DEPTNO=SCOTT.DEPT.DEPTNO;

SELECT E.ENAME, D.DNAME, D.LOC FROM SCOTT.EMP E, SCOTT.DEPT D WHERE E.DEPTNO=D.DEPTNO;

SELECT E.ENAME, D.DNAME, D.LOC FROM SCOTT.EMP E, SCOTT.DEPT D WHERE E.DEPTNO=D.DEPTNO AND D.LOC='DALLAS';

SELECT E.ENAME, S.GRADE, E.SAL FROM SCOTT.EMP E, SCOTT.SALGRADE S 
	WHERE E.SAL BETWEEN S.LOSAL AND S.HISAL;

SELECT E.ENAME, S.GRADE, E.SAL, D.DNAME 
	FROM SCOTT.EMP E, SCOTT.SALGRADE S, SCOTT.DEPT D 
	WHERE E.SAL BETWEEN S.LOSAL AND S.HISAL
	AND E.DEPTNO=D.DEPTNO AND D.DNAME='RESEARCH';

SELECT E.ENAME, D.DNAME, D.LOC
	FROM SCOTT.EMP E, SCOTT.DEPT D
	WHERE E.DEPTNO=D.DEPTNO;

SELECT E.ENAME, D.DNAME, D.LOC
	FROM SCOTT.EMP E INNER JOIN SCOTT.DEPT D ON E.DEPTNO=D.DEPTNO;
</pre>
<h2>Ejercicios</h2>
<?php echo ejercicios("multiples");?>
</div>
<a name="subconsultas"></a>
<div class="tema">
<h1>Subconsultas</h1>
<h2>Subsonsultas simples: devuelven una única fila.</h2>
<pre>SELECT ename FROM emp WHERE  sal < (SELECT MAX(sal) FROM emp)
	AND sal > (SELECT MIN(sal) FROM emp);</pre>
<pre>SELECT ename, sal FROM emp
	WHERE sal > (SELECT sal FROM emp WHERE ename='</pre>
<h2>Subconsultas de múltiples filas: devuelven múltiples filas.</h2>
<pre>SELECT ename, sal FROM emp
	WHERE sal > ALL (SELECT  sal FROM emp WHERE deptno = (SELECT deptno FROM dept WHERE dname = 'SALES'));</pre>
<pre>SELECT ename, sal FROM emp
	WHERE sal > (SELECT  MAX(sal) FROM emp WHERE deptno = (SELECT deptno FROM dept WHERE dname = 'SALES'));</pre>
<pre>SELECT ename, sal FROM emp
	WHERE sal NOT IN (SELECT  sal FROM emp WHERE deptno = (SELECT deptno FROM dept WHERE dname = 'SALES'));</pre>


<h2>Ejercicios</h2>
<?php echo ejercicios("subconsultas");?>


</div>
<a name="exists"></a>
<div class="tema">
<H1>Exists</H1>
<div class="ejemplo">
<pre>SELECT d.deptno, d.dname FROM dept d 
	WHERE EXISTS(SELECT deptno FROM emp e WHERE e.deptno = d.deptno);</pre>
	
<pre>SELECT d.deptno, d.dname FROM dept d 
	WHERE d.deptno IN (SELECT DISTINCT e.deptno FROM emp e);</pre>
	
<pre>SELECT d.deptno, d.dname FROM dept d 
	WHERE d.deptno = ANY (SELECT DISTINCT e.deptno FROM emp e);</pre>
</div>
<pre>SELECT d.deptno, d.dname FROM dept d 
	WHERE NOT EXISTS(SELECT deptno FROM emp e WHERE e.deptno = d.deptno);</pre>
	
<pre>SELECT d.deptno, d.dname FROM dept d 
	WHERE d.deptno NOT IN (SELECT DISTINCT e.deptno FROM emp e);</pre>
	
<pre>SELECT d.deptno, d.dname FROM dept d 
	WHERE d.deptno <> ALL (SELECT DISTINCT e.deptno FROM emp e);</pre>



<?php echo ejercicios("exists");?>
</div>
<div class="tema">
	<h1>Ejercicios de Repaso</h1>
<?php echo ejercicios("repaso");?>
</div>
<div class="tema">
	<h1>Ejercicios de SQL 11g</h1>
<?php echo ejercicios("sql11g");?>
</div>
<div class="tema">
<h1>Vistas</h1>
<?php echo ejemplosql();?>
</div>
<a name="edicion"></a>
<p>Fin</p>
</div>
<div id="total_ejemplos" style="display: none"><?php echo $total_ejemplos;?></div>
<div id="total_ejercicios" style="display: none"><?php echo $total_ejercicios;?></div>

</body>

</html>
