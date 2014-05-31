/*Ejercicio Union:
Una clínica almacena los datos de los médicos en una tabla llamada "medicos" y los datos de los pacientes en otra denominada "pacientes".
1- Eliminamos ambas tablas:*/
 drop table medicos;
 drop table pacientes;
/*2- Creamos las tablas:*/
 create table medicos(
  legajo number(3),
  documento varchar2(8) not null,
  nombre varchar2(30),
  domicilio varchar2(30),
  especialidad varchar2(30),
  primary key(legajo)
 );

 create table pacientes(
  documento varchar2(8) not null,
  nombre varchar2(30),
  domicilio varchar2(30),
  obrasocial varchar2(20),
  primary key(documento)
 );
/*3- Ingresamos algunos registros:*/
 insert into medicos values(1,'20111222','Ana Acosta','Avellaneda 111','clinica');
 insert into medicos values(2,'21222333','Betina Bustos','Bulnes 222','clinica');
 insert into medicos values(3,'22333444','Carlos Caseros','Colon 333','pediatria');
 insert into medicos values(4,'23444555','Daniel Duarte','Duarte Quiros 444','oculista');
 insert into medicos values(5,'24555666','Estela Esper','Esmeralda 555','alergia');

 insert into pacientes values('24555666','Estela Esper','Esmeralda 555','IPAM');
 insert into pacientes values('23444555','Daniel Duarte','Duarte Quiros 444','OSDOP');
 insert into pacientes values('30111222','Fabiana Fuentes','Famatina 666','PAMI');
 insert into pacientes values('31222333','Gaston Gonzalez','Guemes 777','PAMI');
/*4- La clínica necesita el nombre y domicilio de médicos y pacientes para enviarles una tarjeta de invitación a la inauguración de un nuevo establecimiento. Emplee el operador "union" para obtener dicha información de ambas tablas (7 registros)
Note que existen dos médicos que también están presentes en la tabla "pacientes"; tales registros aparecen una sola vez en el resultado de "union".*/
SELECT nombre,domicilio FROM medicos UNION SELECT nombre,domicilio FROM pacientes;
/*5- Realice la misma consulta anterior pero esta vez, incluya los registros duplicados. Emplee "union all" (9 registros)*/
SELECT nombre,domicilio FROM medicos UNION ALL SELECT nombre,domicilio FROM pacientes;
/*6- Realice la misma consulta anterior y esta vez ordene el resultado por nombre (9 registros)*/
SELECT nombre,domicilio FROM medicos UNION ALL SELECT nombre,domicilio FROM pacientes ORDER BY nombre;
/*7- Agregue una columna extra a la consulta con el encabezado "condicion" en la que aparezca el literal "médico" o "paciente" según si la persona es uno u otro (9 registros)*/
SELECT nombre,domicilio,'Medico' as Condicion FROM medicos UNION ALL SELECT nombre,domicilio,'Paciente' as Condicion FROM pacientes ORDER BY nombre;
/*8- La clínica necesita el nombre y domicilio de los pacientes que también son médicos para enviarles una tarjeta de descuento para ciertas prácticas. Emplee el operador "intersect" para obtener dicha información de ambas tablas*/
SELECT nombre,domicilio FROM medicos INTERSECT SELECT nombre,domicilio FROM pacientes;
/*9- La clínica necesita los nombres de los pacientes que no son médicos. Realice una operación de resta.*/
SELECT nombre,domicilio FROM pacientes MINUS SELECT nombre, domicilio FROM medicos;
/*10- Se necesitan los registros que no coinciden en ambas tablas. Realice la operación necesaria.*/
(SELECT nombre,domicilio FROM medicos UNION SELECT nombre,domicilio FROM pacientes)
minus
(SELECT nombre,domicilio FROM medicos INTERSECT SELECT nombre,domicilio FROM pacientes);
SELECT rownum AS orden, nombre, especialidad FROM medicos WHERE ROWNUM <=3 ORDER BY especialidad;
SELECT rownum as ename,sal from (select ename,sal from scott.emp order by sal) where rownum <=5;
select e.ename as empleado, j.ename as jefe from scott.emp e join scott.emp j on (e.mgr= j.empno);
select ename from scott.emp
start with ename='CLARK'
connect by prior mgr= empno;
select ename from scott.emp
start with ename='CLARK'
connect by mgr= prior empno;
select level, ename from scott.emp
where ename!='CLARK'
start with ename='KING'
connect by mgr= PRIOR empno;
select level, ename from scott.emp
where ename!='CLARK'
start with ename='KING'
connect by mgr= PRIOR empno and ename!='CLARK';
//Definir relaci�n empleados y jefes
SELECT EMPNO,ENAME,MGR from scott.emp
CONNECT BY PRIOR empno = mgr;
//definir relaci�n empleados y jefes usando la columna level
//para distinguir filas padres e hijas
SELECT EMPNO,ENAME,MGR,LEVEL from scott.emp
CONNECT BY PRIOR empno = mgr;
//a�adimos la clausula start with para especificar una fila raiz de la jerarquia, en nuestro... 
//el jefe del dpt 20 (JONES) y una ordenaci�n mediante la clausula ORDER BY usando
//la palabra SIBLINGS para mantener el orden de la jerarquia
SELECT EMPNO,ENAME,MGR,LEVEL from scott.emp
START WITH empno=7566
CONNECT BY PRIOR empno = mgr
order by ename;
//suma de salarios agrupada por departamento y trabajo
SELECT deptno, job, sum(sal) from scott.emp
group by deptno, job
order by deptno, job;
//suma de los totales por departamento y por trabajo, pero por separado
SELECT deptno, job, sum(sal) from scott.emp
group by grouping sets ((deptno), (job));
//suma de los totales por departamento y por trabajo, indicando el total por departamento
//al cambiar el mismo y finalmente indicar el total de todos los departamentos
SELECT deptno, job, sum(sal) from scott.emp
group by rollup (deptno, job);
//suma de los totales por departamento y por trabajo, que incluya el total 'por departamento',
//el total por puesto y el total general
SELECT deptno, job, sum(sal) from scott.emp
group by cube (deptno, job)
order by grouping_id(deptno,job);