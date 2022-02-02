/*
Vistas: las podemos definir como una constante almacenada en la base de datos que se utiliiza como una tabla
virtual. No almacena datos si no que utiliza asociaciones y los datos originales de las tablas, de forma que
siempre se mantiene almacenada
*/
CREATE VIEW entradas__nombres AS
SELECT e.titulo, u.nombre, c.nombre as 'Categoria'
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id=u.id
INNER JOIN categorias c ON e.categoria_id=c.id;

--Eliminar vistas
DROP VIEW entradas__nombres;