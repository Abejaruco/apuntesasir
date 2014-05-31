/*1. Visualizar el n�mero de empleados de cada departamento. Utilizar GROUP BY 
para agrupar por departamento. */
	SELECT dept_no,COUNT(*) FROM emple
	GROUP BY dept_no;
/*2. Visualizar los departamentos con m�s de 5 empleados. Utilizar GROUP BY para
agrupar por departamento y HAVING para establecer la condici�n sobre los grupos.*/
SELECT dept_no,COUNT(*) FROM emple
GROUP BY dept_no
HAVING count(*)>5;
/*3.  Hallar la media de los salarios de cada departamento (utilizar la funci�n 
AVG y GROUP BY). */
SELECT dept_no, round(avg(salario),2) as media FROM emple
GROUP BY dept_no;
/*4. Visualizar el nombre de los empleados vendedores del departamento 'VENTAS' 
(Nombre del departamento='VENTAS', oficio='VENDEDOR').*/
SELECT APELLIDO FROM EMPLE NATURAL JOIN depart
WHERE DNOMBRE='VENTAS' AND OFICIO= 'VENDEDOR';

SELECT APELLIDO FROM EMPLE JOIN depart
ON(EMPLE.dept_no = DEPART.dept_no)
WHERE DNOMBRE='VENTAS' AND OFICIO= 'VENDEDOR';

SELECT APELLIDO FROM EMPLE , depart
WHERE EMPLE.dept_no = DEPART.dept_no
AND DNOMBRE='VENTAS' AND OFICIO= 'VENDEDOR';

/*5. Visualizar el n�mero de vendedores del departamento 'VENTAS' (utilizar la 
funci�n COUNT sobre la consulta anterior).*/
SELECT COUNT(*) FROM EMPLE NATURAL JOIN DEPART
WHERE DNOMBRE ='VENTAS';

/*6. Visualizar los oficios de los empleados del departamento 'VENTAS'. */
SELECT DISTINCT OFICIO FROM EMPLE NATURAL JOIN depart
WHERE DNOMBRE='VENTAS';
/*7.  A partir de la tabla EMPLE, visualizar el n�mero de empleados de cada departamento 
cuyo oficio sea 'EMPLEADO' (utilizar GROUP BY para agrupar por departamento. 
En la cl�usula WHERE habr� que indicar que el oficio es 'EMPLEADO'). */
SELECT dept_no,COUNT(*) FROM EMPLE 
WHERE OFICIO='EMPLEADO'
GROUP BY dept_no;
/*8.  Visualizar el departamento con m�s empleados. */
SELECT dept_no, count(*) FROM emple
  GROUP BY dept_no
  HAVING COUNT(*) = (SELECT MAX(count(*)) FROM EMPLE GROUP BY DEPT_NO);
/*9.  Mostrar los departamentos cuya media de salarios sea mayor que la media de
salarios de todos los empleados. */
SELECT AVG(salario) FROM EMPLE;
SELECT dept_no, AVG(salario) from emple group by dept_no 
HAVING AVG(salario) > (SELECT AVG(salario) FROM EMPLE);
/*10.  Para cada oficio obtener la suma de salarios. */
select oficio,sum(salario) as SumaSalario from emple 
group by oficio;
/*11.  Visualizar la suma de salarios de cada oficio del departamento 'VENTAS'. */
/*12.  Visualizar el n�mero de departamento que tenga m�s empleados cuyo oficio sea empleado. */
/*13.  Mostrar el n�mero de oficios distintos de cada departamento. */
/*14.  Mostrar los departamentos que tengan m�s de dos personas trabajando en la 
misma profesi�n. */
/*15.  A partir de las tablas EMPLE y DEPART mostrar los datos del departamento 
que no tiene ning�n empleado. */
/*16.  Mostrar el n�mero de empleados de cada departamento. En la salida se debe
mostrar tambi�n los departamentos que no tienen ning�n empleado. */
/*17.  Obtener la suma de salarios de cada departamento, mostrando las columnas 
DEPT_NO, SUMA DE SALARIOS y DNOMBRE. En el resultado tambi�n se deben mostrar los 
departamentos que no tienen asignados empleados. */
/*18.  Utilizar la funci�n IFNULL (o COALESCE) en la consulta anterior para que 
en el caso de que un departamento no tenga empleados, aparezca como suma de salarios
el valor�0. */


