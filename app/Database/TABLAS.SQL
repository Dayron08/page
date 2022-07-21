------------------------------------------------------------TABLAS DE LA BD------------------------------------------------------------------------------
--TIPO_PERSONA
CREATE TABLE TIPO_PERSONA (
    ID_TIPO INT(1) NOT NULL,
    DSC_TIPO varchar(40) NOT NULL  
);
#LLAVE PK
ALTER TABLE TIPO_PERSONA ADD PRIMARY KEY (ID_TIPO);

--------------------------------------------------------------------------------------------------------------------------------------------------------
--PERSONA
CREATE TABLE PERSONA (
    ID_REGISTRO_PERSONA varchar(50) NOT NULL,
    ID_PERSONA varchar(30) NOT NULL,
    NOMBRE varchar(30) NOT NULL,
    APPELLIDOS varchar(30) NOT NULL,
    FECH_NACIMIENTO date NOT NULL,
    GENERO char(2) NOT NULL,
    TIPO_PERSONA VARCHAR(30) NOT NULL
) ;
#LLAVE PK
ALTER TABLE PERSONA ADD PRIMARY KEY (ID_REGISTRO_PERSONA);
#LLAVE FK
ALTER TABLE PERSONA ADD CONSTRAINT FK1_TIPO_PERSONA FOREIGN KEY (TIPO_PERSONA) REFERENCES TIPO_PERSONA (ID_TIPO);
-- -----------------------------------------------------------------------------------------------------------------------------------------------------
--PASSWORD_PERSONA
-- CREATE TABLE PASSWORD_PERSONA (
--     ID_PASSWORD varchar(30) NOT NULL,
--     DSC_PASSWORD varchar(100) NOT NULL,
--     ID_REGISTRO_PERSONA VARCHAR(50)
-- );
-- #LLAVE PK
-- ALTER TABLE PASSWORD_PERSONA ADD PRIMARY KEY (ID_PASSWORD);
-- #LLAVE FK 
-- ALTER TABLE PASSWORD_PERSONA ADD CONSTRAINT PASSWORD_PERSONA_FK1 FOREIGN KEY (ID_REGISTRO_PERSONA) REFERENCES PERSONA (ID_REGISTRO_PERSONA) ON DELETE CASCADE;
-- ------------------------------------------------------------------------------------------------------------------------------------------------------
--HISTORICO_PASSWORD
-- CREATE TABLE HISTORICO_PASSWORD(
--     ID_PASSWORD_HIST VARCHAR(30) NOT NULL,
--     FECHA_INGRESO DATE,
--     FECHA_SALIDA DATE,
--     ULTIMA_DSC_PASSWORD VARCHAR(100) NOT NULL,
--     ID_REGISTRO_PERSONA VARCHAR(50)
-- );
-- #LLAVE PK
-- ALTER TABLE HISTORICO_PASSWORD ADD PRIMARY KEY (ID_PASSWORD_HIST);
-- #LLAVE FK 
-- ALTER TABLE HISTORICO_PASSWORD ADD CONSTRAINT HIST_PASSWORD_PERSONA_FK1 FOREIGN KEY (ID_REGISTRO_PERSONA) REFERENCES PERSONA (ID_REGISTRO_PERSONA) ON DELETE CASCADE;
-----------------------------------------------------------------------------------------------------------------------------------------------------------
--PERSONA_CONTACTO
CREATE TABLE PERSONA_CONTACTO (
    ID_CONTACTO INT AUTO_INCREMENT PRIMARY KEY,
    EMAIL varchar(50) NOT NULL,
    TELEFONO VARCHAR(30) NOT NULL,
    ID_REGISTRO_PERSONA VARCHAR(50)
);
#LLAVE PK
-- ALTER TABLE PERSONA_CONTACTO ADD PRIMARY KEY (ID_CONTACTO);
# LLAVES FK
ALTER TABLE PERSONA_CONTACTO ADD CONSTRAINT ID_REGISTRO_PERSONA_CFK1 FOREIGN KEY (ID_REGISTRO_PERSONA) REFERENCES PERSONA (ID_REGISTRO_PERSONA) ON DELETE CASCADE;
--------------------------------------------------------------------------------------------------------------------------------------------------------
--PERSONA_UBICACION
-- CREATE TABLE PERSONA_UBICACION (
--     ID_UBICACION varchar(30) NOT NULL,
--     PAIS VARCHAR(40) NOT NULL,
--     CODIGO_POSTAL int(6) NOT NULL,
--     ID_REGISTRO_PERSONA VARCHAR(50)
-- );
-- #LLAVE PK
-- ALTER TABLE PERSONA_UBICACION ADD PRIMARY KEY (ID_UBICACION);
-- #LLAVE FK 
-- ALTER TABLE PERSONA_UBICACION ADD CONSTRAINT ID_REGISTRO_PERSONA_UFK1 FOREIGN KEY (ID_REGISTRO_PERSONA) REFERENCES PERSONA (ID_REGISTRO_PERSONA) ON DELETE CASCADE;
-------------------------------------------------------------------------------------------------------------------------------------------------------------
--GALERIA
CREATE TABLE  GALERIA(
    ID_IMAGEN INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    IMG_PATH VARCHAR(100),
    FECHA DATE
); 
---------------------------------------------------------------------------------------------------------------------------------------------------------
--PERSONA_TESTIMONIOS
CREATE TABLE PERSONA_TESTIMONIOS(
    ID_TESTI INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    DSC_TESTIMONIO VARCHAR(200),
    ID_REGISTRO_PERSONA VARCHAR(50)
);
# LLAVE FK 
ALTER TABLE PERSONA_TESTIMONIOS ADD CONSTRAINT ID_REGISTRO_PERSONA_PTFK FOREIGN KEY (ID_REGISTRO_PERSONA) REFERENCES PERSONA (ID_REGISTRO_PERSONA) ON DELETE CASCADE;
------------------------------------------------------------------------------------------------------------------------------------------------------
--EVENTOS 
CREATE TABLE EVENTOS(
    ID_EVENT INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    ENCARGADO VARCHAR(200),
    NOMBRE_EVENTO VARCHAR(100),
    IMG_PATH VARCHAR(500),
    DSC_EVENTO VARCHAR(100),
    FECHA_EVENTO DATE,
    FECHA_ACTUAL DATE

);
#LLAVE FK
-- ALTER TABLE EVENTOS ADD CONSTRAINT ENCARGADO FOREIGN KEY(ENCARGADO) REFERENCES PERSONA(ID_REGISTRO_PERSONA) ON DELETE CASCADE;
--PRUEBAS
-- INSERT INTO `eventos` (`ID_EVENT`, `NOMBRE`, `IMG_PATH`, `DSC_EVENTO`, `FECHA_EVENTO`, `FECHA_ACTUAL`, `ENCARGADO`) 
-- VALUES (NULL, 'APOYO A LOS NIÑOS', '../../', 'REGALOS PARA LOS NIÑOS', '2022-07-11', current_timestamp(), 'PER_1');

-- SELECT P.NOMBRE AS ENCARGADO_DEL_EVENTO,E.NOMBRE,E.DSC_EVENTO,E.FECHA_EVENTO 
    FROM EVENTOS E
        INNER JOIN PERSONA P ON (P.ID_REGISTRO_PERSONA = E.ENCARGADO)
        WHERE FECHA_EVENTO >=  FECHA_ACTUAL; 
---------------------------------------------------------------------------------------------------------------------------------------------------------
--CONSULTAS
CREATE TABLE CONSULTAS(
    ID_CONSULTAS INT AUTO_INCREMENT PRIMARY KEY,
    NOMBRE VARCHAR(30),
    APPELLIDOS VARCHAR(30),
    CORREO VARCHAR(50),
    DSC_ASUNTO VARCHAR(500)
);
-----------------------------------------------------------VIDEOS----------------------------------------------------------------------------
CREATE TABLE  VIDEOS(
    ID_VIDEO INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    URL VARCHAR(300),
    FECHA DATE
); 
--
------------------------------------------------------------FIN-------------------------------------------------------------------------------------------
