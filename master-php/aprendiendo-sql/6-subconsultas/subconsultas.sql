SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas); --Que el m ismo id esté en la tabla de entradas

-- Usuarios que tengan alguna entrada que en su titulo hable de una peli en concreto
SELECT id,nombre, apellidos FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas WHERE descripcion LIKE '%80%');

--Mostrar todas las entradas de la categoria acción utilizando su nombre
SELECT id, usuario_id,titulo FROM entradas WHERE categoria_id IN (SELECT id FROM categorias WHERE nombre='Acción');

--Mostrar las categorias con mas de 3 entradas
SELECT nombre FROM categorias WHERE id IN (SELECT categoria_id FROM entradas group by categoria_id HAVING count(categoria_id)>3);

--Mostrar los usuarios que crearon una entrada un martes
SELECT nombre FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas WHERE DAYNAME(fecha)='Tuesday');

--Mostrar el nombre del usuario que tenga más entradas

SELECT nombre FROM usuarios WHERE id = (SELECT usuario_id FROM entradas GROUP BY usuario_id ORDER BY count(id) DESC LIMIT 1);    

-- Mostrar las categorias sin entradas
SELECT nombre FROM categorias WHERE id NOT IN (SELECT categoria_id FROM entradas GROUP BY categoria_id);
