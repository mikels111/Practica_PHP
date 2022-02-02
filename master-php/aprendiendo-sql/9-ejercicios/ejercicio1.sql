-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS concesionario;
USE concesionario;
CREATE TABLE IF NOT EXISTS coches(
  id INT (10) AUTO_INCREMENT NOT NULL,
  modelo VARCHAR(100) NOT NULL,
  marca VARCHAR (50),
  precio INT (20) NOT NULL,
  stock INT (255) NOT NULL,
  CONSTRAINT pk_coches PRIMARY KEY (id)
) ENGINE = InnoDB;
CREATE TABLE IF NOT EXISTS grupos(
  id INT (10) AUTO_INCREMENT NOT NULL,
  nombre VARCHAR(100) NOT NULL,
  ciudad VARCHAR (100),
  CONSTRAINT pk_grupos PRIMARY KEY (id)
) ENGINE = InnoDB;
CREATE TABLE IF NOT EXISTS vendedores(
  id INT (10) AUTO_INCREMENT NOT NULL,
  grupo_id INT (10) NOT NULL,
  jefe INT (10),
  nombre VARCHAR (100),
  apellidos VARCHAR (150),
  cargo VARCHAR (50),
  fecha_alta DATE,
  sueldo FLOAT (20, 2),
  comision FLOAT (10, 2),
  CONSTRAINT pk_vendedores PRIMARY KEY (id),
  CONSTRAINT fk_vendedor_grupo FOREIGN KEY (grupo_id) REFERENCES grupos(id),
  CONSTRAINT fk_vendedor_jefe FOREIGN KEY (jefe) REFERENCES vendedores(id)
) ENGINE = InnoDB;
CREATE TABLE IF NOT EXISTS clientes(
  id INT (10) AUTO_INCREMENT NOT NULL,
  vendedor_id INT (10),
  nombre VARCHAR (150) NOT NULL ,
  ciudad VARCHAR (100),
  gastado FLOAT (50,2),
  fecha_registro DATE,
  CONSTRAINT pk_clientes PRIMARY KEY (id),
  CONSTRAINT fk_cliente_vendedor FOREIGN KEY (vendedor_id) REFERENCES vendedores(id)
) ENGINE = InnoDB;
CREATE TABLE IF NOT EXISTS encargos(
  id INT (10) AUTO_INCREMENT NOT NULL,
  cliente_id INT (10) NOT NULL ,
  coche_id INT (10) NOT NULL ,
  cantidad int (100),
  fecha DATE,
  CONSTRAINT pk_encargos PRIMARY KEY (id),
  CONSTRAINT fk_encargo_cliente FOREIGN KEY (cliente_id) REFERENCES clientes(id),
  CONSTRAINT fk_encargo_coche FOREIGN KEY (coche_id) REFERENCES coches(id )
) ENGINE = InnoDB;

--Coches
INSERT INTO COCHES VALUES (NULL, 'Clio','Renault','5000',11);
INSERT INTO COCHES VALUES (NULL, 'Clase A','Mercedes','50000',11);
INSERT INTO COCHES VALUES (NULL, 'Spider','Ferrari','300000',11);
INSERT INTO COCHES VALUES (NULL, 'Polo','volkswagen','5000',11);

--Grupos
INSERT INTO GRUPOS VALUES (NULL,'Vendedores A','Madrid');
INSERT INTO GRUPOS VALUES (NULL,'Vendedores B','Madrid');
INSERT INTO GRUPOS VALUES (NULL,'Vendedores A','Barcelona');
INSERT INTO GRUPOS VALUES (NULL,'Vendedores B','Barcelona');
INSERT INTO GRUPOS VALUES (NULL,'Vendedores A','Sevilla');
INSERT INTO GRUPOS VALUES (NULL,'Vendedores B','Sevilla');
INSERT INTO GRUPOS VALUES (NULL,'Vendedores A','Santiago de Compostela');
INSERT INTO GRUPOS VALUES (NULL,'Vendedores B','Santiago de Compostela');
INSERT INTO GRUPOS VALUES (NULL,'Vendedores A','Bilbao');
INSERT INTO GRUPOS VALUES (NULL,'Vendedores B','Bilbao');
--Vendedores
INSERT INTO vendedores VALUES (NULL,1,null,'Antonio','Lopez','Responsable de tienda',CURDATE(),30000,4);
INSERT INTO vendedores VALUES (NULL,2,null,'María','García','Responsable de tienda',CURDATE(),30000,4);
INSERT INTO vendedores VALUES (NULL,3,null,'Juan','Lopez','Mecanico',CURDATE(),60000,4);
INSERT INTO vendedores VALUES (NULL,2,null,'Francisco','Seara','Ejecutivo de cuentas',CURDATE(),80000,4);
INSERT INTO vendedores VALUES (NULL,1,null,'Fernanda','García','Directora',CURDATE(),100000,4);


--Clientes
INSERT INTO Clientes VALUES (NULL,'Antonio','Madrid');
INSERT INTO Clientes VALUES (NULL,'Mariano','Barcelona');
INSERT INTO Clientes VALUES (NULL,'Miguel','Sevilla');
INSERT INTO Clientes VALUES (NULL,'Fernanda','Santiago de Compostela');
INSERT INTO Clientes VALUES (NULL,'Ramona','Bilbao');

--Encargos