/*Empleamos una subconsulta correlacionada con un operador "exists" en la cláusula "where" para devolver la lista de clientes que compraron el artículo "lapiz":*/
SELECT f.cliente FROM facturas f WHERE EXISTS (SELECT d.numerofactura FROM detalles d 
	WHERE d.numerofactura = f.numero AND articulo='lapiz');
SELECT f.cliente FROM facturas f, detalles d 
	WHERE f.numero = d.numerofactura AND d.articulo='lapiz';
/*Buscamos los clientes que NO han comprado el artículo "lapiz":*/
