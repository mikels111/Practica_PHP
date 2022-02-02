--Consultas multitabla. Ejemplo
SELECT e.titulo, u.nombre, c.nombre
FROM entradas e, usuarios u, categorias c
WHERE e.usuario_id=u.id and e.categoria_id=c.id;
--Inner join
    SELECT e.titulo, u.nombre, c.nombre as 'Categoria'
    FROM entradas e
    INNER JOIN usuarios u ON e.usuario_id=u.id
    INNER JOIN categorias c ON e.categoria_id=c.id;
-- Mostrar el nombre de las categorias y al lado cuantas entradas tienen
SELECT c.id,c.nombre, count(e.titulo)
FROM categorias c, entradas e
WHERE c.id = e.categoria_id
GROUP BY c.nombre;
    -- INNER JOIN 
    SELECT c.id,c.nombre, count(e.titulo)
    FROM categorias c
    INNER JOIN entradas e ON c.id=e.categoria_id
    GROUP BY c.id;
    --LEFT JOIN (Para que muestre también las 'categorias' que no tiene en 'entradas')
    SELECT c.id,c.nombre, count(e.titulo)
    FROM categorias c -- <--LEFT table
    LEFT JOIN entradas e/* <-- RIGHT Table*/ ON c.id=e.categoria_id 
    GROUP BY c.id;
    -- RIGHT JOIN
    SELECT c.id,c.nombre, count(e.titulo)
    FROM entradas e -- <--LEFT table
    RIGHT JOIN categorias c/* <-- RIGHT Table */ ON c.id=e.categoria_id 
    GROUP BY c.id;

-- Mostrar el email de los usuarios y al lado cuantas entradas tienen
SELECT u.nombre, count(e.titulo) as "Num de entradas"
FROM usuarios u, entradas e
WHERE u.id = e.usuario_id
GROUP BY u.nombre
