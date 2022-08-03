<?php

$server = "localhost";
$user = "root";
$pass = "";
$bd = "pacvi";

$conexion = mysqli_connect($server, $user, $pass, $bd) or die("Error en la conexion");



echo "si estoy";

$id = $_REQUEST["id"];
$name = $_REQUEST["name"];
$lastname = $_REQUEST["lastname"];
$gmail = $_REQUEST["gmail"];
$password = $_REQUEST["password"];



$sql = "INSERT INTO persona (`ID_REGISTRO_PERSONA`, `NOMBRE`, `APELLIDOS`, `FECH_NACIMINIENTO`, `GENERO`, `PASSWORD_PERSONA`,`FECHA_REGISTRO`,`TIPO_PERSONA`)
VALUES ('$id''$name','$lastname','2002-05-12','m','$password','2002-05-12','1')";


$result = mysqli_query($conexion, $sql);

$conexion -> close();

?>