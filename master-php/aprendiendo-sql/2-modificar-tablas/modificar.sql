-- renombrar tabla
ALTER TABLE usuario RENAME TO usuario_renombrado;
-- cambiar nombre de una columna
ALTER TABLE usuario_renombrado CHANGE apellidos apellido varchar(100) null;
-- modificar columna sin cambiar nombre
ALTER TABLE usuario_renombrado MODIFY apellido char(50) NOT NULL;
-- añadir columna
ALTER TABLE usuario_renombrado ADD website varchar(100) null;
-- añadir restricción a columna
ALTER TABLE usuario_renombrado ADD CONSTRAINT uq_email UNIQUE(email);
-- borrar columna
ALTER TABLE usuario_renombrado DROP website;