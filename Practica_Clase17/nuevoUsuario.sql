
--1. Creamos nuevo usuario en Localhost
CREATE USER 'cursophp-ad'@'localhost' IDENTIFIED BY '';

--2. Asignar al usuario ‘cursophp-ad’ los permisos SELECT, INSERT, UPDATE, DELETE
GRANT SELECT, INSERT, UPDATE, DELETE ON lindavista.viviendas TO 'cursophp-ad'@'localhost';


--3. Verificamos en pantalla los permisos SELECT, INSERT, UPDATE, DELETE
SHOW GRANTS FOR 'cursophp-ad'@'localhost';
