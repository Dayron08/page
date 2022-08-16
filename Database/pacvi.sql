-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2022 at 09:57 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pacvi`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `P_ACTUALIZAR_DATOS_PERSONA_ADMIN` (IN `P_ID_REGISTRO_PERSONA` VARCHAR(30), IN `P_NOMBRE` VARCHAR(30), IN `P_APPELLIDOS` VARCHAR(60), IN `P_FECH_NACIMIENTO` DATE, IN `P_GENERO` VARCHAR(2), IN `P_TIPO_PERSONA` CHAR(2), IN `P_PASSWORD_PERSONA` VARCHAR(50), IN `P_ID_CONTACTO` VARCHAR(30), IN `P_EMAIL` VARCHAR(50), IN `P_TELEFONO` INT(30), IN `P_FOTO_PERFIL` VARCHAR(300))   BEGIN
        DECLARE PERSONA_CEDULA VARCHAR(30);
        SET PERSONA_CEDULA :=P_ID_REGISTRO_PERSONA;
        UPDATE PERSONA SET 
            NOMBRE = P_NOMBRE ,
            APPELLIDOS = P_APPELLIDOS ,
            FECH_NACIMIENTO = P_FECH_NACIMIENTO ,
            GENERO = P_GENERO,
            TIPO_PERSONA = P_TIPO_PERSONA,
            PASSWORD_PERSONA=P_PASSWORD_PERSONA
        WHERE 
            ID_REGISTRO_PERSONA = PERSONA_CEDULA;
        UPDATE PERSONA_CONTACTO SET 
            EMAIL = P_EMAIL ,
            TELEFONO = P_TELEFONO
        WHERE 
            ID_REGISTRO_PERSONA = PERSONA_CEDULA;
        COMMIT;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_ACTUALIZAR_DATOS_PERSONA_USU` (IN `P_ID_REGISTRO_PERSONA` VARCHAR(30), IN `P_NOMBRE` VARCHAR(30), IN `P_APPELLIDOS` VARCHAR(60), IN `P_FECH_NACIMIENTO` DATE, IN `P_GENERO` VARCHAR(2), IN `P_PASSWORD_PERSONA` VARCHAR(50), IN `P_ID_CONTACTO` VARCHAR(30), IN `P_EMAIL` VARCHAR(50), IN `P_TELEFONO` INT(30), IN `P_FOTO_PERFIL` VARCHAR(300))   BEGIN 
        DECLARE PERSONA_CEDULA VARCHAR(30);
        SET PERSONA_CEDULA :=P_ID_REGISTRO_PERSONA;
        UPDATE PERSONA SET 
            NOMBRE = P_NOMBRE ,
            APPELLIDOS = P_APPELLIDOS ,
            FECH_NACIMIENTO = P_FECH_NACIMIENTO ,
            GENERO = P_GENERO,
            PASSWORD_PERSONA=P_PASSWORD_PERSONA
        WHERE 
            ID_REGISTRO_PERSONA = PERSONA_CEDULA;
        UPDATE PERSONA_CONTACTO SET 
            EMAIL = P_EMAIL ,
            TELEFONO = P_TELEFONO,
            FOTO_PERFIL = P_FOTO_PERFIL
        WHERE 
            ID_REGISTRO_PERSONA = PERSONA_CEDULA;
        COMMIT;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_ACTUALIZAR_EVENTO` (IN `P_ID_EVENT` INT, IN `P_ENCARGADO` VARCHAR(200), IN `P_NOMBRE_EVENTO` VARCHAR(100), IN `P_HORA_EVENTO` TIME, IN `P_IMG_PATH` VARCHAR(500), IN `P_DSC_EVENTO` VARCHAR(100), IN `P_FECHA_EVENTO` DATE)   BEGIN 
        UPDATE EVENTOS SET 
            ENCARGADO = P_ENCARGADO ,
            NOMBRE_EVENTO = P_NOMBRE_EVENTO ,
            HORA_EVENTO = P_HORA_EVENTO,
            IMG_PATH = P_IMG_PATH ,
            DSC_EVENTO = P_DSC_EVENTO,
            FECHA_EVENTO = P_FECHA_EVENTO
        WHERE 
            ID_EVENT = P_ID_EVENT;
        COMMIT;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_ACTUALIZAR_PERSONA_TESTIMONIO` (IN `P_ID_REGISTRO_PERSONA` VARCHAR(30), IN `P_DSC_TESTIMONIO` VARCHAR(500))   BEGIN 
        UPDATE PERSONA_TESTIMONIOS SET 
            
            DSC_TESTIMONIO= P_DSC_TESTIMONIO
        WHERE 
            ID_REGISTRO_PERSONA = P_ID_REGISTRO_PERSONA;
        COMMIT;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_ASISTIR_EVENTO_USU` (IN `P_ASISTENCIA` INT(1))   BEGIN
            INSERT INTO EVENTOS     
            (
                ASISTENCIA
            )
            VALUES 
            (
                P_ASISTENCIA
            );
            COMMIT;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_ELIMINAR_CONSULTA` (IN `P_ID_CONSULTAS` INT)   BEGIN
        DELETE FROM CONSULTAS where
            ID_CONSULTAS = P_ID_CONSULTAS;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_ELIMINAR_DATOS_PERSONA` (IN `P_ID_REGISTRO_PERSONA` VARCHAR(30))   BEGIN
        DELETE FROM PERSONA WHERE
            ID_REGISTRO_PERSONA = P_ID_REGISTRO_PERSONA;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_ELIMINAR_EVENTO` (IN `P_ID_EVENT` INT)   BEGIN
        DELETE FROM EVENTOS where
            ID_EVENT = P_ID_EVENT;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_ELIMINAR_IMAGEN` (IN `P_ID_IMAGEN` VARCHAR(30))   BEGIN
        DELETE FROM GALERIA where
            ID_IMAGEN = P_ID_IMAGEN;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_ELIMINAR_PERSONA_TESTIMONIO` (IN `P_ID_TESTI` INT)   BEGIN
        DELETE FROM PERSONA_TESTIMONIOS where
            ID_TESTI = P_ID_TESTI;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_ELIMINAR_VIDEO` (IN `P_ID_VIDEO` VARCHAR(30))   BEGIN
        DELETE FROM VIDEOS where
            ID_VIDEO = P_ID_VIDEO;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_HISTORICO_EVENTO` ()   BEGIN
        SELECT ENCARGADO,NOMBRE_EVENTO,DSC_EVENTO,FECHA_EVENTO,HORA_EVENTO
        FROM EVENTOS
        WHERE FECHA_EVENTO < FECHA_ACTUAL 
        ORDER BY  FECHA_EVENTO ASC ,HORA_EVENTO ASC;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_INSERTAR_CONSULTA` (IN `P_NOMBRE` VARCHAR(30), IN `P_APPELLIDOS` VARCHAR(30), IN `P_CORREO` VARCHAR(50), IN `P_DSC_ASUNTO` VARCHAR(500))   BEGIN
            INSERT INTO CONSULTAS     
            (
                ID_CONSULTAS,
                FECHA_ACTUAL,
                NOMBRE,
                APPELLIDOS,
                CORREO,
                DSC_ASUNTO
            )
            VALUES 
            (
                NULL,
                CURRENT_TIMESTAMP(),
                P_NOMBRE,
                P_APPELLIDOS,
                P_CORREO,
                P_DSC_ASUNTO
            );
            COMMIT;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_INSERTAR_DATOS_PERSONA_ADMIN` (IN `P_ID_REGISTRO_PERSONA` VARCHAR(50), IN `P_NOMBRE` VARCHAR(30), IN `P_APPELLIDOS` VARCHAR(60), IN `P_FECH_NACIMIENTO` DATE, IN `P_GENERO` VARCHAR(2), IN `P_TIPO_PERSONA` CHAR(2), IN `P_PASSWORD_PERSONA` VARCHAR(50), IN `P_EMAIL` VARCHAR(50), IN `P_TELEFONO` INT(30), IN `P_FOTO_PERFIL` VARCHAR(300))   BEGIN
            INSERT INTO PERSONA     
            (
                ID_REGISTRO_PERSONA,  
                NOMBRE, 
                APPELLIDOS, 
                FECH_NACIMIENTO, 
                GENERO,
                FECHA_REGISTRO,
                TIPO_PERSONA,
                PASSWORD_PERSONA
            )
            VALUES 
            (
                P_ID_REGISTRO_PERSONA, 
                P_NOMBRE, 
                P_APPELLIDOS, 
                P_FECH_NACIMIENTO, 
                P_GENERO,
                CONVERT(CURRENT_TIMESTAMP,DATE),
                P_TIPO_PERSONA,
                P_PASSWORD_PERSONA
            );
            INSERT INTO PERSONA_CONTACTO
            (
                ID_CONTACTO,
                EMAIL,
                TELEFONO,
                FOTO_PERFIL,
                ID_REGISTRO_PERSONA
            )
            VALUES
            (
                NULL,
                P_EMAIL,
                P_TELEFONO,
                P_FOTO_PERFIL,
                P_ID_REGISTRO_PERSONA
            );
            COMMIT;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_INSERTAR_DATOS_PERSONA_USU` (IN `P_ID_REGISTRO_PERSONA` VARCHAR(50), IN `P_NOMBRE` VARCHAR(30), IN `P_APPELLIDOS` VARCHAR(60), IN `P_FECH_NACIMIENTO` DATE, IN `P_GENERO` VARCHAR(2), IN `P_PASSWORD_PERSONA` VARCHAR(50), IN `P_EMAIL` VARCHAR(50), IN `P_TELEFONO` INT(30), IN `P_FOTO_PERFIL` VARCHAR(300))   BEGIN
            INSERT INTO PERSONA     
            (
                ID_REGISTRO_PERSONA,  
                NOMBRE, 
                APPELLIDOS, 
                FECH_NACIMIENTO, 
                GENERO,
                FECHA_REGISTRO,
                TIPO_PERSONA,
                PASSWORD_PERSONA
            )
            VALUES 
            (
                P_ID_REGISTRO_PERSONA, 
                P_NOMBRE, 
                P_APPELLIDOS, 
                P_FECH_NACIMIENTO, 
                P_GENERO,
                CONVERT(CURRENT_TIMESTAMP,DATE),
                0,
                P_PASSWORD_PERSONA
            );
            INSERT INTO PERSONA_CONTACTO
            (
                ID_CONTACTO,
                EMAIL,
                TELEFONO,
                FOTO_PERFIL,
                ID_REGISTRO_PERSONA
            )
            VALUES
            (
                NULL,
                P_EMAIL,
                P_TELEFONO,
                P_FOTO_PERFIL,
                P_ID_REGISTRO_PERSONA
            );
            COMMIT;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_INSERTAR_EVENTO` (IN `P_ENCARGADO` VARCHAR(200), IN `P_NOMBRE_EVENTO` VARCHAR(100), IN `P_HORA_EVENTO` TIME, IN `P_IMG_PATH` VARCHAR(500), IN `P_DSC_EVENTO` VARCHAR(100), IN `P_FECHA_EVENTO` DATE)   BEGIN
            INSERT INTO EVENTOS     
            (
                ID_EVENT,
                ENCARGADO, 
                NOMBRE_EVENTO,
                HORA_EVENTO, 
                IMG_PATH, 
                DSC_EVENTO, 
                FECHA_EVENTO, 
                FECHA_ACTUAL
            )
            VALUES 
            (
                NULL,
                P_ENCARGADO, 
                P_NOMBRE_EVENTO,
                P_HORA_EVENTO, 
                P_IMG_PATH, 
                P_DSC_EVENTO, 
                P_FECHA_EVENTO, 
                current_timestamp()
            );
            COMMIT;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_INSERTAR_GALERIA` (IN `P_IMG_PATH` VARCHAR(300))   BEGIN
            INSERT INTO GALERIA     
            (
                IMG_PATH, 
                FECHA 
            )
            VALUES 
            (
                P_IMG_PATH,
                CONVERT(current_timestamp(),DATE)
            );
            COMMIT;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_INSERTAR_PERSONA_TESTIMONIO` (IN `P_DSC_TESTIMONIO` VARCHAR(500), IN `P_ID_REGISTRO_PERSONA` VARCHAR(50))   BEGIN
            INSERT INTO PERSONA_TESTIMONIOS    
            (
                ID_TESTI,  
                DSC_TESTIMONIO,
                FECHA_ACTUAL,
                ID_REGISTRO_PERSONA
            )
            VALUES 
            (
                NULL,  
                P_DSC_TESTIMONIO, 
                current_timestamp,
                P_ID_REGISTRO_PERSONA
            );
            COMMIT;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_INSERTAR_VIDEO` (IN `P_URL` VARCHAR(300))   BEGIN
            INSERT INTO VIDEOS     
            (
                URL, 
                FECHA 
            )
            VALUES 
            (
                P_URL,
                CONVERT(current_timestamp(),DATE)
            );
            COMMIT;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_VALI_LOGIN` (IN `P_CORREO` VARCHAR(50), IN `P_PASSWORD` VARCHAR(50))   BEGIN
            SELECT
                TP.ID_TIPO,
                TP.DSC_TIPO AS ROL,
                P.ID_REGISTRO_PERSONA AS CEDULA
            FROM TIPO_PERSONA TP
            INNER JOIN PERSONA P ON (P.TIPO_PERSONA = TP.ID_TIPO)
            INNER JOIN PERSONA_CONTACTO PC ON (PC.ID_REGISTRO_PERSONA = P.ID_REGISTRO_PERSONA)
            WHERE PC.EMAIL =P_CORREO  AND P.PASSWORD_PERSONA = P_PASSWORD;
        END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_VER_CONSULTAS_BY_FECHA` ()   BEGIN
        SELECT FECHA_ACTUAL AS FECHA_DE_RECIBIDO, NOMBRE,APPELLIDOS,CORREO,DSC_ASUNTO
        FROM CONSULTAS 
        ORDER BY FECHA_ACTUAL ASC;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_VER_EVENTOS` ()   BEGIN
        SELECT ENCARGADO,NOMBRE_EVENTO,DSC_EVENTO,FECHA_EVENTO,HORA_EVENTO
        FROM EVENTOS 
        WHERE FECHA_EVENTO >=  FECHA_ACTUAL
        ORDER BY  FECHA_EVENTO, HORA_EVENTO ASC;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_VER_FOTOS_FECHA` (IN `P_FECHA` DATE)   BEGIN
        DECLARE BUSQUEDAD_F DATE;
        SET BUSQUEDAD_F :=P_FECHA;
        SELECT
            IMG_PATH AS DIRECCION_DE_IMAGEN,
            FECHA AS FOTO_SUBIDA
        FROM GALERIA
        WHERE FECHA = BUSQUEDAD_F;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_VER_FOTOS_FECHA_DESC` ()   BEGIN
        SELECT
            IMG_PATH AS DIRECCION_DE_IMAGEN
        FROM GALERIA
        ORDER BY FECHA DESC;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_VER_PERSONAS` ()   BEGIN
        SELECT
            TP.DSC_TIPO AS TIPO_DE_PERMISO,
            P.NOMBRE,
            P.APPELLIDOS,
            TIMESTAMPDIFF(YEAR,P.FECH_NACIMIENTO,CURDATE()) AS EDAD,
            P.GENERO,
            PC.EMAIL,
            PC.TELEFONO
        FROM TIPO_PERSONA TP 
        INNER JOIN PERSONA P ON (P.TIPO_PERSONA = TP.ID_TIPO)
        INNER JOIN PERSONA_CONTACTO PC ON (PC.ID_REGISTRO_PERSONA = P.ID_REGISTRO_PERSONA);
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_VER_PERSONA_TESTIMONIO` ()   BEGIN
        SELECT
            PT.DSC_TESTIMONIO, 
            P.NOMBRE,
            P.APPELLIDOS
        FROM PERSONA_TESTIMONIOS PT 
        INNER JOIN PERSONA P ON (P.ID_REGISTRO_PERSONA = PT.ID_REGISTRO_PERSONA);
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_VER_PERSONA_TESTIMONIO_BY_FECHA_RECIENTE` ()   BEGIN
        
        SELECT
            PT.DSC_TESTIMONIO, 
            P.NOMBRE,
            P.APPELLIDOS
        FROM PERSONA_TESTIMONIOS PT 
        INNER JOIN PERSONA P ON (P.ID_REGISTRO_PERSONA = PT.ID_REGISTRO_PERSONA)
        ORDER BY PT.FECHA_INGRESO DESC;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_VER_PERSONA_TESTIMONIO_ORDER_ASC` ()   BEGIN
        SELECT
            PT.DSC_TESTIMONIO, 
            P.NOMBRE,
            P.APPELLIDOS
        FROM PERSONA_TESTIMONIOS PT 
        INNER JOIN PERSONA P ON (P.ID_REGISTRO_PERSONA = PT.ID_REGISTRO_PERSONA)
        ORDER BY P.NOMBRE ASC;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_VER_USUARIO_PERFIL` (IN `P_CORREO` VARCHAR(50), IN `P_PASSWORD` VARCHAR(50))   BEGIN
        SELECT
            PC.FOTO_PERFIL,
            P.NOMBRE,
            P.APPELLIDOS,
            P.FECH_NACIMIENTO,
            P.GENERO,
            PC.EMAIL,
            PC.TELEFONO,
            P.PASSWORD_PERSONA
        FROM TIPO_PERSONA TP 
        INNER JOIN PERSONA P ON (P.TIPO_PERSONA = TP.ID_TIPO)
        INNER JOIN PERSONA_CONTACTO PC ON (PC.ID_REGISTRO_PERSONA = P.ID_REGISTRO_PERSONA)
        WHERE PC.EMAIL =P_CORREO  AND P.PASSWORD_PERSONA = P_PASSWORD;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_VER_VIDEO_FECHA_ANTIGUO` ()   BEGIN
        SELECT
            URL AS DIRECCION_DE_VIDEO
        FROM VIDEOS 
        ORDER BY  FECHA ASC;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_VER_VIDEO_POR_FECHA` (IN `P_FECHA` DATE)   BEGIN
        DECLARE BUSQUEDAD_F DATE;
        SET BUSQUEDAD_F :=P_FECHA;
        SELECT
            URL AS DIRECCION_DE_VIDEO,FECHA AS FECHA_DE_PUBLICACION
        FROM VIDEOS
        WHERE FECHA = BUSQUEDAD_F;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_VER_VIDEO_RECIENTE` ()   BEGIN
        SELECT
            URL AS DIRECCION_DE_VIDEO
        FROM VIDEOS;
    END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `consultas`
