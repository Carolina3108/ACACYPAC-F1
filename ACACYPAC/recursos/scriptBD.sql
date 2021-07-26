DROP DATABASE IF EXISTS acacypac;
CREATE DATABASE acacypac CHARACTER SET utf8mb4;
USE acacypac;
 
CREATE TABLE usuario (
    id_usuario INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    pwd VARCHAR(50) NOT NULL
);

CREATE TABLE asociado (
    id_asociado INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    dui CHAR(9) UNIQUE,
    nit CHAR(14) NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    direccion VARCHAR(60) NOT NULL,
    telefono CHAR(8) NOT NULL,
    edad INT NOT NULL,
    profesion VARCHAR(50) NOT NULL,
    agencia VARCHAR(50) NOT NULL,
    Fecha DATE NOT NULL,
    estado VARCHAR(15) NOT NULL
);

CREATE TABLE bitacora(
	id_bitacora INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	id_asociado INT,
	fecha TIMESTAMP,
	ejecutar VARCHAR(20),
	actividad_realizada VARCHAR(60),
	informacion_actual TEXT,
	informacion_anterior TEXT
);


//INSERT
CREATE DEFINER=`root`@`localhost` TRIGGER `asociadoDelete` AFTER INSERT ON `asociado` FOR EACH ROW BEGIN INSERT INTO bitacora(id_asociado, ejecutar, actividad_realizada, informacion_actual)VALUES(NEW.id_asociado,CURRENT_USER,"Se inserto nuevo asociado", concat("Informacion actual: " ,NEW.dui, " " ,NEW.nit, " " ,NEW.nombre, " " ,NEW.direccion, " " ,NEW.telefono, " " ,NEW.edad, " " ,NEW.profesion, " " ,NEW.agencia, " " ,NEW.fecha, " " ,NEW.estado)); END


//DELETE
CREATE DEFINER=`root`@`localhost` TRIGGER `asociadoDelete` AFTER DELETE ON `asociado` FOR EACH ROW BEGIN INSERT INTO bitacora(id_asociado, ejecutar, actividad_realizada, informacion_actual)VALUES(OLD.id_asociado,CURRENT_USER,"Se inserto nuevo asociado", concat("Informacion anterior: " ,OLD.dui, " " ,OLD.nit, " " ,OLD.nombre, " " ,OLD.direccion, " " ,OLD.telefono, " " ,OLD.edad, " " ,OLD.profesion, " " ,OLD.agencia, " " ,OLD.fecha, " " ,OLD.estado)); END


//UPDATE
CREATE DEFINER=`root`@`localhost` TRIGGER `asociadoUpdate` AFTER UPDATE ON `asociado` FOR EACH ROW BEGIN INSERT INTO bitacora(id_asociado, ejecutar, actividad_realizada, informacion_anterior, informacion_actual)VALUES(OLD.id_asociado,CURRENT_USER,"Se actualizo un asociado", concat("Informacion anterior: " ,OLD.dui, " " ,OLD.nit, " " ,OLD.nombre, " " ,OLD.direccion, " " ,OLD.telefono, " " ,OLD.edad, " " ,OLD.profesion, " " ,OLD.agencia, " " ,OLD.fecha, " " ,OLD.estado),concat("Informacion actual: " ,NEW.dui, " " ,NEW.nit, " " ,NEW.nombre, " " ,NEW.direccion, " " ,New.telefono, " " ,NEW.edad, " " ,NEW.profesion, " " ,NEW.agencia, " " ,NEW.fecha, " " ,NEW.estado)); END