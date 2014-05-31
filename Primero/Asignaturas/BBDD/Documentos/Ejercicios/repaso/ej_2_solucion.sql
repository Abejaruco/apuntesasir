/*Crear las tablas*/
DROP TABLE proveedores;
CREATE TABLE proveedores 
	(codigo varchar2(20), nombre varchar2(20), categoria varchar2(20), cidudad varchar2(20),
	CONSTRAINT pk_proveedores PRIMARY KEY (codigo));
DROP TABLE componentes;
CREATE TABLE componentes
	(codigo varchar2(20), nombre varchar2(20), color varchar2(20), peso varchar2(20), ciudad varchar2(20),
		CONSTRAINT pk_componentes PRIMARY KEY (codigo));
DROP TABLE articulos;
CREATE TABLE articulos 
	(codigo varchar2(20), nombre varchar2(20), ciudad varchar2(20),
	CONSTRAINT pk_articulos PRIMARY KEY (codigo));
DROP TABLE envia;
CREATE TABLE envia 
	(codigo_componente varchar2(20), codigo_proveedor varchar2(20),
	CONSTRAINT pk_envia PRIMARY KEY (codigo_componente, codigo_proveedor),
	CONSTRAINT fk_envia_componente FOREIGN KEY (codigo_componente) REFERENCES componentes(codigo),
	CONSTRAINT fk_envia_proveedor FOREIGN KEY (codigo_proveedor) REFERENCES proveedores(codigo));
DROP TABLE forma_parte;
CREATE TABLE forma_parte 
	(codigo_componente varchar2(20), codigo_articulo varchar2(20),
	CONSTRAINT pk_forma_parte PRIMARY KEY (codigo_componente, codigo_articulo),
	CONSTRAINT fk_forma_parte_componentes FOREIGN KEY (codigo_componente) REFERENCES componentes(codigo),
	CONSTRAINT fk_forma_parte_articulos FOREIGN KEY (codigo_articulo) REFERENCES articulos(codigo));
