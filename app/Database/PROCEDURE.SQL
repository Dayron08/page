-------------------------------------------------------------PERSONA-----------------------------------------------------
----------------INSERTAR LISTO
DELIMITER $$
USE PacVi $$
CREATE OR REPLACE PROCEDURE P_INSERTAR_DATOS_PERSONA
    (
        -- PERSONA 
        IN P_ID_REGISTRO_PERSONA VARCHAR(50),
        IN P_NOMBRE VARCHAR(30),
        IN P_APPELLIDOS VARCHAR(60),
        IN P_FECH_NACIMIENTO DATE,
        IN P_GENERO VARCHAR(2),
        IN P_TIPO_PERSONA INT(1),
        IN P_PASSWORD_PERSONA VARCHAR(50),
        --PERSONA_CONTACTO
        IN P_EMAIL VARCHAR(50),
        IN P_TELEFONO INT(30)
    )
    BEGIN
            INSERT INTO PERSONA     
            (
                ID_REGISTRO_PERSONA,  
                NOMBRE, 
                APPELLIDOS, 
                FECH_NACIMIENTO, 
                GENERO,
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
                P_TIPO_PERSONA,
                P_PASSWORD_PERSONA
            );
            INSERT INTO PERSONA_CONTACTO
            (
                ID_CONTACTO,
                EMAIL,
                TELEFONO,
                ID_REGISTRO_PERSONA
            )
            VALUES
            (
                NULL,
                P_EMAIL,
                P_TELEFONO,
                P_ID_REGISTRO_PERSONA
            );
            COMMIT;
    END$$
DELIMITER ;
--PRUEBA DE INSERCCION,EXITOSA
CALL P_INSERTAR_DATOS_PERSONA('305200304','RANDALL','GUZMAN QUIROS','1999/09/27','M','1','HOLA','ran@gmail.com','83195333');

----------------ACTUALIZAR  LISTO
DELIMITER $$
USE PacVi $$
CREATE OR REPLACE PROCEDURE P_ACTUALIZAR_DATOS_PERSONA
    (
        IN P_ID_REGISTRO_PERSONA VARCHAR(30),
        IN P_NOMBRE VARCHAR(30),
        IN P_APPELLIDOS VARCHAR(60),
        IN P_FECH_NACIMIENTO DATE,
        IN P_GENERO VARCHAR(2),
        -- IN P_TIPO_PERSONA INT(1),
        IN P_PASSWORD_PERSONA VARCHAR(50),
        --PERSONA_CONTACTO
        IN P_ID_CONTACTO VARCHAR(30),
        IN P_EMAIL VARCHAR(50),
        IN P_TELEFONO INT(30)
    )
    BEGIN 
        UPDATE PERSONA SET 
            NOMBRE = P_NOMBRE ,
            APPELLIDOS = P_APPELLIDOS ,
            FECH_NACIMIENTO = P_FECH_NACIMIENTO ,
            GENERO = P_GENERO,
            -- TIPO_PERSONA = P_TIPO_PERSONA,
            PASSWORD_PERSONA=P_PASSWORD_PERSONA
        WHERE 
            ID_REGISTRO_PERSONA = P_ID_REGISTRO_PERSONA;

        UPDATE PERSONA_CONTACTO SET 
            EMAIL = P_EMAIL ,
            TELEFONO = P_TELEFONO
        WHERE 
            ID_REGISTRO_PERSONA = P_ID_REGISTRO_PERSONA;

        COMMIT;
    END$$
DELIMITER;
--PRUEBA DE ACTUALIZAR,EXITOSA
CALL P_ACTUALIZAR_DATOS_PERSONA('PER_1','RANDALL','GUZMAN ','1999/09/27','M','HOLA','PER_1','ran@676gmail.com','83195333');

------------------ELIMINAR
DELIMITER $$
USE PacVi $$
CREATE OR REPLACE PROCEDURE P_ELIMINAR_DATOS_PERSONA
    (
        IN P_ID_REGISTRO_PERSONA VARCHAR(30)
    )
    BEGIN
        DELETE FROM PERSONA WHERE
            ID_REGISTRO_PERSONA = P_ID_REGISTRO_PERSONA;
    END$$
DELIMITER ;
--PRUEBA ELIMINAR,EXITOSA
CALL P_ELIMINAR_DATOS_PERSONA('PER_1');

--------------------VER LISTO
DELIMITER $$
USE PacVi $$
CREATE OR REPLACE PROCEDURE P_VER_PERSONAS()
    BEGIN
        SELECT
            TP.DSC_TIPO,
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


---------------------------------------------------------PERSONA_TESTIMONIOS(Mariay Randall)-------------------------------------------------------------------------




---------------------------------------------------------CONSULTAS(Josue y Dayron)-------------------------------------------------------------------------
-------INSERTAR-
DELIMITER $$
USE Pacvi $$ 
CREATE OR REPLACE PROCEDURE P_INSERTAR_CONSULTA 
    (

        IN P_NOMBRE VARCHAR(30),
        IN P_APPELLIDOS VARCHAR(30),
        IN P_CORREO VARCHAR(50),
        IN P_DSC_ASUNTO VARCHAR(500)

    )
    BEGIN
            INSERT INTO CONSULTAS     
            (
                ID_CONSULTAS,
                NOMBRE,
                APPELLIDOS,
                CORREO,
                DSC_ASUNTO
            )
            VALUES 
            (
                NULL,
                P_NOMBRE,
                P_APPELLIDOS,
                P_CORREO,
                P_DSC_ASUNTO
            );
            COMMIT;
    END$$
