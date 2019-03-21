/*Lisieux Serrano A01207648
laboratorio 15 */

select * from materiales
/* para mostrar el contenido de la tabla Materiales */

select * from materiales 
where clave=1000
/* para mostrar el contenido de la tabla Materiales bajo la condicion de solo aquellos productos cuya clave sea igual a 1000 */

select clave,rfc,fecha from entregan
/* para mostrar las columnas clave, rfc y fecha de la tabla Entregan*/

select * from materiales,entregan 
where materiales.clave = entregan.clave 
/* join natural de la tabla Materiales con la tabla Entregan mediante las llaves clave con las que ambas tablas cuentan */

select * from entregan,proyectos 
where entregan.numero < = proyectos.numero
/* repeticiones en renglones con uniones bajo la condicion de que el numero de entregan debe ser igual o menor al de proyecto */

(select * from entregan where clave=1400) 
union 
(select * from entregan where clave=1300)
/* union de una consulta junto con otra: entraga los resultados de ambas consultas */

select * from entregan
where clave=1300 OR clave=1400
/* con que se cumpla una de las condiciones es suficiente para que despliegue el renglon */

(select clave from entregan where numero=5001) 
intersect 
(select clave from entregan where numero=5018)
/* devuelve el resultado o coincidencias que se encuentran entre las dos consultas*/

SELECT * FROM entregan 
WHERE clave NOT IN (SELECT clave FROM entregan WHERE clave=1000 or clave=1010)
/* devuelve toda consulta de la tabla entrega que no aparezca en la subconsulta indicada */

select * from entregan,materiaLes
/* producto cruz entre las tablas entregan y materiales */

SELECT distinct descripcion FROM entregan,materiales WHERE materiales.clave=entregan.clave AND '01-JAN-2000'<= fecha AND fecha <='31-DEC-2000'
/* consulta donde se pide que no se repitan las tuplas. Join natural por medio de las llaves clave de las tablas Entregan y Materiales donde las fechas se encuentren dentro del año 2000 */

SELECT P.numero, P.denominacion, E.fecha, E.cantidad
FROM Proyectos P, Entregan E
WHERE P.numero = E.numero
ORDER BY P.numero, E.fecha DESC
/* presentacion de las columnas numero, denominacion, fecha y cantidad mediante el join natural hecho por la llave numero de las tablas Entregan y Proyectos donde el ordenamiento de descendente se da por medio de las columnas numero y fecha*/

SELECT * FROM Materiales where Descripcion LIKE 'Si%'
/* permite que solo se busque la ocurrencia dentro del string, con que cuente con los caracteres anteriores al signo % */
SELECT * FROM Materiales where Descripcion LIKE 'Sillar rosa'
/*  sin el signo % es necesario que el string sea identico al patron a buscar*/

DECLARE @foo varchar(40); 
DECLARE @bar varchar(40); 
SET @foo = '¿Que resultado'; 
SET @bar = ' ¿¿¿??? ' 
SET @foo += ' obtienes?'; 
PRINT @foo + @bar; 
/* Declare crea el espacio de memoria para la variable especifica
	Set asigna el valor a la variable
	Print imprime los valores que marquemos */

SELECT RFC FROM Entregan WHERE RFC LIKE '[A-D]%'; 
/* presentacion de las tuplas de rfc de la tabla entregan donde se inicie ya sea con A, B, C o D */

SELECT RFC FROM Entregan WHERE RFC LIKE '[^A]%'; 
/* presentacion de las tuplas de rfc de la tabla entregan donde no comiencen con la letra A */

SELECT Numero FROM Entregan WHERE Numero LIKE '___6';
/* permite seleccionar todos los numeros de la tabla entrega que cuenten con un seis en la 4ta posicion numerica */

set dateformat dmy
SELECT Clave,RFC,Numero,Fecha,Cantidad 
FROM Entregan 
WHERE Fecha Between '01/01/2000' and '31/12/2000';
/* columnas clave, rfc, numero, fecha y cantidad de la tabla entregan con fecha del 2000 */



/* Elaboracion de consultas y modificaciones en tablas*/

--¿Cómo filtrarías rangos de fechas? 
SELECT RFC, Cantidad, Fecha, Numero 
FROM [Entregan]
WHERE [Numero] Between 5000 and 5010 AND 
[RFC] not in ( SELECT [RFC] 
FROM [Proveedores] 
WHERE RazonSocial LIKE 'La%' and [Entregan].[RFC] = [Proveedores].[RFC] ) 

/*
¿Qué hace la consulta?
	la columna de rfc, cantidad, fecha y numero para todas las tuplas cuyo Numero se encuentre entre 5000 y 5010
	y que su rfc no aparezca en la subconsulta
¿Qué función tiene el paréntesis ( ) después de EXISTS? 
indica que una subconsulta debe ser verdadera para que se realice la busqueda
*/

--¿Qué hace la siguiente sentencia?
SELECT TOP 2 * FROM Proyectos 
-- las primeras dos de arriba de la tabla

--¿Qué sucede con la siguiente consulta? 
SELECT TOP 7 * FROM Proyectos 
-- las primeras 7 de la tabla

ALTER TABLE materiales ADD PorcentajeImpuesto NUMERIC(6,2); 

UPDATE materiales SET PorcentajeImpuesto = 2*clave/1000; 

