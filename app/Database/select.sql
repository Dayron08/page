DELIMITER $$
USE PACTO_VIDA $$
CREATE OR REPLACE PROCEDURE P_ELIMINAR_PERSONA
    (
        IN P_ID_PERSONA VARCHAR(30),
        IN P_ID_CONTACTO VARCHAR(30),
        IN P_ID_UBICACION VARCHAR(30),
        IN P_ID_PASSWORD VARCHAR(30),
        IN P_ID_TIPO VARCHAR(30)
    )
    BEGIN
        DELETE FROM PASSWORD_PERSONA where
            ID_PASSWORD =P_ID_PASSWORD;

        DELETE FROM TIPO_PERSONA where
            ID_TIPO = P_ID_TIPO

        DELETE FROM PERSONA_UBICACION where
            ID_UBICACION =P_ID_UBICACION;

        DELETE FROM PERSONA_CONTACTO where
            ID_CONTACTO =P_ID_CONTACTO;

        DELETE FROM PERSONA where
            ID_PERSONA = P_ID_PERSONA;
    END$$
DELIMITER ;

USE PACTO_VIDA 

CREATE TRIGGER `delete_persona` AFTER DELETE ON `persona` 
FOR EACH ROW 
DELETE 
    FROM PERSONA_CONTACTO 
    WHERE PERSONA.FK2_PERSONA_CONTACTO = PERSONA_CONTACTO.ID_CONTACTO;
--             call P_INSERTAR_PASSWORD_PERSONA(1,'CONTRA123');
-- call P_INSERTAR_TIPO_PERSONA(1,'ADMIN','1');
-- CALL P_INSERTAR_UBICACION(1,'COSTA RICA','30105');
-- CALL P_INSERTAR_CONTACTO(1,'randall@gmial.com','+506 8319-5333');
-- CALL P_INSERTAR_PERSONA(NULL,305200304,'RANDALL','GUZMAN','QUIROS','27/09/1999','M',1,1,1);

        -- SELECT @contar_registros:=COUNT(ID_REGISTRO_PERSONA),
        -- CASE
        --     WHEN @contar_registros > 1 THEN (
        --         ALTER TABLE 
        --             PACVI.PERSONA AUTO_INCREMENT = @contar_registros+1
        --         )
        -- END
        -- FROM PERSONA;




DELIMITER $$
USE PACTO_VIDA $$
DELETE FROM PERSONA where
    ID_PERSONA = P_ID_PERSONA;

CREATE TRIGGER after_persona_delete
AFTER DELETE
ON PERSONA 
FOR EACH ROW
BEGIN

END$$    

DELIMITER ;





CREATE OR REPLACE PROCEDURE STP_ELIMINAR_PASSWORD_PERSONA
    (IN P_ID_PASSWORD VARCHAR(50))
    BEGIN
        DELETE FROM 
            password_persona WHERE 
                ID_PASSWORD = P_ID_PASSWORD;
        COMMIT;
    END$$
DELIMITER $$


DELIMITER $$
USE PACTO_VIDA $$
CREATE OR REPLACE PROCEDURE STP_ELIMINAR_PERSONA_CONTACTO
    (IN P_ID_CONTACTO VARCHAR(50))
    BEGIN
        DELETE FROM 
            persona_contacto WHERE 
                ID_CONTACTO = P_ID_CONTACTO;
        COMMIT;
    END$$
DELIMITER;

DELIMITER $$
USE PACTO_VIDA $$
CREATE OR REPLACE PROCEDURE STP_ELIMINAR_PERSONA_UBICACION
    (IN P_ID_UBICACION VARCHAR(50))
    BEGIN
        DELETE FROM 
            PERSONA_UBICACION WHERE 
                ID_UBICACION = P_ID_UBICACION;
        COMMIT;
    END$$
DELIMITER;

DELIMITER $$
USE PACTO_VIDA $$
CREATE OR REPLACE PROCEDURE STP_ELIMINAR_TIPO_PERSONA
    (IN P_ID_TIPO VARCHAR(50))
    BEGIN
        DELETE FROM TIPO_PERSONA WHERE ID_TIPO = P_ID_TIPO;
        COMMIT;
    END$$
DELIMITER ;