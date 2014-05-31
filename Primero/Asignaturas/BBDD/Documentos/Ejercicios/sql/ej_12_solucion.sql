/*Para hacer más facil el ejercicio entramos con el nombre de usuario
SCOTT y contraseña TIGER. Trabajamos con la tabla emp.*/
/*1. Mostrar el Ename de aquellos que tengan el camp MGR 
   a nulo*/
   SELECT ename FROM emp WHERE mgr IS NULL;
/*2. Mostar el apellido (ename), trabajo(job) y salario(sal)
   de aquellos empleados que sean 'SALESMAN' y su salario
   sea superior a 1500*/
   SELECT ename,job,sal FROM emp WHERE job = 'SALESMAN' AND sal > 1500;
/*3. Mostrar el apellido (ename), trabajo(job) , salario(sal) y
   comision de aquellos empleados que su comision no sea nula
   y pertenezcan al departamento 30*/
   SELECT ename,job,sal,comm FROM emp WHERE comm IS NOT NULL AND deptno=30;
/*4. Mostrar el apellido (ename), trabajo(job) de aquellos 
   empleados cuyo tabajo sea CLERK o ANALYST*/
   SELECT ename,job FROM emp WHERE job='CLERK' OR job='ANALYST';
/*5. Mostrar el apellido (ename) y la fecha de ingreso
   (hiredate) mostrandio los alias 'Apellido', 
   'Fecha ingreso', para todos los empleados que
   ingresaron en diciembre de 1981.*/
   SELECT ename as "Apellido", hiredate as "Fecha ingreso" FROM emp WHERE hiredate BETWEEN '01/12/1981' AND '31/12/1981';
/*6. Mostrar el apellido (ename) y la fecha de ingreso
   (hiredate) mostrandio los alias 'Apellido', 
   'Fecha ingreso', para todos los empleados que
   ingresaron en 1981 o en 1987.*/
   SELECT ename as "Apellido",hiredate as "Fecha ingreso" FROM emp WHERE 
			hiredate BETWEEN '01/12/1981' AND '31/12/1981' OR 
			hiredate BETWEEN '01/12/1987' AND '31/12/1987';
/*7. Mostrar el apellido (ename) y la trabajo para aquellos
   empleados que no son 'ANALYST'*/
	SELECT ename,job FROM emp WHERE job <> 'ANALYST';
	SELECT ename,job FROM emp WHERE NOT job = 'ANALYST';
