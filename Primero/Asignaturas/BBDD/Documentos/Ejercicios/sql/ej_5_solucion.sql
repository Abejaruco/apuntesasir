/*crea una tabla con una restricción que consiste en que un campo es la 
clave primaria*/
create table cliente(CODIGO number(5) not null, NOMBRE_CL varchar2(30),
		CONSTRAINT 	PK_cliente PRIMARY KEY (CODIGO));
