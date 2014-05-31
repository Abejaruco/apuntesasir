/*1) Mostrar los datos de los empleados que pertenezcan al mismo departamento que 'GIL'.*/
select * from emple where dept_no = (select dept_no from emple where apellido = 'GIL');
 /*2) Mostrar los datos de los empleados que tengan el mismo oficio que 'CEREZO'.
 El resultado debe ir ordenado por apellido.*/
 select * from emple where OFICIO = (select OFICIO from emple where apellido = 'CEREZO')
 ORDER BY apellido;
 /*3) Mostrar los empleados (nombre, oficio, salario y fecha de alta) que desempeñen
 el mismo oficio que 'JIMÉNEZ' o que tengan un salario mayor o igual que 'FERNÁNDEZ'.*/
select apellido, oficio, salario, fecha_alt from emple where oficio = 
  (select oficio from emple where apellido = 'JIMÉNEZ') or
  salario >= (select salario from emple where apellido = 'FERNÁNDEZ');
/* 4) Mostrar en pantalla el apellido, oficio y salario de los empleados del 
departamento de 'FERNÁNDEZ' que tengan su mismo salario.*/
select apellido,oficio,salario from emple where 
  dept_no = (select dept_no from emple where apellido = 'FERNÁNDEZ')
  and salario = (select salario from emple where apellido = 'FERNÁNDEZ');
/* 5) Mostrar los datos de los empleados que tengan un salario mayor que 'GIL'
y que pertenezcan al departamento número 10.*/
SELECT * FROM EMPLE WHERE salario > (SELECT SALARIO FROM EMPLE WHERE APELLIDO = 'GIL')
  AND dept_no = 10;
/* 6) Mostrar los apellidos, oficios y localizaciones de los departamentos de cada
uno de los empleados.*/
SELECT APELLIDO,OFICIO,LOC FROM emple, depart WHERE EMPLE.dept_no = DEPART.dept_no;
SELECT APELLIDO,OFICIO,LOC FROM EMPLE NATURAL JOIN DEPART;
SELECT APELLIDO,OFICIO,LOC FROM EMPLE JOIN DEPART ON (EMPLE.dept_no = DEPART.dept_no);
/* 7) Seleccionar el apellido, el oficio y la localidad de los departamentos donde 
trabajan los ANALISTAS.*/
SELECT APELLIDO, OFICIO, LOC FROM EMPLE,DEPART WHERE EMPLE.dept_no = DEPART.dept_no
AND OFICIO = 'ANALISTA';
SELECT APELLIDO,OFICIO,LOC FROM EMPLE NATURAL JOIN DEPART WHERE OFICIO = 'ANALISTA';
/* 8) Seleccionar el apellido, el oficio y salario de los empleados que trabajan en Madrid.*/
SELECT APELLIDO, OFICIO, SALARIO FROM EMPLE,DEPART WHERE EMPLE.dept_no = DEPART.dept_no
AND LOC = 'MADRID';
SELECT APELLIDO, OFICIO, SALARIO FROM EMPLE NATURAL JOIN DEPART WHERE loc = 'MADRID';
/* 9) Seleccionar el apellido, salario y localidad donde trabajan los empleados que tengan
un salario entre 2000 y 3000.*/
SELECT APELLIDO, SALARIO, LOC FROM EMPLE NATURAL JOIN DEPART 
  WHERE SALARIO BETWEEN 2000 AND 3000;
/* 10) Mostrar el apellido, salario y nombre del departamento de los empleados que tengan
el mismo oficio que 'GIL'.*/
SELECT APELLIDO, SALARIO, DNOMBRE FROM EMPLE NATURAL JOIN depart
WHERE oficio = (SELECT OFICIO FROM EMPLE WHERE APELLIDO ='GIL');
/* 11) Mostrar el apellido, salario y nombre del departamento de los empleados que tengan
el mismo oficio que 'GIL' y que no tengan comisión.*/
SELECT APELLIDO, SALARIO, comision, DNOMBRE FROM EMPLE NATURAL JOIN DEPART
  WHERE oficio = (SELECT OFICIO FROM EMPLE WHERE APELLIDO = 'GIL')
  AND comision IS NOT NULL;
