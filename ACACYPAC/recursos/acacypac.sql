-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 26-07-2021 a las 12:00:13
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `acacypac`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asociado`
--

CREATE TABLE `asociado` (
  `id_asociado` int(10) UNSIGNED NOT NULL,
  `dui` char(9) DEFAULT NULL,
  `nit` char(14) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `telefono` char(8) NOT NULL,
  `edad` int(11) NOT NULL,
  `profesion` varchar(50) NOT NULL,
  `agencia` varchar(50) NOT NULL,
  `Fecha` date NOT NULL,
  `estado` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asociado`
--

INSERT INTO `asociado` (`id_asociado`, `dui`, `nit`, `nombre`, `direccion`, `telefono`, `edad`, `profesion`, `agencia`, `Fecha`, `estado`) VALUES
(5, '009876349', '33332109870000', 'Juan Castro Menjiva', 'Chalatenango', '23445566', 34, 'Admin. de empresas', 'Chalatenango', '2021-07-26', 'Habilitado'),
(7, '008817679', '12342101980000', 'David Martinez', 'Tejutla', '76554433', 34, 'Agronomo', 'Nueva Concepcion', '2021-07-26', 'Habilitado');

--
-- Disparadores `asociado`
--
DELIMITER $$
CREATE TRIGGER `asociadoDelete` AFTER DELETE ON `asociado` FOR EACH ROW BEGIN
INSERT INTO bitacora(id_asociado, ejecutar, actividad_realizada, informacion_anterior)VALUES(OLD.id_asociado,CURRENT_USER,"Se elimino asociado", concat("Informacion anterior: " ,OLD.dui, " " ,OLD.nit, " " ,OLD.nombre, " " ,OLD.direccion, " " ,OLD.telefono, " " ,OLD.edad, " " ,OLD.profesion, " " ,OLD.agencia, " " ,OLD.fecha, " " ,OLD.estado));
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `asociadoInsert` AFTER INSERT ON `asociado` FOR EACH ROW BEGIN
INSERT INTO bitacora(id_asociado, ejecutar, actividad_realizada, informacion_actual)VALUES(NEW.id_asociado,CURRENT_USER,"Se inserto nuevo asociado", concat("Informacion actual: " ,NEW.dui, " " ,NEW.nit, " " ,NEW.nombre, " " ,NEW.direccion, " " ,New.telefono, " " ,NEW.edad, " " ,NEW.profesion, " " ,NEW.agencia, " " ,NEW.fecha, " " ,NEW.estado));

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `asociadoUpdate` AFTER UPDATE ON `asociado` FOR EACH ROW BEGIN
INSERT INTO bitacora(id_asociado, ejecutar, actividad_realizada, informacion_anterior, informacion_actual)VALUES(OLD.id_asociado,CURRENT_USER,"Se actualizo un asociado", concat("Informacion anterior: " ,OLD.dui, " " ,OLD.nit, " " ,OLD.nombre, " " ,OLD.direccion, " " ,OLD.telefono, " " ,OLD.edad, " " ,OLD.profesion, " " ,OLD.agencia, " " ,OLD.fecha, " " ,OLD.estado),concat("Informacion actual: " ,NEW.dui, " " ,NEW.nit, " " ,NEW.nombre, " " ,NEW.direccion, " " ,New.telefono, " " ,NEW.edad, " " ,NEW.profesion, " " ,NEW.agencia, " " ,NEW.fecha, " " ,NEW.estado));

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `id_bitacora` int(10) UNSIGNED NOT NULL,
  `id_asociado` int(11) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ejecutar` varchar(20) DEFAULT NULL,
  `actividad_realizada` varchar(60) DEFAULT NULL,
  `informacion_actual` text DEFAULT NULL,
  `informacion_anterior` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`id_bitacora`, `id_asociado`, `fecha`, `ejecutar`, `actividad_realizada`, `informacion_actual`, `informacion_anterior`) VALUES
(1, 4, '2021-07-26 04:29:54', 'root@localhost', 'Se inserto nuevo asociado', 'Informacion actual: 123456789 12345678909876 Reina Cruz Chalatenango 23443322 35 Enfermera Chalatenango 2021-07-25 Habilitado', NULL),
(4, 6, '2021-07-26 06:27:11', 'root@localhost', 'Se inserto nuevo asociado', 'Informacion actual: 009988769 22222222222222 Juan Zelaya Barrio el centro, chalatenango 23445555 34 Admin. de empresas Chalatenango 2021-07-26 Habilitado', NULL),
(5, 6, '2021-07-26 06:27:44', 'root@localhost', 'Se elimino asociado', NULL, 'Informacion actual: 009988769 22222222222222 Juan Zelaya Barrio el centro, chalatenango 23445555 34 Admin. de empresas Chalatenango 2021-07-26 Habilitado'),
(6, 5, '2021-07-26 06:57:07', 'root@localhost', 'Se actualizo un asociado', 'Informacion actual: 009876349 33332109870000 Juan Castro Menjiva Chalatenango 23445566 34 Admin. de empresas Chalatenango 2021-07-26 Habilitado', 'Informacion anterior: 009876349 33332109870000 Juan Castro Chalatenango 23445566 34 Admin. de empresas Chalatenango 2021-07-26 Habilitado'),
(7, 7, '2021-07-26 09:20:38', 'root@localhost', 'Se inserto nuevo asociado', 'Informacion actual: 008817679 12342101980000 David Martinez Tejutla 76554433 34 Agronomo Nueva Concepcion 2021-07-26 Habilitado', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `pwd`) VALUES
(1, 'acacypac', 'acacypac');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asociado`
--
ALTER TABLE `asociado`
  ADD PRIMARY KEY (`id_asociado`),
  ADD UNIQUE KEY `dui` (`dui`);

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`id_bitacora`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asociado`
--
ALTER TABLE `asociado`
  MODIFY `id_asociado` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `id_bitacora` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
