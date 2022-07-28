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
--CAMBIOS
ALTER TABLE PERSONA ADD FECHA_REGISTRO NOT NULL DATE AFTER GENERO;
#LLAVE PK
ALTER TABLE PERSONA ADD PRIMARY KEY (ID_REGISTRO_PERSONA);
#LLAVE FK
ALTER TABLE PERSONA ADD CONSTRAINT FK1_TIPO_PERSONA FOREIGN KEY (TIPO_PERSONA) REFERENCES TIPO_PERSONA (ID_TIPO);
-- -----------------------------------------------------------------------------------------------------------------------------------------------------

--PERSONA_CONTACTO
CREATE TABLE PERSONA_CONTACTO (
    ID_CONTACTO INT AUTO_INCREMENT PRIMARY KEY,
    EMAIL varchar(50) NOT NULL,
    TELEFONO VARCHAR(30) NOT NULL,
    ID_REGISTRO_PERSONA VARCHAR(50)
);
#CAMBIOS
ALTER TABLE PERSONA_CONTACTO ADD FOTO_PERFIL VARCHAR(300) AFTER TELEFONO;
# LLAVES FK
ALTER TABLE PERSONA_CONTACTO ADD CONSTRAINT ID_REGISTRO_PERSONA_CFK1 FOREIGN KEY (ID_REGISTRO_PERSONA) REFERENCES PERSONA (ID_REGISTRO_PERSONA) ON DELETE CASCADE;
--------------------------------------------------------------------------------------------------------------------------------------------------------

-
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
    FECHA_ACTUAL TIMESTAMP,
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
---------------------------------------------------------------------------------------------------------------------------------------------------------
--CONSULTAS
CREATE TABLE CONSULTAS(
    ID_CONSULTAS INT AUTO_INCREMENT PRIMARY KEY,
    NOMBRE VARCHAR(30) NOT NULL,
    APPELLIDOS VARCHAR(30) NOT NULL,
    CORREO VARCHAR(50) NOT NULL,
    DSC_ASUNTO VARCHAR(500) NOT NULL
);
--CAMBIOS
ALTER TABLE CONSULTAS ADD FECHA_ACTUAL TIMESTAMP NOT NULL AFTER ID_CONSULTAS;
-----------------------------------------------------------VIDEOS----------------------------------------------------------------------------
CREATE TABLE  VIDEOS(
    ID_VIDEO INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    URL VARCHAR(300),
    FECHA DATE
); 
--
------------------------------------------------------------FIN-------------------------------------------------------------------------------------------