DELIMITER ;
CALL P_INSERTAR_CONSULTA('Dayron', 'Luna Gamboa', 'ldayron500@gmail.com', 'Me podrían brindar información sobre los horarios de las reuniones, saludos.');

-----ELIMINAR-

DELIMITER $$
USE Pacvi $$
CREATE OR REPLACE PROCEDURE P_ELIMINAR_CONSULTA
    (
        IN P_ID_CONSULTAS INT
    )
    BEGIN
        DELETE FROM CONSULTAS where
            ID_CONSULTAS = P_ID_CONSULTAS;
    END$$
DELIMITER ;

CALL P_ELIMINAR_CONSULTA (1);

---VER CONSULTAS
DELIMITER $$
USE PacVi $$
CREATE OR REPLACE PROCEDURE P_VER_CONSULTAS()
    BEGIN
        SELECT NOMBRE,APPELLIDOS,CORREO,DSC_ASUNTO
        FROM CONSULTAS 
        ORDER BY  NOMBRE ;
    END$$
DELIMITER;

CALL P_VER_CONSULTAS();
---------------------------------------------------------EVENTOS------------------------------------------------------------------------------
--INSERTAR
INSERT INTO `eventos`(`ID_EVENT`, `ENCARGADO`, `NOMBRE_EVENTO`, `IMG_PATH`, `DSC_EVENTO`, `FECHA_EVENTO`, `FECHA_ACTUAL`) 
VALUES (NULL,'JUAN PEREZ','APOYO A LOS NIÑOS','../../','REGALOS PARA LOS NIÑOS','2022-07-11',current_timestamp());

--VER PERSONA
DELIMITER $$
USE PacVi $$
CREATE OR REPLACE PROCEDURE P_VER_EVENTOS()
    BEGIN
        SELECT ENCARGADO,NOMBRE_EVENTO,DSC_EVENTO,FECHA_EVENTO
        FROM EVENTOS 
        WHERE FECHA_EVENTO >=  FECHA_ACTUAL
        ORDER BY  FECHA_EVENTO ;
    END$$
DELIMITER;
--PRUEBA EXITOSA
CALL P_VER_EVENTOS();
SELECT * FROM EVENTOS;

--INSERTAR
DELIMITER $$
USE PacVi $$
CREATE OR REPLACE PROCEDURE P_INSERTAR_EVENTO
    (
        IN P_ENCARGADO VARCHAR(200),
        IN P_NOMBRE_EVENTO VARCHAR(100),
        IN P_IMG_PATH VARCHAR(500),
        IN P_DSC_EVENTO VARCHAR(100),
        IN P_FECHA_EVENTO DATE,
        IN P_FECHA_ACTUAL DATE
    )
    BEGIN
            INSERT INTO EVENTOS     
            (
                ID_EVENT,
                ENCARGADO, 
                NOMBRE_EVENTO, 
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
                P_IMG_PATH, 
                P_DSC_EVENTO, 
                P_FECHA_EVENTO, 
                current_timestamp()
            );
            COMMIT;
    END$$
DELIMITER;

CALL P_INSERTAR_EVENTO('JELTY', 'ORACION NIÑOS X2', '../../', 'ORACION POR TODOS LAS PERSONAS', '2022-07-13', current_date());

--ACTUALIZAR 
DELIMITER $$
USE PacVi $$
CREATE OR REPLACE PROCEDURE P_ACTUALIZAR_EVENTO
    (
        IN P_ID_EVENT INT,
        IN P_ENCARGADO VARCHAR(200),
        IN P_NOMBRE_EVENTO VARCHAR(100),
        IN P_IMG_PATH VARCHAR(500),
        IN P_DSC_EVENTO VARCHAR(100),
        IN P_FECHA_EVENTO DATE
    )
    BEGIN 
        UPDATE EVENTOS SET 
            ENCARGADO = P_ENCARGADO ,
            NOMBRE_EVENTO = P_NOMBRE_EVENTO ,
            IMG_PATH = P_IMG_PATH ,
            DSC_EVENTO = P_DSC_EVENTO,
            FECHA_EVENTO = P_FECHA_EVENTO
        WHERE 
            ID_EVENT = P_ID_EVENT;
        COMMIT;
    END$$
DELIMITER;
CALL P_ACTUALIZAR_EVENTO(2,'CARLOS DANIEL', 'ORACION NIÑOS X2', '../../', 'ORACION POR TODOS LAS PERSONAS', '2022-07-18');

-- ELIMINAR 
DELIMITER $$
USE PacVi $$
CREATE OR REPLACE PROCEDURE P_ELIMINAR_EVENTO
    (
        IN P_ID_EVENT INT
    )
    BEGIN
        DELETE FROM EVENTOS where
            ID_EVENT = P_ID_EVENT;
    END$$
DELIMITER ;
--PRUEBA EXITOSA
CALL P_ELIMINAR_EVENTO(2);
