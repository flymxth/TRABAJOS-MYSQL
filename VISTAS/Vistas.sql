-- VISTAS --


USE Nwind;
-- ELIMINAR UNA VISTA --
DROP VIEW vwCompletos;

-- USO DE LA VISTA --
CREATE VIEW vwCompletos AS
SELECT p.ProductID, p.ProductName, p.UnitPrice,
c.CategoryID, c.CategoryName, s.SupplierID,
s.CompanyName FROM Products p JOIN Categories c
ON p.CategoryID = c.CategoryID
JOIN Suppliers s
ON p.SupplierID = s.SupplierID;

SELECT * FROM vwCompletos;

-- EJERCICIO:
/*
	Crear una vista que incluya los siguientes datos:
    CLAVE DEL EMPLEADO, NOMBRE Y APELLIDOS DEL EMPLEADO
    en una sola columna, CANTIDAD DE ORDENES DEL PRIMER
    SEMESTRE DE 1997, CANTIDAD DE ORDENES DEL SEGUNDO
    SEMESTRE DE 1997.
*/

SELECT e.EmployeeID, e.LastName, e.FirstName, o.RequiredDate,

