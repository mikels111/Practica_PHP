-- Crear tabla
/*
tinying(num caractes)-->entero(max 255)
int(num caracteres)-->entero(max 255)
integer(num caracteres)-->entero
varchar(num caracteres) -->string (max 255)
char(num caracteres) -->string
float(num caracteres, num decimales)-->decimal
date -->fecha string
time
timestamp

--strings más grandes
TEXT 65535 caracteres
MEDIUMTEXT 16 millones
LONGTEXT 4 billones de caracteres

--enteros mas grandes
MEDIUMINT
BIGINT
*/
CREATE TABLE USUARIO(
id  int(11) NOT NULL AUTO_INCREMENT,
nombre  varchar(100) NOT NULL ,
apellidos varchar(255) NULL,
email   varchar(100) DEFAULT 'hola mundo',
password varchar(255)
);