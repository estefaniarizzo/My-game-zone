create database if not exists colegio;
use colegio;
create table estudiantes(
	Id_estudiante int(255) auto_increment not null primary key,
    nombre varchar(50) not null,
	apellidos varchar(50) not null,
    sexo varchar(50) not null,
    direccion varchar(50) not null,
    telefono int(10) not null,
	ciudad varchar(50) not null
)ENGINE=INNODB;

/* se va a crear a tabla par hacer la validacion del login */
USE colegio;
create table usuario(
    Id_usuario INT(255) auto_increment NOT NULL PRIMARY KEY,
    nombre_usu VARCHAR(250) NOT NULL,
    contraseña VARCHAR(50) NOT NULL,
    estado BIT(1)
)ENGINE=INNODB;
