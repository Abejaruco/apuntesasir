--Ejemplos de consultas simples con operadores aritméticos y relacionales.
--1.- Selecionar los empleados con salario superior a 2000
SELECT ename FROM scott.emp WHERE sal > 2000;
--2.- Selecionar los empleados con salario superior a 2000 y con el trabajo de manager
SELECT ename FROM scott.emp WHERE sal > 2000 and job='manager';
--4.- Selecionar todos los empleados del departamento nº 20 y ademas debe de estar ordenado por el apellido y tienen que aparecer en la consulta el nº del empleado, el apellido, el oficio y el nº de departamento.
SELECT empno,ename,job,deptno FROM scott.emp WHERE deptno = 20 ORDER BY ename;
--5.- Empleados cuyo oficio sea analista, ordenado por el numero del empleado.
SELECT ename FROM scott.emp WHERE job='ANALYST' ORDER BY empno;
--6.- Seleccionar las filas del departamento 10 cuyo oficio sea analista. La consulta debe de estar ordenada descendentemente por el apellido y tambien descendentemente por el nº empleado.
SELECT * FROM SCOTT.EMP WHERE DEPTNO=10 AND JOB='ANALYST' ORDER BY ENAME DESC, EMPNO DESC;
--7. Seleccionar la suma de todas las comisiones de los empleados y que aparezcan en una columna llamada TOTAL_COMISION
SELECT SUM(COMM) AS TOTAL_COMISION FROM SCOTT.EMP;
--8. Seleccionar la media de todas las comisiones de los empleados y que aparezcan en una columna llamada MEDIA_COMISION
SELECT AVG(COMM) AS MEDIA_COMISION FROM SCOTT.EMP;
--9.Obtener el apellido de todos los empleados en minúsculas
SELECT LOWER(ENAME) FROM SCOTT.EMP;
--10. Obtener el apellido de todos los empleados, cuyo apellido empieze por K, con la primera letra en mayúsculas y el resto en minúsculas
SELECT INITCAP(ENAME) FROM SCOTT.EMP WHERE ENAME LIKE 'K%';
--11.Obtener el apellido del que tiene la mayor comisión
SELECT ENAME FROM SCOTT.EMP WHERE COMM=(SELECT MAX(COMM) FROM SCOTT.EMP);
--13. obtener el número de registros de la tabla Bonus
SELECT COUNT(*) FROM SCOTT.BONUS;
--14.- Para la tabla emple, visualizar cuantos apellidos de los empleados empiezan por la letra A
SELECT COUNT(*) FROM SCOTT.EMP WHERE ENAME LIKE 'A%';
--15.- Dada la tabla emp, obtener el sueldo medio,  el máximo sueldo y el minimo sueldo de los empleados del departamento 30.Emplear el formato adecuado para la salida y las cantidades adecuadas.
SELECT ROUND(AVG(SAL),2) AS SUELDO_MEDIO, MAX(SAL) AS SUELDO_MAX, MIN(SAL) AS SUELDO_MIN
	FROM SCOTT.EMP WHERE DEPTNO=30;
--16.obtener todos loa apellidos de la table emp, sin espacios en blanco.
SELECT TRIM(ENAME) FROM SCOTT.EMP;
--17.Mostrar las 3 primeras letras de todos los apellidos 
SELECT SUBSTR(ENAME,1,3) FROM SCOTT.EMP;
