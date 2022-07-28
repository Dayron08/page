<?php

if(isset($_REQUEST['btn_name'])){
    $nombre_imagen = $_FILES['name_input']['name'];
    $temporal = $_FILES['name_input']['tmp_name'];
    $carpeta='../Views/img';
    $ruta = $carpeta.'/'.$nombre_imagen;
    move_uploaded_file($temporal, $carpeta.'/'.$nombre_imagen);

    $query = "INSERT INTO imagen (ruta) VALUES ('$ruta')";

}