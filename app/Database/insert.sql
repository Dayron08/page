DELIMITER $$
USE PacVi $$

CREATE OR REPLACE PROCEDURE P_INSERTAR_PERSONA
    (
        -- PERSONA 
        IN P_ID_REGISTRO_PERSONA VARCHAR(50),
        IN P_ID_PERSONA VARCHAR(30),
        IN P_NOMBRE VARCHAR(30),
        IN P_APELLIDO_PATERNO VARCHAR(30),
        IN P_APELLIDO_MATERNO VARCHAR(30),
        IN P_FECH_NACIMIENTO DATE,
        IN P_GENERO VARCHAR(2),
        IN P_FK1_PERSONA_UBICACION varchar(30),
        IN P_FK2_PERSONA_CONTACTO varchar(30),
        IN P_FK3_TIPO_PERSONA varchar(30)
        -- OUT P_MENSAJE VARCHAR(500)
    )
    BEGIN
            INSERT INTO persona     
            (
                ID_REGISTRO_PERSONA, 
                ID_PERSONA, 
                NOMBRE, 
                APELLIDO_PATERNO, 
                APELLIDO_MATERNO, 
                FECH_NACIMIENTO, 
                GENERO, 
                FK1_PERSONA_UBICACION, 
                FK2_PERSONA_CONTACTO, 
                FK3_TIPO_PERSONA
            )
            VALUES 
            (
                -- id INT UNSIGNED NOT NULL AUTO_INCREMENT,
                NULL, 
                P_ID_PERSONA, 
                P_NOMBRE, 
                P_APELLIDO_PATERNO, 
                P_APELLIDO_MATERNO, 
                P_FECH_NACIMIENTO, 
                P_GENERO, 
                P_FK1_PERSONA_UBICACION, 
                P_FK2_PERSONA_CONTACTO, 
                P_FK3_TIPO_PERSONA
            );
            COMMIT;
    END$$
DELIMITER ;

SELECT @IndexVar := max(IdRegistro) FROM persona;
INSERT INTO `ubicacion`(`IdUbicacion`, `Pais`, `CodigoPostal`, `FKIdRegistro`) VALUES ('[value-1]','[value-2]','[value-3]',@IndexVar)

-- CALL P_INSERTAR_PERSONA('', 305400218, 'DAYRON', 'LUNA', 'GAMBOA', '2002-08-01', 'M', 1,1,1);


CREATE OR REPLACE PROCEDURE P_INSERTAR_UBICACION
    (
        -- PERSONA UBICACION
        IN P_ID_UBICACION varchar(30),
        IN P_PAIS VARCHAR(40),
        IN P_CODIGO_POSTAL int(6)
    )
    BEGIN

        -- P_OBTIENE_SECUENCIA(LLAMADO_SEC, ERROR_SEC);

        -- if ERROR_SEC IS NOT NULL then
        --     ERROR_SEC := 'ERROR AL OBTENER LA SECUENCIA -' || ERROR_SEC;
        --     P_MENSAJE := ERROR_SEC;
        --     ROLLBACK;
        --     RETURN;
        -- end if;

        -- begin
            INSERT INTO persona_ubicacion     
            (
                ID_UBICACION,
                PAIS,
                CODIGO_POSTAL
            )
            VALUES 
            (
                P_ID_UBICACION,
                P_PAIS,
                P_CODIGO_POSTAL
            );
            COMMIT;
    END$$


CREATE OR REPLACE PROCEDURE P_INSERTAR_CONTACTO 
    (
        -- PERSONA CONTACTO 
        IN P_ID_CONTACTO varchar(30),
        IN P_EMAIL varchar(50),
        IN P_TELEFONO int(30)
    )
    BEGIN

            INSERT INTO persona_contacto     
            (
                ID_CONTACTO,
                EMAIL,
                TELEFONO
            )
            VALUES 
            (
                P_ID_CONTACTO,
                P_EMAIL,
                P_TELEFONO
            );
            COMMIT;
    END$$



