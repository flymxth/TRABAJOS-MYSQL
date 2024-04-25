
CREATE VIEW vwNum3 AS

SELECT p.ProductID, p.ProductName, p.SupplierID, p.UnitPrice, c.CategoryID, c.CategoryName,
s.CompanyName 
FROM Products p JOIN Categories c ON p.CategoryID = c.CategoryID
JOIN Suppliers s ON p.SupplierID = s.SupplierID;

SELECT * FROM vwNum3;

CREATE VIEW vwNum4 AS

	SELECT c.CustomerID, c.CompanyName, c.ContactName, p.ProductName, o.OrderDate
	FROM Customers c JOIN Products p ON c.CustomerID = p.ProductID
	JOIN Orders o ON o.OrderID = o.OrderDate
	WHERE ProductName = 'Grains' AND ProductName = 'Cereals'
	AND OrderDate BETWEEN '1997-05-01' AND '1997-05-10';

SELECT * FROM vwNum4;

	CREATE VIEW vwNum5 AS
	SELECT o.OrderID, o.OrderDate, e.FirstName, e.LastName, c.ContactName, c.Country
	FROM Orders o JOIN Employees e ON o.EmployeeID = e.EmployeeID
	JOIN Customers c ON o.CustomerID = c.CustomerID
	WHERE c.Country IN ('Mexico', 'USA', 'Canada');

SELECT * FROM vwNum5;

CREATE VIEW vwNum6 AS

	SELECT p.ProductID, p.ProductName, p.UnitPrice, c.CompanyName, c.Country
	FROM Products p JOIN Customers c ON p.ProductID = c.CustomerID
	WHERE c.Country IN ('España', 'Italia') AND UnitPrice > 20;
    
SELECT * FROM vwNum6;

CREATE VIEW vwNum7 AS
	SELECT c.CustomerID, c.ContactName, c.Fax, e.Country, e.City
	FROM Customers c JOIN Employees e ON c.CustomerID = e.EmployeeID
	WHERE e.Country IN ('Mexico','Brasil') AND c.Fax IS NULL;
SELECT * FROM vwNum7;

