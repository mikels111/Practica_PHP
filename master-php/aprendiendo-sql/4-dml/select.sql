--Mostrar todas las columnas de una tabla
SELECT * FROM USUARIOS;
-- Mostrar algunas columnas de una tabla
SELECT nombre, email FROM usuarios;
--Operadores aritméticas
SELECT nombre, 8*9 as operacion FROM usuarios;
SELECT id+8,nombre FROM usuarios ORDER BY id DESC;
SELECT id%2,nombre FROM usuarios ORDER BY id DESC;

--Funciones matematicas
SELECT abs(89) FROM usuarios;
SELECT ceil(46.8) FROM usuarios;--redondear a la alta
SELECT floor(46.8) FROM usuarios;--redondear a la baja
SELECT pi() FROM usuarios;--numero pi
SELECT rand() FROM usuarios;--random
SELECT round(56.5) FROM usuarios;--redondear
SELECT round(56.5756,2) FROM usuarios;--redondear con dos decimales
SELECT sqrt(56.5) FROM usuarios;--raiz cuadrada
SELECT truncate(56.545,2) FROM usuarios;--quitar decimales y dejar 2

--Funciones para textos
SELECT upper(nombre) from usuarios;
SELECT lower(nombre) from usuarios;
SELECT CONCAT(nombre," ",apellidos) as "nombre y apellidos" from usuarios;
SELECT LENGTH(CONCAT(nombre," ",apellidos)) as "nombre y apellidos legth" from usuarios;
SELECT TRIM(CONCAT("    ",nombre," ",apellidos,"    ")) as "nombre y apellidos legth" from usuarios;

--Funciones para fechas
SELECT email, nombre,fecha_registro, CURDATE() AS 'Fecha actual' FROM usuarios;
SELECT email, nombre,DAYNAME(fecha_registro) AS 'NOMBRE DEL DÍA' FROM usuarios;
SELECT email, nombre,DAYOFMONTH(fecha_registro) AS 'DÍA DEL MÉS' FROM usuarios;
SELECT email, nombre,DAYOFWEEK(fecha_registro) AS 'DÍA DE LA SEMANA EN NUMERO' FROM usuarios;
SELECT email, nombre,DAYOFYEAR(fecha_registro) AS 'DÍA DEL AÑO EN NUMERO' FROM usuarios;
SELECT email, nombre,MONTH(fecha_registro) AS 'MES DEL AÑO' FROM usuarios;
SELECT email, nombre,YEAR(fecha_registro) AS 'AÑO' FROM usuarios;
SELECT email, nombre,DAY(fecha_registro) AS 'DÍA' FROM usuarios;
SELECT email, nombre,HOUR(CURDATE()) AS 'HORA' FROM usuarios;
SELECT email, nombre,MINUTE(fecha_registro) AS 'MINUTOS' FROM usuarios;
SELECT email, nombre,CURTIME() AS 'HORA' FROM usuarios;
SELECT email, nombre,SYSDATE() AS 'HORA' FROM usuarios;
-- Dar formato a la fecha
SELECT email, nombre,DATE_FORMAT(fecha_registro, '%d/%m/%y') AS 'HORA' FROM usuarios;--La 'Y' también puede ir en minuscula

-- Funciones generales
SELECT  nombre , ISNULL(fecha_registro) FROM usuarios;-- DEVUELVE 1 SI ES TRUE

SELECT nombre , STRCMP('HOLA','HOIA') FROM usuarios;-- DEVUELVE 1 SI ES TRUE
SELECT nombre , VERSION() FROM usuarios;-- DEVUELVE LA VERSION DE MYSQL

SELECT  USER() FROM usuarios;-- DEVUELVE EL USUARIO
SELECT  DATABASE() FROM usuarios;-- DEVUELVE LA BD
SELECT  IFNULL(fecha_registro, 'Sin registro') FROM usuarios;