/*Para hacer más facil el ejercicio entramos con el nombre de usuario
SCOTT y contraseña TIGER. Trabajamos con la tabla emp.*/
/*1. Queremos saber el apellido (ename) y la fecha de 
   ingreso de aquellos empleados que ingresaron en la
   empresa en 1981*/
   SELECT ename,hiredate FROM emp WHERE hiredate BETWEEN '01/01/1981' AND '31/12/1981';
   SELECT ename,hiredate FROM emp WHERE hiredate >= '01/01/1981' AND hiredate <='31/12/1981';
   SELECT ename,hiredate FROM emp WHERE hiredate > '31/12/1980' AND hiredate <'01/01/1982';
/*2. Queremos saber el apellido (ename) , 
   el puesto de trabajo y salario de los empleados que 
   ganan mas de 2500*/
   SELECT ename,job,sal FROM emp WHERE sal > 2500;
/*3. Queremos saber el apellido (ename) , 
   el puesto de trabajo y salario de los empleados que 
   ganan mas de 2500 y son 'MANAGER'*/
   SELECT ename,job,sal FROM emp WHERE sal > 2500 AND job='MANAGER';
/*4. Queremos saber el apellido (ename) , el departamento
   de los empleados de los departamentos 30 y 20.*/
	SELECT ename,deptno FROM emp WHERE deptno IN (20,30);
	SELECT ename,deptno FROM emp WHERE deptno = 20 OR deptno = 30;
/*5. Queremos saber el apellido (ename) de aquellos
   empleados cuyo apallido empiece por 'T'*/
	SELECT ename FROM emp WHERE ename LIKE 'T%';
/*6. Queremos saber el apellido (ename) de aquellos
   empleados cuyo apellido no empiece por 'T'*/
	SELECT ename FROM emp WHERE ename NOT LIKE 'T%';
/*7. Queremos saber los distintos trabajos(job) que hay
   en la tabla emp.*/
	SELECT DISTINCT job FROM emp;
