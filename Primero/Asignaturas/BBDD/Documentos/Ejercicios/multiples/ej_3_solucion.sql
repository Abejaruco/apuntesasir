/*Queremos saber la cantidad de libros agrupados por editorial:*/
SELECT NVL(editorial, 'SIN EDITORIAL') AS Editor, COUNT(*) FROM libros
GROUP BY editorial;
/*Queremos saber la cantidad de libros agrupados por editorial pero considerando sólo algunos grupos, por ejemplo, los que devuelvan un valor mayor a 2, usamos la siguiente instrucción:*/
SELECT NVL(editorial, 'SIN EDITORIAL') AS Editor, COUNT(*) FROM libros
GROUP BY editorial HAVING COUNT(*)>2;
/*Compare esta salida con la de la sentencia anterior.*/

/*Queremos el promedio de los precios de los libros agrupados por editorial, pero solamente de aquellos grupos cuyo promedio supere los 25 pesos:*/
SELECT NVL(editorial, 'SIN EDITORIAL') AS Editor, AVG(precio) FROM libros
GROUP BY editorial HAVING AVG(precio)>25;
/*Queremos la cantidad de libros, sin considerar los que tienen precio nulo (where), agrupados por editorial (group by), sin considerar la editorial "Planeta" (having):*/
SELECT deptno, job, SUM(sal) FROM emp
GROUP BY deptno, job
HAVING SUM(sal) > 1000 AND job <> 'MANAGER';
/*Necesitamos el promedio de los precios agrupados por editorial, de aquellas editoriales que tienen más de 2 libros:*/

/*Buscamos el mayor valor de los libros agrupados y ordenados por editorial y seleccionamos las filas que tienen un valor menor a 100 y mayor a 30:*/
