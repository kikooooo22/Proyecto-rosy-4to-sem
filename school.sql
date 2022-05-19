-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-05-2022 a las 17:06:52
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `school`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `No_lista` int(11) NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Apellido_pat` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Apellido_mat` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`No_lista`, `Nombre`, `Apellido_pat`, `Apellido_mat`) VALUES
(1, 'Adrián', 'López', 'Zermeño'),
(2, 'Rodrigo', 'Cruz ', 'Martínez'),
(3, 'Jorge Abraham', 'Muro', 'Rangel'),
(4, 'Juan Pablo', 'Martínez ', 'Rocha'),
(5, 'Cristina', 'Díaz', 'Ezquivel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion`
--

CREATE TABLE `calificacion` (
  `No_lista` int(11) NOT NULL,
  `ID_materia` int(11) NOT NULL,
  `Calificacion` float DEFAULT NULL,
  `No_trimestre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evidencia`
--

CREATE TABLE `evidencia` (
  `Trabajo_idTrabajo` int(11) NOT NULL,
  `alumno_No_lista` int(11) NOT NULL,
  `Calf_trabajo` float DEFAULT NULL,
  `Evidencia` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `ID_materia` int(11) NOT NULL,
  `Nom_materia` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`ID_materia`, `Nom_materia`) VALUES
(0, 'Español'),
(1, 'Matematicas'),
(2, 'Ciencias Naturales'),
(3, 'Historia'),
(4, 'Geografia'),
(5, 'Civica y Etica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajo`
--

CREATE TABLE `trabajo` (
  `idTrabajo` int(11) NOT NULL,
  `materia_ID_materia` int(11) NOT NULL,
  `Nom_trabajo` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Ponderacion` int(11) DEFAULT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`No_lista`),
  ADD KEY `No_lista` (`No_lista`);

--
-- Indices de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD KEY `No_lista_idx` (`No_lista`),
  ADD KEY `ID_materia_idx` (`ID_materia`);

--
-- Indices de la tabla `evidencia`
--
ALTER TABLE `evidencia`
  ADD PRIMARY KEY (`Trabajo_idTrabajo`,`alumno_No_lista`),
  ADD KEY `fk_Evidencia_Trabajo1_idx` (`Trabajo_idTrabajo`),
  ADD KEY `fk_Evidencia_alumno1_idx` (`alumno_No_lista`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`ID_materia`),
  ADD KEY `ID_materia` (`ID_materia`);

--
-- Indices de la tabla `trabajo`
--
ALTER TABLE `trabajo`
  ADD PRIMARY KEY (`idTrabajo`),
  ADD KEY `fk_Trabajo_materia1_idx` (`materia_ID_materia`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD CONSTRAINT `ID_materia` FOREIGN KEY (`ID_materia`) REFERENCES `materia` (`ID_materia`),
  ADD CONSTRAINT `No_lista` FOREIGN KEY (`No_lista`) REFERENCES `alumno` (`No_lista`);

--
-- Filtros para la tabla `evidencia`
--
ALTER TABLE `evidencia`
  ADD CONSTRAINT `fk_Evidencia_Trabajo1` FOREIGN KEY (`Trabajo_idTrabajo`) REFERENCES `trabajo` (`idTrabajo`),
  ADD CONSTRAINT `fk_Evidencia_alumno1` FOREIGN KEY (`alumno_No_lista`) REFERENCES `alumno` (`No_lista`);

--
-- Filtros para la tabla `trabajo`
--
ALTER TABLE `trabajo`
  ADD CONSTRAINT `fk_Trabajo_materia1` FOREIGN KEY (`materia_ID_materia`) REFERENCES `materia` (`ID_materia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
