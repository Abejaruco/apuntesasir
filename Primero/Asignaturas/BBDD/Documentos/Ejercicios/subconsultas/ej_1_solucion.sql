/*1. Mostrar el apellido del empleado con el sueldo mayor*/
SELECT ename, sal FROM emp WHERE sal = (SELECT MAX(sal) FROM emp);
/*2. Mostrar el apellido del empleado con el sueldo menor*/
SELECT ename, sal FROM emp WHERE sal = (SELECT MIN(sal) FROM emp);
/*3. Mostrar el apellido, el trabajo y número de departamento de aquellos empleados que trabajan en el mismo departamento que King*/
SELECT ename,job,deptno FROM emp WHERE deptno = (SELECT deptno FROM emp WHERE ename='KING');
/*4. Mostrar el apellido y el salario de aquellos empleados que ganan más de la media del salario de la empresa*/
SELECT ename, sal FROM emp WHERE sal > (SELECT AVG(sal) FROM emp);
/*5. Mostrar el apellido y el salario de aquellos empleados que ganen menos que 'CLARKE'*/
SELECT ename, sal FROM emp WHERE sal < (SELECT sal FROM emp WHERE ename='CLARK');
/*6. Mostrar el apellido y el salario de aquellos empleados cuya comisión sea nula*/
SELECT ename, sal FROM emp WHERE comm IS null;
/*7. Mostrar el apellido y el manager de aquellos empleados que tengan el mismo jefe que CLARKE*/
SELECT ename, mgr FROM emp WHERE mgr = (SELECT mgr FROM emp WHERE ename='CLARK');
/*8. Mostrar el apellido y el trabajo de aquellos empleados que trabajan en 'DALLAS' o en 'CHICAGO'*/
SELECT ename, job FROM emp WHERE deptno = (SELECT deptno FROM dept WHERE loc='DALLAS') 
		OR deptno = (SELECT deptno FROM dept WHERE loc='CHICAGO');
SELECT ename, job FROM emp WHERE deptno IN (SELECT deptno FROM dept WHERE loc='DALLAS' OR loc='CHICAGO'); 
/*9. Obtener el departamento y salario de los empleados que tiene el mismo puesto y salario que JONES*/
SELECT ename, deptno, sal FROM emp WHERE job = (SELECT job FROM emp WHERE ename='JONES') AND
		sal = (SELECT sal FROM emp WHERE ename='JONES');
SELECT ename, deptno, sal FROM emp WHERE (job,sal) IN (SELECT job,sal FROM emp WHERE ename='JONES');
