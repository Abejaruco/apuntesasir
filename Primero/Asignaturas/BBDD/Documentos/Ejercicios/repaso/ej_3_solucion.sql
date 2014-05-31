/*
Crear la siguientes tablas
Proveedores
CodP: varchar2(2) Primary key
PNombre: varchar2(20)
Categoria: varchar2(2)
Ciudad: varchar2(20)
Componentes
CodC: varchar2(2) Primary key
CNombre varchar2(20)
Color: varchar2(10)
Peso: varchar2(2)
Ciudad: varchar2(20)
Articulos
CodA: varchar2(2) Primary key
ANombre: varchar2(20)
Ciudad: varchar2(20)
Envios
CodP: varchar2(2) Primary key
CodC: varchar2(20) Primary key
CodC: varchar2(2) Primary key
Cantidad: Number(4)
*/
drop table proveedores;

create table proveedores(CodP varchar2(2) Primary key,
PNombre varchar2(20),Categoria varchar2(2),
Ciudad varchar2(20));

drop table componentes;

create table componentes(CodC varchar2(2) Primary key,
CNombre varchar2(20),Color varchar2(10),
Peso varchar2(2),Ciudad varchar2(20));

drop table articulos;


create table articulos(CodA varchar2(2) Primary key,
ANombre varchar2(20),Ciudad varchar2(20));

drop table envios;

create table envios(CodP varchar2(2),CodC varchar2(20),
CodA varchar2(2),Cantidad Number(4),
constraint pk_envios primary key(codP,CodC,CodA),
constraint fk_envio_prov foreign key (codp) 
           references proveedores(codp),
constraint fk_envio_comp foreign key (codc) 
           references componentes(codc),
constraint fk_envio_art foreign key (coda) 
           references articulos(coda));
/*
Insertar los siguientes datos
Proveedores
CodP
PNombre
Categoria
Ciudad
P1
CARLOS
20
SEVILLA
P2
JUAN
10
MADRID
P3
JOSE
30
SEVILLA
P4
INMA
20
SEVILLA
P5
EVA
30
CACERES
*/
insert into proveedores values('P1','CARLOS','20','SEVILLA');
insert into proveedores values('P2','JUAN','10','MADRID');
insert into proveedores values('P3','JOSE','30','SEVILLA');
insert into proveedores values('P4','INMA','20','SEVILLA');
insert into proveedores values('P5','EVA','30','CACERES');
/*
Componentes
CodC
CNombre
Color 
Peso
Ciudad
C1
X3A
ROJO
12
SEVILLA
C2
B85
VERDE
17
MADRID
C3
C4B
AZUL
17
MALAGA
C4
C4B
ROJO
14
SEVILLA
C5
VT8
AZUL
12
MADRID
C6
C30
ROJO
19
SEVILLA
*/
insert into compnentes values('C1','X3A','ROJO','12','SEVILLA');
insert into compnentes values('C2','B85','VERDE','17','MADRID');
insert into compnentes values('C3','C4B','AZUL','17','MALAGA');
insert into compnentes values('C4','C4B','ROJO','14','SEVILLA');
insert into compnentes values('C5','VT8','AZUL','12','MADRID');
insert into compnentes values('C6','C30','ROJO','19','SEVILLA');
/*
Artculos
CodA
ANombre
Ciudad
T1
CLASIFICADORA
MADRID
T2
PERFORADORA
MALAGA
T3
LECTORA
CACERES
T4
CONSOLA
CACERES
T5
MEZCLADORA
SEVILLA
T6
TERMINAL
BARCELONA
T7
CINTA
SEVILLA
*/
insert into articulos values('CodA','ANombre','Ciudad');
insert into articulos values('T1','CLASIFICADORA','MADRID');
insert into articulos values('T2','PERFORADORA','MALAGA');
insert into articulos values('T3','LECTORA','CACERES');
insert into articulos values('T4','CONSOLA','CACERES');
insert into articulos values('T5','MEZCLADORA','SEVILLA');
insert into articulos values('T6','TERMINAL','BARCELONA');
insert into articulos values('T7','CINTA','SEVILLA');
/*
Envios
CodP
CodC
CodA
Cantidad
P1
C1
T1
200
P1
C1
T4
700
P2
C3
T1
400
P2
C3
T2
200
P2
C3
T3
200
P2
C3
T4
500
P2
C3
T5
600
P2
C3
T6
400
P2
C3
T7
800
P2
C5
T2
100
P3
C3
T1
200
P3
C4
T2
500
P4
C6
T3
300
P4
C6
T7
300
P5
C2
T2
200
P5
C2
T4
100
P5
C5
T4
500
P5
C5
T7
100
P5
C6
T2
200
P5
C1
T4
100
P5
C3
T4
200
P5
C4
T4
800
P5
C5
T5
400
P5
C6
T4
500
*/
insert into envios values('P1','C1','T1',200);
insert into envios values('P1','C1','T4',700);
insert into envios values('P2','C3','T1',400);
insert into envios values('P2','C3','T2',200);
insert into envios values('P2','C3','T3',200);
insert into envios values('P2','C3','T4',500);
insert into envios values('P2','C3','T5',600);
insert into envios values('P2','C3','T6',400);
insert into envios values('P2','C3','T7',800);
insert into envios values('P2','C5','T2',100);
insert into envios values('P3','C3','T1',200);
insert into envios values('P3','C4','T2',500);
insert into envios values('P4','C6','T3',300);
insert into envios values('P4','C6','T7',300);
insert into envios values('P5','C2','T2',200);
insert into envios values('P5','C2','T4',100);
insert into envios values('P5','C5','T4',500);
insert into envios values('P5','C5','T7',100);
insert into envios values('P5','C6','T2',200);
insert into envios values('P5','C1','T4',100);
insert into envios values('P5','C3','T4',200);
insert into envios values('P5','C4','T4',800);
insert into envios values('P5','C5','T5',400);
insert into envios values('P5','C6','T4',500);
