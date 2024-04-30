CREATE USER 'luan'@'%' IDENTIFIED BY 'abc123';

GRANT SELECT ON World.Country TO 'luan'@'%';
GRANT SELECT ON World.City TO 'luan'@'%';
GRANT INSERT ON World.Country TO 'luan'@'%';
GRANT INSERT ON World.City TO 'luan'@'%';

SELECT * FROM Country WHERE Code = 'BMW';

REVOKE SELECT, INSERT ON World.Country FROM 'luan';
REVOKE SELECT, INSERT ON World.City FROM 'luan';

