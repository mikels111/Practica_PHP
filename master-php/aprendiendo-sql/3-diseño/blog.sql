CREATE TABLE usuarios (
  id int(255) AUTO_INCREMENT,
  nombre VARCHAR(100) NOT NULL,
  apellidos VARCHAR (100) NOT NULL,
  email VARCHAR (100) NOT NULL,
  password VARCHAR(100) NOT NULL,
  fecha_registro DATE NOT NULL,
  CONSTRAINT pk_usuarios PRIMARY KEY(id),
  CONSTRAINT uq_email UNIQUE (email)
) ENGINE = InnoDb;
CREATE TABLE categorias (
  id int(255) AUTO_INCREMENT,
  nombre VARCHAR(100) NOT NULL,
  CONSTRAINT pk_categorias PRIMARY KEY(id)
) ENGINE = InnoDb;
CREATE TABLE entradas (
  id int(255) AUTO_INCREMENT,
  usuario_id int(255) NOT NULL,
  categoria_id int (255) NOT NULL,
  titulo VARCHAR (100) NOT NULL,
  descripcion VARCHAR(200) NOT NULL,
  fecha DATE NOT NULL,
  CONSTRAINT pk_entradas PRIMARY KEY(id),
  CONSTRAINT fk_entradas_usuarios FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
  CONSTRAINT fk_entradas_categorias FOREIGN KEY(categoria_id) REFERENCES categorias(id) ON DELETE CASCADE --ON UPDATE CASCADE | ON DELETE SET DEFAULT | ON DELETE SET NULL | ON DELETE NO ACTION <-- por defecto
) ENGINE = InnoDb;