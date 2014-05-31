/*Ejercicio*/
DROP TABLE empleado;
DROP TABLE departamento;
DROP TABLE localidad;
DROP TABLE provincia;
/*Crear las siguientes tablas
Empleado:
 	CodEmp Number(5) not null  primary key
	NombreEmp Varchar2(20)
 	ApellidosEmp Varchar2(20)
	SalarioBruro Number(8,2)
   	CodDpto number(3) foreign key

Departamento
	CodDpto Number(3) not null primary key
	NombreDpto Varchar2(2) 
    	NombreResp  varchar2(20)
	
1.	Crear las siguientes tablas y  restricciones*/
create table departamento (CodDpto number(3), NombreDpto varchar2(2), NombreResp varchar2(20),
			CONSTRAINT PK_departamento PRIMARY KEY (CodDpto));
create table empleado(CodEmp number(5), NombreEmp varchar2(20),ApellidosEmp varchar2(20),
			SalarioBruto number(8,2), CodDpto number(3),
			CONSTRAINT PK_empleado PRIMARY KEY (CodEmp),
			CONSTRAINT FK_empleado FOREIGN KEY (CodDpto) REFERENCES departamento(CodDpto));
/* 2.	Modificar el tamaño del campo ApellidosEmp de la tabla Empleados,
 para que tenga el tamaño de 60 posiciones*/
ALTER TABLE empleado MODIFY ApellidosEmp varchar2(60);
/* 3.	Modificar el tamaño de campo NombreDpto de la taba Departamento 
para que tenga el tamaño de 40 posiciones*/
ALTER TABLE departamento MODIFY NombreDpto varchar2(40);
/*
4.	Crear un campo nuevo en la tabla Departamento llamado Localidad de 
tipo varchar2 y longitud 60*/
ALTER TABLE departamento ADD Localidad varchar2(60);
/*
5.	Crear un nuevo campo  en la tabla departamento llamado SedeCentral de
 tipo numérico de 1 posición, solo debe admitir los valores 1 y 0*/
ALTER TABLE departamento ADD (SedeCentral number(1),
		CONSTRAINT CK_SedeCentral CHECK (SedeCentral IN (0,1)));
/*
6.	Eliminar el campo NombreResp de la taba departamento*/
ALTER TABLE departamento DROP COLUMN NombreResp;
/*
7.	Modificar el campo Localidad de la tabla departamento , ahora debe 
llamarse CodLocalidad y debe ser numérico con longitud 3*/
ALTER TABLE departamento RENAME COLUMN Localidad TO CodLocalidad number(3);
/*
8.	Crear un nuevo campo en la tabla Empleado llamado Retencion debe ser
 un numero de 2 posiciones*/
 ALTER TABLE Empleado ADD Retencion number(2);
/*
9.	Modificar el campo Retencion de la tabla Empleado, debe ser un campo
 de tipo numérico con 2 posiciones enteras y 2 decimales.*/
 ALTER TABLE Empleado MODIFY Retencion number(4,2);
 /*
10.	Crear la tabla Localidad con los siguientes campos
a.	CodLoc Number(3) not null unique primary key
b.	NomLoc Varchar2(60) not null
c.	CodProv Number(2)
*/
CREATE TABLE Localidad (CodLoc number(3), NomLoc Varchar2(60) not null,
		CodProv number(2),
		CONSTRAINT PK_localidad PRIMARY KEY (CodLoc,codprov));
/*
11.	Crear la tabla Provincia con los siguientes campos
a.	CodProv Number(2) not null unique primary key
b.	NomProv Varchar2(60) not null*/
CREATE TABLE Provincia (CodProv number(3), NombProv varchar2(60) not null,
		CONSTRAINT PK_provincia PRIMARY KEY (CodProv));
/*
12.	Añadir el campo CodProv number(3) en la tabala Departamnetos
*/
ALTER TABLE departamento ADD CodProv number(3);
/*
13.	Establecer las claves que consideréis que faltan
*/
ALTER TABLE departamento ADD CONSTRAINT FK_codprovincia_departamento
			FOREIGN KEY (CODPROV) REFERENCES provincia(codprov);
			
ALTER TABLE departamento ADD CONSTRAINT FK_codlocalidad_departamento 
			FOREIGN KEY (codprov,codlocalidad) REFERENCES localidad(codprov,codloc);
			
