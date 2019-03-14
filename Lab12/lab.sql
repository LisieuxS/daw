IF EXISTS (SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'Materiales')



DROP TABLE Materiales 

CREATE TABLE Materiales 
( 
  Clave numeric(5) not null, 
  Descripcion varchar(50), 
  Costo numeric (8,2) 
) 

IF EXISTS (SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'Proveedores')
DROP TABLE Proveedores
CREATE TABLE Proveedores 
( 
  RFC char(13) not null, 
  RazonSocial varchar(50) 
) 

IF EXISTS (SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'Proyectos')
DROP TABLE Proyectos
CREATE TABLE Proyectos 
( 
  Numero numeric(5) not null, 
  Denominacion varchar(50) 
) 

IF EXISTS (SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'Entregan')
DROP TABLE Entregan
CREATE TABLE Entregan 
( 
  Clave numeric(5) not null, 
  RFC char(13) not null, 
  Numero numeric(5) not null, 
  Fecha datetime not null, 
  Cantidad numeric (8,2) 
) 

BULK INSERT a1207648.a1207648.[Materiales]
   FROM 'e:\wwwroot\a1207648\materiales.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
)

BULK INSERT a1207648.a1207648.[Proyectos]
   FROM 'e:\wwwroot\a1207648\proyectos.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
)

BULK INSERT a1207648.a1207648.[Proveedores] 
  FROM 'e:\wwwroot\a1207648\proveedores.csv' 
  WITH 
  ( 
    CODEPAGE = 'ACP', 
    FIELDTERMINATOR = ',', 
    ROWTERMINATOR = '\n' 
) 

SET DATEFORMAT dmy

BULK INSERT a1207648.a1207648.[Entregan] 
  FROM 'e:\wwwroot\a1207648\entregan.csv' 
  WITH 
  ( 
    CODEPAGE = 'ACP', 
    FIELDTERMINATOR = ',', 
    ROWTERMINATOR = '\n' 
) 

 INSERT INTO Materiales values(1000, 'xxx', 1000) 
 Delete from Materiales where Clave=1000

   SELECT * 
FROM Materiales
Order by Clave asc

 INSERT INTO entregan values (0, 'xxx', 0, '1-jan-02', 0) ; 

 SELECT *
 FROM Entregan

   Delete from Entregan where Clave = 0 

     Delete from Materiales where Clave = 1000 and Costo = 1000

ALTER TABLE Materiales add constraint llaveMateriales PRIMARY KEY (Clave) 

  ALTER TABLE entregan add constraint cfentreganclave
  foreign key (clave) references materiales(clave); 

  INSERT INTO entregan values (1000, 'AAAA800101', 5000, GETDATE(), 0); 

  Select *
  From Entregan

  ALTER TABLE entregan add constraint cantidad check (cantidad > 0) ; 