SELECT (((M.Clave*E.Cantidad)*M.PorcentajeImpuesto/100)+(M.Clave*E.Cantidad)) as 'ImporteTotal'
FROM Materiales M, Entregan E
WHERE M.clave=E.clave

CREATE VIEW importefecha 
AS
SELECT (((M.Clave*E.Cantidad)*M.PorcentajeImpuesto/100)+(M.Clave*E.Cantidad)) as 'ImporteTotal'
FROM Materiales M, Entregan E
WHERE M.clave=E.clave;

SELECT * FROM importefecha

CREATE VIEW entreganla
AS
SELECT RFC,Cantidad, Fecha,Numero
FROM [Entregan]
WHERE [Numero] Between 5000 and 5010 AND 
[RFC] not in ( SELECT [RFC] 
FROM [Proveedores] 
WHERE RazonSocial LIKE 'La%' and [Entregan].[RFC] = [Proveedores].[RFC] )

SELECT * FROM entreganla

set dateformat dmy
CREATE VIEW entregas2000
AS
SELECT Clave,RFC,Numero,Fecha,Cantidad 
FROM Entregan 
WHERE Fecha Between '01/01/2000' and '31/12/2000';

set dateformat dmy
SELECT * FROM entregas2000

CREATE VIEW clavenot1000
AS
SELECT * FROM entregan 
WHERE clave NOT IN (SELECT clave FROM entregan WHERE clave=1000);

SELECT * FROM clavenot1000

CREATE VIEW clav1450y1300
AS
(select * from entregan where clave=1450);

SELECT * FROM unionclaves1450y1300

SELECT * FROM Proyectos

SELECT M.clave,M.descripcion
FROM Materiales M, Entregan E, Proyectos P
WHERE E.Clave=M.Clave AND P.numero=E.numero AND denominacion='Mexico sin ti no estamos completos'

SELECT M.clave, M.descripcion
FROM Materiales M, Entregan E, Proveedores P
WHERE E.Clave=M.Clave AND P.rfc=E.rfc AND razonsocial='Acme tools'

set dateformat dmy
SELECT E.rfc, AVG(E.cantidad) as 'Cant'
FROM Proveedores P, Entregan E
WHERE E.rfc=P.rfc AND E.fecha>='01/01/2000' AND E.fecha<='31/12/2000'
GROUP BY E.rfc
HAVING AVG(E.cantidad)>=300

set dateformat dmy
SELECT M.descripcion,SUM(E.cantidad) as 'Total'
FROM Materiales M, Entregan E
WHERE E.clave=M.clave AND E.fecha>='01/01/2000' AND E.fecha<='31/12/2000'
GROUP BY E.clave, M.descripcion

set dateformat dmy
SELECT TOP 1 E.clave,SUM(E.cantidad) as 'Total'
FROM Materiales M, Entregan E
WHERE E.clave=M.clave AND E.fecha>='01/01/2001' AND E.fecha<='31/12/2001'
GROUP BY E.clave
ORDER BY SUM(E.cantidad) DESC

SELECT * FROM Materiales WHERE descripcion LIKE '%ub%'

SELECT P.denominacion, sum((((M.Costo*E.Cantidad)*M.PorcentajeImpuesto/100)+(M.Costo*E.Cantidad))) as 'ImporteTotal'
FROM Proyectos P, Entregan E, Materiales M
WHERE P.numero=E.numero AND E.clave=M.clave
GROUP BY denominacion

CREATE VIEW tablageneral
AS
SELECT O.denominacion, E.rfc, P.razonsocial
FROM Proyectos O, Entregan E, Proveedores P
WHERE O.numero=E.numero AND P.rfc=E.rfc

CREATE VIEW televisa2 AS
SELECT * FROM tablageneral
WHERE denominacion='Televisa en acción'

SELECT rfc,denominacion FROM televisa2
WHERE televisa2.rfc NOT IN(SELECT rfc FROM tablageneral
WHERE denominacion='Educando en Coahuila')
GROUP BY rfc,denominacion

SELECT m.costo, m.Descripcion
FROM Proyectos O, Entregan E, Proveedores P, Materiales M
WHERE O.numero=E.numero AND P.rfc=E.rfc AND M.clave=E.clave
AND denominacion='Televisa en acción'
AND E.RFC IN(SELECT e.rfc FROM Proyectos O, Entregan E, Proveedores P, Materiales M
WHERE O.numero=E.numero AND P.rfc=E.rfc AND M.clave=E.clave 
AND denominacion='Educando en Coahuila')
GROUP BY e.rfc, p.razonsocial, m.descripcion, m.costo

CREATE VIEW entregasproyectos2 AS
SELECT M.descripcion, e.cantidad, O.denominacion, 
SUM((((M.Clave*E.Cantidad)*M.PorcentajeImpuesto/100)+(M.Clave*E.Cantidad))) as 'Costo total'
FROM Proyectos O, Entregan E, Proveedores P, Materiales M
WHERE O.numero=E.numero AND P.rfc=E.rfc AND M.clave=E.clave
GROUP BY M.descripcion, e.cantidad, O.denominacion

SELECT denominacion, descripcion, count(descripcion) as 'Veces Entregadas', SUM([Costo total]) as 'Costo Total'
FROM entregasproyectos2 
GROUP BY descripcion,denominacion