ALTER TABLE localidad ADD CONSTRAINT FK_provincia_localidad 
FOREIGN KEY (codprov) REFERENCES provincia(codprov);
/*Insertar -modificar - borrar*/
/*insertar los siguientes datos
Tabla: provincia
Campos:
	CodProv: 1, 48, 20
	NombProv: Alava, Bizkaia, Gipuzkoa
*/
INSERT INTO provincia VALUES (1, 'Alava');
INSERT INTO provincia VALUES (48, 'Bizkaia');
INSERT INTO provincia VALUES (20, 'Gipuzkoa');
/*Tabla: localidad
Campos:
	codloc: 20 1 53 13 53 
	NomLoc: Bilba Gasteiz Donostia - San Sebastián Barakaldo Laukiz
	CodProv: 20 1 20 48 48
	*/
INSERT INTO localidad VALUES (20, 'Bilbao',20);
INSERT INTO localidad VALUES (1, 'Gasteiz',1);
INSERT INTO localidad VALUES (53, 'Donostia - San Sebastián',20);
INSERT INTO localidad VALUES (13, 'Barakaldo',48);
INSERT INTO localidad VALUES (53, 'Laukiz',48);
/*Tabla Departamento:
Campos:
	coddpto: 100 101 200 205 300
	nomdpto: Desarrollo, Recursos Humanos, Producción, I+D+I, Dirección
	codlocalidad: 20 13 53 53 1
	sedecentral: 1 0 0 1 1
	codprov: 20 48 48 20 1
	*/
INSERT INTO departamento VALUES (100, 'Desarrollo', 20, 1, 20);
INSERT INTO departamento VALUES (101, 'Recursos Humanos', 13, 0, 48);
INSERT INTO departamento VALUES (200, 'Producción', 53, 0, 48);
INSERT INTO departamento VALUES (205, 'I+D+I', 53, 1, 20);
INSERT INTO departamento VALUES (300, 'Dirección', 1, 1, 1);
/*Tabla Empleados:
Campos:
	CodEmp:			1001	1002	2001		2002	2003	2101		2102	3001	1101		1102
	NombreEmp:		Juan	Felipe	Maria		Iñaki	Mikel	Nerea		Antonio	Pilar	Sonia		Gorka
	ApellidosEmp:	Lopez	Garcia	Etxeberria	Gomez	Susaeta	Legorreta	Marquez	Ibarroa	Martinez	Aristondo
	SalarioBruto:	24000	21000	18000		23000	22000	36000		36000	60000	15000		15000
	CodDpto:		100		100		200			200		200		205			205		300		101			101
	Retencion:		18.00	15.37	12.03		16.33	16.12	19.00		21.00	23.00	12.50		12.50
*/
INSERT INTO empleado values (1001, 'Juan', 'Lopez', 24000, 100, 18.00);
INSERT INTO empleado values (1002, 'Felipe', 'García', 21000, 100, 15.37);
INSERT INTO empleado values (2001, 'María', 'Etxeberria', 18000, 200, 12.03);
INSERT INTO empleado values (2002, 'Iñaki', 'Gomez', 23000, 200, 16.33);
INSERT INTO empleado values (2003, 'Mikel', 'Susaeta', 22000, 200, 16.12);
INSERT INTO empleado values (2101, 'Nerea', 'Legorreta', 36000, 205, 16.12);
INSERT INTO empleado values (2102, 'Antonio', 'Marquez', 36000, 205, 19.00);
INSERT INTO empleado values (3001, 'Pilar', 'Ibarroa', 60000, 300, 21.00);
INSERT INTO empleado values (1101, 'Sonia', 'Martínez', 15000, 101, 23.00);
INSERT INTO empleado values (1102, 'Gorka', 'Aristondo', 15000, 101, 12.50);
/*1. Validar las inserciones hechas hasta ahora*/
commit;
/*2. Modificar el campo NomProv de la tabla Provincia para el código 1 debe apararecer “Araba”*/
UPDATE provincia SET nombprov='Araba' WHERE codprov=1;
/*3. Modificar el campo NomLoc de la tabla localidad para:
a. Codigo localidad 20  - “Bilbo – Bilbao”
b. Codigo Localidad 1 – “ Vitoria - Gasteiz”*/
UPDATE localidad SET nomloc='Bilbo - Bilbao' WHERE codloc=20;
UPDATE localidad SET nomloc='Vitoria - Gasteiz' WHERE codloc=1;
/*4. Modificar la Locaidad del departamento de RecursosHumanos, Tabla Departamentos, 
pasa a ser la localidad 53 de la provincia 20.*/
UPDATE departamento SET codlocalidad=53, codprov=20 WHERE nombredpto='Recursos Humanos';
/*5. Modificar el SalarioBruto de todos los empleado, añadir al salario actual un 0,75%*/
UPDATE empleado SET salariobruto=salariobruto*1.0075;
/*6. Añadir un nuevo departamento con los siguientes valores
	CodDpto		NombDpto		Codloc		Codprov		SedeCentral
	102			I+D+I			20			20			0
	*/
