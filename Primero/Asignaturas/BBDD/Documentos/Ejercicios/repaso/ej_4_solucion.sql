DROP TABLE CLIENTES;

CREATE TABLE CLIENTES(CODIGO NUMBER(5) PRIMARY KEY, NOMBRE VARCHAR2(30), DOMICILIO VARCHAR2(50),
               PROVINCIA VARCHAR2(30));

DROP TABLE PRODUCTO;

CREATE TABLE PRODUCTO(CODIGO_PRODUCTO NUMBER(5) PRIMARY KEY,NOMBRE_PRODUCTO varchar2(50));


DROP TABLE VENTAS;

CREATE TABLE VENTAS(NUMERO_FACTURA NUMBER(5), CODIGO_CLIENTE NUMBER(5),FECHA DATE,
                    CONSTRAINT PK_VENTAS PRIMARY KEY (NUMERO_FACTURA,CODIGO_CLIENTE),
		    CONSTRAINT FK_VENTAS_CLTE FOREIGN KEY 
                    (CODIGO_CLIENTE) REFERENCES CLIENTES(CODIGO));

DROP TABLE ITEM_VENTAS;
CREATE TABLE ITEM_VENTAS(NUMERO_FACTURA NUMBER(5), CODIGO_PRODUCTO NUMBER(5), CANTIDAD NUMBER(5),
             PRECIO NUMBER(5,2),
	     CONSTRAINT PK_ITEM PRIMARY KEY (NUMERO_FACTURA,CODIGO_PRODUCTO),
	     CONSTRAINT FK_ITEM_PRODUCTO FOREIGN KEY 
                      (CODIGO_PRODUCTO) REFERENCES PRODUCTO (CODIGO_PRODUCTO));

INSERT INTO CLIENTES VALUES(1,'X3 Computers','Gran Via, 12','Bizkaia');
INSERT INTO CLIENTES VALUES(2,'Media Markt','Cibeles, 3','Madrid');
INSERT INTO CLIENTES VALUES(3,'Saturn','Cibeles, 3','Madrid');
INSERT INTO CLIENTES VALUES(4,'Mamut','La Concha,33','Gipuzkoa');
INSERT INTO CLIENTES VALUES(5,'Canal PC','Ldo Poza,54','Bizkaia');

INSERT INTO PRODUCTO VALUES(1,'PenDrive 1 gb');
INSERT INTO PRODUCTO VALUES(2,'PenDrive 2 gb');
INSERT INTO PRODUCTO VALUES(3,'PenDrive 4 gb');
INSERT INTO PRODUCTO VALUES(4,'Disco duro Externo 1 T');
INSERT INTO PRODUCTO VALUES(5,'Disco duro Externo 2 T');
INSERT INTO PRODUCTO VALUES(6,'Tablet 512 ');
INSERT INTO PRODUCTO VALUES(7,'Tablet 1024');

INSERT INTO VENTAS VALUES(1,1,'02/01/13');
INSERT INTO VENTAS VALUES(2,1,'03/01/13');
INSERT INTO VENTAS VALUES(3,5,'03/01/13');
INSERT INTO VENTAS VALUES(4,4,'03/01/13');
INSERT INTO VENTAS VALUES(5,5,'04/01/13');
INSERT INTO VENTAS VALUES(6,1,'05/01/13');
INSERT INTO VENTAS VALUES(7,3,'05/01/13');
INSERT INTO VENTAS VALUES(8,2,'08/01/13');

INSERT INTO ITEM_VENTAS VALUES(1,1,2,12);
INSERT INTO ITEM_VENTAS VALUES(1,2,3,24);
INSERT INTO ITEM_VENTAS VALUES(1,3,2,48);
INSERT INTO ITEM_VENTAS VALUES(2,6,10,350);
INSERT INTO ITEM_VENTAS VALUES(2,7,12,700);
INSERT INTO ITEM_VENTAS VALUES(3,1,25,12);
INSERT INTO ITEM_VENTAS VALUES(3,4,10,99);
INSERT INTO ITEM_VENTAS VALUES(3,6,5,350);
INSERT INTO ITEM_VENTAS VALUES(3,7,4,700);
INSERT INTO ITEM_VENTAS VALUES(4,7,20,700);
INSERT INTO ITEM_VENTAS VALUES(5,5,15,149);
INSERT INTO ITEM_VENTAS VALUES(5,3,5,48);
INSERT INTO ITEM_VENTAS VALUES(6,3,40,48);
INSERT INTO ITEM_VENTAS VALUES(7,2,50,24);
INSERT INTO ITEM_VENTAS VALUES(7,5,10,149);
INSERT INTO ITEM_VENTAS VALUES(7,7,22,700);
INSERT INTO ITEM_VENTAS VALUES(7,3,13,48);
INSERT INTO ITEM_VENTAS VALUES(7,4,7,99);
INSERT INTO ITEM_VENTAS VALUES(8,2,26,24);
INSERT INTO ITEM_VENTAS VALUES(8,6,34,350);
/*
1. Obtener el nombre y el domicilio de los clientes que viven en la provincia
de Madrid*/


/*2. Obtener el nombre, domicilio y provincia de los clientes que viven en la
provincia de Madrid o de Gipuzkoa*/


/*3. Obtener el importe total en euros por factura y producto, especificando
el numero de factura, el código del producto y el importe total*/

/*4. Sobre la consulta 3, obtener solo el importe total para el producto 7*/

/*5. Sobre la consulta 3, obtener solo el importe total para las facturas cuyo código se mayor o  igual a 2 y menor o iguales a 5 y solo para el producto
codigo 7*/


/*6. Sobre la consulta 3, obtener solo el importe total para los registros cuyo
importe total sea mayor a 200*/
SELECT numero_factura,codigo_producto, (cantidad * precio) AS informe_total
	FROM item_ventas
		WHERE (cantidad * precio) > 200;
/*7. Obtener un listado de las facturas realizadas especificando numero de
factura, nombre del producto y cantidad vendida*/



/*8. Obtener un listado de las facturas realizadas cuya cantidad sea mayor o
 igual a 15 especificando numero de factura, nombre del producto y cantidad vendida*/

/*9. Obtener un listado de las facturas realizadas indicando número de
factura, nombre del cliente, nombre del producto, cantidad y precio y el
importe total*/

/*10. Obtener la cantidad de unidades máxima*/

/*11. Obtener la cantidad total de unidades vendidas del producto 7*/

/*12. Cantidad de unidades vendidas por producto, indicando la descripción
del producto, ordenado de mayor a menor por las cantidades vendidas*/

/*13. Cantidad de unidades vendidas por producto, indicando la descripción
del producto, ordenado alfabéticamente por nombre de producto para los
productos que vendieron mas de 30 unidades*/

/*14. Obtener cuantas facturas  realizo cada cliente indicando el codigo y nombre del cliente ordenado de mayor a menor*/

/*15. Promedio de unidades vendidas por producto, indicando el codigo del
producto para el cliente 1*/

/*16. Cantidad de unidades vendidas por cliente y producto, indicando el
nombre del cliente, la descripción del producto para los productos que
vendieron entre 15 y 35 unidades*/