CREATE OR REPLACE PROCEDURE P_INSERTAR_TIPO_PERSONA
    (
        -- PERSONA CONTACTO 
        IN P_ID_TIPO varchar(30),
        IN P_DSC_TIPO varchar(40),
        IN P_FK_PASSWORD_PERSONA varchar(30)

    )
    BEGIN
            INSERT INTO tipo_persona     
            (
                ID_TIPO,
                DSC_TIPO,
                FK_PASSWORD_PERSONA
            )
            VALUES 
            (
                P_ID_TIPO,
                P_DSC_TIPO,
                P_FK_PASSWORD_PERSONA
            );
            COMMIT;
    END$$


CREATE OR REPLACE PROCEDURE P_INSERTAR_PASSWORD_PERSONA
    (
        -- PERSONA CONTACTO 
        IN P_ID_PASSWORD varchar(30),
        IN P_DSC_PASSWORD varchar(40)
    )
    BEGIN
            INSERT INTO password_persona     
            (
                ID_PASSWORD ,
                DSC_PASSWORD 
            )
            VALUES 
            (
                P_ID_PASSWORD,
                P_DSC_PASSWORD
            );
            COMMIT;
    END$$

DELIMITER ;


SELECT @contar_registros:=COUNT(ID_REGISTRO_PERSONA) FROM PERSONA THEN 

ALTER TABLE PACVI.PERSONA AUTO_INCREMENT = @contar_registros+1;


SELECT @contar_registros:=COUNT(ID_REGISTRO_PERSONA),
CASE
    WHEN @contar_registros > 1 THEN (
        ALTER TABLE 
            PACVI.PERSONA AUTO_INCREMENT = @contar_registros+1
        )
END
FROM PERSONA;



alter table nombre_de_la_tabla AUTO_INCREMENT=1;

CALL P_INSERTAR_PERSONA('', 305400216, 'GUILLERMO','GUZMAN','HIDALGO','05/09/1961','M','1','1','1');
INSERT INTO persona VALUES(null,'305200304','GUILLERMO','GUZMAN','HIDALGO','05/09/1961','M','3','3','3');
-- DROP TABLE IF EXISTS `PRUEBA`;

-- CALL p_PRUEBA (01, 'DAYRON', 'LUNA');


--CONSULTA QUE 
SELECT P.ID_PERSONA AS CEDULA, P.NOMBRE,P.APELLIDO_PATERNO,P.APELLIDO_MATERNO,U.PAIS,T.DSC_TIPO AS CARGO_ADMINISTRATIVO,
S.DSC_PASSWORD AS CONTRASEÑA
    FROM PERSONA P 
    INNER JOIN PERSONA_UBICACION U ON (U.ID_UBICACION = P.FK1_PERSONA_UBICACION)
    INNER JOIN TIPO_PERSONA T ON (T.ID_TIPO = P.FK3_TIPO_PERSONA)
    INNER JOIN PASSWORD_PERSONA S ON (S.ID_PASSWORD= T.FK_PASSWORD_PERSONA);


call P_INSERTAR_PASSWORD_PERSONA(1,'CONTRA123');
call P_INSERTAR_TIPO_PERSONA(1,'ADMIN','1');
CALL P_INSERTAR_UBICACION(1,'COSTA RICA','30105');
CALL P_INSERTAR_CONTACTO(1,'randall@gmial.com','+506 8319-5333');
CALL P_INSERTAR_PERSONA(NULL,305200304,'RANDALL','GUZMAN','QUIROS','27/09/1999','M',1,1,1);
-------------PROCEDIMIENTO OBTENER SECUENCIA DE UNA FUNCION YA CREADA----------------------------------
-- CREATE OR REPLACE PROCEDURE PacVi.P_OBTIENE_SECUENCIA(
--     P_SECUENCIA OUT NUMBER,
--     P_MENSAJE OUT VARCHAR2
-- ) 
-- IS
--     LLAMADO_SEC NUMBER:=0;
-- BEGIN 
--     LLAMADO_SEC:=PacVi.F_OBTIENE_SECUENCIA;
--     IF LLAMADO_SEC <= 0 THEN
--        P_MENSAJE:='LA SECUENCIA ES MENOR O IGUAL A 0';    
--     END IF;
--     P_SECUENCIA:=LLAMADO_SEC;
-- END;




