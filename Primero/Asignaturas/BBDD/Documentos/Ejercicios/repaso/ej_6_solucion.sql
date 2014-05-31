create table emple(
   emp_no INTEGER PRIMARY KEY,
  apellido VARCHAR(50) NOT NULL,
  oficio VARCHAR(30),
  dir INTEGER, 
  fecha_alt DATE, 
  salario INTEGER,
  comision INTEGER,
  dept_no INTEGER
);
INSERT INTO emple VALUES (7369,'SÁNCHEZ', 'EMPLEADO', 7902, '17/12/1990', 1040, NULL, 20);
INSERT INTO emple VALUES (7499,'ARROYO', 'VENDEDOR', 7698, '20/02/1990', 1500, 390, 30);
INSERT INTO emple VALUES (7521,'SALA', 'VENDEDOR', 7698, '22/02/1991', 1625, 650, 30);
INSERT INTO emple VALUES (7566,'JIMÉNEZ', 'DIRECTOR', 7839, '02/04/1991', 2900, NULL, 20);
INSERT INTO emple VALUES (7654,'MARTÍN', 'VENDEDOR', 7698, '29/09/1991', 1600, 1020, 30);
INSERT INTO emple VALUES (7698,'NEGRO', 'DIRECTOR', 7839, '01/05/1991', 3005, NULL, 30);
INSERT INTO emple VALUES (7782,'CEREZO', 'DIRECTOR', 7839, '09/06/1991', 2885, NULL, 10);
INSERT INTO emple VALUES (7788,'GIL', 'ANALISTA', 7566, '09/11/1991', 3000, NULL, 20);
INSERT INTO emple VALUES (7839,'REY', 'PRESIDENTE', NULL, '17/11/1991', 4100, NULL, 10);
INSERT INTO emple VALUES (7844,'TOVAR', 'VENDEDOR', 7698, '08/09/1991', 1350, 0, 30);
INSERT INTO emple VALUES (7876,'ALONSO', 'EMPLEADO', 7788, '23/09/1991', 1430, NULL, 20);
INSERT INTO emple VALUES (7900,'JIMENO', 'EMPLEADO', 7698, '03/12/1991', 1335, NULL, 30);
INSERT INTO emple VALUES (7902,'FERNÁNDEZ','ANALISTA', 7566, '03/12/1991', 3000, NULL, 20);
INSERT INTO emple VALUES (7934,'MUÑOZ', 'EMPLEADO', 7782, '23/01/1992', 1690, NULL, 10);

create table depart(
  dept_no INTEGER,
  dnombre VARCHAR(30),
  loc VARCHAR(30)
);
INSERT INTO depart VALUES (10, 'CONTABILIDAD', 'SEVILLA');
INSERT INTO depart VALUES (20, 'INVESTIGACIÓN', 'MADRID');
INSERT INTO depart VALUES (30, 'VENTAS', 'BARCELONA');
INSERT INTO depart VALUES (40, 'PRODUCCIÓN', 'BILBAO');
/*1. -- 1) Mostrar el apellido, oficio y número de departamento de cada empleado.*/
select apellido, oficio, dept_no from emple;
/*2. -- 2) Mostrar el número, nombre y localización de cada departamento. */
select * from depart;
/*3. -- 3) Mostrar todos los datos de todos los empleados. */
SELECT * FROM emple;
/*4. -- 4) Datos de los empleados ordenados por apellidos. */
select * from emple order by apellido;
/*5. -- 5) Datos de los empleados ordenados por número de departamento descendentemente. */
select * from emple order by dept_no desc;
/*6. -- 6) Datos de los empleados ordenados por número de departamento descendentemente
y dentro de cada departamento ordenados por apellido ascendentemente. */
select * from emple order by dept_no desc, apellido asc;
/*7. -- 7) Mostrar el departamento y el apellido de los empleados ordenados por 
departamento descendentemente y por apellido ascendentemente*/
select dept_no,apellido from emple order by dept_no desc, apellido asc;
/*8. -- 8) Mostrar los datos de los empleados cuyo salario sea mayor que 2000. */
select * from emple where salario > 2000;
/*9. -- 9) Mostrar los datos de los empleados cuyo oficio sea 'ANALISTA'. */
select * from emple where oficio = 'ANALISTA';
select * from emple where oficio like 'ANALISTA';
/*10. -- 10) Seleccionar el apellido y oficio de los empleados del departamento número 20. */
select apellido,oficio from emple where dept_no = 20;
/*11. -- 11) Mostrar todos los datos de los empleados ordenados por apellido. */
select * from emple order by apellido;
/*12. -- 12) Seleccionar los empleados cuyo oficio sea 'VENDEDOR'. Mostrar los datos
ordenados por apellido. */
select * from emple WHERE oficio = 'VENDEDOR' order by apellido;
/*13. -- 13) Mostrar los empleados cuyo departamento sea 20 y cuyo oficio sea 'EMPLEADO'.
Ordenar el resultado por apellido. */
select * from emple where oficio = 'EMPLEADO';
/*14. -- 14) Mostrar los empleados que tengan un salario mayor que 2000 o que pertenezcan
al departamento número 20. */
select * from emple where salario > 2000 AND dept_no = 20;
/*15. -- 15) Ordenar los empleados por oficio, y dentro de oficio por nombre. */
select * from emple order by oficio, apellido;
/*16. -- 16) Seleccionar de la tabla EMPLE los empleados cuyo apellido empiece por 'A'. */
select * from emple where apellido like 'A%';
/*17. -- 17) Seleccionar de la tabla EMPLE los empleados cuyo apellido termine por 'Z'. */
select * from emple where like '%z';
/*18. -- 18) Seleccionar de la tabla EMPLE aquellas filas cuyo APELLIDO empiece por 
'A' y el OFICIO tenga una 'E' en cualquier posición. */
select * from emple where apellido like 'A%' and oficio like '%e%' or oficio like 'E%';
/*19. -- 19) Seleccionar los empleados cuyo salario esté entre 1000 y 2000. Utilizar
el operador BETWEEN. */