INSERT INTO departamento VALUES (102, 'I+D+I', 20, 0, 20);
/*7. Asignar los empleados del departamento 205  al departamento 102*/
UPDATE empleado set coddpto=102 WHERE coddpto=205;
/*Confirmar los cambios*/
commit;
/*8. Eliminar el departamento 205*/
DELETE FROM departamento WHERE coddpto=205;
/*9. Deshacer la elimnación de departamento 2005*/
rollback;
/*10. Comprobar que os cambios anteriores se han realizado en la base de datos*/
select * from departamento;
/*11. Añadir un nuevo departamento con los siguientes valores
	CodDpt	NomDpto		Codloc	CodProv	SedeCentral
	206		Comercial	53		20		0
	*/
INSERT INTO departamento VALUES (206, 'Comercial', 53, 0, 20);
/*12. Añadir los siguientes empleados
	codemp	nombreemp	apellidosemp	salariobruto	retencion	coddpto
	2201	Jon			Lopez			24000			18.00		206	
	2202	Urko		Imaz			23000			16.00		206
	*/
INSERT INTO empleado VALUES(2201, 'Jon', 'Lopez', 24000, 206, 18.00);
INSERT INTO empleado VALUES(2202, 'Urko', 'Imaz', 23000, 206, 16.00);
/*13. Añadir un campo  llamado “”Bonificacion” en la tabla Empleado Numero
 de 8 posiciones con 2 decimales*/
ALTER TABLE empleado ADD bonificacion number(8,2);
/*14. Modificar el campo Bonificacion de la tabla empleado poner 1000,50
 a aquellos empleados de departamento 2006, cuyo salario sea superior a 23000 euros*/
UPDATE empleado SET bonificacion = 1000.50 WHERE coddpto = 206 AND salariobruto > 23000;
 /*15. Modificar el campo Bonificacion de la tabla empleado poner 2000,00 a 
 aquellos empleados que ganen más de 30000 euros y no pertenezcan al departamento 
 de “Direccion”*/
 select * from departamento WHERE nombredpto = 'Dirección';
		/*Con esto vemos que el código de departamento es 300*/
 UPDATE empleado SET bonificacion = 2000.00 WHERE NOT codDpto = 300
				AND salariobruto > 3000;
 /*16. Modificar el campo Bonificacion de la tabla empleado poner 500,88 a 
 aquellos empleados que ganen menos de 20000 euros y no sean de la provincia de Bizkaia.*/
 SELECT * FROM provincia WHERE nombprov = 'Bizkaia';
		/*Así vemos que el código de Bizkaia es 48*/
 SELECT * FROM departamento WHERE codprov = 48;
		/*Así vemos que el único departamento que es de Bizkaia es Producción
		con código 200*/
UPDATE empleado SET bonificacion = 500.88 WHERE salariobruto < 20000 AND
		coddpto <> 200;
 /*17. Eliminar el departamento 206 y todos sus empleados.*/
 DELETE FROM empleado WHERE coddpto = 206;
 DELETE FROM departamento WHERE coddpto = 206;
 /*18. Confirmar los cambios*/
 COMMIT;
 /*19. Eliminar a todos Los empleados de la provincia de Bizkaia 
 que ganen entre 20000 y 25000*/
 SELECT * FROM provincia WHERE nombprov = 'Bizkaia';
		/*Así vemos que el código de Bizkaia es 48*/
 SELECT * FROM departamento WHERE codprov = 48;
		/*Así vemos que el único departamento que es de Bizkaia es Producción
		con código 200*/
DELETE FROM empleado WHERE coddpto = 200 AND salariobruto BETWEEN 20000 AND 25000;
DELETE FROM empleado WHERE coddpto = 200 AND salariobruto > 20000 AND 
				salariobruto < 25000;
 /*20. Recuperar los registros borrados.*/
ROLLBACK;
/*Comprobar los resultados*/
DESC empleado;
DESC departamento;
DESC provincia;
DESC localidad;
SELECT * FROM empleado;
SELECT * FROM departamento;
SELECT * FROM provincia;
SELECT * FROM localidad;
