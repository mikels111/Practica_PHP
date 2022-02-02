--Consulta con una condición
SELECT * FROM usuarios WHERE email='admin@admin.com'

-- operadores
-- igual    =
-- entre    BETWEEN A and B
-- es nulo  IS NULL 
-- no nulo  IS NOT NULL
-- como     LIKE
-- No es como NOT LIKE 

-- Cualquier cantidad de caracter por delante y por detras--> %a%
-- Cualquier cantidad de caracter por delante --> %a; y por detras-->a%
-- Un caracter desconocido--> _
SELECT * FROM usuarios WHERE YEAR(fecha_registro) = 2019;
SELECT * FROM usuarios WHERE apellidos LIKE '%sea%' and password LIKE '%123%';


-- Usuarios cuya año de fecha_registro sea par
SELECT * FROM usuarios WHERE YEAR(fecha_registro)%2 = 0

SELECT UPPER(nombre) as 'Nombre', apellidos FROM usuarios WHERE LENGTH(nombre)>5 AND YEAR(fecha_registro) < 2021;

-- Order by
SELECT * FROM usuarios ORDER BY id DESC
-- Limit para limitar cuantos te va a mostrar
SELECT * FROM usuarios ORDER BY id DESC LIMIT 3

SELECT * FROM usuarios ORDER BY id ASC LIMIT 0,2 --Del 0 al 2