--

CREATE TABLE `consultas` (
  `ID_CONSULTAS` int(11) NOT NULL,
  `FECHA_ACTUAL` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `NOMBRE` varchar(30) NOT NULL,
  `APPELLIDOS` varchar(30) NOT NULL,
  `CORREO` varchar(50) NOT NULL,
  `DSC_ASUNTO` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consultas`
--

INSERT INTO `consultas` (`ID_CONSULTAS`, `FECHA_ACTUAL`, `NOMBRE`, `APPELLIDOS`, `CORREO`, `DSC_ASUNTO`) VALUES
(1, '2022-07-27 22:36:31', 'Dayron', 'Luna Gamboa', 'ldayron500@gmail.com', 'Me podrían brindar información sobre los horarios de las reuniones, saludos.'),
(2, '2022-07-28 22:36:31', 'RANDALL', 'GUZMAN', 'ran67@gmail.com', 'Me podrían indicar el horario de las reuniones, gracias');

-- --------------------------------------------------------

--
-- Table structure for table `eventos`
--

CREATE TABLE `eventos` (
  `ID_EVENT` int(11) NOT NULL,
  `ENCARGADO` varchar(200) DEFAULT NULL,
  `NOMBRE_EVENTO` varchar(100) DEFAULT NULL,
  `HORA_EVENTO` time DEFAULT NULL,
  `IMG_PATH` varchar(500) DEFAULT NULL,
  `DSC_EVENTO` varchar(100) DEFAULT NULL,
  `FECHA_EVENTO` date DEFAULT NULL,
  `FECHA_ACTUAL` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eventos`
--

INSERT INTO `eventos` (`ID_EVENT`, `ENCARGADO`, `NOMBRE_EVENTO`, `HORA_EVENTO`, `IMG_PATH`, `DSC_EVENTO`, `FECHA_EVENTO`, `FECHA_ACTUAL`) VALUES
(1, 'ALAN', 'ORACION NIÑOS', '07:30:00', '../../', 'ORACION POR TODOS LAS PERSONAS', '2022-07-10', '2022-07-29'),
(2, 'MARCO', 'ORACION ', '19:30:00', '../../', 'ORACION POR TODOS LAS PERSONAS', '2022-07-15', '2022-07-29'),
(3, 'VINICIO', 'ORACION NIÑOS', '07:30:00', '../../', 'ORACION POR TODOS LAS PERSONAS', '2022-07-27', '2022-07-29'),
(4, 'JOSE', 'ORACION NIÑOS', '15:30:00', '../../', 'ORACION POR TODOS LAS PERSONAS', '2022-07-31', '2022-07-29'),
(5, 'CARLOS', 'ORACION NIÑOS', '17:00:00', '../../', 'ORACION POR TODOS LAS PERSONAS', '2022-10-30', '2022-07-29');

-- --------------------------------------------------------

--
-- Table structure for table `galeria`
--

CREATE TABLE `galeria` (
  `ID_IMAGEN` int(11) NOT NULL,
  `CODIGO_IMG` varchar(3) NOT NULL,
  `IMG_PATH` varchar(100) DEFAULT NULL,
  `FECHA` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeria`
--

INSERT INTO `galeria` (`ID_IMAGEN`, `CODIGO_IMG`, `IMG_PATH`, `FECHA`) VALUES
(1, 'C-P', '../../IMG1', '2022-07-28'),
(2, 'C-N', '../../IMG2', '2022-07-28');

-- --------------------------------------------------------

--
-- Table structure for table `persona`
--

CREATE TABLE `persona` (
  `ID_REGISTRO_PERSONA` varchar(50) NOT NULL,
  `NOMBRE` varchar(30) NOT NULL,
  `APPELLIDOS` varchar(30) NOT NULL,
  `FECH_NACIMIENTO` date NOT NULL,
  `GENERO` char(2) NOT NULL,
  `PASSWORD_PERSONA` varchar(50) NOT NULL,
  `FECHA_REGISTRO` date DEFAULT NULL,
  `TIPO_PERSONA` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `persona`
--

INSERT INTO `persona` (`ID_REGISTRO_PERSONA`, `NOMBRE`, `APPELLIDOS`, `FECH_NACIMIENTO`, `GENERO`, `PASSWORD_PERSONA`, `FECHA_REGISTRO`, `TIPO_PERSONA`) VALUES
('305200304', 'RANDALL', 'GUZMAN ', '1999-09-27', 'M', 'X!J_gD27', '2022-07-28', 0),
('30528745', 'HANNAH', 'GOMEZ', '2002-05-12', 'F', 'HOLA', '2022-07-28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `persona_contacto`
--

CREATE TABLE `persona_contacto` (
  `ID_CONTACTO` int(11) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `TELEFONO` varchar(30) NOT NULL,
  `FOTO_PERFIL` varchar(300) DEFAULT NULL,
  `ID_REGISTRO_PERSONA` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `persona_contacto`
--

INSERT INTO `persona_contacto` (`ID_CONTACTO`, `EMAIL`, `TELEFONO`, `FOTO_PERFIL`, `ID_REGISTRO_PERSONA`) VALUES
(1, 'ran@676gmail.com', '83195333', '../NUEVA_FOTO', '305200304'),
(2, 'HANNAH@gmail.com', '86457396', '../FOTO', '30528745');

-- --------------------------------------------------------

--
-- Table structure for table `persona_testimonios`
--

CREATE TABLE `persona_testimonios` (
  `ID_TESTI` int(11) NOT NULL,
  `DSC_TESTIMONIO` varchar(200) DEFAULT NULL,
  `FECHA_INGRESO` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ID_REGISTRO_PERSONA` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `persona_testimonios`
--

INSERT INTO `persona_testimonios` (`ID_TESTI`, `DSC_TESTIMONIO`, `FECHA_INGRESO`, `ID_REGISTRO_PERSONA`) VALUES
(1, 'AMEN SIN TILDE', '2022-07-28 22:35:17', '305200304'),
(3, 'DIOS ME AYUDO A CONSEGUIR PAZ Y AMOR', '2022-07-28 22:30:15', '30528745');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_persona`
--

CREATE TABLE `tipo_persona` (
  `ID_TIPO` int(1) NOT NULL,
  `DSC_TIPO` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipo_persona`
--

INSERT INTO `tipo_persona` (`ID_TIPO`, `DSC_TIPO`) VALUES
(0, 'USER'),
(1, 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `ID_VIDEO` int(11) NOT NULL,
  `URL` varchar(300) DEFAULT NULL,
  `FECHA` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`ID_VIDEO`, `URL`, `FECHA`) VALUES
(1, '../../1', '2022-07-28'),
(2, '../../2', '2022-07-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`ID_CONSULTAS`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`ID_EVENT`);

--
-- Indexes for table `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`ID_IMAGEN`);

--
-- Indexes for table `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`ID_REGISTRO_PERSONA`),
  ADD KEY `FK1_TIPO_PERSONA` (`TIPO_PERSONA`);

--
-- Indexes for table `persona_contacto`
--
ALTER TABLE `persona_contacto`
  ADD PRIMARY KEY (`ID_CONTACTO`),
  ADD KEY `ID_REGISTRO_PERSONA_CFK1` (`ID_REGISTRO_PERSONA`);

--
-- Indexes for table `persona_testimonios`
--
ALTER TABLE `persona_testimonios`
  ADD PRIMARY KEY (`ID_TESTI`),
  ADD KEY `ID_REGISTRO_PERSONA_PTFK` (`ID_REGISTRO_PERSONA`);

--
-- Indexes for table `tipo_persona`
--
ALTER TABLE `tipo_persona`
  ADD PRIMARY KEY (`ID_TIPO`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`ID_VIDEO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consultas`
--
ALTER TABLE `consultas`
  MODIFY `ID_CONSULTAS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `ID_EVENT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `galeria`
--
ALTER TABLE `galeria`
  MODIFY `ID_IMAGEN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `persona_contacto`
--
ALTER TABLE `persona_contacto`
  MODIFY `ID_CONTACTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `persona_testimonios`
--
ALTER TABLE `persona_testimonios`
  MODIFY `ID_TESTI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `ID_VIDEO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `FK1_TIPO_PERSONA` FOREIGN KEY (`TIPO_PERSONA`) REFERENCES `tipo_persona` (`ID_TIPO`);

--
-- Constraints for table `persona_contacto`
--
ALTER TABLE `persona_contacto`
  ADD CONSTRAINT `ID_REGISTRO_PERSONA_CFK1` FOREIGN KEY (`ID_REGISTRO_PERSONA`) REFERENCES `persona` (`ID_REGISTRO_PERSONA`) ON DELETE CASCADE;

--
-- Constraints for table `persona_testimonios`
--
ALTER TABLE `persona_testimonios`
  ADD CONSTRAINT `ID_REGISTRO_PERSONA_PTFK` FOREIGN KEY (`ID_REGISTRO_PERSONA`) REFERENCES `persona` (`ID_REGISTRO_PERSONA`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