/*20. -- 20) Obtener los empleados cuyo oficio sea 'VENDEDOR' y tengan una comisión
superior a 1000. */

/*21. -- 21) Seleccionar los datos de los empleados ordenados por número de departamento,
y dentro de cada departamento ordenados por apellido. */

/*22. -- 22) Número y apellidos de los empleados cuyo apellido termine por 'Z' y tengan
un salario superior a 2000. */

/*23. -- 23) Datos de los departamentos cuya localización empiece por 'B'. */

/*24. -- 24) Datos de los empleados cuyo oficio sea 'EMPLEADO', tengan un salario
superior a 1100 y pertenezcan al departamento número 10. */

/*25. -- 25) Mostrar los apellidos de los empleados que no tengan comisión. */

/*26. -- 26) Mostrar los apellidos de los empleados que no tengan comisión y cuyo 
apellido empiece por 'J'. */

/*27. -- 27) Mostrar los apellidos de los empleados cuyo oficio sea 'VENDEDOR', 'ANALISTA'
o 'EMPLEADO'. */

/*28. -- 28) Mostrar los apellidos de los empleados cuyo oficio no sea ni 'ANALISTA'
ni 'EMPLEADO', y además tengan un salario mayor de 2000. */

/*29. -- 29) Seleccionar de la tabla EMPLE los empleados cuyo salario esté entre
2000 y 3000 (utilizar BETWEEN). */

/*30. -- 30) Seleccionar el apellido, salario y número de departamento de los
empleados cuyo salario sea mayor que 2000 en los departamentos 10 ó 30. */

/*31. -- 31) Mostrar el apellido y número de los empleados cuyo salario no esté 
entre 1000 y 2000 (utilizar BETWEEN). */

/*32. -- 32) Obtener el apellidos de todos los empleados en minúscula*/

/*33. -- 33) En una consulta concatena el apellido de cada empleado con su oficio. */

/*34. -- 34) Mostrar el apellido y la longitud del apellido (función LENGTH) de todos
los empleados, ordenados por la longitud de los apellidos de los empleados descendentemente. */

/*35. -- 35) Obtener el año de contratación de todos los empleados (función YEAR). */

/*36. -- 36) Mostrar los datos de los empleados que hayan sido contratados en el año 1992. */

/*37. -- 37) Mostrar los datos de los empleados que hayan sido contratados en el
mes de febrero de cualquier año (función MONTHNAME). */

/*38. -- 38) Para cada empleado mostrar el apellido y el mayor valor del salario y 
la comisión que tienen. */

/*39. -- 39) Mostrar los datos de los empleados cuyo apellido empiece por 'A' y hayan
sido contratados en el año 1990. */

/*40. -- 40) Mostrar los datos de los empleados del departamento 10 que no tengan comisión. */

