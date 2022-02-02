-- Inserts para categorias
INSERT INTO categorias VALUES(null,'Acción')
INSERT INTO categorias VALUES(null,'Comedia')
INSERT INTO categorias VALUES(null,'Drama')

-- Inserts para entradas

-- USUARIO 1
INSERT INTO entradas VALUES(null,1,1,'Terminator','Película de los 80',CURDATE());
INSERT INTO entradas VALUES(null,1,3,'Erase una vez en Ameriaca','Película de los 80',CURDATE());
INSERT INTO entradas VALUES(null,1,2,'Barton Fink','Película de los 90', CURDATE());

-- USUARIO 2
INSERT INTO entradas VALUES(null,2,2,'8 1/2','Película de los 60',CURDATE());

INSERT INTO entradas VALUES(null,2,2,'Los Pajaros','Película de los 60',CURDATE());
INSERT INTO entradas VALUES(null,2,2,'Serpico','Película de los 70', CURDATE());

-- USUARIO 3
INSERT INTO entradas VALUES(null,3,1,'Regreso Al Futuro','Película de los 80',CURDATE());
INSERT INTO entradas VALUES(null,3,1,'E.T El Extraterrestre','Película de los 80',CURDATE());
INSERT INTO entradas VALUES(null,3,2,'Miedo Y Asco En Las Vegas','Película de los 90', CURDATE());