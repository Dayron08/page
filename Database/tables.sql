-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generaciÃ³n: 18-03-2022 a las 23:46:13
-- VersiÃ³n del servidor: 10.4.17-MariaDB
-- VersiÃ³n de PHP: 8.0.1
USE PacVi;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pacto_vida`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_persona`
--

CREATE TABLE `password_persona` (
  `ID_PASSWORD` varchar(30) NOT NULL,
  `DSC_PASSWORD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `ID_REGISTRO_PERSONA` varchar(50) NOT NULL,
  `ID_PERSONA` varchar(30) NOT NULL,
  `NOMBRE` varchar(30) NOT NULL,
  `APPELLIDOS` varchar(60) NOT NULL,
  `FECH_NACIMIENTO` date NOT NULL,
  `GENERO` varchar(2) NOT NULL,
  `FK1_PERSONA_UBICACION` varchar(30) NOT NULL,
  `FK2_PERSONA_CONTACTO` varchar(30) NOT NULL,
  `FK3_TIPO_PERSONA` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona_contacto`
--

CREATE TABLE `persona_contacto` (
  `ID_CONTACTO` varchar(30) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `TELEFONO` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona_ubicacion`
--

CREATE TABLE `persona_ubicacion` (
  `ID_UBICACION` varchar(30) NOT NULL,
  `PAIS` VARCHAR(40) NOT NULL,
  `CODIGO_POSTAL` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_persona`
--

CREATE TABLE `tipo_persona` (
  `ID_TIPO` varchar(30) NOT NULL,
  `DSC_TIPO` varchar(40) NOT NULL,
  `FK_PASSWORD_PERSONA` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Ã ndices para tablas volcadas
--

--
-- Indices de la tabla `password_persona`
--
ALTER TABLE `password_persona`
  ADD PRIMARY KEY (`ID_PASSWORD`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`ID_REGISTRO_PERSONA`),
  ADD KEY `FK1_PERSONA_UBICACION` (`FK1_PERSONA_UBICACION`),
  ADD KEY `FK2_PERSONA_CONTACTO` (`FK2_PERSONA_CONTACTO`),
  ADD KEY `FK3_TIPO_PERSONA` (`FK3_TIPO_PERSONA`);

--
-- Indices de la tabla `persona_contacto`
--
ALTER TABLE `persona_contacto`
  ADD PRIMARY KEY (`ID_CONTACTO`);

--
-- Indices de la tabla `persona_ubicacion`
--
ALTER TABLE `persona_ubicacion`
  ADD PRIMARY KEY (`ID_UBICACION`);

--
-- Indices de la tabla `tipo_persona`
--
ALTER TABLE `tipo_persona`
  ADD PRIMARY KEY (`ID_TIPO`),
  ADD KEY `FK_PASSWORD_PERSONA` (`FK_PASSWORD_PERSONA`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`FK1_PERSONA_UBICACION`) REFERENCES `persona_ubicacion` (`ID_UBICACION`),
  ADD CONSTRAINT `persona_ibfk_2` FOREIGN KEY (`FK2_PERSONA_CONTACTO`) REFERENCES `persona_contacto` (`ID_CONTACTO`),
  ADD CONSTRAINT `persona_ibfk_3` FOREIGN KEY (`FK3_TIPO_PERSONA`) REFERENCES `tipo_persona` (`ID_TIPO`);

--
-- Filtros para la tabla `tipo_persona`
--
ALTER TABLE `tipo_persona`
  ADD CONSTRAINT `tipo_persona_ibfk_1` FOREIGN KEY (`FK_PASSWORD_PERSONA`) REFERENCES `password_persona` (`ID_PASSWORD`);
COMMIT;
ALTER TABLE `PERSONA_CONTACTO`
  ADD CONSTRAINT `FK_ID_REGISTRO_PERSONA_1` FOREIGN KEY (`FK_ID_REGISTRO_PERSONA`) REFERENCES `PERSONA` (`ID_REGISTRO_PERSONA`);


--  delete ID_PASSWORD,FK_PASSWORD_PERSONA
--   from password_persona as pass_per
--   inner join tipo_persona as tip_per
--   on pass_per.ID_PASSWORD=tip_per.FK_PASSWORD_PERSONA;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
