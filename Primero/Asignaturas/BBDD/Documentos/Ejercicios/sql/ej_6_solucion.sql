/*Crea una tabla relacionada con otra tabla mediante el clave primaria
de esta segunda tabla. La clave primaria de la segunda tabla se frefleja
en la primera como FOREINGN_KEY. El tipo de variable de la clave primaria
de la segunda tabla tiene que ser igual que el tipo de variable de la 
FOREING KEY de la primera tabla*/
create table articulo(codigo number(5) not null, nombre_art varchar2(20), cod_cliente number(3),
		CONSTRAINT PK_articulo PRIMARY KEY (codigo),
		CONSTRAINT FK_cliente FOREIGN KEY (cod_cliente) REFERENCES cliente(codigo));
