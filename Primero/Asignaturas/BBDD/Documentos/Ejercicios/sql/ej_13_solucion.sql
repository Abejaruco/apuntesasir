/*1. Crear la tabla Multas
Tabla Multas
CodMulta Number(8) Primary key
Fecha date
Hora varchar2(4)
Lugar Varchar2(50)
Importe Number(8)*/
CREATE TABLE multas(codmulta number(8), fecha date, hora varchar2(4),lugar varchar2(50),importe number(8),
		CONSTRAINT pk_multas PRIMARY KEY (codmulta));
/*2. Modificar la tabla Multas para que el campo  importe tenga 2 decimales*/
ALTER TABLE multas MODIFY importe number(10,2);
/*3. Crear una secuencia para el campo cod_multa con valor minino 1 e incremento 1.*/
CREATE SEQUENCE sec_codmulta START WITH 1 INCREMENT BY 1;
/*4.Insertar en la tabla los siguientes registros-valores
codMulta		Fecha		Hora		Lugar		Importe	
Correlativo		02/02/2012	0912		P.KM 312	40,50
Correlativo		12/10/2012	1227		P. KM 90	125,00
Correlativo		12/03/2012	1809		P.KM 33		52,36
Correlativo		21/05/2011	2315		P.KM 77		22,22*/
INSERT INTO multas VALUES (sec_codmulta.nextval, '02/02/2012', '0912', 'P.KM 312',40.50);
INSERT INTO multas VALUES (sec_codmulta.nextval, '12/10/2012', '1224', 'P.KM 90',125.0);
INSERT INTO multas VALUES (sec_codmulta.nextval, '12/03/2012', '1809', 'P.KM 33',52.36);
INSERT INTO multas VALUES (sec_codmulta.nextval, '21/05/2011', '2315', 'P.KM 77',22.22);
/*5. Modificar la tabla Multas para que incluya el campo DescripcionAcc, que será un varchar2 de 500 posiciones*/
ALTER TABLE multas ADD descripcionAcc varchar2(500);
/*6. Introducir en el campo  DescripcionAcc de todos los registros el valor ‘Escriba descripción’*/
UPDATE multas SET descripcionacc='Escriba descripción';
/*7. Para el primer registro modificar el campo DescripcionAcc con el valor ‘ Atropello’*/
UPDATE multas SET descripcionacc='Atrapello' WHERE codmulta=1;
/*8. Modificar el campo Importe del segundo registro con el valor 250*/
UPDATE multas SET importe=250 WHERE codmulta=2;
/*9.Confirmar los cambios*/
COMMIT;
/*10. Mostrar los registros de la tabla cuyo importe sea menor que 50*/
SELECT * FROM multas WHERE importe < 50;
/*11. Mostrar los registros de la tabla cuyo importe sea menor que 50 o mayor que 100*/
SELECT * FROM multas WHERE importe < 50 OR importe > 100;
/*12. Mostrar los registros de la tabla ordenados por fecha.*/
SELECT * FROM multas ORDER BY fecha;
/*13. Eliminar los registros del año 2011*/
DELETE FROM multas where fecha BETWEEN '01/01/2011' AND '31/12/2011';
/*14. Recuperar los cambios realizados.*/
ROLLBACK;