/* 12) Mostrar los datos de los empleados que trabajan en el departamento de contabilidad,
ordenados por apellidos.*/
SELECT * FROM EMPLE NATURAL JOIN depart WHERE dnombre = 'CONTABILIDAD' ORDER BY APELLIDO;
/* 13) Apellido de los empleados que trabajan en Sevilla y cuyo oficio sea analista
o empleado.*/
SELECT APELLIDO FROM emple NATURAL JOIN depart WHERE LOC = 'SEVILLA' 
  AND (oficio = 'ANALISTA' OR OFICIO = 'EMPLEADO');
/* 14) Calcula el salario medio de todos los empleados.*/
SELECT ROUND(AVG(SALARIO),2) AS MEDIA FROM emple;
/* 15) ¿Cuál es el máximo salario de los empleados del departamento 10?*/
SELECT MAX(SALARIO) AS MAXIMO FROM EMPLE WHERE dept_no = 10;
/* 16) Calcula el salario mínimo de los empleados del departamento 'VENTAS'.*/
SELECT MIN (SALARIO) AS MINIMO FROM EMPLE NATURAL JOIN DEPART WHERE dnombre = 'VENTAS';
/* 17) Calcula el promedio del salario de los empleados del departamento de 'CONTABILIDAD'.*/
SELECT round(AVG(SALARIO),2) AS MEDIA FROM EMPLE NATURAL JOIN DEPART
  WHERE dnombre = 'CONTABILIDAD';
/* 18) Mostrar los datos de los empleados cuyo salario sea mayor que la media de
todos los salarios.*/
SELECT * FROM EMPLE WHERE salario > (SELECT AVG(SALARIO) FROM EMPLE);
/* 19) ¿Cuántos empleados hay en el departamento número 10?*/
SELECT COUNT(*) FROM EMPLE WHERE dept_no = 10;
/* 20) ¿Cuántos empleados hay en el departamento de 'VENTAS'?*/
SELECT COUNT(*) FROM EMPLE NATURAL JOIN DEPART WHERE dnombre = 'VENTAS';
/* 21) Calcula el número de empleados que hay que no tienen comisión.*/
SELECT COUNT(*) FROM EMPLE WHERE comision IS NULL;
/* 22) Seleccionar el apellido del empleado que tiene máximo salario.*/
SELECT APELLIDO FROM EMPLE WHERE SALARIO = (SELECT MAX(SALARIO) FROM EMPLE);
/* 23) Mostrar los apellidos del empleado que tiene el salario más bajo.*/
SELECT APELLIDO FROM EMPLE WHERE SALARIO = (SELECT MIN(SALARIO) FROM EMPLE);
/* 24) Mostrar los datos del empleado que tiene el salario más alto en el departamento
de 'VENTAS'.*/
SELECT * FROM EMPLE NATURAL JOIN depart WHERE
  SALARIO = (SELECT MAX(SALARIO) FROM EMPLE NATURAL JOIN depart WHERE dnombre = 'VENTAS')
  AND dnombre = 'VENTAS';
/* 25) A partir de la tabla EMPLE visualizar cuántos apellidos de los empleados 
empiezan por la letra 'A'.*/
SELECT APELLIDO FROM EMPLE WHERE apellido LIKE 'A%';
SELECT COUNT(APELLIDO) AS NUMERO_APELLIDOS FROM EMPLE WHERE APELLIDO LIKE 'A%';
/* 26) Dada la tabla EMPLE, obtener el sueldo medio, el número de comisiones no 
nulas, el máximo sueldo y el sueldo mínimo de los empleados del departamento 30.*/
SELECT  AVG(SALARIO) AS SUELDO_MEDIO,
        MAX(SALARIO) AS MAXIMO_SUELDO,
        MIN(SALARIO) AS MINIMO_SUELDO,
        COUNT(COMISION) AS COMISION
        FROM EMPLE WHERE dept_no = 30;
SELECT COUNT(COMISION) AS NUM_COM_NO_NULAS FROM EMPLE WHERE comision IS NOT NULL
AND dept_no = 30;


