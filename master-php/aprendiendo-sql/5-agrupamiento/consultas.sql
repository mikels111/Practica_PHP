-- Consultas GROUP BY
SELECT titulo,categoria_id from entradas GROUP BY categoria_id;
SELECT titulo,categoria_id,COUNT(titulo) as 'Count' from entradas GROUP BY categoria_id


-- Consultas HAVING (Consultas de agrupamiento con condición)
SELECT titulo,categoria_id,COUNT(titulo) as 'Count' from entradas GROUP BY categoria_id HAVING COUNT(titulo)>1;


-- AVG --> sacar la media
-- Count --> contar
-- max --> valor máximo del grupo
-- min --> valor mínimo del grupo
-- sum --> sumar todo el contenido del grupo

SELECT AVG(id) as 'Media de entradas' from entradas;
SELECT max(id), titulo as 'Maximo id' FROM entradas;
SELECT min(id) as 'Maximo id', titulo  FROM entradas;
SELECT sum(id) as 'Maximo id', titulo  FROM entradas;