-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-05-2023 a las 22:52:18
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id19908427_medicarte`
--
CREATE DATABASE IF NOT EXISTS `id19908427_medicarte` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `id19908427_medicarte`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `experiencia` int(11) NOT NULL,
  `usuario_cedula` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`experiencia`, `usuario_cedula`) VALUES
(3, 1007498548),
(4, 3232461990),
(6, 6486796798),
(2, 8163391889),
(5, 9002577173);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autorizacion`
--

CREATE TABLE `autorizacion` (
  `receta_idreceta` int(11) NOT NULL,
  `medico_usuario_cedula` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `autorizacion`
--

INSERT INTO `autorizacion` (`receta_idreceta`, `medico_usuario_cedula`) VALUES
(1, 8198653699),
(2, 7178276140),
(3, 8279190753),
(4, 3970844319),
(5, 6318273883);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dosificacion`
--

CREATE TABLE `dosificacion` (
  `cantidad` int(11) NOT NULL,
  `dosis` varchar(80) NOT NULL,
  `receta_idreceta` int(11) NOT NULL,
  `medicamento_idmedicamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `dosificacion`
--

INSERT INTO `dosificacion` (`cantidad`, `dosis`, `receta_idreceta`, `medicamento_idmedicamento`) VALUES
(200, 'antes de morir', 1, 1),
(200, 'cada 3 meses', 1, 2),
(200, 'cada 5 días', 1, 3),
(200, 'cada 30 días', 1, 8),
(200, 'cada 5 días', 2, 3),
(200, 'cada 30 días', 2, 8),
(200, 'antes de dormir', 2, 9),
(200, 'cada 3 meses', 2, 20),
(200, 'cada 30 días', 3, 8),
(200, 'cuando se muera', 3, 18),
(200, 'cada 3 meses', 3, 20),
(200, 'cada 5 días', 3, 30),
(200, 'cada 30 días', 4, 8),
(200, 'antes de comer', 4, 21),
(200, 'cada 5 días', 4, 23),
(200, 'cada 3 meses', 4, 25),
(200, 'despues de comer', 5, 11),
(200, 'cada 5 días', 5, 13),
(200, 'cada 30 días', 5, 18),
(200, 'cada 3 meses', 5, 22);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrega`
--

CREATE TABLE `entrega` (
  `identrega` int(11) NOT NULL,
  `fecha_entrega` date NOT NULL,
  `farmacia_idfarmacia` int(11) NOT NULL,
  `tipo_entrega_idtipo_entrega` int(11) NOT NULL,
  `receta_idreceta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `entrega`
--

INSERT INTO `entrega` (`identrega`, `fecha_entrega`, `farmacia_idfarmacia`, `tipo_entrega_idtipo_entrega`, `receta_idreceta`) VALUES
(1, '2023-08-12', 1, 1, 1),
(2, '2023-07-12', 2, 2, 2),
(3, '2023-06-12', 3, 2, 3),
(4, '2023-05-12', 4, 3, 4),
(5, '2023-04-12', 5, 3, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eps`
--

CREATE TABLE `eps` (
  `ideps` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `eps`
--

INSERT INTO `eps` (`ideps`, `nombre`, `descripcion`, `estado`) VALUES
(1, 'Salud Total', 'Ut enim ad minim veniam', 1),
(2, 'Humana vivir', 'Ut labore et dolore magna aliqua', 1),
(3, 'Coomeva', 'Sed do eiusmod tempor incididunt', 1),
(4, 'Cafesalud', 'Consectetur adipiscing elit', 1),
(5, 'Mutualser', 'Sed do eiusmod tempor incididunt', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eps_has_farmacia`
--

CREATE TABLE `eps_has_farmacia` (
  `eps_ideps` int(11) NOT NULL,
  `farmacia_idfarmacia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `eps_has_farmacia`
--

INSERT INTO `eps_has_farmacia` (`eps_ideps`, `farmacia_idfarmacia`) VALUES
(1, 1),
(1, 2),
(2, 2),
(2, 5),
(3, 3),
(4, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `farmacia`
--

CREATE TABLE `farmacia` (
  `idfarmacia` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `ubicacion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `farmacia`
--

INSERT INTO `farmacia` (`idfarmacia`, `nombre`, `ubicacion`) VALUES
(1, 'Farmacia Morte', '55.6789'),
(2, 'Farmacia Guadalajara', '-22.9876'),
(3, 'Farmacia Benavides', '-33.4567'),
(4, 'Farmacia del Ahorro', '55.6789'),
(5, 'Farmacentro', '55.6789');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicamento`
--

CREATE TABLE `medicamento` (
  `idmedicamento` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `cantidad` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `pos` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `medicamento`
--

INSERT INTO `medicamento` (`idmedicamento`, `nombre`, `descripcion`, `cantidad`, `estado`, `pos`) VALUES
(1, 'Aciclovir', '5mg comprimidos', 158, 1, 1),
(2, 'Paracetamol', '400mg comprimidos recubiertos', 129, 1, 1),
(3, 'Levotiroxina', '10mg comprimidos', 173, 1, 1),
(4, 'Morfina', '100mcg comprimidos', 189, 1, 1),
(5, 'Furosemida', '10mg comprimidos', 151, 1, 1),
(6, 'Lítio', '5mg comprimidos', 190, 1, 1),
(7, 'Venlafaxina', '100mcg comprimidos', 189, 1, 1),
(8, 'Ibuprofeno', '2mg comprimidos', 116, 1, 1),
(9, 'Furosemida', '1mg comprimidos', 112, 1, 1),
(10, 'Losartan', '50mg comprimidos', 185, 1, 1),
(11, 'Furosemida', '20mg cápsulas', 144, 1, 1),
(12, 'Lítio', '10mg comprimidos', 128, 1, 1),
(13, 'Ibuprofeno', '850mg comprimidos', 173, 1, 1),
(14, 'Furosemida', '2mg comprimidos', 156, 1, 1),
(15, 'Fluconazol', '75mg cápsulas', 162, 1, 1),
(16, 'Amoxicilina', '30mg cápsulas', 147, 1, 1),
(17, 'Enalapril', '50mg comprimidos', 180, 1, 1),
(18, 'Azitromicina', '1mg comprimidos', 193, 1, 1),
(19, 'Ibuprofeno', '500mg cápsulas', 128, 1, 1),
(20, 'Paracetamol', '20mg cápsulas', 140, 1, 0),
(21, 'Dipirona', '40mg comprimidos', 160, 1, 0),
(22, 'Risperidona', '5mg comprimidos', 156, 1, 0),
(23, 'Amoxicilina', '100mcg comprimidos', 200, 1, 0),
(24, 'Venlafaxina', '500mg comprimidos', 176, 1, 0),
(25, 'Lítio', '5mg comprimidos', 106, 1, 0),
(26, 'Morfina', '75mg cápsulas', 176, 1, 0),
(27, 'Atenolol', '2mg comprimidos', 156, 1, 0),
(28, 'Lítio', '300mg cápsulas', 172, 1, 0),
(29, 'Morfina', '75mg cápsulas', 160, 1, 0),
(30, 'Ranitidina', '100mcg comprimidos', 111, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicamento_has_farmacia`
--

CREATE TABLE `medicamento_has_farmacia` (
  `medicamento_idmedicamento` int(11) NOT NULL,
  `farmacia_idfarmacia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `medicamento_has_farmacia`
--

INSERT INTO `medicamento_has_farmacia` (`medicamento_idmedicamento`, `farmacia_idfarmacia`) VALUES
(1, 1),
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(2, 5),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 3),
(12, 3),
(13, 3),
(14, 3),
(15, 4),
(16, 4),
(17, 4),
(18, 4),
(19, 5),
(20, 5),
(21, 5),
(22, 5),
(23, 1),
(24, 1),
(25, 1),
(26, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE `medico` (
  `especialidad` varchar(45) NOT NULL,
  `usuario_cedula` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `medico`
--

INSERT INTO `medico` (`especialidad`, `usuario_cedula`) VALUES
('Gastroenterología', 3970844319),
('Dermatología', 6318273883),
('Infectología', 7178276140),
('Medicina Interna', 8198653699),
('Geriatría', 8279190753);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `registro` date DEFAULT NULL,
  `usuario_cedula` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`registro`, `usuario_cedula`) VALUES
('2023-05-02', 5545754027),
('2023-05-02', 7398990537),
('2023-05-02', 6689118589),
('2023-05-02', 9693524328),
('2023-05-02', 4840613706),
('2023-05-02', 5545754027),
('2023-05-02', 7398990537),
('2023-05-02', 6689118589),
('2023-05-02', 9693524328),
('2023-05-02', 4840613706);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `receta`
--

CREATE TABLE `receta` (
  `idreceta` int(11) NOT NULL,
  `fecha_expedicion` date DEFAULT NULL,
  `fecha_vencimiento` date DEFAULT NULL,
  `paciente_usuario_cedula` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `receta`
--

INSERT INTO `receta` (`idreceta`, `fecha_expedicion`, `fecha_vencimiento`, `paciente_usuario_cedula`) VALUES
(1, '2023-05-02', '2023-07-15', 5545754027),
(2, '2023-05-02', '2023-07-15', 7398990537),
(3, '2023-05-02', '2023-07-15', 6689118589),
(4, '2023-05-02', '2023-07-15', 9693524328),
(5, '2023-05-02', '2023-07-15', 4840613706),
(1, '2023-05-02', '2023-07-15', 5545754027),
(2, '2023-05-02', '2023-07-15', 7398990537),
(3, '2023-05-02', '2023-07-15', 6689118589),
(4, '2023-05-02', '2023-07-15', 9693524328),
(5, '2023-05-02', '2023-07-15', 4840613706);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `fecha_hora` date NOT NULL,
  `paciente_idpaciente` int(11) NOT NULL,
  `farmacia_idfarmacia` int(11) NOT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`fecha_hora`, `paciente_idpaciente`, `farmacia_idfarmacia`, `estado`) VALUES
('2023-05-02', 2147483647, 1, 0),
('2023-05-02', 2147483647, 2, 0),
('2023-05-02', 2147483647, 3, 0),
('2023-05-02', 2147483647, 4, 0),
('2023-05-02', 2147483647, 5, 0),
('2023-05-02', 2147483647, 1, 0),
('2023-05-02', 2147483647, 2, 0),
('2023-05-02', 2147483647, 3, 0),
('2023-05-02', 2147483647, 4, 0),
('2023-05-02', 2147483647, 5, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idrol` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`, `nombre`) VALUES
(1, 'PACIENTE'),
(2, 'ADMINISTRADOR'),
(3, 'MEDICO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_entrega`
--

CREATE TABLE `tipo_entrega` (
  `idtipo_entrega` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tipo_entrega`
--

INSERT INTO `tipo_entrega` (`idtipo_entrega`, `nombre`) VALUES
(1, 'Recoger en tienda'),
(2, 'Entrega express'),
(3, 'Entrega a domicilio'),
(1, 'Recoger en tienda'),
(2, 'Entrega express'),
(3, 'Entrega a domicilio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `cedula` bigint(10) NOT NULL,
  `password` varchar(45) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `edad` int(11) NOT NULL,
  `correo` varchar(60) DEFAULT NULL,
  `rol_idrol` int(11) NOT NULL,
  `eps_ideps` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombre`, `apellido`, `telefono`, `direccion`, `cedula`, `password`, `estado`, `edad`, `correo`, `rol_idrol`, `eps_ideps`) VALUES
('Edinson', 'Carrascal', '484 186 0790', '5 Dexter Alley', 1007498548, '12345', 1, 14, 'edinsoncarrascal@medicarte.com', 2, 4),
('Michal', 'Hatherill', '682 621 3127', '32 Meadow Ridge Junction', 3232461990, '12345', 1, 75, 'mhatherillc@medicarte.com', 2, 4),
('Jeremias', 'De Fraine', '258 329 8559', '4 Bunker Hill Park', 3970844319, '12345', 1, 52, 'jdefraine8@medicarte.com', 3, 1),
('Terri', 'Sher', '656 650 8493', '0 Porter Plaza', 4840613706, '12345', 1, 22, 'tsher4@medicarte.com', 1, 1),
('Noella', 'Joris', '750 278 8893', '49423 Lakeland Junction', 5545754027, '12345', 1, 20, 'joris@medicarte.com', 1, 4),
('Royce', 'Ellice', '276 169 8036', '0 Service Lane', 6318273883, '12345', 1, 62, 'rellice9@medicarte.com', 3, 5),
('Siusan', 'Loughran', '556 113 7243', '131 Ridge Oak Terrace', 6486796798, '12345', 1, 1, 'sloughrane@medicarte.com', 2, 5),
('Walker', 'Hannen', '944 556 6193', '0 Washington Trail', 6689118589, '12345', 1, 106, 'whannen2@medicarte.com', 1, 1),
('Nye', 'Magauran', '325 122 6613', '5 Sutteridge Place', 7178276140, '12345', 1, 83, 'nmagauran6@medicarte.com', 3, 3),
('Domini', 'Blesing', '858 614 6728', '569 Holy Cross Circle', 7398990537, '12345', 1, 119, 'dblesing0@medicarte.com', 1, 3),
('Krista', 'Killshaw', '514 288 2580', '7 Northwestern Crossing', 8163391889, '12345', 0, 53, 'kkillshawa@medicarte.com', 2, 5),
('Hall', 'MacNally', '719 716 1858', '35 Coleman Place', 8198653699, '12345', 1, 47, 'hmacnally5@medicarte.com', 3, 5),
('Avram', 'Penhalurick', '385 323 8315', '75409 Village Green Point', 8279190753, '12345', 0, 88, 'apenhalurick7@medicarte.com', 3, 5),
('Lloyd', 'O\'Flynn', '155 957 1100', '49134 Jana Avenue', 9002577173, '12345', 1, 80, 'loflynnd@medicarte.com', 2, 5),
('Adolph', 'Ghelarducci', '608 433 5318', '45736 Green Ridge Crossing', 9693524328, '12345', 1, 104, 'aghelarducci3@medicarte.com', 1, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`usuario_cedula`);

--
-- Indices de la tabla `autorizacion`
--
ALTER TABLE `autorizacion`
  ADD PRIMARY KEY (`receta_idreceta`,`medico_usuario_cedula`),
  ADD KEY `fk_autorizacion_medico1` (`medico_usuario_cedula`);

--
-- Indices de la tabla `dosificacion`
--
ALTER TABLE `dosificacion`
  ADD PRIMARY KEY (`receta_idreceta`,`medicamento_idmedicamento`),
  ADD KEY `fk_dosificacion_medicamento1` (`medicamento_idmedicamento`);

--
-- Indices de la tabla `entrega`
--
ALTER TABLE `entrega`
  ADD PRIMARY KEY (`identrega`,`farmacia_idfarmacia`,`tipo_entrega_idtipo_entrega`,`receta_idreceta`),
  ADD KEY `fk_entrega_farmacia1` (`farmacia_idfarmacia`),
  ADD KEY `fk_entrega_tipo_entrega1` (`tipo_entrega_idtipo_entrega`),
  ADD KEY `fk_entrega_receta1` (`receta_idreceta`);

--
-- Indices de la tabla `eps`
--
ALTER TABLE `eps`
  ADD PRIMARY KEY (`ideps`);

--
-- Indices de la tabla `eps_has_farmacia`
--
ALTER TABLE `eps_has_farmacia`
  ADD PRIMARY KEY (`eps_ideps`,`farmacia_idfarmacia`),
  ADD KEY `fk_eps_has_farmacia_farmacia1` (`farmacia_idfarmacia`);

--
-- Indices de la tabla `farmacia`
--
ALTER TABLE `farmacia`
  ADD PRIMARY KEY (`idfarmacia`);

--
-- Indices de la tabla `medicamento`
--
ALTER TABLE `medicamento`
  ADD PRIMARY KEY (`idmedicamento`);

--
-- Indices de la tabla `medicamento_has_farmacia`
--
ALTER TABLE `medicamento_has_farmacia`
  ADD PRIMARY KEY (`medicamento_idmedicamento`,`farmacia_idfarmacia`),
  ADD KEY `fk_medicamento_has_farmacia_farmacia1` (`farmacia_idfarmacia`);

--
-- Indices de la tabla `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`usuario_cedula`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cedula`,`eps_ideps`,`rol_idrol`),
  ADD KEY `fk_usuario_eps1` (`eps_ideps`),
  ADD KEY `fk_usuario_rol1` (`rol_idrol`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_eps1` FOREIGN KEY (`eps_ideps`) REFERENCES `eps` (`ideps`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_rol1` FOREIGN KEY (`rol_idrol`) REFERENCES `rol` (`idrol`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
