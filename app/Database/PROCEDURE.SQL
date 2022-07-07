-------------------------------------------------------------PERSONA-----------------------------------------------------
----------------INSERTAR
DELIMITER $$
USE PacVi $$
CREATE OR REPLACE PROCEDURE P_INSERTAR_PERSONA
    (
        -- PERSONA 
        IN P_ID_REGISTRO_PERSONA VARCHAR(50),
        IN P_ID_PERSONA VARCHAR(30),
        IN P_NOMBRE VARCHAR(30),
        IN P_APPELLIDOS VARCHAR(60),
        IN P_FECH_NACIMIENTO DATE,
        IN P_GENERO VARCHAR(2),
        IN P_TIPO_PERSONA INT(1)
    )
    BEGIN
            INSERT INTO PERSONA     
            (
                ID_REGISTRO_PERSONA, 
                ID_PERSONA, 
                NOMBRE, 
                APPELLIDOS, 
                FECH_NACIMIENTO, 
                GENERO,
                TIPO_PERSONA
            )
            VALUES 
            (
                P_ID_REGISTRO_PERSONA, 
                P_ID_PERSONA, 
                P_NOMBRE, 
                P_APPELLIDOS, 
                P_FECH_NACIMIENTO, 
                P_GENERO,
                P_TIPO_PERSONA
            );
            COMMIT;
    END$$
DELIMITER ;
--PRUEBA DE INSERCCION,EXITOSA
CALL P_INSERTAR_PERSONA('PER_1',305200304,'RANDALL','GUZMAN QUIROS','1999/09/27','M','1');

----------------ACTUALIZAR 
DELIMITER $$
USE PacVi $$
CREATE OR REPLACE PROCEDURE P_ACTUALIZAR_PERSONA
    (
        IN P_ID_PERSONA VARCHAR(30),
        IN P_NOMBRE VARCHAR(30),
        IN P_APPELLIDOS VARCHAR(60),
        IN P_FECH_NACIMIENTO DATE,
        IN P_GENERO VARCHAR(2),
        IN P_TIPO_PERSONA INT(1)
    )
    BEGIN 
        UPDATE PERSONA SET 
            NOMBRE = P_NOMBRE ,
            APPELLIDOS = P_APPELLIDOS ,
            FECH_NACIMIENTO = P_FECH_NACIMIENTO ,
            GENERO = P_GENERO,
            TIPO_PERSONA = P_TIPO_PERSONA
        WHERE 
            ID_PERSONA = P_ID_PERSONA;
        COMMIT;
    END$$
DELIMITER;
--PRUEBA DE ACTUALIZAR,EXITOSA
CALL P_ACTUALIZAR_PERSONA(305200304,'RANDALL DE JESUS','GUZMAN QUIROS','1999/09/27','M','0');

------------------ELIMINAR
DELIMITER $$
USE PacVi $$
CREATE OR REPLACE PROCEDURE P_ELIMINAR_PERSONA
    (
        IN P_ID_REGISTRO_PERSONA VARCHAR(30)
    )
    BEGIN
        DELETE FROM PERSONA where
            ID_REGISTRO_PERSONA = P_ID_REGISTRO_PERSONA;
    END$$
DELIMITER ;
--PRUEBA ELIMINAR,EXITOSA
CALL P_ELIMINAR_PERSONA('PER_1');

--------------------VER
DELIMITER $$
USE PacVi $$
CREATE OR REPLACE PROCEDURE P_VER_PERSONAS()
    BEGIN
        SELECT
            TP.DSC_TIPO,
            P.ID_PERSONA,
            P.NOMBRE,
            P.APPELLIDOS,
            TIMESTAMPDIFF(YEAR,P.FECH_NACIMIENTO,CURDATE()) AS EDAD,
            P.GENERO,
            PU.PAIS,
            PU.CODIGO_POSTAL,
            PC.EMAIL,
            PC.TELEFONO
        FROM TIPO_PERSONA TP 
        INNER JOIN PERSONA P ON (P.TIPO_PERSONA = TP.ID_TIPO)
        INNER JOIN PERSONA_UBICACION PU ON (PU.ID_REGISTRO_PERSONA = P.ID_REGISTRO_PERSONA)
        INNER JOIN PERSONA_CONTACTO PC ON (PC.ID_REGISTRO_PERSONA = P.ID_REGISTRO_PERSONA);
    END$$
DELIMITER;
--PRUEBA VER,PERSONA, EXITOSA
CALL P_VER_PERSONAS();


---------------------------------------------------------GALERIA-------------------------------------------------------------------------
--INSERTAR, CAMBIO POR EL ID A PONER LA VARA NORMAL
DELIMITER $$
USE PacVi $$
CREATE OR REPLACE PROCEDURE P_INSERTAR_GALERIA
    (

        IN P_IMG_PATH VARCHAR(300),
        IN P_FECHA DATE

    )
    BEGIN
            INSERT INTO GALERIA     
            (

                IMG_PATH, 
                FECHA 
            )
            VALUES 
            (

                P_IMG_PATH,
                P_FECHA
            );
            COMMIT;
    END$$
DELIMITER ;
--PRUEBA EXITOSA
CALL P_INSERTAR_GALERIA('ESTA AQUI','2022/05/12');

-- ELIMINAR 
DELIMITER $$
USE PacVi $$
CREATE OR REPLACE PROCEDURE P_ELIMINAR_IMAGEN
    (
        IN P_ID_IMAGEN VARCHAR(30)
    )
    BEGIN
        DELETE FROM GALERIA where
            ID_IMAGEN = P_ID_IMAGEN;
    END$$
DELIMITER ;
--PRUEBA EXITOSA
CALL P_ELIMINAR_IMAGEN('1');

--ACTUALIZAR (NO SE)

---------------------------------------------------------PERSONA_CONTACTO-------------------------------------------------------------------------
---------------------------------------------------------PERSONA_UBICACION-------------------------------------------------------------------------
---------------------------------------------------------PERSONA_TESTIMONIOS-------------------------------------------------------------------------
---------------------------------------------------------PASSWORD_PERSONA-------------------------------------------------------------------------
---------------------------------------------------------HISTORICO_PASSWORD-------------------------------------------------------------------------
